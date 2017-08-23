<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecruiterRegister;
use App\JobseekerRegister;
use App\CompanyRegister;

class AccountLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return view('accountReg.login')->with('user','recruiter');
    }
    public function viewSeekerLogin()
    {
        //
         return view('accountReg.login')->with('user','seeker');
    }
    public function viewFreelancerLogin()
    {
        //
         return view('accountReg.login')->with('user','freelancer');
    }
    public function viewCompanyLogin()
    {
        //
         return view('accountReg.login')->with('user','company');
    }
    public function viewConsultancyLogin()
    {
        //
         return view('accountReg.login')->with('user','consultancy');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
   /* $reclogin=RecruiterRegister::where(function($query) {
    $query->where('emailID', $request->emailormob)
          ->orWhere('mobile', $request->emailormob);
    })->where(function ($query) {
    $query->where('password', $request->password);
    });
    return view('accountReg.home')->with('res',$reclogin);>*/
    if($request->user==='recruiter')
    {
    $reclogin=RecruiterRegister::where('emailID',$request->emailormob)
                            ->where('password',$request->password)
                            ->get();
    if(count($reclogin)>0)
    {
    return view('accountReg.home')->with('res',$reclogin);
    }else{
        $data=array('error'=>'Login Failed!!!',
            'user'=>'recruiter');
        return view('accountReg.login')->with($data);
    }
    }else if($request->user==='seeker')
    {
     $seekerlogin=JobseekerRegister::where('emailID',$request->emailormob)
                            ->where('password',$request->password)
                            ->get();
    if(count($seekerlogin)>0)
    {
    return view('afterlogin.jobseeker_first')->with('res',$seekerlogin);
    }else{
        $data=array('error'=>'Login Failed!!!',
            'user'=>'recruiter');
        return view('accountReg.login')->with($data);
    }   
    }else if($request->user==='freelancer' || $request->user==='company' || $request->user==='consultancy')
    {
     $companylogin=CompanyRegister::where('emailID',$request->emailormob)
                            ->where('password',$request->password)
                            ->where('company_type',$request->user)
                            ->get();
    if(count($companylogin)>0)
    {
    return view('accountReg.home')->with('res',$companylogin);
    }else{
        $data=array('error'=>'Login Failed!!!',
            'user'=>'recruiter');
        return view('accountReg.login')->with($data);
    }   
    }
    }
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
}
