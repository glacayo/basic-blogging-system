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
        //Dont use User Factory, because that file create random users
        App\User::create([
            'name' => 'Geovanny Lacayo',
            'email' => 'g@admin.com',
            'password' => bcrypt('123456')
        ]);

        factory(App\Post::class, 24)->create();
    }
}
