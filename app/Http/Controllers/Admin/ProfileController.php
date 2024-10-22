<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('pages.admin.profile.main', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = Auth::user();
        return view('pages.admin.profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nama' => 'required|string|max:255',
            'phone' => 'nullable|numeric',
            'email' => 'required|email|unique:users,email,'.$id,
            'alamat' => 'nullable',
            'image' => 'nullable',
        ]);



        $item = User::where('id',$id)->first();

        $file = $request->file('image');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'profile/image';
        $file->move($tujuanFile,$namafile);
        $item->image = $namafile;

        $item->nama = $request->nama;
        $item->phone = $request->phone;
        $item->email = $request->email;
        $item->alamat = $request->alamat;
        $item->update();
        
        if($item) {
            return redirect()
                ->route('admin.mainprofile')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect('admin/editprofile')
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
