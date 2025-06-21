<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitions = [];
        $competitions = Competition::orderBy('created_at', 'desc')->get();
        return view('competition.index', compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('competition.create');
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
                'competition' => 'required',
            ];

            $customMessages = [
                'heading.required' => 'heading cannot be empty.',
                'image.required' => 'please select event image.',
                'competition.required' => 'competition cannot be empty.',
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
                        $request->image->move('assets/images/competition', $url);
                    }
                    $competition = new Competition();
                    $competition->added_by = Auth::user()->name;
                    $competition->heading = $request->heading;
                    $competition->image = $url;
                    $competition->competition = $request->competition;
                    $competition->save();

                    DB::commit();
                    $response["msg"] = "Competition has been successfully posted";
                    $response["status"] = "Success";
                    $response["is_success"] = true;
                    Session::flash('success', "Competition has been successfully posted");
                    return redirect()->route('competitions.index');
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
        $competition = [];
        $competition = Competition::where('id', $id)->first();
        return view('competition.show', compact('competition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $competition = [];
        $competition = Competition::where('id', $id)->first();
        return view('competition.edit', compact('competition'));
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
                $request->image->move('assets/images/competition', $url);
            }
            $competition = Competition::find($id);
            $competition->heading = $request->heading;
            $competition->image = $url;
            $competition->competition = $request->competition;
            $competition->save();

            DB::commit();
            $response["msg"] = "Competition has been successfully updated";
            $response["status"] = "Success";
            $response["is_success"] = true;
            Session::flash('success', "Competition has been successfully updated");
            return redirect()->route('competitions.index');
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
        Competition::find($request->id)->delete();
        Session::flash('success', "Competition has been successfully deleted");
    }
}
