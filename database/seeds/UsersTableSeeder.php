<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users1 =  ['name' => 'ayoub','email' => 'ayoub@gmail.com' , 'password' => bcrypt(123),'created_at' => now()];


        User::insert($users1);




    }
}
