<?php

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
        factory(App\User::class, 7)->create();

        App\User::create([
            'name' => 'Ricardo Valdez',
            'email' => 'rickondrius@gmail.com',
            'password' => bcrypt('1234')
        ]);
    }
}
