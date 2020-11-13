<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Handphone;
use Auth;

class HandphoneController extends Controller
{

    public function displayItem()
    {
        $user_id = Auth::user()->id;
        $items = Handphone::where('user_id', $user_id)->get();
        $status = 0;
        if (count($items) > 0) {
            $status = 1;
        }
        return view('items.index',[
            'status' => $status,
            'items' => $items,
        ]);
    }
    public function userDashboard()
    {
        return view('home');
    }
    public function adminDashboard()
    {
        return view('items.index');
    }
    public function displayCreateItemPage()
    {
        return view('items.create');
    }

    public function createItem(ItemRequest $request)
    {
        $data = $request->validated();
        $newItem = Handphone::create($data);
        return redirect()->route('items.index')->with('status', 'Item berhasil ditambahkan');
    }

    public function displayEditItemPage($id)
    {
        $item = Handphone::findOrFail($id);
        return view('items.edit',[
            'item' => $item,
        ]);
    }

    public function editItem(ItemRequest $request, $id)
    {
        $data = $request->validated();
        $editedItem = Handphone::findOrFail($id)->update($data);
        return redirect()->route('items.index')->with('status', 'Item berhasil diperbarui');
    }

    public function displayDeleteItemPage($id)
    {
        $item = Handphone::findOrFail($id);
        return view('items.delete',[
            'item' => $item,
        ]);
    }

    public function deleteMovie($id)
    {
        $deletedItem = Handphone::findOrFail($id)->delete();
        return redirect()->route('items.index')->with('status', 'Item berhasil dihapus');
    }

    public function showItem($id)
    {
        $item = Handphone::findOrFail($id);
        return view('items.show',[
            'item' => $item,
        ]);
    }
}
