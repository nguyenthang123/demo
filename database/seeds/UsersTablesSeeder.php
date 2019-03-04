<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;


class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'member',
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('12345'),
                'level' => 1,
                'created_at' => new Datetime(),
            ],
            [
                'name' => 'member',
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('12345'),
                'level' => 1,
                'created_at' => new Datetime(),
            ],
            [
                'name' => 'user',
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('12345'),
                'level' => 2,
                'created_at' => new Datetime(),
            ],
        );
    }
}
