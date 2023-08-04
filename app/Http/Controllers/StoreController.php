<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'edit',]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stores.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name'  => 'required', 'string',
            'bio'   => 'required', 'string',
            'location'   => 'required', 'string',
            'img'    => 'image|mimes:png,jpg,jpeg|max:2048',   
        ]);

        if($request->img){
            $imageName = time().'.'.$request->img->extension();
            // Public Folder
            $request->img->move(public_path('images'), $imageName);
        }

        auth()->user()->stores()->create([
            'name' => $data['name'],
            'bio' => $data['bio'],
            'location' => $data['location'],
            'img' => $imageName,
        ]);

        return redirect('/home')->with('success', 'تم انشاء الاختصار بنجاح !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        //
    }
}
