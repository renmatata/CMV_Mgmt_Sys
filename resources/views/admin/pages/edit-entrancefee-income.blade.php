@extends('admin.layout.layout')
@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="{{ route('admin.pages.entrancefee') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="entrancefeeBtn">Go Back</a>

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

        <form action="{{ route('admin.entrancefee.update', $entrancefee->id }}" class="form-horizontal" method="get" enctype="multipart/form-data">
            @csrf 
            @method('PUT')
            <div class="header">
                <h5 style="color:black">Add Income</h5><br>
            </div>
            <input type="hidden" name="id" id="id" value="{{$entrancefee->id }}">
            <div class="form-group">
                <label class="col-sm-2 control-label">Date</label>
                <div class="col-sm-12">
                    <input type="date" class="form-control" id="date" name="date" value="{{ $entrancefee->date }}" placeholder="Select date">
                </div>
            </div>
            <div class="form-group">
                <label for="kids" class="col-sm-2 control-label">Student/Senior</label>
                <div class="col-sm-12">
                    <input type="number" class="form-control" id="kids" name="kids" value="{{ $entrancefee->kids }}" placeholder="Number of guest" maxlength="5">
                </div>
            </div>
            <div class="form-group">
                <label for="adults" class="col-sm-2 control-label">Adults</label>
                <div class="col-sm-12">
                    <input type="number" class="form-control" id="adults" name="adults" value="{{ $entrancefee->adults }}" placeholder="Number of guest" maxlength="5">
                </div>
            </div>
            <div class="form-group">
                <label for="amount" class="col-sm-2 control-label">Amount</label>
                <div class="col-sm-12">
                    <input id="amount" name="amount" value="{{ $entrancefee->amount }}" style="width: 100%;" readonly></input>
                    <!-- <input type="number" class="form-control" id="amount" name="amount" placeholder="Total amount" maxlength="5"> -->
                </div>
            </div>
            <div class="col-sm-offset-2 col-sm-10 justify-content-md-end"><br />
                <button type="submit" class="btn btn-primary" id="btn-save">Update</button>
            </div>
        </form>
    </div>

</div>


@endsection