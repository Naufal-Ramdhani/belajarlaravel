<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [ 
        "title" => "About",
        "name" => "Naufal Ramdhani",
        "email" => "ramdhaninaufal27@gmail.com",
        "image" => "/nfl.jpg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Naufal Ramdhani",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia totam animi ducimus libero unde laboriosam expedita, at id? Facere sed, ipsa cum consequuntur doloremque totam error odio illum iste sunt earum nemo facilis quas a minus corporis cumque, delectus repudiandae, deserunt hic molestiae culpa eius vel fugit. Voluptate aliquam, voluptas distinctio ex beatae saepe voluptatem, voluptatum consequuntur dolores quae nihil similique quod aspernatur expedita laudantium ullam praesentium repellat, culpa temporibus suscipit neque. Doloremque repellat cum officiis deleniti nesciunt, nihil dolore!"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "doni reky",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, non! Suscipit quae eligendi fugiat. Blanditiis quod quo quam earum nulla eligendi laboriosam perspiciatis nemo enim accusantium optio officiis accusamus eius perferendis maiores cumque aliquid vel, tempora commodi voluptate. Porro asperiores temporibus voluptate dignissimos vitae similique maiores non quos nam velit, inventore nesciunt iste veritatis rem consectetur? Illo esse distinctio necessitatibus velit est, dolores animi quod eum aliquid voluptatibus id porro maiores facere repudiandae cumque non magnam consequatur commodi. Consequatur nulla assumenda eius, perferendis, facere id cupiditate repellat harum cum aspernatur expedita earum amet neque vel vitae? Eaque numquam reprehenderit commodi."
        ]
        ];
        
    return view ('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Naufal Ramdhani",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia totam animi ducimus libero unde laboriosam expedita, at id? Facere sed, ipsa cum consequuntur doloremque totam error odio illum iste sunt earum nemo facilis quas a minus corporis cumque, delectus repudiandae, deserunt hic molestiae culpa eius vel fugit. Voluptate aliquam, voluptas distinctio ex beatae saepe voluptatem, voluptatum consequuntur dolores quae nihil similique quod aspernatur expedita laudantium ullam praesentium repellat, culpa temporibus suscipit neque. Doloremque repellat cum officiis deleniti nesciunt, nihil dolore!"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "doni reky",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, non! Suscipit quae eligendi fugiat. Blanditiis quod quo quam earum nulla eligendi laboriosam perspiciatis nemo enim accusantium optio officiis accusamus eius perferendis maiores cumque aliquid vel, tempora commodi voluptate. Porro asperiores temporibus voluptate dignissimos vitae similique maiores non quos nam velit, inventore nesciunt iste veritatis rem consectetur? Illo esse distinctio necessitatibus velit est, dolores animi quod eum aliquid voluptatibus id porro maiores facere repudiandae cumque non magnam consequatur commodi. Consequatur nulla assumenda eius, perferendis, facere id cupiditate repellat harum cum aspernatur expedita earum amet neque vel vitae? Eaque numquam reprehenderit commodi."
        ]
        ];

        $new_post = [];
        foreach($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }

    return view('post',[
        "title" => "Single Post",
        "Post" => $new_post

    ]);

});