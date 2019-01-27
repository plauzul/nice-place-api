<?php

use Illuminate\Database\Seeder;

class FriendsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('friends')->insert([
            'id_user' => '1',
            'id_friend' => '2',
            'situation' => 'A',
        ]);

        DB::table('friends')->insert([
            'id_user' => '2',
            'id_friend' => '1',
            'situation' => 'A',
        ]);

        DB::table('friends')->insert([
            'id_user' => '3',
            'id_friend' => '1',
            'situation' => 'A',
        ]);

        DB::table('friends')->insert([
            'id_user' => '1',
            'id_friend' => '3',
            'situation' => 'A',
        ]);

        DB::table('friends')->insert([
            'id_user' => '4',
            'id_friend' => '3',
            'situation' => 'P',
        ]);

        DB::table('friends')->insert([
            'id_user' => '3',
            'id_friend' => '4',
            'situation' => 'P',
        ]);
    }
}
