<?php

namespace App\Http\Controllers\Admin;

use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::all();
        return view('pages.admin.product.main', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.product.create', ['product' => new product()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $request->validate([
            'nama' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category' => 'required|in:gantungan,stola,sortali',
            'image' => 'required',
        ]);
        


            $item = new product;

            $file = $request->file('image');
            $namafile = $file->getClientOriginalName();
            $tujuanFile = 'product/image';
            $file->move($tujuanFile,$namafile);
            $item->image = $namafile;

            $item->nama = $request->nama;
            $item->description = $request->description;
            $item->price = $request->price;
            $item->category = $request->category;
            $item->stock = $request->stock;
            // dd(request()->all());
            $item->save();

            if($item) {
                return redirect()
                    ->route('admin.main')
                    ->with([
                        'success' => 'New post has been created successfully'
                    ]);
            } else {
                return redirect('admin/store')
                    ->back()
                    ->withInput()
                    ->with([
                        'error' => 'Some problem occurred, please try again'
                    ]);
            }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = product::find($id);
        return view('pages.admin.product.show', compact('product', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $product = product::find($id);
        return view('pages.admin.product.edit', compact('product', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

        $request->validate([
            'nama' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|in:gantungan,stola,sortali',
            'stock' => 'required|integer',
            'image' => 'required',
        ]);

        $item1 = product::where('id',$id)->first();
        $file = $request->file('image');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'product/image';
        $file->move($tujuanFile,$namafile);
        $item1->image = $namafile;

        $item1->nama = $request->nama;
        $item1->category = $request->category;
        $item1->description = $request->description;
        $item1->price = $request->price;
        $item1->stock = $request->stock;
        $item1->update();
        
        if($item1) {
            return redirect()
                ->route('admin.main')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect('admin/edit')
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $data = product::findOrFail($id);
    $data->delete();
    return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
