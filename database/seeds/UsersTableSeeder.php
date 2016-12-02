<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user ->name ="Towhed";
        $user ->email = "towhed@gmail.com";
        $user ->password = crypt("secret","");
        $user -> save();
    }
}
