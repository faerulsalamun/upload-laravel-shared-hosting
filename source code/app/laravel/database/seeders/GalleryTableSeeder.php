<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            'user_id' => 1,
            'name' => "Gambar CSS",
            'description' => 'Ini merupakan Gambar CSS',
            'image' => '/images/css.jpeg',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'name'=> 'Gambar Boostrap',
            'description' => 'Ini merupakan Gambar Boostrap',
            'image' => '/images/boostrap.jpeg',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'name' => 'Gambar Javascript',
            'description' => 'Ini merupakan Gambar Javascript',
            'image' => '/images/javascript.png',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
