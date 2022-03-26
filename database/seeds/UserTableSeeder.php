<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'admin',
            'last_name'=>'lorem',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'Status' => 'مفعل',
        ]);
    }
}
