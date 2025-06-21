<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = [];
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('contact.index', compact('contacts'));
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
        try {
            $rules = [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ];

            $customMessages = [
                'name.required' => 'name cannot be empty.',
                'email.required' => 'email cannot be empty.',
                'phone.required' => 'phone cannot be empty.',
                'subject.required' => 'subject cannot be empty.',
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
                    $contact = new Contact();
                    $contact->name = $request->name;
                    $contact->email = $request->email;
                    $contact->phone = $request->phone;
                    $contact->subject = $request->subject;
                    $contact->message = $request->message;
                    $contact->save();

                    $to = 'saru.contacts@gmail.com';
                    $subject = 'TSA Contact Form';
                    $message = "You have received a new message from " . $request->name . " (" . $request->email . ").\n\n";
                    $message .= "Phone: " . $request->phone . "\n";
                    $message .= "Subject: " . $request->subject . "\n";
                    $message .= "Message: \n" . $request->message;

                    $headers = "From: " . $request->email . "\r\n";
                    $headers .= "X-Mailer: PHP/" . phpversion();

                    mail($to, $subject, $message, $headers);

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = [];
        $contact = Contact::where('id', $id)->first();
        return view('contact.show', compact('contact'));
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
    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();
        Session::flash('success', "Contact has been successfully deleted");
    }
}
