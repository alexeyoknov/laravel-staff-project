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

    /**
     * Показать информацию о сотруднике
     *
     * @param [type] $id
     * @return void
     */
    public function showStaff($id) {

        $staff = Staff::all()->where('id',$id);
        $title = 'Информация о сотруднике: ' . $staff[$id-1]->fio;

        return view('staff')->with(['staffs'=>$staff,'title'=>$title, 'id'=>$id]);
    }

    /**
     * Показ главной страницы
     *
     * @return void
     */
    public function index() {
        return view('index')->with([
            'title' => 'Сотрудники: выбор действия'
        ]);
    }


    /**
     * Форма для добавления сотрудника
     *
     * @return void
     */
    public function create() {
        return view('add-staff');
    }


    /**
     * Добавление нового сотрудника
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request) {
        $this->validate($request,[
            'email' => 'required|unique:staff',
            'fio' => 'required|unique:staff',
            'age' => 'required|integer',
            'work_exp' => 'required|integer',
            'avg_salary' => 'required',
        ]);

        $staff = new Staff;

        $data = $request->all();

        $staff->fill($data);
        $staff->save();

        return redirect('/');
    }
}
