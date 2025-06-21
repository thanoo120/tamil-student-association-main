<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = [];
        $students = Student::get();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $rules = [
                'firstname' => 'required',
                'lastname' => 'required',
                'stu_number' => 'required',
                'stu_mail' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'dob' => 'required',
                'phone' => 'required',
                'faculty' => 'required',
                'course' => 'required',
                'father_name' => 'required',
                'mother_name' => 'required',
                'father_job' => 'required',
                'mother_job' => 'required',
                'sibiling' => 'required',
                'ag_office_division' => 'required',
                'gs_office_division' => 'required',
                'district' => 'required',
                'address' => 'required',
            ];

            $customMessages = [
                'firstname.required' => 'firstname cannot be empty.',
                'lastname.required' => 'lastname cannot be empty.',
                'stu_number.required' => 'student number cannot be empty.',
                'stu_mail.required' => 'student mail cannot be empty.',
                'email.required' => 'email cannot be empty.',
                'dob.required' => 'date of birth cannot be empty.',
                'phone.required' => 'phone cannot be empty.',
                'faculty.required' => 'faculty cannot be empty.',
                'course.required' => 'course cannot be empty.',
                'father_name.required' => 'father name cannot be empty.',
                'mother_name.required' => 'mother name cannot be empty.',
                'gender.required' => 'please select the gender.',
                'district.required' => 'please select the district.',
                'address.required' => 'address cannot be empty.',
                'father_job.required' => 'father job cannot be empty.',
                'mother_job.required' => 'mother job cannot be empty.',
                'sibiling.required' => 'sibiling cannot be empty.',
                'ag_office_division.required' => 'ag office division cannot be empty.',
                'gs_office_division.required' => 'gs office division cannot be empty.',
            ];

            $validator = Validator::make($request->all(), $rules, $customMessages);
            if ($validator->fails()) {
                $response["msg"] = $validator->messages()->first();
                $response["status"] = "Failed";
                $response["is_success"] = false;
                Session::flash('msg', $validator->messages()->first());
            }else {
                try{
                    DB::beginTransaction();
                    $student = new Student();
                    $student->firstname = $request->firstname;
                    $student->lastname = $request->lastname;
                    $student->stu_number = $request->stu_number;
                    $student->dob = $request->dob;
                    $student->phone = $request->phone;
                    $student->email = $request->email;
                     $student->student_mail = $request->stu_mail;
                    $student->faculty = $request->faculty;
                    $student->gender = $request->gender;
                    $student->district = $request->district;
                    $student->address = $request->address;
                    $student->course = $request->course;
                    $student->father_name = $request->father_name;
                    $student->mother_name = $request->mother_name;
                    $student->father_job = $request->father_job;
                    $student->mother_job = $request->mother_job;
                    $student->sibiling = $request->sibiling;
                    $student->ag_office_division = $request->ag_office_division;
                    $student->gs_office_division = $request->gs_office_division;
                    $student->comment = $request->comment;
                    $student->save();

                    DB::commit();
                    $response["msg"] = "Data has been successfully saved";
                    $response["status"] = "Success";
                    $response["is_success"] = true;
                    Session::flash('success', "Data has been successfully saved");
                    return redirect()->route('students.index');
                }catch(Exception $ex){
                    DB::rollback();
                    $response["msg"] = "Operation failed. Please try again.";
                    $response["exception"] = $e->getMessage();
                    $response["status"] = "Failed";
                    $response["is_success"] = false;
                    Session::flash('msg', "Operation failed. Please try again.");
                }
            } 
        }catch (Exception $e) {
            $response["msg"] = "Something Went Wrong!";
            $response["status"] = "Failed";
            $response["is_success"] = false;
            Session::flash('msg', "Something Went Wrong!");
        }
        return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = [];
        $student = Student::where('id', $id)->first();
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = [];
        $student = Student::where('id', $id)->first();
        return view('student.edit', compact('student'));
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
        try {
            $rules = [
                'firstname' => 'required',
                'lastname' => 'required',
                'stu_number' => 'required',
                'stu_mail' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'dob' => 'required',
                'phone' => 'required',
                'faculty' => 'required',
                'course' => 'required',
                'father_name' => 'required',
                'mother_name' => 'required',
                'father_job' => 'required',
                'mother_job' => 'required',
                'sibiling' => 'required',
                'ag_office_division' => 'required',
                'gs_office_division' => 'required',
                'district' => 'required',
                'address' => 'required',
            ];
    
            $customMessages = [
                'firstname.required' => 'firstname cannot be empty.',
                'lastname.required' => 'lastname cannot be empty.',
                'stu_number.required' => 'student number cannot be empty.',
                'stu_mail.required' => 'student mail cannot be empty.',
                'email.required' => 'email cannot be empty.',
                'dob.required' => 'date of birth cannot be empty.',
                'phone.required' => 'phone cannot be empty.',
                'faculty.required' => 'faculty cannot be empty.',
                'course.required' => 'course cannot be empty.',
                'father_name.required' => 'father name cannot be empty.',
                'mother_name.required' => 'mother name cannot be empty.',
                'gender.required' => 'please select the gender.',
                'district.required' => 'please select the district.',
                'address.required' => 'address cannot be empty.',
                'father_job.required' => 'father job cannot be empty.',
                'mother_job.required' => 'mother job cannot be empty.',
                'sibiling.required' => 'sibiling cannot be empty.',
                'ag_office_division.required' => 'ag office division cannot be empty.',
                'gs_office_division.required' => 'gs office division cannot be empty.',
            ];
            
            $validator = Validator::make($request->all(), $rules, $customMessages);
            if ($validator->fails()) {
                $response["msg"] = $validator->messages()->first();
                $response["status"] = "Failed";
                $response["is_success"] = false;
                Session::flash('msg', $validator->messages()->first());
            }else {
                try{
                    DB::beginTransaction();
                    $student = Student::find($id);
                    $student->firstname = $request->firstname;
                    $student->lastname = $request->lastname;
                    $student->stu_number = $request->stu_number;
                    $student->dob = $request->dob;
                    $student->phone = $request->phone;
                    $student->email = $request->email;
                    $student->student_mail = $request->stu_mail;
                    $student->faculty = $request->faculty;
                    $student->gender = $request->gender;
                    $student->district = $request->district;
                    $student->address = $request->address;
                    $student->course = $request->course;
                    $student->father_name = $request->father_name;
                    $student->mother_name = $request->mother_name;
                    $student->father_job = $request->father_job;
                    $student->mother_job = $request->mother_job;
                    $student->sibiling = $request->sibiling;
                    $student->ag_office_division = $request->ag_office_division;
                    $student->gs_office_division = $request->gs_office_division;
                    $student->comment = $request->comment;
                    $student->save();
    
                    DB::commit();
                    $response["msg"] = "Data has been successfully updated";
                    $response["status"] = "Success";
                    $response["is_success"] = true;
                    Session::flash('success', "Data has been successfully updated");
                    return redirect()->route('students.index');
                }
                catch(\Exception $ex)
                {
                    $response["msg"] = "Operation failed. Please try again.";
                    $response["exception"] = $ex->getMessage();
                    $response["status"] = "Failed";
                    $response["is_success"] = false;
                    Session::flash('msg', "Something Went Wrong!");
                }
            }
        }catch (Exception $e) {
            $response["msg"] = "Something Went Wrong!";
            $response["status"] = "Failed";
            $response["is_success"] = false;
            Session::flash('msg', "Something Went Wrong!");
        }
        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Student::find($request->id)->delete();
        Session::flash('success', "Data has been successfully deleted");
    }
}
