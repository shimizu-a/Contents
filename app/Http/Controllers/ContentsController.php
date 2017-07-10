<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\contents;    // 追加

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //追加
        $contents = Contents::all();

        return view('contents.index', [
            'contents' => $contents,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //追加
        $contents = new Contents;
        
        return view('contents.create',['contents' => $contents,
        
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //追加
        
        $this->validate($request, [
            'content' => 'required|max:255',
            'status' => 'required|max:255',
        ]);

        $contents = new Contents;
        $contents->content = $request->content;
        $contents->status = $request->status;   //追加
        $contents->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //追加
        $contents = Contents::find($id);

        return view('contents.show', [
            'contents' => $contents,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //追加
        $contents = Contents::find($id);

        return view('contents.edit', [
            'contents' => $contents,
        ]);

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
        //追加
        
        $this->validate($request, [
            'content' => 'required|max:255',
            'status' => 'required|max:255',
        ]);
        
        $contents= contents::find($id);
        $contents->content = $request->content;
        $contents->status = $request->status;  //追加
        $contents->save();

        return redirect('/');

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
        $contents = contents::find($id);
        $contents->delete();

    return redirect('/');
    }
}
