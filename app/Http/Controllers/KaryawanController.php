<?php

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:20',
            'age' => 'required|integer|min:21',
            'address' => 'required|min:10|max:40',
            'phone_number' => 'required|regex:/^08[0-9]{8,11}$/',
        ]);

        Karyawan::create($validatedData);

        return redirect('/karyawan')->with('success', 'Employee added successfully.');
    }

    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:20',
            'age' => 'required|integer|min:21',
            'address' => 'required|min:10|max:40',
            'phone_number' => 'required|regex:/^08[0-9]{8,11}$/',
        ]);

        $karyawan->update($validatedData);

        return redirect('/karyawan')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect('/karyawan')->with('success', 'Employee deleted successfully.');
    }
}