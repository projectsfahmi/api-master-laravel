<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Auth;

class EmployeeController extends Controller
{
    public function getEmployee()
    {

        $employeeModel = new Employee;
        $find = $employeeModel->get();
        return $find;
    }
}
