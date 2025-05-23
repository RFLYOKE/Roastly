<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;
use App\Models\Kategori;

class MenuController extends Controller
{
   public function all($kategori = null)
    {
        if ($kategori) {
            $kategoriModel = Kategori::where('name', ucfirst($kategori))->firstOrFail();
            $drinks = Drink::where('kategori_id', $kategoriModel->id)->get();
        } else {
            $drinks = Drink::all();
        }

        return view('all', compact('drinks'));
    }

    public function show($id)
    {
        $drink = Drink::with('kategori')->findOrFail($id); 
        return view('detail', compact('drink'));
    }
}

