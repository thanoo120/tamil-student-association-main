<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = [];
        $members = Member::orderBy('created_at', 'desc')->get();
        return view('member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
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
                'name' => 'required',
                'phone' => 'required',
                'designation' => 'required',
                'email' => 'required',
                
                'facebook' => 'required',
                'linkedin' => 'required',
                'bio' => 'required',
                'image' => 'required',
            ];

            $customMessages = [
                'name.required' => 'name cannot be empty.',
                'phone.required' => 'phone cannot be empty.',
                'designation.required' => 'designation cannot be empty.',
                'bio.required' => 'bio cannot be empty.',
                'email.required' => 'email cannot be empty.',
                
                'facebook.required' => 'facebook cannot be empty.',
                'linkedin.required' => 'linkedin cannot be empty.',
                'image.required' => 'image cannot be empty.',
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
                    $url = '';
                    if(isset($request->image)){
                        $url = time().'.'.$request->image->extension();  
                        $request->image->move('assets/images/member', $url);
                    }
                    $member = new Member();
                    $member->name = $request->name;
                    $member->image = $url;
                    $member->phone = $request->phone;
                    $member->designation = $request->designation;
                    $member->bio = $request->bio;
                    $member->email = $request->email;
                 
                    $member->facebook = $request->facebook;
                    $member->linkedin = $request->linkedin;
                    $member->save();

                    DB::commit();
                    $response["msg"] = "Member has been successfully posted";
                    $response["status"] = "Success";
                    $response["is_success"] = true;
                    Session::flash('success', "Member has been successfully posted");
                    return redirect()->route('members.index');
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
        $member = [];
        $member = Member::where('id', $id)->first();
        return view('member.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = [];
        $member = Member::where('id', $id)->first();
        return view('member.edit', compact('member'));
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
        try{
            $url = '';
            DB::beginTransaction();
            if(isset($request->dp)){
                $url =  $request->dp;
            }


            $member = Member::find($id);
            $member->name = $request->name;
            $member->image = $url;
            $member->phone = $request->phone;
            $member->designation = $request->designation;
            $member->bio = $request->bio;
            $member->email = $request->email;
            $member->whatsapp = $request->whatsapp;
            $member->facebook = $request->facebook;
            $member->linkedin = $request->linkedin;
            $member->save();

            DB::commit();
            $response["msg"] = "Member has been successfully updated";
            $response["status"] = "Success";
            $response["is_success"] = true;
            Session::flash('success', "Member has been successfully updated");
            return redirect()->route('members.index');
        }
        catch(\Exception $ex)
        {
            $response["msg"] = "Operation failed. Please try again.";
            $response["exception"] = $ex->getMessage();
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
        Member::find($request->id)->delete();
        Session::flash('success', "Member has been successfully deleted");
    }
}
