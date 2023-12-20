<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restobar;
use Illuminate\Http\Request;

class RestobarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restobars = Restobar::all();
        return view('admin.pages.restobar', compact('restobars'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.add-restobar-income');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Restobar::create([
            'date' => $request->date,
            'ornumber' => $request->ornumber,
            'amount' => $request->amount,
        ]);

        return to_route('admin.pages.restobar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
