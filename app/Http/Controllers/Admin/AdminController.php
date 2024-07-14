<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Items;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dataUser()
    {
        $user = User::where('role', 2)->get();
        return view('Admin.dataUser', compact('user'));
    }
    public function searchUser(Request $request)
    {
        if ($request->has('search')) {
            $user = User::where('name', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $user = User::where('role', 2)->get();
        }

        return view('Admin.dataUser', compact('user'));
    }
    public function deleteUser(Request $request)
    {
        $item = User::findOrFail($request->id);
        Storage::delete($item->image);
        $item->delete();

        return redirect()->back();
    }


    // ITEMS
    public function dataItem()
    {
        $items = Items::all();
        return view('Admin.dataItem', compact('items'));
    }
    public function searchItem(Request $request)
    {
        if ($request->has('search')) {
            $item = Items::where('name', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $item = Items::where('role', 2)->get();
        }

        return view('Admin.dataItem', compact('item'));
    }
    public function deleteItem(Request $request)
    {
        $item = Items::findOrFail($request->id);
        Storage::delete($item->image);
        $item->delete();

        return redirect()->back();
    }
}
