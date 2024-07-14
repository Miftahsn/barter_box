<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Items;
use App\Models\StatusItem;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profileUser()
    {

        $id = Auth::user()->id;
        $profile = User::where('id', $id)->first();
        $image = User::where('id', $id)->first();
        return view('User.profileUser', compact('profile', 'image'));
    }
    public function updateProfile(Request $request, $id)
    {
        $profile = User::findOrFail($id);
        $profile->phone = $request->phone;

        $profile->update();

        return redirect()->route('profile.user');
    }
    public function showMyItem()
    {

        $userId = Auth::id();
        $items = Items::where('user_id', $userId)->get();
        return view('User.myItem', compact('items'));
    }

    public function createItem()
    {
        $user = Auth::user()->id;
        $owner = User::where('id')->get()->first;
        return view('User.createItem', compact('user', 'owner'));
    }
    public function storeItem(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'user_id' => 'required',
            'nama_item' => 'required',
            'catatan_tambahan' => 'required',
            'lokasi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $img = $request->file('image');
        $namaFile = time() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('img'), $namaFile);

        Items::create([
            'user_id' => $request->user_id,
            'nama_item' => $request->nama_item,
            'catatan_tambahan' => $request->catatan_tambahan,
            'lokasi' => $request->lokasi,
            'image' => $namaFile,
        ]);

        return redirect()->route('user.show.myItem')->with('Create', 'Berhasil menambahkan item');
    }
    public function deleteItem(Request $request)
    {
        $item = Items::findOrFail($request->id);
        $item->delete();

        return redirect()->route('user.show.myItem')->with('Delete', 'Item berhasil dihapus');
    }
    public function userSearchItem(Request $request)
    {
        if ($request->has('search')) {
            $items = Items::where('nama_item', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $items = Items::all();
        }

        return view('User.MyItem', compact('items'));
    }

    public function userStatusItem(Request $request)
    {

        $userId = Auth::id();
        $items = Items::where('user_id', $userId)->get();
        return view('User.statusItem', compact('items', 'items'));
    }

    public function addStatusItem(Request $request, $id )
    {
        $request->validate([
            'status' => 'required',
        ]);

        Items::create([
            'status' => $request->status,
        ]);

        return view('User.addStatus');
    }
    public function storeStatus(Request $request, $id){

        $profile = Items::findOrFail($id);
        $profile->status = $request->status;

        $profile->update();

        return redirect()->route('user.status.item')-with('Create', 'Berhasil menambahkan status');
    }
}
