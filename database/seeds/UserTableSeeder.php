<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->where('email','rony7665@yahoo.com')->first();
		if(!$user){
			User::create([
			'name' => 'rania',
			'email' => 'rony7665@yahoo.com',
			'password' => Hash::make('12345678'),
				'role' => 'admin'
		]);
		}
    }
}
