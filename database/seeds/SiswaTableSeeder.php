<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
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
        	['nama'=>'sherina','kelas'=>'rpl3','tanggal_lahir'=>'2000-01-12'],
        	['nama'=>'isel','kelas'=>'rpl2','tanggal_lahir'=>'2000-01-15'],
        	['nama'=>'Risma','kelas'=>'rpl3','tanggal_lahir'=>'2000-06-10'],
        	['nama'=>'iswanto','kelas'=>'rpl3','tanggal_lahir'=>'2000-04-24'],
        	['nama'=>'indah','kelas'=>'rpl3','tanggal_lahir'=>'2000-06-25'],
        ];
        DB::table('siswa')->insert($a);
    }
}
