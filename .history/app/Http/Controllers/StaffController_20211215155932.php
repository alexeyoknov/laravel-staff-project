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
        $title = 'Список всех сотрудников';

        return view('staff')->with(['staffs'=>$staff,'title'=>$title,'id'=>'none']);
    }

    public function showStaff($id) {

        $staff = Staff::all()->where('id',$id);
        $title = 'Информация о сотруднике: ' . $staff[$id-1]->fio;
dump($staff);
        return view('staff')->with(['staffs'=>$staff,'title'=>$title, 'id'=>$id]);
    }

    public function index() {
        return view('index')->with([
            'title' => 'Сотрудники: выбор действия'
        ]);
    }


    public function create() {
        return view('add-staff');
    }


    public function store(Request $request) {
        //'email', 'fio', 'age', 'work_exp','photo','avg_salary'

        $this->validate($request,[
            'email' => 'required|unique:staff',
            'fio' => 'required|unique:staff',
            'age' => 'required|integer',
            'work_exp' => 'required|integer',
            'avg_salary' => 'required',
        ]);

        $staff = new Staff;
/*         $staff->email = $request->email;
        $staff->fio = $request->fio;
        $staff->age = $request->age;
        $staff->work_exp = $request->work_exp;
        $staff->photo = $request->photo;
        $staff->avg_salary = $request->avg_salary; */

        $data = $request->all();

        $staff->fill($data);
        $staff->save();

        //return response()->json(['success'=>'A new employee has been added']);
        return redirect('/');
    }
}
