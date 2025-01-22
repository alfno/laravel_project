<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Department;


class DepartmentAdminController
{
    public function index()
    {
        //
        return view('admin.department-admin', [
            'title' => 'Department',
            'departments' => Department::all()
        ]);

    }
}
