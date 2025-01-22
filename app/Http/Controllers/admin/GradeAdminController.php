<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Grade;


class GradeAdminController
{
    public function index()
    {
        $grades = Grade::all();
        //dikasih load suapaya query maksimal performanya

        return view('admin.grade-admin', [
            'title' => 'Grades',
            'grades' => $grades->load(['students', 'department'])

        ]);
    }
}
