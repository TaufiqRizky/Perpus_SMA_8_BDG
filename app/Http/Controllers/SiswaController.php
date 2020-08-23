<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $data['buku']=DB::table('buku') ->join('guru', 'buku.user_id', '=', 'guru.user_id')->select('buku.*','guru.nama')->orderBy('buku.created_at', 'desc')->get();
        $data['comments']=DB::table('comments') ->join('siswa', 'comments.user_id', '=', 'siswa.user_id')->join('buku', 'comments.id_buku', '=', 'buku.id')->select('comments.*','siswa.nama','buku.judul')->orderBy('created_at', 'desc')->limit(4)->get();

        return view('siswa/dashboard',$data);
    }

    public function bacaBuku($id)
    {
        $data['buku']=DB::table('buku') ->join('guru', 'buku.user_id', '=', 'guru.user_id')->select('buku.*','guru.nama')->where('id','=',$id)->first();
        $data['rekomen']=DB::table('buku') ->join('guru', 'buku.user_id', '=', 'guru.user_id')->select('buku.*','guru.nama')->orderBy('buku.rate', 'desc')->limit(4)->get();
        return view('siswa/bacaBuku',$data);
    }

   
    public function getComment($id,Request $req)
    {
      $data=DB::table('comments') ->join('siswa', 'comments.user_id', '=', 'siswa.user_id')->select('comments.*','siswa.nama')->orderBy('created_at', 'desc')->get();
      return $data;

    }

    public function getBuku(Request $req)
    {
        if ($req->sort == 'terbaru') {
           $data=DB::table('buku') ->join('guru', 'buku.user_id', '=', 'guru.user_id')->select('buku.*','guru.nama')->where('buku.genre','=',$req->genre)->orderBy('buku.created_at', 'desc')->get();
        }else if ($req->sort == 'asc') {
           $data=DB::table('buku') ->join('guru', 'buku.user_id', '=', 'guru.user_id')->select('buku.*','guru.nama')->where('buku.genre','=',$req->genre)->orderBy('buku.judul', 'asc')->get();
        }else{
            $data=DB::table('buku') ->join('guru', 'buku.user_id', '=', 'guru.user_id')->select('buku.*','guru.nama')->where('buku.genre','=',$req->genre)->orderBy('buku.judul', 'desc')->get();
        }
      
      return $data;

    }

    public function getBukuS(Request $req)
    {
        if ($req->sort == 'terbaru') {
           $data=DB::table('buku') ->join('guru', 'buku.user_id', '=', 'guru.user_id')->select('buku.*','guru.nama')->orderBy('buku.created_at', 'desc')->get();
        }else if ($req->sort == 'asc') {
           $data=DB::table('buku') ->join('guru', 'buku.user_id', '=', 'guru.user_id')->select('buku.*','guru.nama')->orderBy('buku.judul', 'asc')->get();
        }else{
            $data=DB::table('buku') ->join('guru', 'buku.user_id', '=', 'guru.user_id')->select('buku.*','guru.nama')->orderBy('buku.judul', 'desc')->get();
        }
      
      return $data;

    }

    public function addComment(Request $req)
    {
      $com= new \App\comment;
      $com->rate = $req->rate;
      $com->comment = $req->komen;
      $com->user_id = Auth::user()->id;
      $com->id_buku = $req->id;
      $com->save();

      $rate=DB::table('comments')
                ->where('id_buku', $req->id)
                ->avg('rate');

      $buku = DB::table('buku')
              ->where('id', $req->id)
              ->update(['rate' => round($rate)]);

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
