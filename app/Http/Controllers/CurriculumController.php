<?php

namespace App\Http\Controllers;

use App\Http\Requests\CurriculumRequest;
use App\Mail\SendCurriculumMail;
use App\Models\Curriculum;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form-submit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CurriculumRequest $request)
    {
        try{
            //Armazena o currículo e salva o path
            $path = $request->file('curriculum')->store('curriculos');
            if (isset($path)){
                $curriculum = new Curriculum();

                $curriculum->name       = $request->name;
                $curriculum->email      = $request->email;
                $curriculum->phone      = $request->phone;
                $curriculum->job        = $request->job;
                $curriculum->schooling  = $request->schooling;
                $curriculum->message    = $request->message;
                $curriculum->ip_address = $request->ip();
                $curriculum->curriculum = $path;
                $curriculum->save();

                Mail::send(new SendCurriculumMail($curriculum));
            }
           
            return view('success-send-form');
        }catch(Exception $e){
            return redirect()->back()->withErrors(["Erro ao enviar currículo"]);
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
