<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Service;
use App\Charts\Inventory;

class HomeController extends Controller
{
    public function redirect()
    {
        $doctor = doctor::all();
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('user.home',compact('doctor'));
            }

            else if(Auth::user()->usertype=='1')
            {

                return view('admin.home');
            }

            else
            {
                return view('doctor.home');
            }
        }
    
    else 
    {
        return redirect()->back();
    }
}

 public function index()
 {
    $doctor = doctor::all();
    return view('user.home',compact('doctor'));
 }

 public function appointment(Request $request)
 {
        $data = new appointment;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->date=$request->date;

        $data->phone=$request->number;

        $data->message=$request->message;

        $data->doctor=$request->doctor;

        $data->status='In progress';

        if(Auth::id())
        {

            $data->user_id=Auth::user()->id;

        }

        $data->save();

        return redirect()->back()->with('message','Appointment Request Succesful . We will contact you soon.');


 }

    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;

            $appoint=appointment::where('user_id',$userid)->get();

            return view('user.my_appointment',compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function enterpatient(){
        return view('doctor.enter');
    }

    public function viewrecords(){
        $patient = patient::all();
        return view('doctor.records',compact('patient'));
    }

    public function about(){
        $service = service::all();
        return view('user.about',compact('service'));
    }

    public function blog(){
        
        return view('user.blog');
    }

    public function contact(){
        
        return view('user.contact');
    }

    public function submitpatient(Request $request){
        $data = new patient;

        $data->name = $request->name;

        $data->contact = $request->contact;

        $data->age = $request->age;

        $data->gender = $request->gender;

        $data->date = $request->date;

        $data->signs_symptoms = $request->signs_symptoms;

        $data->test_results = $request->test_results;

        $data->drug_prescription = $request->drug_prescription;

        $data->save();

        return redirect()->back()->with('message','Record added successfully');
    }

    public function doc_appointments() {
        if(Auth::check()){ // Check if user is logged in
            $user = User::find(Auth::id()); // Find the user with the authenticated ID
            $name = $user->name; // Get the user's name
    
            $appointments = Appointment::where('doctor', $name)->get(); // Retrieve appointments for the user
            // Do something with $appointments...
            return view('doctor.doc_appointments',compact('appointments'));
        }
    }


}