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
        factory(App\User::class, 20)->create()->each(function ($user) {
            $user->post()->save(factory(App\Post::class)->make());
        });
        // $this->call(UsersTableSeeder::class);
    }
}
