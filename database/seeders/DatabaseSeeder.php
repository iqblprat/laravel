<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
        //     'name' => 'Iqbal',
        //     'email' => 'iiqbalpratt@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Rio',
        //     'email' => 'rio@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(30)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde magni sed ipsam eaque, praesentium nostrum eos omnis modi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde magni sed ipsam eaque, praesentium nostrum eos omnis modi placeat accusantium, illo accusamus assumenda veniam sunt qui alias hic iure molestiae aliquam quos rerum ex deleniti quasi iste. Nisi ipsa molestias, tempora qui sit, quisquam officia earum voluptatibus, consequatur odit eos!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde magni sed ipsam eaque, praesentium nostrum eos omnis modi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde magni sed ipsam eaque, praesentium nostrum eos omnis modi placeat accusantium, illo accusamus assumenda veniam sunt qui alias hic iure molestiae aliquam quos rerum ex deleniti quasi iste. Nisi ipsa molestias, tempora qui sit, quisquam officia earum voluptatibus, consequatur odit eos!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde magni sed ipsam eaque, praesentium nostrum eos omnis modi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde magni sed ipsam eaque, praesentium nostrum eos omnis modi placeat accusantium, illo accusamus assumenda veniam sunt qui alias hic iure molestiae aliquam quos rerum ex deleniti quasi iste. Nisi ipsa molestias, tempora qui sit, quisquam officia earum voluptatibus, consequatur odit eos!</p>',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde magni sed ipsam eaque, praesentium nostrum eos omnis modi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde magni sed ipsam eaque, praesentium nostrum eos omnis modi placeat accusantium, illo accusamus assumenda veniam sunt qui alias hic iure molestiae aliquam quos rerum ex deleniti quasi iste. Nisi ipsa molestias, tempora qui sit, quisquam officia earum voluptatibus, consequatur odit eos!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
