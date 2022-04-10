<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Postingan;
use App\Models\Kategori;
use App\Models\Penanda;

class PostinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPostingan = Postingan::paginate(5)->onEachSide(2);
        // $penanda = Penanda::all();

        // dd($dtPostingan);
        return view('admin.postingan.postingan', compact('dtPostingan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $post = Postingan::all();
        $ktgr = Kategori::all();
        $pend = Penanda::all();
        return view('admin.postingan.tambah-postingan', compact('ktgr','pend'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Postingan::create([
        // 'kategori_id' => $request->kategori_id,
        // 'penanda_id' => $request->penanda_id,
        // 'gambar' => $request->gambar,
        // 'judul' => $request->judul,
        // 'isi' => $request->isi,
        // 'penulis' => $request->penulis,
        // 'created_at' => $request->created_at,
        // ]);

        // $file = $request->file('gambar');
		// $fileName = time() . '.' . $file->getClientOriginalName();
        // $dtPost->penanda_id = $request->penanda_id;
        
		$dtPost = new Postingan;
        $dtPost->kategori_id = $request->kategori_id;
        $dtPost->judul = $request->judul;
        $dtPost->slug = Str::slug($request->get('judul'));
        $dtPost->isi = $request->isi;
        $dtPost->penulis = $request->penulis;
        $dtPost->created_add = $request->created_add;
        if($request->hasfile('gambar'))
        {
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/', $filename);
            $dtPost->gambar = $filename;
        }
        // dd($dtPost);
        $dtPost->save();

        $dtPost->penanda()->attach($request->penanda);
        

      
        return redirect('postingan');
		$file->move('images/', $fileName);
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
        $ktgr = Kategori::all();
        $pend = Penanda::all();
        $dtPost = Postingan::findorfail($id);

        // dd($dtPost);
        return view('admin.postingan.edit-postingan', compact('dtPost','ktgr','pend'));
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
        $dtPost = Postingan::findorfail($id);
        $dtPost->kategori_id = $request->kategori_id;
        $dtPost->judul = $request->judul;
        $dtPost->isi = $request->isi;
        $dtPost->penulis = $request->penulis;
        $dtPost->created_add = $request->created_add;
        $dtPost->gambar = $request->gambar;
        if($request->hasfile('gambar'))
        {
            $destination = 'images/'.$dtPost->gambar;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/', $filename);
            $dtPost->gambar = $filename;
        }
        // dd($dtPost);
        $dtPost->update();
        $dtPost->penanda()->sync($request->penanda);
        return redirect('postingan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtPost = Postingan::findorfail($id);
        $destination = 'images/'.$dtPost->gambar;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $dtPost->delete();
        return back();
    }
}
