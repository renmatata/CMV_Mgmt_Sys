@extends('admin.layout.layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Venue Income</h1>
        <a href="{{ url('admin/add-venue-income') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="makeReservationBtn">Add Income</a>
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
            <h6 class="m-0 font-weight-bold text-primary">Data Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="entrancefee" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($venues as $venue)
                        <tr>
                            <td>{{ $venue->id}}</td>
                            <td>{{ $venue->date}}</td>
                            <td>{{ $venue->name}}</td>
                            <td>{{ $venue->amount}}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.venue.edit', $venue->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form method="post" action="{{ route('admin.venue.destroy', $venue) }}" onsubmit="return confirm('Are you sure');">
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