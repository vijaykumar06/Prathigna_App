<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyRegister;

class CompanyRegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return view('accountReg.company')->with('user','company');
    }
    public function viewConsultancyReg()
    {
        return view('accountReg.company')->with('user','consultancy');
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
            $freelancerreg=new CompanyRegister;
            $freelancerreg->name=$request->company_name;
            $freelancerreg->contact_person=$request->contact_name;
            $freelancerreg->emailID=$request->email;
            $freelancerreg->mobile=$request->mobile;
            $freelancerreg->password=$request->password;
            $freelancerreg->company_type=$request->user;
            $freelancerreg->save();
            return redirect('freelancer_register')->with('success','successfully registered');
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
