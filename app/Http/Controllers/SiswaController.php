<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rekomen']=DB::table('buku') ->join('guru', 'buku.user_id', '=', 'guru.user_id')->select('buku.*','guru.nama')->orderBy('buku.rate', 'desc')->limit(4)->get();
        $data['buku']=DB::table('buku') ->join('guru', 'buku.user_id', '=', 'guru.user_id')->select('buku.*','guru.nama')->get();
        return view('siswa/dashboard',$data);
    }

    public function bacaBuku($id)
    {
        $data['buku']=DB::table('buku') ->join('guru', 'buku.user_id', '=', 'guru.user_id')->select('buku.*','guru.nama')->where('id','=',$id)->first();
        $data['rekomen']=DB::table('buku') ->join('guru', 'buku.user_id', '=', 'guru.user_id')->select('buku.*','guru.nama')->orderBy('buku.rate', 'desc')->limit(4)->get();
        return view('siswa/bacaBuku',$data);
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
}
