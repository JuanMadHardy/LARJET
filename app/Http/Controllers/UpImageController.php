<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpImageRequest;
use App\Http\Requests\UpdateUpImageRequest;
use App\Models\UpImage;

class UpImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('livewire.pages.upload.upload', []);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpImageRequest $request)
    {
        $file = $request->all();
        $espera= '';
    }

    /**
     * Display the specified resource.
     */
    public function show(UpImage $upImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UpImage $upImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUpImageRequest $request, UpImage $upImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UpImage $upImage)
    {
        //
    }
}
