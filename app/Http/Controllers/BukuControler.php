<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Buku::all();
        // return redirect('home');
        return view('welcome',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createBook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->Judul.'_'.$request->Penulis.$extension;
        $request->file('image')->storeAs('/public/book/',$filename);
        //
        Buku::create([
            //nama dari model =>
            'judul' =>$request ->Judul,
            'Stock'=>$request ->Stock,
            'Penulis'=>$request ->Penulis,
            'Publish'=>$request ->Publish,
            'image'=>$filename
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Buku::findOrFail($id);
        return view('showbook',compact('book'));
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
        $book = Buku::findOrfAIL($id);
        return view('editBook',compact('book'));
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
        // $extension = $request->file('image')->getClientOriginalExtension();
        // $filename = $request->Judul.'_'.$request->Penulis.$extension;
        // $request->file('image')->storeAs('/public/book/',$filename);
        dd($id);
        Buku::findOrFail($id)->update([

            'Judul' => $request -> Title,
            'Publish' => $request -> Publish,
            'Stock' => $request -> Stock,
            'Penulis' => $request -> Title,
            // 'image'=>$filename
        ]);
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Buku::destroy($id);
        return redirect('/home');
    }
}
