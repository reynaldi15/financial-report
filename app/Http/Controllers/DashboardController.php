<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Warta;
use App\Models\Galeri;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('beranda');
    }
    
}
