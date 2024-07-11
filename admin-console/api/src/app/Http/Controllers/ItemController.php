<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show(Request $request)
    {
        $items = Item::findOrFail($request->items_id);
        return response()->json($items);
    }
}
