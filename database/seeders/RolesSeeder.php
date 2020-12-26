<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'user', 
      	]);

	    DB::table('roles')->insert([
	        'name' => 'adminPemesanan', 
	    ]); 

	    DB::table('roles')->insert([
	        'name' => 'adminPembayaran', 
	    ]);

	    DB::table('roles')->insert([
	        'name' => 'superAdmin', 
	    ]);
    }
}
