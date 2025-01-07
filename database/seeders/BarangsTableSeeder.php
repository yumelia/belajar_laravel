<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'Laptop', 'merk'=>'Asus', 'harga'=>7000000],
            ['nama_barang'=>'HP', 'merk'=>'Iphone', 'harga'=>13000000],
            ['nama_barang'=>'Tv', 'merk'=>'Samsung' ,'harga'=>5000000],
            ['nama_barang'=>'Lampu', 'merk'=>'Philips', 'harga'=>50000],
            ['nama_barang'=>'Ipad', 'merk'=>'Apple', 'harga'=>15000000]
        ];
        DB::table('barangs')->insert($barangs);
    }
}
