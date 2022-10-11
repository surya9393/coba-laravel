<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // User::create([
        //     'name' => 'Surya',
        //     'email' => 'suryaadi9393@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Sonia',
        //     'email' => 'sonia@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Iqbal',
        //     'email' => 'iqbal@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name'=>'Programming',
            'slug'=>'programming'
        ]);

        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores consectetur nulla porro nisi consequatur recusandae nesciunt blanditiis placeat eos doloremque in tenetur nostrum, impedit eum doloribus quos cumque corporis fuga quod maxime sunt? Iure amet nihil, ex deleniti inventore quasi quisquam, alias corporis molestias voluptate soluta. Laborum asperiores eos alias quos ullam,</p><p> deleniti quis neque iure molestias hic distinctio illo commodi corrupti eveniet voluptas quo repudiandae. Fuga expedita illum voluptatem inventore ipsam architecto fugit tempore eaque corporis veritatis aut nemo, totam enim quae. Amet veniam suscipit dignissimos distinctio dolores eos ut ipsum nisi facere officiis nihil totam, tempore accusamus id officia facilis aut similique, placeat fugiat, doloribus architecto voluptatibus quibusdam eum? Officiis est similique nostrum quisquam tenetur corrupti dolorem maiores,</p><p> voluptatem voluptas odio eius repellendus quia a nobis quibusdam molestias commodi expedita cum repudiandae id quas iusto necessitatibus culpa ad! Fugiat, porro animi ipsum vero et ducimus quod fugit blanditiis.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => '2',
        //     'user_id' => '2',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores consectetur nulla porro nisi consequatur recusandae nesciunt blanditiis placeat eos doloremque in tenetur nostrum, impedit eum doloribus quos cumque corporis fuga quod maxime sunt? Iure amet nihil, ex deleniti inventore quasi quisquam, alias corporis molestias voluptate soluta. Laborum asperiores eos alias quos ullam,</p><p> deleniti quis neque iure molestias hic distinctio illo commodi corrupti eveniet voluptas quo repudiandae. Fuga expedita illum voluptatem inventore ipsam architecto fugit tempore eaque corporis veritatis aut nemo, totam enim quae. Amet veniam suscipit dignissimos distinctio dolores eos ut ipsum nisi facere officiis nihil totam, tempore accusamus id officia facilis aut similique, placeat fugiat, doloribus architecto voluptatibus quibusdam eum? Officiis est similique nostrum quisquam tenetur corrupti dolorem maiores,</p><p> voluptatem voluptas odio eius repellendus quia a nobis quibusdam molestias commodi expedita cum repudiandae id quas iusto necessitatibus culpa ad! Fugiat, porro animi ipsum vero et ducimus quod fugit blanditiis.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => '3',
        //     'user_id' => '3',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores consectetur nulla porro nisi consequatur recusandae nesciunt blanditiis placeat eos doloremque in tenetur nostrum, impedit eum doloribus quos cumque corporis fuga quod maxime sunt? Iure amet nihil, ex deleniti inventore quasi quisquam, alias corporis molestias voluptate soluta. Laborum asperiores eos alias quos ullam,</p><p> deleniti quis neque iure molestias hic distinctio illo commodi corrupti eveniet voluptas quo repudiandae. Fuga expedita illum voluptatem inventore ipsam architecto fugit tempore eaque corporis veritatis aut nemo, totam enim quae. Amet veniam suscipit dignissimos distinctio dolores eos ut ipsum nisi facere officiis nihil totam, tempore accusamus id officia facilis aut similique, placeat fugiat, doloribus architecto voluptatibus quibusdam eum? Officiis est similique nostrum quisquam tenetur corrupti dolorem maiores,</p><p> voluptatem voluptas odio eius repellendus quia a nobis quibusdam molestias commodi expedita cum repudiandae id quas iusto necessitatibus culpa ad! Fugiat, porro animi ipsum vero et ducimus quod fugit blanditiis.</p>'
        // ]);
    }
}
