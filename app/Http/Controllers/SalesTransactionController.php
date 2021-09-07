<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesTransactionController extends Controller
{
    public function transaction()
    {
        return view('sales.transaction');
    }

    public function newtrans()
    {
        return view('sales.newtrans');
    }

    public function showall()
    {
        return view('sales.showall');
    }

    public function show()
    {
        return view('sales.show');
    }
}
