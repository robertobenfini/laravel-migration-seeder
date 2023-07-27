<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Trains;

class PageController extends Controller
{
    public function index(){
        $now = date('Y-m-d',strtotime(now()));
        $trains = Trains::where('data_partenza', '>=', $now)->get();

        return view('home', compact('trains'));
    }
}
