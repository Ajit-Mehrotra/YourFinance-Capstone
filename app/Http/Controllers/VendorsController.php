<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVendorsRequest;
use App\Http\Requests\UpdateVendorsRequest;
use App\Models\Vendors;

class VendorsController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVendorsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendors $vendors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendors $vendors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendorsRequest $request, Vendors $vendors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendors $vendors)
    {
        //
    }
}
