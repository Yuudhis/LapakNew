<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('test');
        $datausers = UsersModel::all();
        return view('datausers', ['datausers' => $datausers]);
        // dd($datausers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $datausers = UsersModel::where('id', $id)->first();
        // return view('userprofile',['name' => $datausers]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datausers = UsersModel::find($id);
        return view('editusers', ['datausers' => $datausers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datausers = UsersModel::find($id);
        $datausers->name = $request->name;
        $datausers->email = $request->email;
        $datausers->save();

        return redirect()->route('datausers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function finsishuser(Request $request)
    {
        return view('user');
    }
}
