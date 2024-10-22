<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function sortali(Request $request)
    {
        $product = product::all();
        return view('pages.web.product.list', compact('product'));

    }public function stola(Request $request)
    {
        $product = product::all();
        return view('pages.web.product.list', compact('product'));
    }
    
    public function gantungankunci(Request $request)
    {
        $product = product::all();
        return view('pages.web.product.list', compact('product'));

    }

    public function show(product $product)
    {
        return view('pages.web.product.show', [
            'product' => $product,
        ]);
    }
}
