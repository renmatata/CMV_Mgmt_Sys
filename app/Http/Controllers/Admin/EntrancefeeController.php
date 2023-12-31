<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EntrancefeeStoreRequest;
use Illuminate\Http\Request;
use App\Models\Entrancefee;

class EntrancefeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrancefees = Entrancefee::all();

        return view('admin.pages.entrancefee', compact('entrancefees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.add-entrancefee-income');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EntrancefeeStoreRequest $request)
    {
        Entrancefee::create([
            'id' => $request->id,
            'date' => $request->date,
            'kids' => $request->kids,
            'adults' => $request->adults,
            'amount' => $request->amount,
        ]);

        return to_route('admin.pages.entrancefee');
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
    public function edit(Entrancefee $entrancefee)
    {
        return view('admin.pages.edit-entrancefee-income', compact('entrancefee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrancefee $entrancefee)
    {
        $request->validate([
            'id' => 'required',
            'date' => 'required',
            'kids' => 'required',
            'adults' => 'required',
            'amount' => 'required'
        ]);

        $entrancefee->update([
            'id' => $request->id,
            'date'=> $request->date,
            'kids'=> $request->kids,
            'adults'=> $request->adults,
            'amount'=> $request->amount

        ]);

        return to_route('admin.pages.entrancefee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
