<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCreditCardsRequest;
use App\Http\Requests\UpdateCreditCardsRequest;
use App\Models\CreditCards;

class CreditCardsController extends Controller
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
    public function store(StoreCreditCardsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CreditCards $creditCards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CreditCards $creditCards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCreditCardsRequest $request, CreditCards $creditCards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CreditCards $creditCards)
    {
        //
    }
}
