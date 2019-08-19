<?php

namespace App\Http\Controllers;

use App\Quotes;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quotes::orderBy('created_at','desc')->paginate(10);
        return view('quotes.index', compact('quotes'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quotes.create');
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
            'author' => 'required|min:3',
            'quote' => 'required|min:10'
        ]);
        Quotes::create([
            'author' => $request->author,
            'quote' => $request->quote
        ]);
        return redirect(route('quotes.index'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function show(Quotes $quote)
    {
        return view('quotes.show',compact('quote'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function edit(Quotes $quote)
    {
        return view('quotes.edit',compact('quote'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quotes $quote)
    {
        $quote->quote = $request->quote;
        $quote->author = $request->author;
        $quote->save();
        session()->flash('message','Your quote text has been updated');
        return redirect(route('quotes.index'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quotes $quote)
    {
        $quote->delete();
        return redirect(route('quotes.index'));
        //
    }
}
