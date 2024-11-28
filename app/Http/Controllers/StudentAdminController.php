<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
class StudentAdminController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $students->load('grade.department'); // supaya efesien query nya

        return view('student-admin', [
            'title' => 'Students',
            'students' => $students


        ]);
    }
}
