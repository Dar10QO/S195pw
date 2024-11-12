<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Dario',
                'apellido'=>'Quintero',
                'email'=>'dario@gmail.com',
                'phone'=>'3521380447',
            ],
            [
                'nombre'=>'Luis',
                'apellido'=>'Oceguera',
                'email'=>'luis@gmail.com',
                'phone'=>'7440831253',
            ],
            [
                'nombre'=>'Diego',
                'apellido'=>'Quintero',
                'email'=>'diego@gmail.com',
                'phone'=>'1113214563',
            ]]);
    }
}
