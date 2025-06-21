<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = [];
        $years = Batch::orderBy('created_at', 'desc')->get();
        return view('batch.index', compact('years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('batch.create');
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
                'year' => 'required',
                'image' => 'required',
            ];

            $customMessages = [
                'year.required' => 'year cannot be empty.',
                'image.required' => 'please select image.',
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
                        $request->image->move('assets/images/year', $url);
                    }
                    $batch = new Batch();
                    $batch->added_by = Auth::user()->name;
                    $batch->year = $request->year;
                    $batch->image = $url;
                    $batch->save();

                    DB::commit();
                    $response["msg"] = "Batch has been successfully posted";
                    $response["status"] = "Success";
                    $response["is_success"] = true;
                    Session::flash('success', "Batch has been successfully posted");
                    return redirect()->route('years.index');
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
        $year = [];
        $year = Batch::where('id', $id)->first();
        return view('batch.show', compact('year'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $year = [];
        $year = Batch::where('id', $id)->first();
        return view('batch.edit', compact('year'));
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
            if(isset($request->image)){
                $url = time().'.'.$request->image->extension();  
                $request->image->move('assets/images/year', $url);
            }
            $batch = Batch::find($id);
            $batch->year = $request->year;
            $batch->image = $url;
            $batch->save();

            DB::commit();
            $response["msg"] = "Year has been successfully updated";
            $response["status"] = "Success";
            $response["is_success"] = true;
            Session::flash('success', "Year has been successfully updated");
            return redirect()->route('years.index');
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
        Batch::find($request->id)->delete();
        Session::flash('success', "Batch has been successfully deleted");
    }
}
