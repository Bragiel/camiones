<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Incoming;

class IncomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $truck_number = $request->input('truck_number');
        $incoming_time = date('Y-m-d H:i:s');

        $incoming = new Incoming;
        $incoming->truck_number = $truck_number;
        $incoming->incoming_time = $incoming_time;
        $incoming->save();

        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
