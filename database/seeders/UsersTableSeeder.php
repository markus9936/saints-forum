<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->create([
            'name'      => 'Admin',
            'username'  => 'admin',
            'email'     => 'admin@sainsforum.com',
            'password'  => bcrypt('password'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->create([
            'name'      => 'Rahmansyah Marlis',
            'username'  => 'rahma',
            'email'     => 'rahma@sainsforum.com',
            'password'  => bcrypt('password'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->create([
            'name'      => 'Markus Waruwu',
            'username'  => 'markus',
            'email'     => 'markus@sainsforum.com',
            'password'  => bcrypt('password'),
            'type'      => User::MODERATOR,
        ]);

        User::factory()->create([
            'name'      => 'Ade Rudiansyah',
            'username'  => 'ade',
            'email'     => 'ade@sainsforum.com',
            'password'  => bcrypt('password'),
            'type'      => User::MODERATOR,
        ]);

        User::factory()->create([
            'name'      => 'Rico Andreas',
            'username'  => 'r33',
            'email'     => 'rico@sainsforum.com',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
        ]);

      


        User::factory()->count(10)->create();
    }
}
