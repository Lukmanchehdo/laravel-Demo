<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
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
        return view('urls.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //TODO::1
        /* Url::create([
        'url' => $request->url,
        'code' => 'XYZ'
        ]);*/

        //TODO::2
        /*Url::insert([
        'url' => $request->url,
        'code' => 'XYZ'
        ]);*/

        //TODO::3
        /*Url::forceCreate([
        'url'  => $request->url,
        'code' => 'XYZ'
        ]);*/

        //TODO::4
        $model_url = new Url();
        $model_url->url = $request->url;
        $model_url->code = 'XYZ';
        $model_url->save();

        //update
        // $model_url = Url::query()->find(4);
        // $model_url->code = 'ABC';
        // $model_url->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function show(Url $url)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function edit(Url $url)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Url $url)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function destroy(Url $url)
    {
        //
    }
}
