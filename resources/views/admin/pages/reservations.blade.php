@extends('admin.layout.layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Reservations</h1>
        <a href="{{ url('admin/create-reservations') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="makeReservationBtn">Make Reservations</a>
        
    </div>

    <!-- Content Row -->

    <div class="card shadow mb-4">
        @if(Session::has('success_message'))
        <div class="alert alert-danger alert-dismissible fade-show" role="alert">
            <strong>Success:</strong> {{ Session::get('success_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"></span>
            </button>
        </div>
        @endif
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Reservations</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="reservations" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Pax</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->id}}</td>
                            <td>{{ $reservation->name}}</td>
                            <td>{{ $reservation->email}}</td>
                            <td>{{ $reservation->phone}}</td>
                            <td>{{ $reservation->type}}</td>
                            <td>{{ $reservation->date}}</td>  
                            <td>{{ $reservation->pax}}</td>  
                            <td>{{ $reservation->status}}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <form method="post" action="#" onsubmit="return confirm('Are you sure');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm ms-10">Archive</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->

    @endsection