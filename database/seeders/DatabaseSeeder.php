<?php

namespace Database\Seeders;

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
        $users = [
            ['name'=> 'pperic', 'email'=>'pperic@gmail.com', 'password'=>'perojenajbolji'],
            ['name'=> 'mmarkovic', 'email'=>'mmarkovic@gmail.com', 'password'=>'nevolimperu'],
            ['name'=> 'jjuric', 'email'=>'jjuric@gmail.com', 'password'=>'juricakralj']
        ];

        DB::table('users')->insert($users);
    
        $sources = [
            ['rss_url'=> 'prvi url', 'link'=>'prvi link', 'title'=> 'prvi title', 'description'=> 'prvi opis', 'user_id'=>1],
            ['rss_url'=> 'drugi url', 'link'=>'drugi link', 'title'=> 'drugi title', 'description'=> 'drugi opis', 'user_id'=>2],
            ['rss_url'=> 'treci url', 'link'=>'treci link', 'title'=> 'treci title', 'description'=> 'treci opis', 'user_id'=>2]
        ];

        DB::table('sources')->insert($sources);

        $articles = [
            ['source'=> 'prvi source', 'title'=>'prvi title', 'creator'=> 'prvi autor', 'content'=> 'prvi content', 'published'=> 'prvi datum', 'summary'=> 'prvi opis'],
            ['source'=> 'drugi source', 'title'=>'drugi title', 'creator'=> 'drugi autor', 'content'=> 'drugi content', 'published'=> 'drugi datum', 'summary'=> 'drugi opis'],
            ['source'=> 'treci source', 'title'=>'treci title', 'creator'=> 'treci autor', 'content'=> 'treci content', 'published'=> 'treci datum', 'summary'=> 'treci opis']
        ];

        DB::table('articles')->insert($articles);

        $follows = [
            ['user_id'=> 1],
            ['user_id'=> 2],
            ['user_id'=> 3],
        ];

        DB::table('follows')->insert($follows);

        $recommends = [
            ['user_id'=> 1, 'article_id'=> 1],
            ['user_id'=> 2, 'article_id'=> 3],
            ['user_id'=> 3, 'article_id'=> 2],
        ];

        DB::table('recommends')->insert($recommends);
    }
}
