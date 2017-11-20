<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        //單元二練習2-2
        $this->call(PostsTableSeeder::class);
    }
}
