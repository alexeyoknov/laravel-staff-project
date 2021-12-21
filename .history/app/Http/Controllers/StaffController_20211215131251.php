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

    }


    public function store() {

    }
}
