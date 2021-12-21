<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    /**
     * Получить список сотрудников
     *
     * @return void
     */
    public function show() {

        $staff = Staff::all();

        return view('staff')->with(['staffs'=>$staff]);
    }


    public function create() {
        return view('add-staff');
    }


    public function store(Request $request) {
        //'email', 'fio', 'age', 'work_exp','photo','avg_salary'
        $staff = new Staff;
        $staff->email = $request->email;
        $staff->fio = $request->fio;
        $staff->age = $request->age;
        $staff->work_exp = $request->work_exp;
        $staff->photo = $request->photo;
        $staff->avg_salary = $request->avg_salary;

        $staff->save();
        return response()->json(['success'=>'A new employee has been added']);
    }
}
