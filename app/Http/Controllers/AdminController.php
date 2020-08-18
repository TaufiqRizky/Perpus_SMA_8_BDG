<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/dashboard');
    }

    public function Rguru()
    {
        $data['guru']=DB::table('guru')->select('*')->get();
        $data['jml']=DB::table('guru')->select('*')->count();
        return view('admin/guru',$data);
    }

    public function Cguru(Request $req)
    {
      $user= new \App\User;
      $user->email = $req->email;
      $user->password = Hash::make($req->nip);
      $user->Role = 'guru';
      $user->save();

      $guru= new \App\guru;
      $guru->nip = $req->nip;
      $guru->nama=$req->nama;
      $guru->alamat=$req->alamat;
      $guru->jk=$req->jk;
      $guru->user_id=$user->id;
      $guru->tgl_lahir=$req->tgl;
      $guru->save();

      return $user;
    }

    public function Dguru($id){
        $user = DB::table('guru')->where('user_id', '=', $id)->delete(); 
        if ($user) {
            \App\User::destroy($id);
            return true;
        }else{
            return false;
        }
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
