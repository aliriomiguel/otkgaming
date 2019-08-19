<?php

namespace App\Http\Controllers;

use App\Service;
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
        $services = Service::orderBy('created_at','desc')->paginate(10);
        return view('services.index',compact('services'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
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
        //dd($request);
        $this->validate($request,[
            'name' => 'required|min:3',
            'description' => 'required|min:10',
            'icon' => 'required|max:10240|mimes:png,jpg,jpeg'
        ]);
        $iconFile = $request->file('icon');
        $iconName = $iconFile->getClientOriginalName();
        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'icon' => $iconName
        ]);
        $iconFile->move(base_path().'/public/img/icons',$iconName);

        return redirect(route('services.index'));

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('services.show',compact('service'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('services.edit',compact('service'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->name = $request->name;
        $service->description = $request->description;
        if($iconFile = $request->file('icon')){
            $iconName = $iconFile->getClientOriginalName();
            if($service->icon != $iconName || $iconName != null){
                $service->icon = $iconName;
                $iconFile->move(base_path().'/public/img/icons',$iconName);
            }
        }
        $service->save();
        session()->flash('message','Your service has been updated');
        return redirect(route('services.index'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect(route('services.index'));
        //
    }
}
