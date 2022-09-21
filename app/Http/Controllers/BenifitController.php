<?php

namespace App\Http\Controllers;

use App\Models\Benifit;
use Illuminate\Http\Request;

class BenifitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\pages\benifit\create');
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
            'title' => 'required',
            'details' => 'required',
            'image' => 'required',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            // dd($image);
            $filePath = 'assets/images/benifit/';
            $setImage = uniqid() . "_benifit" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        }
        Benifit::create($input);
        return redirect()->route('benifit')->with('success', 'benifit added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Benifit  $benifit
     * @return \Illuminate\Http\Response
     */
    public function show(Benifit $benifit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Benifit  $benifit
     * @return \Illuminate\Http\Response
     */
    public function edit(Benifit $benifit)
    {
        return view('admin.pages.benifit.edit', compact('benifit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Benifit  $benifit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Benifit $benifit)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
            // 'date' => date('y-m-d')
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            // dd($image);
            $filePath = 'assets/images/benifit/';
            $setImage = uniqid() . "_benifit" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        } else {
            unset($input['image']);
        }
        $benifit->update($input);
        return redirect()->route('benifit')->with('success', 'benifit added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Benifit  $benifit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Benifit $benifit)
    {
        $benifit->delete();
        return redirect()->route('benifit')->with('success', 'benifit deleted successfully.');
    }
}
