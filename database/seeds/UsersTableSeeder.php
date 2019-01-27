<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'first_name' => 'Paulo',
            'last_name' => 'Henrique',
            'email' => 'admin@admin.admin',
            'password' => bcrypt('admin'),
            'sex' => 'masculino',
            'img' => 'http://localhost/nice-place-api/public/storage/users/masculino.jpg',
            'created_at' => '2016-12-20 15:00:00',
            'updated_at' =>'2016-12-20 15:00:00'
        ]);

        DB::table('users')->insert([
            'first_name' => 'Laura',
            'last_name' => 'Bezerra',
            'email' => 'laura@gmail.com',
            'password' => bcrypt('secret'),
            'sex' => 'feminino',
            'img' => 'http://localhost/nice-place-api/public/storage/users/feminino.jpg',
            'created_at' => '2016-12-20 15:00:00',
            'updated_at' =>'2016-12-20 15:00:00'
        ]);

        DB::table('users')->insert([
            'first_name' => 'Jose',
            'last_name' => 'Filho',
            'email' => 'jose@gmail.com',
            'password' => bcrypt('secret'),
            'sex' => 'masculino',
            'img' => 'http://localhost/nice-place-api/public/storage/users/masculino.jpg',
            'created_at' => '2016-12-20 15:00:00',
            'updated_at' =>'2016-12-20 15:00:00'
        ]);

        DB::table('users')->insert([
            'first_name' => 'Ana',
            'last_name' => 'Bia',
            'email' => 'ana@gmail.com',
            'password' => bcrypt('secret'),
            'sex' => 'feminino',
            'img' => 'http://localhost/nice-place-api/public/storage/users/feminino.jpg',
            'created_at' => '2016-12-20 15:00:00',
            'updated_at' =>'2016-12-20 15:00:00'
        ]);
    }
}
