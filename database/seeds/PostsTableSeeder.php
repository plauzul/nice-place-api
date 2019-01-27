<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('posts')->insert([
            'id_user' => '2',
            'img' => 'https://www.wallpaperscristaos.com.br/wp-content/uploads/2015/01/wallpaper-cristao-hd-Senhor-Deus-e-sol_1366x768-1.jpg',
            'img_user' => 'http://localhost/nice-place-api/public/storage/users/feminino.jpg',
            'first_name_user' => 'Paloma Helen',
            'last_name_user' => 'Ramos Ferreira',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero dignissimos odit commodi aspernatur neque nesciunt ullam numquam sed quasi. Culpa perferendis tempora quia dolor, cupiditate amet deleniti qui aut? Officiis.',
            'stars' => '{"one": 30,"two": 20,"three": 40,"four": 100,"five": 200}',
            'created_at' => '2016-12-20 15:00:00',
            'updated_at' =>'2016-12-20 15:00:00'
        ]);

        DB::table('posts')->insert([
            'id_user' => '1',
            'img' => 'https://www.wallpaperscristaos.com.br/wp-content/uploads/2015/01/wallpaper-cristao-hd-Senhor-Deus-e-sol_1366x768-1.jpg',
            'img_user' => 'http://localhost/nice-place-api/public/storage/users/masculino.jpg',
            'first_name_user' => 'Paulo Henrique',
            'last_name_user' => 'Ramos Ferreira',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero dignissimos odit commodi aspernatur neque nesciunt ullam numquam sed quasi. Culpa perferendis tempora quia dolor, cupiditate amet deleniti qui aut? Officiis.',
            'stars' => '{"one": 33,"two": 29,"three": 40,"four": 124,"five": 252}',
            'created_at' => '2016-12-20 15:00:00',
            'updated_at' =>'2016-12-20 15:00:00'
        ]);
    }
}
