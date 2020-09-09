<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\developer;

class resource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =developer::simplePaginate(2);
        return view('welcome', [
            'report' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');

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
            'blog' => 'required|unique:developers|max:800',
            'name' => 'required',
        ]);

        $vari= new developer();
        $vari->name= ucfirst($request->input('name'));
        $vari->blog= ucfirst($request->input('blog'));
        $vari->save();

        return redirect('/vancouver');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = developer::findOrFail($id);
        return view('blog', [
            'report' => $report
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
        $report = developer::findOrFail($id);
        return view('edit', [
            'report' => $report
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
        $request->validate([
            'blog' => 'required|unique:developers|max:800',
            'name' => 'required',
        ]);

        $vari= developer::findOrFail($id);
        $vari->name= ucfirst($request->input('name'));
        $vari->blog= ucfirst($request->input('blog'));
        $vari->save();

        return redirect('/vancouver');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vari= developer::findOrFail($id);
        $vari->delete();

        return redirect('/vancouver');
    }

    public function fakedelete($id)
    {
        $report = developer::findOrFail($id);
        return view('fakedelete', [
            'report' => $report
        ]);
    }

}
