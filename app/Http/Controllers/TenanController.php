<?php

namespace App\Http\Controllers;

use App\Models\Tenan;
use Illuminate\Http\Request;

class TenanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenan = tenan::all();
        $data = Tenan::OrderBy('id','desc')->get();
        return view('admin.tenan.index',  ['tenan'=>$tenan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tenan = tenan::all();
        return view('admin.tenan.create',compact('tenan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tenan = time().'.'.$request->file->extension();
        $uploadedImage = $request->image->move(public_path('file'), $tenan);
        $imagePath = 'file/' . $tenan;

        $params = $request->validated();

        if ($tenan = tenan::create($params)) {
            $tenan->image = $imagePath;
            $tenan->save();
        $tenan = new tenan;
        $tenan->file = $request->file;
        $tenan->nama_tenan =$request->nama_tenan;
        $tenan->status =$request->status;
        $tenan->save();

        return redirect()->route('tenan.index')->with('success','added!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = tenan::findOrfail($id);
        $tenan = tenan::all();

        return view('admin.tenan.edit', compact('data','tenan'));
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
        $request->tenan->move(public_path('file'), $tenan);
        $tenan = tenan::find($id);
        $tenan->file = $request->file;
        $tenan->nama_tenan = $request->nama_tenan;
        $tenan->status = $request->status;
        $tenan->save();

        return redirect()->route('tenan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = tenan::findOrFail($id);
        $data->delete();

        return redirect()->route('tenan.index');
    }
}
