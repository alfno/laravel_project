<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;


class GradeAdminController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        //dikasih load suapaya query maksimal performanya

        return view('grade-admin', [
            'title' => 'Grades',
            'grades' => $grades->load(['students', 'department'])

        ]);
    }
}
