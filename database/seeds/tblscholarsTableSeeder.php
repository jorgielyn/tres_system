<?php

use App\tblscholars;
use Illuminate\Database\Seeder;

class tblscholarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblscholars')->insert(
            array(
                array('first_name' => 'Jorgielyn','middle_name' => 'Mendez', 'last_name' => 'Iran',  'email' => 'irangabriellef14@gmail.com', 'contact_number' => '09460306015','batch' => '2020'),
            )
            );
    }
}
