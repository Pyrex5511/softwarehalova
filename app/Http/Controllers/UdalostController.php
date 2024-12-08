<?php

namespace App\Http\Controllers;

use App\Models\Udalost;
use Illuminate\Http\Request;

class UdalostController extends Controller
{
    public function index(Request $request)
    {
        $query = Udalost::query();

        if ($search = $request->input('search')) {
            $query->where('nazov', 'like', "%{$search}%")
                ->orWhere('miesto', 'like', "%{$search}%");
        }


        $udalosti = $query->paginate($request->input('per_page', 10));

        return response()->json($udalosti);
    }
}
