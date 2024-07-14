<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function about()
    {
        return view('Front.pages.about_page');
    }
    public function items()
    {
        $limit = 8;
        $items = Items::limit($limit)->get();
        return view('Front.pages.items_page', compact('items', 'limit'));
    }
    public function detail($slug)
    {
        $items = Items::where('slug', $slug)->first();
        return view('Front.pages.detail_page', compact('items'));
    }
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $items = Items::where('nama_item', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $items = Items::all();
        }

        return view('Front.pages.items_page', compact('items'));
    }
    public function loadMore(Request $request)
    {
        $offset = $request->get('offset', 0);
        $limit = 8;
        $items = Items::skip($offset)->take($limit)->get();

        return response()->json($items);
    }
}
