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
    return view('welcome');
});
Route::get('/about', function(){
    return 'Selamat Datang Di Halaman ABOUT';
});
Route::get('/home', function(){
    return 'Selamat Datang Di Halaman HOME';
});
Route::get('/tes/{nama}/{tempat2}/{jenis2}/{agama2}/{alamat2}', function($nama,$tempat,$jenis,$agama,$alamat){
    return 'Nama : '.$nama.'<br>'.
           "Tempat Lahir : ".$tempat."<br>".
           "Jenis Kelamin: ".$jenis."<br>".
           "Agama : ".$agama."<br>".
           "Alamat : ".$alamat;
});
Route::get('/hitung/{bilangan}/{blgn}', function($bilangan1,$bilangan2){
    return "Bilangan 1 : ".$bilangan1."<br>".
           "Bilangan 2 :".$bilangan2."<br>".
           "Hasilnya : ".$bilangan1 + $bilangan2;
});
Route::get('/latihan/{nama}/{telpon}/{jenis}/{barang}/{jumlah}/{pembayaran}', function($nama,$telpon,$jenis,$barang,$jumlah,$pembayaran){
    if($jenis == "Handphone"){

        if($barang == "Poco"){
            $harga = 3000000;
    
        }elseif($barang == "Samsung"){
            $harga = 5000000;
    
        }elseif($barang == "Iphone"){
            $harga = 15000000;
        
    
    }elseif($jenis == "Laptop"){
        
        if($barang == "Lenovo"){
            $harga = 4000000;

        }elseif($barang == "Acer"){
            $harga = 8000000;
    
        }elseif($barang == "Macbook"){
            $harga = 10000000;

        }elseif($barang == "Iphone"){
            $harga = 15000000;

        }
    }elseif($jenis == "TV"){

        if($barang == "Toshiba"){
            $harga = 5000000;
    
        }elseif($barang == "Samsung"){
            $harga = 8000000;
        }elseif($barang == "LG"){
            $harga = 1000000;
        }

     } else {
        echo "Barang tidak ada";
     }
     }
    return "Nama Pembeli : ".$nama."<br>".
           "Telpon : ".$telpon."<br>".
            "Jenis Barang : ".$jenis."<br>".
            "Nama Barang : ".$barang."<br>".
            "Harga : ".$harga."<br>" ;
});

Route::get('/murid', function(){
    $data_siswa = ['keyndra','karisa','naisa','nabila','napis'];

    return view('tampil',compact('data_siswa'));
});