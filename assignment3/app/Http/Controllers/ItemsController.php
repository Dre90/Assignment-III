<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\Item;

class ItemsController extends Controller
{
    public function index()
    {

        $items = Item::all();

        return view('items.index', compact('items'));
    }

    public function show($id)
    {

        $items = Item::find($id);

        return view('items.show', compact('items'));
    }
}
