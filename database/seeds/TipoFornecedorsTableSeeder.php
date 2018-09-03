<?php

use Illuminate\Database\Seeder;

class TipoFornecedorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_fornecedors')->insert([]);
    }
}
