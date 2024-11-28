<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;


class DepartmentAdminController extends Controller
{
    public function index()
    {
        //
        return view('department-admin', [
            'title' => 'Department',
            'departments' => Department::all()
        ]);

    }
}
