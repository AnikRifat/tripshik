<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
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
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $request->validate([

            'name' => 'required',
            // 'logo' => 'required',
            'about' => 'required',
            'slider_text' => 'required',
            'yt_link' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        // dd($input);
        // return $input;
        // return $request;
        //
        $input = $request->all();
        if ($image = $request->file('logo')) {
            $filePath = 'assets/images/';
            $setImage = date('YmdHis') . "_logo" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['logo'] = $setImage;
        } else {
            unset($input['logo']);
        }
        if ($image = $request->file('favicon')) {
            $filePath = 'assets/images/';
            $setImage = rand(2, 50) . "_favicon" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['favicon'] = $setImage;
        } else {
            unset($input['favicon']);
        }
        if ($image = $request->file('slider_image')) {
            $filePath = 'assets/images/';
            $setImage = rand(2, 50) . "_slider" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['slider_image'] = $setImage;
        } else {
            unset($input['slider_image']);
        }


        // dd($content->update($input));
        if ($content->update($input)) {
            return redirect()->route('content')->with('success', 'Content updated Successfully.');
        } else {
            return;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }
}
