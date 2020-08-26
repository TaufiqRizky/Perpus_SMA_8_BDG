<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin/')->name('admin.')->group(function(){
Route::get('dashboard','AdminController@index')->name('index');
Route::get('guru','AdminController@Rguru')->name('Rguru');
Route::post('guru/tambah','AdminController@Cguru')->name('Cguru');
Route::delete('guru/hapus/{id}','AdminController@Dguru')->name('Dguru');

Route::get('siswa','AdminController@Rsiswa')->name('Rsiswa');

Route::post('siswa/tambah','AdminController@Csiswa')->name('Csiswa');
Route::delete('siswa/hapus/{id}','AdminController@Dsiswa')->name('Dsiswa');

});

Route::prefix('guru/')->name('guru.')->group(function(){
Route::get('dashboard','GuruController@index')->name('index');
Route::get('buku','GuruController@Rbuku')->name('Rbuku');
Route::post('buku/tambah','GuruController@Cbuku')->name('Cbuku');
Route::delete('buku/hapus/{id}','GuruController@Dbuku')->name('Dbuku');
Route::post('buku/uploadC','GuruController@coverUpload')->name('uploadC');
Route::post('buku/uploadP','GuruController@pdfUpload')->name('uploadP');

});

Route::prefix('siswa/')->name('siswa.')->group(function(){
Route::get('dashboard','SiswaController@index')->name('index');
Route::get('jurnal','SiswaController@jurnal')->name('jurnal');

Route::get('baca/{id}','SiswaController@bacaBuku')->name('Bbuku');
Route::get('novel/aktivitas/{aktivitas}','SiswaController@ulasNovel')->name('UNovel');
Route::get('novel/getNovel/{id}/{aktivitas}','SiswaController@getNovel')->name('getNovel');
Route::post('novel/ulasan/tambah','SiswaController@tambahUlasan');

Route::get('genre/{jenis}/{genre}','SiswaController@getBukuDetail');

Route::post('comment/tambah','SiswaController@addComment')->name('Ccomment');
Route::post('rating/tambah','SiswaController@addRating')->name('Crating');
Route::post('getBuku/genre','SiswaController@getBuku')->name('getBukuG');
Route::post('getBuku/genre2','SiswaController@getBuku2')->name('getBukuG2');
Route::post('getBuku/semua','SiswaController@getBukuS')->name('getBukuS');
Route::post('comment/{id}','SiswaController@getComment')->name('Gcomment');

});