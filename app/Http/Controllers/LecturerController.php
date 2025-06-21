<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturers = [];
        $lecturers = Lecturer::get();
        return view('lecturer.index', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lecturer.create');
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
                'email' => 'required',
                'dob' => 'required',
                'phone' => 'required',
                'nic' => 'required',
                'gender' => 'required',
                'district' => 'required',
                'address' => 'required',
            ];

            $customMessages = [
                'firstname.required' => 'firstname cannot be empty.',
                'lastname.required' => 'lastname cannot be empty.',
                'email.required' => 'email cannot be empty.',
                'dob.required' => 'date of birth cannot be empty.',
                'phone.required' => 'phone cannot be empty.',
                'nic.required' => 'nic cannot be empty.',
                'gender.required' => 'please select the gender.',
                'district.required' => 'please select the district.',
                'address.required' => 'address cannot be empty.',
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
                    $lecturer = new Lecturer();
                    $lecturer->firstname = $request->firstname;
                    $lecturer->lastname = $request->lastname;
                    $lecturer->email = $request->email;
                    $lecturer->dob = $request->dob;
                    $lecturer->phone = $request->phone;
                    $lecturer->nic = $request->nic;
                    $lecturer->gender = $request->gender;
                    $lecturer->district = $request->district;
                    $lecturer->address = $request->address;
                    $lecturer->bio = $request->bio;
                    $lecturer->save();

                    DB::commit();
                    $response["msg"] = "Data has been successfully saved";
                    $response["status"] = "Success";
                    $response["is_success"] = true;
                    Session::flash('success', "Data has been successfully saved");
                    return redirect()->route('lecturers.index');
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
        $lecturer = [];
        $lecturer = Lecturer::where('id', $id)->first();
        return view('lecturer.show', compact('lecturer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lecturer = [];
        $lecturer = Lecturer::where('id', $id)->first();
        return view('lecturer.edit', compact('lecturer'));
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
                'email' => 'required',
                'dob' => 'required',
                'phone' => 'required',
                'nic' => 'required',
                'gender' => 'required',
                'district' => 'required',
                'address' => 'required',
            ];

            $customMessages = [
                'firstname.required' => 'firstname cannot be empty.',
                'lastname.required' => 'lastname cannot be empty.',
                'email.required' => 'email cannot be empty.',
                'dob.required' => 'date of birth cannot be empty.',
                'phone.required' => 'phone cannot be empty.',
                'nic.required' => 'nic cannot be empty.',
                'gender.required' => 'please select the gender.',
                'district.required' => 'please select the district.',
                'address.required' => 'address cannot be empty.',
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
                    $lecturer = Lecturer::find($id);
                    $lecturer->firstname = $request->firstname;
                    $lecturer->lastname = $request->lastname;
                    $lecturer->email = $request->email;
                    $lecturer->dob = $request->dob;
                    $lecturer->phone = $request->phone;
                    $lecturer->nic = $request->nic;
                    $lecturer->gender = $request->gender;
                    $lecturer->district = $request->district;
                    $lecturer->address = $request->address;
                    $lecturer->bio = $request->bio;
                    $lecturer->save();
        
                    DB::commit();
                    $response["msg"] = "Data has been successfully updated";
                    $response["status"] = "Success";
                    $response["is_success"] = true;
                    Session::flash('success', "Data has been successfully updated");
                    return redirect()->route('lecturers.index');
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
        Lecturer::find($request->id)->delete();
        Session::flash('success', "Data has been successfully deleted");
    }
}
