<?php

namespace App\Http\Controllers;

use App\Customer;
use App\SaccoManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SystemUsersController extends Controller
{
 public function createSystemUser(Request $request){
     $this->validate($request,[
         'fname'=>'required|max:30',
         'lname'=>'required|max:30',
         'phone'=>'required|max:10',
         'password'=>'required'

     ]);
     //Handle File upload
     $customer=new Customer();

     $customer->fname=$request->input('fname');
     $customer->lname=$request->input('lname');
     $customer->phone=$request->input('phone');
     $customer->password=$request->input('password');
     $customer->save();
     return redirect('/CreateAccount')->with('success','You have been Successfully Registered.');
 }

 //Here We are going to register Sacco Manager
    public function showSaccoManagerRegistrationForm(){
     return view('saccomanager_registration');
    }


    public function storeSaccoManagerDetails(Request $request){
     $saccoManager=new SaccoManager();
     $this->validate($request,[
         'idno'=>'required|max:10',
         'fname'=>'required',
         'lname'=>'required',
         'phone'=>'required|max:10',
         'email'=>'required|email',
         'password'=>'required',
         'cpassword'=>'required'
     ]);



        $password=$request->input('password');
        $cpassword=$request->input('cpassword');
        if($cpassword!=$password){
            return back()->with('error','Password do not match.Enter matching passwords');
        }
        else{
            $saccoManager->first_name=$request->input('fname');
            $saccoManager->last_name=$request->input('lname');
            $saccoManager->id_number=$request->input('idno');;
            $saccoManager->phone=$request->input('phone');
            $saccoManager->email=$request->input('email');
            $saccoManager->password=Hash::make($password);
            $saccoManager->save();
            return back()->with('success','You have been Successfully Registered.');
        }




    }
}
