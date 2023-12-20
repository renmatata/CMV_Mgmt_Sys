@extends('admin.layout.layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Entrance Fee Income</h1>
        <a href="{{ url('admin/add-entrancefee-income') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="addEntrancefee">Add Income</a>
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
                            <th>Kids</th>
                            <th>Adults</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($entrancefees as $entrancefee)
                        <tr>
                            <td>{{ $entrancefee->id}}</td>
                            <td>{{ $entrancefee->date}}</td>
                            <td>{{ $entrancefee->kids}}</td>
                            <td>{{ $entrancefee->adults}}</td>
                            <td>{{ $entrancefee->amount}}</td>  
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->

    @endsection