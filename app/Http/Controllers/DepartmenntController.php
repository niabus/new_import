<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmenntController extends Controller
{
    public function index(){
        return view('admin.department.index');
    }

    public function store(Request $request){
        $department = new Department;
        $department->department_name = $request->department_name;       //ตัวแปรที่สร้าง->ชื่อฟิลในตารางฐานข้อมูล = ตัวแปรrequest->ชื่อกล่องinputในform
        
    }
}
