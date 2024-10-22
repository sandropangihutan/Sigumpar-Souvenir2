<?php
 
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


 
class AuthController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest:admin')->except('do_logout');
    // }

    public function index()
    {
        return view('pages.auth.main');
    }  
 
    public function customLogin(Request $request)
    {   

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->roles->first()->name == 'admin') {
            return redirect()->intended('admin/dashboard')
                        ->withSuccess('Signed in');
            }else {
                return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
            }
        }
   
        return redirect()->back()->withSuccess('Login details are not valid');
    }
     

    public function registration()
    {
        return view('pages.auth.registration');
    }
       
 
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'nama'=> 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
          
        return redirect("login")->withSuccess('have signed-in');
    }
 
 
    public function create(array $data)
    {
      $user =  User::create([
        'nama'=>$data['nama'],
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);

      $user->assignRole('user');
    //   dd(request()->all());
      return $user;
      
    }    

    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return redirect('dashboard');
    }
}