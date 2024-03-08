@extends('layouts.app')

@section('content')
    <h1>Edit Employee</h1>

    <form method="post" action="{{ route('karyawan.update', $karyawan->id) }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $karyawan->name }}" required>
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ $karyawan->age }}" required>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" id="address" class="form-control" required>{{ $karyawan->address }}</textarea>
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="tel" name="phone_number" id="phone_number" class="form-control" value="{{ $karyawan->phone_number }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
