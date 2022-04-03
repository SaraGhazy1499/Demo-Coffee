<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Course;
use App\Models\User;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();

        return view("courses.index",['courses'=>$courses]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows("isTeacher")){
        return view("courses.create");
        }

        return redirect("/");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::allows("isTeacher")){
            $request->validate
            ([
                'name'=>'required',
                'desc'=>'required',
                'duration'=>'required | numeric',
                'img' => 'required'
            ]);
            $name='';
            if($request->hasFile('img'))
            {

                $img=$request->file('img');

                $name=time().'.'.$img->getClientOriginalExtension();
                $path=public_path('/images');
                $img->move($path,$name);
            }


            $input=$request->all();
            $input['img']=$name;
            $id=$input['user_id']=auth()->user()->id;
            Course::create($input);

            return redirect("/mycourses/$id");

        }

        return redirect("/");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view("courses.show",['course'=>$course]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::allows("isTeacher")){
        $course=Course::find($id);
        return view("courses.edit",['data'=>$course]);
        }
        return redirect("/");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Course $course)
    {
            if(Gate::allows("isTeacher")){
            $course->update($request->all());
            $userid=$course->user_id;
            return redirect("/mycourses/$userid");
            }
            return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
         if(Gate::allows("isTeacher")){
            $userid=$course->user_id;
            $course->delete();
            return redirect("/mycourses/$userid");
         }
          return redirect("/");
    }


    public function mycourses($user_id)
    {
        if(Gate::allows("isTeacher")){
        $user=User::find($user_id);
        $mycourses=$user->courses_teacher()->get();
        return view("courses.mycourses",['mycourses'=>$mycourses]);
        }

        return redirect("/");

    }
}


