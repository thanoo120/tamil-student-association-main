<?php

namespace App\Http\Controllers;

use App\Models\Year;
use App\Models\Batch;
use App\Models\Event;
use App\Models\Member;
use App\Models\Notice;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Achievement;
use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index(Request $request){
        $active = $request->active;
        $members = [];
        $years = [];
        $events = [];
        $competitions = [];
        $achievements = [];
        $services = [];
        $notices = [];
        $batches = [];
        $about = "";
        $years = Year::get();
        $members = Member::all();
        $about = Setting::first();
        $events = Event::all();
        $competitions = Competition::all();
        $achievements = Achievement::all();
        $services = Service::all();
        $batches = Batch::all();
        $notices = Notice::leftjoin('users', 'users.id', '=', 'uid')->get();
        return view('blog.index', compact('active', 'members', 'years', 'about', 'events', 'competitions', 'achievements', 'services', 'notices', 'batches'));
    }

    public function store(Request $request){
        try {
            $rules = [
                'name' => 'required',
                'subject' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'message' => 'required',
            ];

            $customMessages = [
                'name.required' => 'name cannot be empty.',
                'subject.required' => 'subject cannot be empty.',
                'email.required' => 'email cannot be empty.',
                'phone.required' => 'phone cannot be empty.',
                'message.required' => 'message cannot be empty.',
            ];

            $validator = Validator::make($request->all(), $rules, $customMessages);
            if ($validator->fails()) {
                $response["msg"] = $validator->messages()->first();
                $response["status"] = "Failed";
                $response["is_success"] = false;
                Session::flash('msg', $validator->messages()->first());
                return redirect()->to('/blog?active=contact#contact')->withInput();
            }else {
                try{
                    DB::beginTransaction();
                    $lecturer = new Contact();
                    $lecturer->name = $request->name;
                    $lecturer->email = $request->email;
                    $lecturer->phone = $request->phone;
                    $lecturer->subject = $request->subject;
                    $lecturer->message = $request->message;
                    $lecturer->save();

                    DB::commit();
                    $response["success"] = "Message has been successfully sent";
                    $response["status"] = "Success";
                    $response["is_success"] = true;
                    Session::flash('success', "Message has been successfully sent");
                    return redirect()->route('blog');
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
}
