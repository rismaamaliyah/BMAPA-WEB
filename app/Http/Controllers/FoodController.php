<?php

namespace App\Http\Controllers;

use App\Models\Food;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts from Models
        $foods = Food::latest()->get();

        //return view with data
        return view('food.foods', compact('foods'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('food.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'foto'      => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'nama'      => 'required|min:1',
            'harga'     => 'required|min:1',
            'rasa'      => 'required|min:1',
            'lokasi'    => 'required|min:1',
            'deskripsi' => 'required|min:1',
            
        ]);

        //upload image
        $image = $request->file('foto');
        $image->storeAs('public/foods', $image->hashName());

        //create post
        Food::create([
            'foto'          => $image->hashName(),
            'nama'          => $request->nama,
            'harga'         => $request->harga,
            'rasa'          => $request->rasa,
            'lokasi'        => $request->lokasi,
            'deskripsi'     => $request->deskripsi,
        ]);

        //redirect to index
        return redirect()->route('foods.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
