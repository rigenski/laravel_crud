<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $students_boy = Student::where('gender', 'LIKE', '%' . 'Laki-Laki' . '%');

        $students_girl = Student::where('gender', 'LIKE', '%' . 'Perempuan' . '%');
        return view('admin.home', compact('students', 'students_boy', 'students_girl'));
    }

    public function show(Request $request)
    {
        if ($request->has('s')) {
            $students = Student::where('nama_lengkap', 'LIKE', '%' . $request->s . '%')->paginate(5);
        } else {
            $students = Student::orderBy('created_at', 'desc')->paginate(5);
        }
        return view('admin.siswa', compact('students'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nisn' => 'required|integer|unique:students',
            'nama_lengkap' => 'required',
            'tempat' => 'required',
            'tanggal_lahir' => 'required',
            'gender' => 'required',
            'no_wa' => 'required',
            'email' => 'required|email|unique:students',
            'alamat' => 'required',
        ]);

        Student::create($request->all());
        return redirect('/siswa')->with('status', 'Data Siswa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('admin.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nisn' => 'required|integer',
            'nama_lengkap' => 'required',
            'tempat' => 'required',
            'tanggal_lahir' => 'required',
            'gender' => 'required',
            'no_wa' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ]);

        Student::find($id)->update($request->all());

        return redirect('/siswa')->with('status', 'Data Siswa berhasil diubah');
    }

    public function delete($id)
    {
        Student::find($id)->delete();
        return redirect('/siswa')->with('status', 'Data Siswa berhasil dihapus');
    }
}
