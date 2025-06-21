<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = [];
        $faculties = [];
        $faculties = Dashboard::get();
        $setting = Setting::first();
        return view('setting.index', compact('setting', 'faculties'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }

    public function updateSetting(Request $request){
        try{
            DB::beginTransaction();
            if($request->type == 'setting'){
                $setting = Setting::find($request->sid);
                $setting->phone = $request->phone;
                $setting->email = $request->email;
                $setting->facebook = $request->facebook;
                $setting->instagram = $request->instagram;
                $setting->twitter = $request->twitter;
                $setting->linkedin = $request->linkedin;
                $setting->about_left = $request->about_left;
                $setting->about_right = $request->about_right;
            }
            if($request->type == 'faculty'){
                $setting = Dashboard::find($request->sid);
                $setting->boys = $request->boys;
                $setting->girls = $request->girls;
                $setting->total = $request->total;
            }
            $setting->save();

            DB::commit();
            $response["msg"] = "Setting has been successfully updated";
            $response["status"] = "Success";
            $response["is_success"] = true;
        }
        catch(\Exception $ex)
        {
            $response["msg"] = "Operation failed. Please try again.";
            $response["exception"] = $ex->getMessage();
            $response["status"] = "Failed";
            $response["is_success"] = false;
            Session::flash('msg', "Something Went Wrong!");
        }
        return $response;
    }
}
