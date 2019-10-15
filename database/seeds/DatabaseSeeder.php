<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $users = explode(',',env('TEST_USERS'));
        foreach ($users as $user){
            factory(\App\User::class)->create([
               'name' => $user,
               'email' => $user
            ]);
        }
    }
}
