<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\CourseUser;
use App\Models\Course;
use App\Models\User;


class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows("isStudent")){
        $userid=auth()->user()->id;
        $enroll=CourseUser::where('user_id',$userid)->get('course_id');
        $enroll=$enroll->toArray();
        $arr=[];
        foreach ($enroll as $course) {
           array_push($arr,$course['course_id']);
        }
       // dd($arr);

        $courses=Course::whereNotIn('id',$arr)->get();
       // dd($courses);
       // $courses=Course::all();

        return view("courses.availablecourses",['courses'=>$courses]);
          }
         return redirect("/");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::allows("isStudent")){

            $course=Course::find($request->course_id);
            $input=$request->all();
            CourseUser::create($input);
            $userid=$request->user_id;
            //return redirect("/students/$userid");
            return redirect("/students");

        }
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Gate::allows("isStudent")){
        $course=User::find($id);
        $course=$course->enroll_courses()->get();

        return view("courses.myenrollments",['courses'=>$course]);
        }


        return redirect("/");

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($course_id , Request $request)
    {
        if(Gate::allows("isStudent")){
        $course=Course::find($course_id);
        $userid=$request->user_id;
        $enroll=CourseUser::where(['user_id'=>$userid,'course_id'=>$course_id])->first();
        $enroll->delete();
        return redirect("/students/$userid");
        }
        return redirect("/");

    }
}
