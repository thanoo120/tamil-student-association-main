<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = [];
        $notices = Notice::leftjoin('users', 'users.id', '=', 'notices.uid')->select('users.id as uid', 'users.profile', 'users.designation', 'users.name', 'notices.id as id', 'notices.notice', 'notices.description')->orderBy('notices.created_at', 'desc')->get();
        return view('notice.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notice.create');
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
                'notice' => 'required',
                'description' => 'required',
            ];

            $customMessages = [
                'notice.required' => 'notice cannot be empty.',
                'description.required' => 'description cannot be empty.',
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
                    $notice = new Notice();
                    $notice->uid = Auth::user()->id;
                    $notice->description = $request->description;
                    $notice->notice = $request->notice;
                    $notice->save();

                    DB::commit();
                    $response["msg"] = "Notice has been successfully posted";
                    $response["status"] = "Success";
                    $response["is_success"] = true;
                    Session::flash('success', "Notice has been successfully posted");
                    return redirect()->route('notice.index');
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
        $notice = [];
        $notice = Notice::where('id', $id)->first();
        return view('notice.show', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = [];
        $notice = Notice::where('id', $id)->first();
        return view('notice.edit', compact('notice'));
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
                'notice' => 'required',
                'description' => 'required',
            ];

            $customMessages = [
                'notice.required' => 'notice cannot be empty.',
                'description.required' => 'description cannot be empty.',
            ];

            $validator = Validator::make($request->all(), $rules, $customMessages);
            if ($validator->fails()) {
                $response["msg"] = $validator->messages()->first();
                $response["status"] = "Failed";
                $response["is_success"] = false;
                Session::flash('msg', $validator->messages()->first());
            }else {
                try{
                    $url = '';
                    DB::beginTransaction();
                    $notice = Notice::find($id);
                    $notice->uid = Auth::user()->id;
                    $notice->description = $request->description;
                    $notice->notice = $request->notice;
                    $notice->save();
        
                    DB::commit();
                    $response["msg"] = "Notice has been successfully updated";
                    $response["status"] = "Success";
                    $response["is_success"] = true;
                    Session::flash('success', "Notice has been successfully updated");
                    return redirect()->route('notice.index');
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
        Notice::find($request->id)->delete();
        Session::flash('success', "Notice has been successfully deleted");
    }
}
