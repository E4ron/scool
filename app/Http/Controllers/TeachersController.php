<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeachersController extends Controller
{
    public function create(Request $request) {
        if ($request->image) {
            $path = $request->file('image')->store('public/img');
            $path = str_replace('public/img', 'storage/img', $path);
        }
        else
        {
            $path = 'storage/img/teacher.png';
            $path = str_replace('public/img', '/storage/img', $path);
        }
        $teacher = Teacher::create([
           'name' => $request->name,
           'surname' => $request->surname,
           'patronymic' => $request->patronymic,
           'position' => $request->position,
           'image' => $path,
        ]);

        return redirect()->route('admin.teachers.index');
    }

    public function edit(Request $request, Teacher $teacher) {
        $params = [
            'name' => $request->name,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'position' => $request->position
        ];

        if ($request->image) {
            $path = $request->file('image')->store('public/img');
            $params['image'] = str_replace('public/img', '/storage/img', $path);
        }

        $teacher->update($params);

        return redirect()->route('admin.teachers.index');
    }

    public function delete(Teacher $teacher) {
        $teacher->delete();
        return redirect()->route('admin.teachers.index');
    }
}
