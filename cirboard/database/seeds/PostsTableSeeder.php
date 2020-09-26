<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Post::create([
                'user_id'    => $i,
                'title'       => 'Webアプリ制作サークルに入りませんか',
                'content'     =>  'Webアプリ開発に興味がある人を探しています。プログラミングやサーバー、データベースの学習に興味がある人はぜひ。',
                'cost'      =>'学習教材代は自腹で払ってもらうことになります。その他にかかる費用は特にありません。',
                'time'      =>'各自自由。',
                'place'     =>'東２号館１階。または目白テラス。',
                'created_at' => now(),
                'updated_at' => now()
            ]);
          }

    }
}
