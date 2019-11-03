<?php

namespace App\Http\Controllers;

use App\Sacco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SystemAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:systemadmin');

    }



    public function myDashBoard(){
        return view('saccomanager.smdashboard');
    }

    public function showNewSaccoRegistrationForm(){
        return view('accounts.admin.new_sacco');
    }

    //Register New Sacco;
    public function saveSaccoDetails(Request $request)
    {
        $this->validate($request, [
            'regno' => 'required',
            'sacconame' => 'required',
            'headquarters' => 'required',
            'idnumber' => 'required'

        ]);
        $saccomanager=new SaccoManagerController();

        if(!empty($saccomanager->checkIdExistence('saccos',$request->input('regno'),'registration_number'))){
            return redirect(route('newSaccoForm.submit'))->with('error', 'Sacco registration number is already registered');
        }
        else{
            $newSacco = new Sacco();
            $newSacco->system_adminID = Auth::user()->username;
            $newSacco->registration_number = $request->input('regno');
            $newSacco->sacconame = $request->input('sacconame');
            $newSacco->headquarters = $request->input('headquarters');
            $newSacco->manager_id = $request->input('idnumber');
            $newSacco->save();
            return redirect(route('newSaccoForm.submit'))->with('success', 'Sacco has been successfully registered');
        }


    }




}
