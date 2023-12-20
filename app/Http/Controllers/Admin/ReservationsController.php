<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservations;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservations::all();
        // dd($Reservations);
        return view('admin.pages.reservations')->with(compact('reservations'));

        // return view ('admin.pages.reservations');
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
    public function store(Request $request)
    {
        $reservationsId = $request->id;

        $reservations = Reservations::updateOrCreate(
            [
                'id' => $reservationsId
            ],
            [
                'name' =>$request->name,
                'email' =>$request->email,
                'phone' =>$request->phone,
                'type' =>$request->type,
                'date' =>$request->date,
                'pax' =>$request->pax,
                'status' =>$request->status
            ]);

            return Response()->json($reservations);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservations $reservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id=null)
    {
        if($id==""){
            $title = "Add Reservations";
            $reservations = new Reservations;
            $message = "Reservation added successfully";
        }else{
            $title = "Edit Reservations";
        }

        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            // Reservations validations

            $rules = [
                'name' => 'required',
                'type' => 'required',
                'pax' => 'required',
                'status' => 'required'
            ];

            $customMessages = [
                'name.required' => 'Name is required',
                'type.required' => 'Type is required',
                'pax.required' => 'Pax is required',
                'status.required' => 'Status is required'

            ];

            $this->validate($request, $rules, $customMessages);

            $reservations->name = $data['name'];
            $reservations->email = $data['email'];
            $reservations->phone = $data['phone'];
            $reservations->type = $data['type'];
            $reservations->date = $data['date'];
            $reservations->pax = $data['pax'];
            $reservations->status = $data['status'];
            $reservations->save();

            return redirect('admin/reservations')->with('success_message', $message);
        }
        return view('admin.pages.create-reservations')->with(compact('title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservations $reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservations $reservations)
    {
        //
    }
}
