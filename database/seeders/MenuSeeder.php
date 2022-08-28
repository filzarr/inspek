<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'judul' => "profile",
           
        ]);
        DB::table('menus')->insert([
            'judul' => "irban",
           
        ]);
        DB::table('menus')->insert([
            'judul' => "regulasi",
           
        ]);
        DB::table('menus')->insert([
            'judul' => "pedoman dan standar",
           
        ]);
        DB::table('menus')->insert([
            'judul' => "Capaian kinerja",
           
        ]);
    }
}
