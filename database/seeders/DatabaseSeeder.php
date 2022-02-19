<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //----------with models-----------//
        // \App\Models\User::factory(10)->create();
          \App\Models\Usersm::factory(3)->create();

          \App\Models\Autor::factory(2)->create();
         //$autors = \App\Models\Autor::factory(2)->create();
          
          \App\Models\Post::factory(40)->create();
         //$posts = \App\Models\Post::factory(40)->create();

        //$posts = \App\Models\Post::factory(40)->make();
        //dd($posts);

        //  foreach ($posts as $post) {
        //      $autorsIds = $autors->random(2)->pluck('id');
        //      $post->autors()->attach($autorsIds);
        //  }
        
        //пока не разобрался, как наполнять разными id

        

    }
}
