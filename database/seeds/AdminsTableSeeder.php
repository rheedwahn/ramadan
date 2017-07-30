<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Admin::create([
            'name' => 'Admin Admin',
            'email' => 'admin@gmail.com',
            'phone' => '08000000000',
            'password' => bcrypt('administrator'),
            'address' => 'Yaba',
        ]);
    }
}
