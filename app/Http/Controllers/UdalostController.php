<?php

namespace App\Http\Controllers;

use App\Models\Udalost;
use Illuminate\Http\Request;

class UdalostController extends Controller
{
    public function index(Request $request){

        $udalosti = Udalost::all();

        return response()->json($udalosti);

    }
}
