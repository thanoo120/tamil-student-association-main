<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = [];
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
                'heading' => 'required',
                'image' => 'required',
                'service' => 'required',
            ];

            $customMessages = [
                'heading.required' => 'heading cannot be empty.',
                'image.required' => 'please select service image.',
                'service.required' => 'service cannot be empty.',
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
                        $request->image->move('assets/images/service', $url);
                    }
                    $service = new Service();
                    $service->added_by = Auth::user()->name;
                    $service->heading = $request->heading;
                    $service->image = $url;
                    $service->service = $request->service;
                    $service->save();

                    DB::commit();
                    $response["msg"] = "Service has been successfully posted";
                    $response["status"] = "Success";
                    $response["is_success"] = true;
                    Session::flash('success', "Service has been successfully posted");
                    return redirect()->route('services.index');
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
        $service = [];
        $service = Service::where('id', $id)->first();
        return view('service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = [];
        $service = Service::where('id', $id)->first();
        return view('service.edit', compact('service'));
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
                $request->image->move('assets/images/service', $url);
            }
            $service = Service::find($id);
            $service->heading = $request->heading;
            $service->image = $url;
            $service->service = $request->service;
            $service->save();

            DB::commit();
            $response["msg"] = "Service has been successfully updated";
            $response["status"] = "Success";
            $response["is_success"] = true;
            Session::flash('success', "Service has been successfully updated");
            return redirect()->route('services.index');
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
        Service::find($request->id)->delete();
        Session::flash('success', "Service has been successfully deleted");
    }
}
