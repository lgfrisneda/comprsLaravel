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
        factory(User::class)->create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('123')
        ]);

        factory(User::class)->create([
            'name' => 'cliente',
            'email' => 'cliente@email.com',
            'password' => bcrypt('321')
        ]);

        factory(User::class)->create([
            'name' => 'cliente2',
            'email' => 'cliente2@email.com',
            'password' => bcrypt('000')
        ]);
    }
}
