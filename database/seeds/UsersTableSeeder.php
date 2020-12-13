<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->create();

        factory(User::class)->create([
            'name' => 'user',
            'email' => 'user@email.com',
            'password' => bcrypt('123')
        ]);
    }
}
