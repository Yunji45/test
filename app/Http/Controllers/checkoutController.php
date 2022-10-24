<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\checkout;

class checkoutController extends Controller
{
    public function index ()
    {
        return view ('create');
    }

    public function store (Request $request)
    {
        $request->validate([
            'jam_out',
            'biaya',
        ]);

        $data = new checkout;
    }
}
