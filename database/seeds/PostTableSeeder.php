<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = [
        ['title'=>'Tips Cepat Nikah', 'content'=>'lorem ipsum'],
        ['title'=>'Haruskah menunda Nikah ?', 'content'=>'lorem ipsum'],
        ['title'=>'Mmebangun Visi Misi Keluarga', 'content'=>'lorem ipsum'],
        ];
    DB::table('post')->insert($a);
}
}
