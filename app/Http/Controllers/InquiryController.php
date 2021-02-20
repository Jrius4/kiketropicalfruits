<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $inquiries = Inquiry::latest()->where('name','like','%'.$request->name.'%')->orWhere('email','like','%'.$request->email.'%')->orWhere('phone','like','%'.$request->email.'%')->orWhere('message','like','%'.$request->message.'%')->paginate(15);
        return response()->json(compact('inquiries'));

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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
        Inquiry::create([
            'name'=>$request->name !== null ?$request->name:null,
            'phone'=>$request->phone !== null ?$request->phone :null,
            'email'=>$request->email !== null ?$request->email:null,
            'message'=>$request->message !== null ?$request->message:null,
        ]);
        return redirect()->route('contacts')->with('success','Inquiry well recieved.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiry $inquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquiry $inquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquiry $inquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquiry $inquiry)
    {
        //
    }
}
