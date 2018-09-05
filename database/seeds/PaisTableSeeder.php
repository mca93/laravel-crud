<?php

use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pais')->insert([
            'designacao' =>'Moçambique'
            ]);
        DB::table('pais')->insert([
            'designacao' =>'Africa de Sul'
            ]);
        DB::table('pais')->insert([
            'designacao' =>'Irlanda'
            ]);
            DB::table('pais')->insert([
                'designacao' =>'Inglaterra'
                ]);
            DB::table('pais')->insert([
                'designacao' =>'Estados Unidos'
                ]);
            DB::table('pais')->insert([
                'designacao' =>'Espanha'
                ]);
                    DB::table('pais')->insert([
            'designacao' =>'Portugal'
            ]);
        DB::table('pais')->insert([
            'designacao' =>'Quenia'
            ]);
        DB::table('pais')->insert([
            'designacao' =>'Suazilandia'
            ]);
            DB::table('pais')->insert([
                'designacao' =>'Etiopia'
                ]);
            DB::table('pais')->insert([
                'designacao' =>'China'
                ]);
            DB::table('pais')->insert([
                'designacao' =>'Japao'
                ]);
    }
}
