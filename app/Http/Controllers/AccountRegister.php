<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecruiterRegister;
use App\CompanyRegister;
use App\JobseekerRegister;
class AccountRegister extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('accountReg.index')->with('user','recruiter');
    }
    public function viewFreelancerReg()
    {
        return view('accountReg.index')->with('user','freelancer');
    }
    public function viewSeekerReg()
    {
        return view('accountReg.index')->with('user','seeker');
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
        
        if($request->password === $request->cpassword)
        {
            if($request->user==='recruiter')
            {
            $recruiterreg=new RecruiterRegister;
            $recruiterreg->fname=$request->name;
            $recruiterreg->emailid=$request->email;
            $recruiterreg->mobile=$request->mobile;
            $recruiterreg->password=$request->password;
           
            $recruiterreg->save();
            return redirect('recruiter_register')->with('success','successfully registered');
        
            }else if($request->user==='freelancer')
            {
            $freelancerreg=new CompanyRegister;
            $freelancerreg->name=$request->name;
            $freelancerreg->emailID=$request->email;
            $freelancerreg->mobile=$request->mobile;
            $freelancerreg->password=$request->password;
            $freelancerreg->company_type=$request->user;
            $freelancerreg->save();
            return redirect('freelancer_register')->with('success','successfully registered');
            }else if($request->user==='seeker')
            {
            $seekerreg=new JobseekerRegister;
            $seekerreg->fname=$request->name;
            $seekerreg->emailID=$request->email;
            $seekerreg->mobile=$request->mobile;
            $seekerreg->password=$request->password;
            $seekerreg->save();
            return redirect('seeker_register')->with('success','successfully registered');
            }
        }else{
             return redirect('recruiter_register')->with('error','Password mismatch!!');
        }
     
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
