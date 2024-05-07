<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Inventory;
use App\Models\User;
use App\Models\Service;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;



class AdminController extends Controller
{
    
    public function addview()
    {
        return view('admin.add_doctor');
    }

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    

    public function upload(Request $request)
    {
        

        Validator::make($request->input(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'usertype' => '2',
            'password' => Hash::make($request->input('password')),
        ]);
        
        
        $doctor = new doctor();
        
        $image=$request->file;
        
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage',$imagename);

        $doctor->image=$imagename;

        $doctor->name=$request->name;

        $doctor->phone=$request->phone;

        $doctor->room=$request->room;

        $doctor->speciality=$request->speciality;

        

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor added successfully');


        
    }

    public function showappointment()
    {
        $data = appointment::all();

        return view('admin.showappointment',compact('data'));
    }

    public function approved($id) 
    {
        $data= appointment::find($id);
        
        $data->status='Approved';

        $data->save();

        return redirect()->back()->with('message', 'Appointment has been approved');

    }

    public function cancelled($id) 
    {
        $data=appointment::find($id);
        
        $data->status='Cancelled';

        $data->save();

        return redirect()->back()->with('message','Appointment has been cancelled');

    }

    public function showdoctor()
    {
        $data = doctor::all();
        return view('admin.showdoctor',compact('data'));
    }


    public function deletedoctor($id) 
    {
        $data=doctor::find($id);
        
        $data->delete();

        return redirect()->back();

    }
    public function updatedoctor($id)
    {
        $data =doctor::find($id);

        return view('admin.update_doctor',compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor =doctor::find($id);

        $doctor->name=$request->name;

        $doctor->phone=$request->phone;

        $doctor->speciality=$request->speciality;

        $doctor->room=$request->room;

        $image=$request->file;

        if ($image) {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage',$imagename);

        $doctor->image=$imagename;
        }

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor details updated successfully');

    }

    #inventory methods
    public function addInventory()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.add_inventory');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    public function uploadInventory(Request $request)
    {
        $inventory = new Inventory;

        $inventory->ItemName = $request->name;
        $inventory->Category = $request->category;
        $inventory->Quantity = $request->quantity;
        $inventory->Supplier = $request->supplier;
        $inventory->AdditionalNotes = $request->notes;
        $inventory->save();

        return redirect()->back()->with('message', 'Inventory added successfully');
    }

    public function viewInventory()
    {
        $inventory = Inventory::all();
        return view('admin.view_inventory', compact('inventory'));
    }
    public function editInventory($id)
    {
        $data = inventory::find($id);

        return view('admin.edit_inventory', compact('data'));
    }
    public function updateInventory(Request $request, $id)
    {
        $inventory = inventory::find($id);
        $inventory->ItemName = $request->name;
        $inventory->Category = $request->category;
        $inventory->Supplier = $request->supplier;
        $inventory->Quantity = $request->quantity;
        $inventory->AdditionalNotes = $request->notes;

        $inventory->save();
        return redirect()->back()->with('message', 'Inventory updated successfully');
    }
    public function deleteInventory($id)
    {
        $data = inventory::find($id);
        $data->delete();
        return redirect()->back();
    }


    #service methods
    public function addService()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.add_service');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    public function uploadService(Request $request)
    {
        $service = new Service;

        $service->name = $request->name;
        $service->description = $request->description;
        $service->cost = $request->cost;
        $service->save();

        return redirect()->back()->with('message', 'Service added successfully');
    }

    public function viewService()
    {
        $service = service::all();
        return view('admin.view_services', compact('service'));
    }
    public function editService($id)
    {
        $data = service::find($id);

        return view('admin.edit_service', compact('data'));
    }
    public function updateService(Request $request, $id)
    {
        $service = service::find($id);
        $service->name = $request->name;
        $service->description = $request->description;
        $service->cost = $request->cost;
        $service->save();

        return redirect()->back()->with('message', 'Service updated successfully');
    }
    public function deleteService($id)
    {
        $data = service::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function patient_rec(){
        $patient = patient::all();
        return view('admin.view_patients',compact('patient'));
    }
}

