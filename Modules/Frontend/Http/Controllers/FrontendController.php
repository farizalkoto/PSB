<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Models\Department;
use App\Http\Models\Image;
use App\Http\Models\StudentPersonal;
use App\Http\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{

    public function index()
    {
        $data = new \stdClass();
        $data->image = Image::all();
        return view('frontend.page.home',compact('data'));
    }
    public function about()
    {
        $data = new \stdClass();
        $data->count_student = StudentPersonal::all()->count();
        $data->count_teacher = Teacher::all()->count();
        $data->count_department =Department::all()->count();
        return view('frontend.page.about',compact('data'));
    }
    public function event()
    {
        return view('frontend.page.event');
    }
    public function teacher()
    {
        $list = parent::listData('teachers');
        if ($list['status'] != 200) {
            return back();
        }

        return view('frontend.page.teacher', ['list' => $list['result']]);
    }
    public function department()
    {
        $list = parent::listData('departments');
        if ($list['status'] != 200) {
            return back();
        }

        return view('frontend.page.department', ['list' => $list['result']]);
    }
    public function gallery()
    {
        $list = parent::listData('images');
        if ($list['status'] != 200) {
            return back();
        }

        return view('frontend.page.gallery', ['list' => $list['result']]);
    }
    public function announcement()
    {
        $list = parent::listData('registries', ['registry_verified' => '1'], ['user.studentPersonal.studentScores', 'option1', 'option2']);
        if ($list['status'] == 200) {
            $daftar = $list['result'];
        } else {
            $daftar = [];
        }

//        return view('student.list', ['list' => $daftar]);
        return view('frontend.page.announcement', ['list' => $daftar]);
    }
    public function studentDetail()
    {
        return view('frontend.page.single.student');
    }
    public function eventDetail()
    {
        return view('frontend.page.single.event');
    }
    public function create()
    {
        return view('frontend::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('frontend::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('frontend::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
