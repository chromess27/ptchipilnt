@extends('layouts.app')

@section('content')
    <h1>Employee List</h1>

    <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">Add New Employee</a>

    @if (count($karyawan) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->age }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ $employee->phone_number }}</td>
                        <td>
                            <a href="{{ route('karyawan.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('karyawan.destroy', $employee->id) }}" method="post" style="display: inline-block;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No employees found.</p>
    @endif
@endsection
