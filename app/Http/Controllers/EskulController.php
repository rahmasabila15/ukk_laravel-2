<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    public function index() {
        $data = Eskul::all();
        return view("ekstrakurikuler", compact('data'));
    }
}
