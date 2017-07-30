@extends('layouts.master')

@section('pageContent')

    <h2>New Student Form</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form-horizontal" method="post" action="{{ route('students.store') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Roll No:</label>
            <div class="col-sm-10">
                <input type="number" value="{{ old('roll_no') }}" class="form-control" id="roll_no" placeholder="Enter Roll No" name="roll_no">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Name:</label>
            <div class="col-sm-10">
                <input type="text" value="{{ old('name') }}" class="form-control" id="name" placeholder="Enter Name" name="name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="class">Class:</label>
            <div class="col-sm-10">
                <input type="text" value="{{ old('class') }}" class="form-control" id="class" placeholder="Enter Class" name="class">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="address">Address:</label>
            <div class="col-sm-10">
                <input type="text" value="{{ old('address') }}" class="form-control" id="address" placeholder="Enter Address" name="address">
            </div>
        </div>



        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Save</button>
            </div>
        </div>
    </form>

@endsection