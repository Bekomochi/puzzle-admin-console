<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show(Request $request)
    {
        $items = Item::All();
        return response()->json($items);
    }
}
