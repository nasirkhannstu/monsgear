<?php

use Illuminate\Database\Seeder;
use App\CustomerUser;

class CustomerUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new CustomerUser();
        $user->name = "Rone";
        $user->email = "t@sectorbravo1.com";
        $user->password = crypt("123456", "");
        $user->save();
    }
}
