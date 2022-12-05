<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\siswaController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\jurusanController;
use App\Http\Controllers\agendaController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\ekskulController;
use App\Http\Controllers\downloadController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\pegawaiController;






use App\Http\Controllers\dashboardController;
use App\Http\Controllers\admin\usersController;
use App\Http\Controllers\admin\ekskulsController;
use App\Http\Controllers\admin\minAgendaController;
use App\Http\Controllers\admin\minGuruController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/' ,[homeController::class, 'index'])->name('index');
Route::get('about' ,[aboutController::class, 'index'])->name('index');
Route::get('jurusan' ,[jurusanController::class, 'index'])->name('index');
Route::get('agenda' ,[agendaController::class, 'index'])->name('index');
Route::get('blog' ,[blogController::class, 'index'])->name('index');
Route::get('ekskul' ,[ekskulController::class, 'index'])->name('index');
Route::get('download' ,[downloadController::class, 'index'])->name('index');
Route::get('guru' ,[guruController::class, 'index'])->name('index');
Route::get('pegawai' ,[pegawaiController::class, 'index'])->name('index');








Route::get('admin' ,[siswaController::class, 'index'])->name('administrator');
Route::get('tambahsiswa' ,[siswaController::class, 'tambahsiswa'])->name('tambahsiswa');
Route::post('insertdatasiswa' ,[siswaController::class, 'insertdatasiswa'])->name('insertdatasiswa');

Route::get('editsiswa/{id}' ,[siswaController::class, 'editsiswa'])->name('editsiswa');
Route::post('updatesiswa/{id}' ,[siswaController::class, 'updatesiswa'])->name('updatesiswa');

Route::get('deletesiswa/{id}' ,[siswaController::class, 'deletesiswa'])->name('deletesiswa');





Route::get('administrator' ,[dashboardController::class, 'index'])->name('administrator');



Route::get('admin-users' ,[usersController::class, 'index'])->name('admin-users');
Route::get('admin-tambahusers' ,[usersController::class, 'tambahusers'])->name('tambahusers');
Route::post('admin-insertusers' ,[usersController::class, 'insertusers'])->name('insertusers');

Route::get('admin-editusers/{id}' ,[usersController::class, 'editusers'])->name('editusers');
Route::post('admin-updateusers/{id}' ,[usersController::class, 'updateusers'])->name('updateusers');

Route::get('admin-deleteusers/{id}' ,[usersController::class, 'deleteusers'])->name('deleteusers');





Route::get('admin-ekstrakulikuler' ,[ekskulsController::class, 'index'])->name('admin-ekstrakulikuler');
Route::get('admin-tambahekskuls' ,[ekskulsController::class, 'tambahekskuls'])->name('tambahekskuls');
Route::post('admin-insertekskul' ,[ekskulsController::class, 'insertdataekskuls'])->name('insertdataekskuls');

Route::get('admin-editekskuls/{id}' ,[ekskulsController::class, 'editekskuls'])->name('editekskuls');
Route::post('admin-updateekskuls/{id}' ,[ekskulsController::class, 'updateekskuls'])->name('updateekskuls');

Route::get('admin-deleteekskuls/{id}' ,[ekskulsController::class, 'deleteekskuls'])->name('deleteekskuls');








Route::get('admin-agenda' ,[minAgendaController::class, 'index'])->name('admin-agenda');
Route::get('admin-tambahagenda' ,[minAgendaController::class, 'tambahagenda'])->name('tambahagenda');
Route::post('admin-insertagenda' ,[minAgendaController::class, 'insertdataagenda'])->name('insertdataagenda');

Route::get('admin-editagenda/{id}' ,[minAgendaController::class, 'editagenda'])->name('editagenda');
Route::post('admin-updateagenda/{id}' ,[minAgendaController::class, 'updateagenda'])->name('updateagenda');

Route::get('admin-deleteagenda/{id}' ,[minAgendaController::class, 'deleteagenda'])->name('deleteagenda');






Route::get('admin-guru' ,[minGuruController::class, 'index'])->name('admin-guru');
Route::get('admin-tambahguru' ,[minGuruController::class, 'tambahguru'])->name('tambahguru');
Route::post('admin-insertguru' ,[minGuruController::class, 'insertdataguru'])->name('insertdataguru');

Route::get('admin-editguru/{id}' ,[minGuruController::class, 'editguru'])->name('editguru');
Route::post('admin-updateguru/{id}' ,[minGuruController::class, 'updateguru'])->name('updateguru');

Route::get('admin-deleteguru/{id}' ,[minGuruController::class, 'deleteguru'])->name('deleteguru');





Route::get('admin-jurusan' ,[minjurusanController::class, 'index'])->name('admin-jurusan');
Route::get('admin-tambahjurusan' ,[minjurusanController::class, 'tambahjurusan'])->name('tambahjurusan');
Route::post('admin-insertjurusan' ,[minjurusanController::class, 'insertdatajurusan'])->name('insertdatajurusan');

Route::get('admin-editjurusan/{id}' ,[minjurusanController::class, 'editjurusan'])->name('editjurusan');
Route::post('admin-updatejurusan/{id}' ,[minjurusanController::class, 'updatejurusan'])->name('updatejurusan');

Route::get('admin-deletejurusan/{id}' ,[minjurusanController::class, 'deletejurusan'])->name('deletejurusan');