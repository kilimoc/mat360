<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showAccountCreation(){
     return view('create-rider-account');
 }


 public function showConfirmRegistrationForm(){
        return view('saccomanager.check_registrationStatus');
 }

 public function confirmRegistration(Request $request){
        $this->validate($request,[
            'idno'=>'required|max:8',
        ]);
       $saccomanagerObject=new SaccoManagerController();
       if(!empty($saccomanagerObject->checkIdExistence('saccos',$request->input('idno'),'manager_id'))){
           return redirect(route('completeregistration',['idnumber'=>$request->input('idno')]))->with('success','Your IDentity has been verified.You can now proceed to register');
       }
       else{
           return redirect(route('confirmRegistration'))->with('error','Please you have not been registered.Contact the system administrator');
       }

 }

 public  function showCompleteRegistrationForm($idnumber){
        return view('saccomanager.complete_registration');

 }


}
