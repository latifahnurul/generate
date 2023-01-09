<?php

namespace App\Http\Controllers;

use App\Models\Generates;
use Illuminate\Http\Request;

class GenerateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generates = Generates::orderBy('id','desc')->paginate(5);
        return view('Generates.index', compact('generates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Generates.create');
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
            'Jumlah User' => 'required',
            'Kode Enkripsi' => 'required',
            'Masa Berlaku' => 'required',
        ]);
        
        Generates::create($request->post());

        return redirect()->route('Generates.index')->with('success','Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show (Generates $generates)
    {
        return view('Generates.show',compact('generates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //    return view('Generates.edit',compact('generate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generates $generates)
    {
        $request->validate([
            'Jumlah User' => 'required',
            'Kode Enkripsi' => 'required',
            'Masa Berlaku' => 'required',
        ]);
        
        $generates->fill($request->post())->save();

        return redirect()->route('Generates.index')->with('success','Generate Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy (Generates $generates)
    {
        $generates->delete();
        return redirect()->route('Generates.index')->with('success','Generate has been deleted successfully');
    }
}
