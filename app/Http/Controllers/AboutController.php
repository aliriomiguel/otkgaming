<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::orderBy('created_at','desc')->paginate(10);
        return view('abouts.index',compact('abouts'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abouts.create');
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
        $this->validate($request,[
            'about' => 'required|min:10'
        ]);
        About::create([
            'about' => $request->about,
            'active_text' => 0
        ]);
        return redirect(route('abouts.index'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('abouts.show',compact('about'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('abouts.edit', compact('about'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $about->about = $request->about;
        $about->save();
        session()->flash('message','Your about text has been updated');
        return redirect(route('abouts.index'));
        //
    }

    public function showLanding($id){
        $about = About::find($id);

        $about->active_text = 1;
        $saved = $about->save();

        return response()->json([
            'success' => $saved
        ]);
    }

    public function hideLanding($id){
        $about = About::find($id);

        $about->active_text = 0;
        $saved = $about->save();

        return response()->json([
            'success' => $saved
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect(route('abouts.index'));
        //
    }
}
