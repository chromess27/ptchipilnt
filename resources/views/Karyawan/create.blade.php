@extends('layouts.app')

@section('content')
    <h1>Add New Employee</h1>

    <form method="post" action="{{ route('karyawan.l1') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" id="address" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="tel" name="phone_number" id="phone_number" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
