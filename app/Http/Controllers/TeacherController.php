<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::orderBy('tid')->paginate(10);
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'gender' => 'required|in:male,female,other',
            'degree' => 'required|max:50',
            'tel' => 'required|regex:/^[0-9\s]+$/',
        ]);

        Teacher::create($request->all());
        return redirect()->route('teachers.index');
    }


    public function show(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.show', compact('teacher'));
    }


    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'full_name' => 'required',
            'gender' => 'required|in:male,female,other',
            'degree' => 'required|max:50',
            'tel' => 'required|regex:/^[0-9\s]+$/',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->only(['full_name', 'gender', 'degree', 'tel']));
        
        $page = $request->get('page', 1);
        return redirect()->route('teachers.index', ['page' => $page]);
    }

    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('teachers.index');
    }
}
