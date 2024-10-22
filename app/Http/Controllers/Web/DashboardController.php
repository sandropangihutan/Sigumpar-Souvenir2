<?php

namespace App\Http\Controllers\Web;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        return view('pages.web.dashboard.main');
    }
}
