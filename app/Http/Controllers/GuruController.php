<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guru/dashboard');
    }

    public function Rbuku()
    {
        $user=Auth::user()->id;
         $data['buku']=DB::table('buku')->select('*')->where('user_id','=',$user)->get();
         
        // $data['jml']=DB::table('guru')->select('*')->count();
        return view('guru/buku',$data);
    }

    public function Cbuku(Request $req)
    {
      $user=Auth::user()->id;

      $buku= new \App\buku;
      $buku->judul = $req->judul;
      $buku->sinopsis=$req->sinopsis;
      $buku->jenis=$req->jenis;
      $buku->genre=$req->genre;
      $buku->cover=$req->cover;
      $buku->pdf=$req->pdf;
      $buku->user_id=$user;
      $buku->rekomen='x';
      $buku->save();
    }
    public function Dbuku($id){
        $buku = DB::table('buku')->where('id', '=', $id)->delete(); 
        if ($buku) {
            
            return true;
        }else{
            return false;
        }
   }
    public function coverUpload(Request $request)
    {
        
        $validation = Validator::make($request->all(), [
      'file_cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
     ]);
     if($validation->passes())
     {
      $image = $request->file('file_cover');
      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('upload/cover'), $new_name);
      return response()->json([
       'message'   => 'berhasil',
       'name'   => $new_name,
       'path' => '/upload/cover/'.$new_name ,
       'class_name'  => 'alert-success'
      ]);
     }
     else
     {
      return response()->json([
       'message'   => $validation->errors()->all(),
       'uploaded_image' => '',
       'class_name'  => 'alert-danger'
      ]);
     }
    }

    public function pdfUpload(Request $request)
    {
        
        $validation = Validator::make($request->all(), [
      'file_pdf' => 'required|mimes:pdf|max:10240'
     ]);
     if($validation->passes())
     {
      $image = $request->file('file_pdf');
      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('upload/pdf'), $new_name);
      return response()->json([
       'message'   => 'berhasil',
       'name'   => $new_name,
       'path' => '/upload/cover/'.$new_name ,
       'class_name'  => 'alert-success'
      ]);
     }
     else
     {
      return response()->json([
       'message'   => $validation->errors()->all(),
       'uploaded_image' => '',
       'class_name'  => 'alert-danger'
      ]);
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
