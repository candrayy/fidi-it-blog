<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Postingan;
use App\Models\Kategori;
use App\Models\Penanda;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::get();
        $penanda = Penanda::get();
        $postingan = Postingan::orderBy('id', 'desc')->paginate(5);
        //dd($postingan);
        return view('beranda', compact('postingan', 'kategori', 'penanda'));
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
        //
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
        //
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
        //
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
    }

    public function detail($slug)
    {
        $postingan = Postingan::orderBy('id', 'desc')->take(4)->get();
        $kategori = Kategori::get();
        $penanda = Penanda::get();
        $detail = Postingan::where('slug', $slug)->first();
        return view('detail', compact('kategori','penanda','detail','postingan'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $kategori = Kategori::get();
        $penanda = Penanda::get();
        $postingan = Postingan::where('judul', 'LIKE', "%{$search}%")
        ->orWhere('penulis', 'LIKE', "%{$search}%")->join('postingan', 'penanda_postingan.postingan_id', '=', 'postingan.id')
        ->join('penanda', 'penanda_postingan.penanda_id', '=', 'penanda.id')
        ->join('kategori', 'postingan.kategori_id', '=', 'kategori.id')->get();
        return view('beranda', compact('postingan'));
    }
}
