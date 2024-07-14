<?php

namespace App\Http\Controllers\Api;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Models\Items;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ItemsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //all items
        $items = Items::orderBy('id')->get();
        return response()->json([
            'success' => true,
            'message' => 'List Items',
            'data' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_item' => 'required',
            'catatan_tambahan' => 'required',
            'lokasi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $img = $request->file('image');
        $namaFile = time() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('img'), $namaFile);

        $item = Items::create([
            'user_id' => Auth::id(),
            'nama_item' => $request->input('nama_item'),
            'catatan_tambahan' => $request->input('catatan_tambahan'),
            'lokasi' => $request->input('lokasi'),
            'image' => $namaFile,
        ]);

        return response()->json([
            'message' => 'Item berhasil ditambahkan',
            'item' => $item,
        ], 201);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items = Items::where('id', $id)
            ->get()
            ->map(function ($items) {
                return $this->format($items);
            });
        return $this->respons($items);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $items = Items::where('id', $id)->first();

        if (!$items) {
            return MessageHelper::error(false, 'Data Tidak ditemukan');
        }

        Storage::delete($items->image);
        $items->delete();
        return MessageHelper::error(true, 'Berhasil Menghapus Data');
    }

    public function format($items)
    {

        return [
            'id' => $items->id,
            'name' => $items->name,
            'deskripsi' => $items->deskripsi,
            'price' => $items->price,
            'stock' => $items->stock,
            'category' => $items->category,
            'image' => $items->image,
            'is_best_seller' => $items->is_best_seller,
            'tanggal_tambah_items' => Carbon::parse($items->created_at)->translatedFormat('d F Y'),
        ];
    }

    public function respons($items)
    {
        return response()->json([
            'status' => true,
            'data' => $items,
        ], 200);
    }

    public function errorStatus($status, $msg)
    {
        return response()->json([
            'status' => $status,
            'message' => $msg,
        ], 200);
    }
}
