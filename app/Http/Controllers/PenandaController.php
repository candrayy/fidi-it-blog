<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penanda;

class PenandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPenanda = Penanda::paginate(5);
        return view('admin.penanda.penanda', compact('dtPenanda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penanda.tambah-penanda');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Penanda::create([
            'kd_penanda' => $request->kd_penanda,
            'penanda' => $request->penanda,
        ]);
        return redirect('penanda');
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
        $ubahPenanda = Penanda::findorfail($id);
        return view('admin.penanda.edit-penanda', compact('ubahPenanda'));
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
        $ubahPenanda = Penanda::findorfail($id);
        $ubahPenanda->update($request->all());
        return redirect('penanda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ubahPenanda = Penanda::findorfail($id);
        $ubahPenanda->delete();
        return back();
    }
}
