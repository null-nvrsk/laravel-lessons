<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::find(1);
        dump($employee->full_name);
        dump($employee->is_fired);
    }
}
