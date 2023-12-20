@extends('admin.layout.layout')
@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="{{ url('admin/reservations') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="makeReservationBtn">Go Back</a>

    </div>


    <div class="reservation-container" style="width: 70%; margin: auto; border: 2px solid #ccc; padding: 20px; boarder-radius:20px;  max-height: 400px; overflow-y: auto;">
        @if($errors->any())
        <div class="alert alert-success">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ url('admin/create-reservations') }}" id="ReservationForm" name="ReservationForm" class="form-horizontal" method="post" enctype="multipart/form-data">@csrf
            <div class="header">
                <h5 style="color:black">{{ $title }}</h5><br>
            </div>
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" maxlength="50">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="email" name="email" p laceholder="Enter Email" maxlength="50">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-12">
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" maxlength="50">
                </div>
            </div>
            <div class="form-group">
                <label for="type" class="col-sm-2 control-label">Type</label>
                <select id="type" name="type" class="form-select mt-1 block w-full">
                    <option selected disabled hidden class="placeholder">Select type</option>
                    <option>Venue</option>
                    <option>Table</option>
                </select>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Date</label>
                <div class="col-sm-12">
                    <input type="date" class="form-control" id="date" name="date" placeholder="Select date">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Pax</label>
                <div class="col-sm-12">
                    <input type="number" class="form-control" id="pax" name="pax" placeholder="Number of guest" maxlength="50">
                </div>
            </div>
            <div class="form-group">
                <label for="status" class="col-sm-2 control-label">Status</label>
                <select id="status" name="status" class="form-select">
                    <option selected disabled hidden class="placeholder">Select status</option>
                    <option>Pending</option>
                    <option>Confirmed</option>
                    <option>Cancelled</option>
                </select>
            </div>
            <div class="col-sm-offset-2 col-sm-10 justify-content-md-end"><br />
                <button type="submit" class="btn btn-primary" id="btn-save">Save Changes</button>
            </div>
        </form>
    </div>

</div>


@endsection