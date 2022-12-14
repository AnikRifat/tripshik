<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.service.create');
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
        // dd($request->file('image'));
        $request->validate([
            'title' => 'required',
            'subtitle_1' => 'required',
            'subtitle_1' => 'required',
            'details' => 'required',
            'image' => 'required',
            'position' => 'required',
        ]);
        $input = $request->all();
        // dd($input);
        if ($image = $request->file('image')) {
            // dd($image);
            $filePath = 'assets/images/service/';
            $setImage = uniqid() . "_service" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        }

        Service::create($input);

        return redirect()->route('service')->with('success', 'Service Added Scueesfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.pages.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        // dd($request->file('image'));
        $request->validate([
            'title' => 'required',
            'subtitle_1' => 'required',
            'subtitle_1' => 'required',
            'details' => 'required',
            'image' => 'required',
            'position' => 'required',
        ]);
        $input = $request->all();
        // dd($input);
        if ($image = $request->file('image')) {
            // dd($image);
            $filePath = 'assets/images/service/';
            $setImage = uniqid() . "_service" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        } else {
            unset($input['image']);
        }
        $service->update($input);
        // Service::create($input);

        return redirect()->route('service')->with('success', 'Service updated Scueesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        // // dd($category->delete());
        return redirect()->route('service')->with('success', 'Service Deleted Scueesfully.');
    }
}
