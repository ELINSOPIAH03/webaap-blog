<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name'=>'Elin Sopiah',
            'username'=>'el',
            'email'=>'elinsopiah@gmail.com',
            'password'=>bcrypt('qwerty')
        ]);
        // User::create([
            //     'name'=>'Nur Arifaah',
            //     'email'=>'arifahn@gmail.com',
            //     'password'=>bcrypt('123')
            // ]);
            
        User::factory(3)->create();

        Category::create([
            'name'=>'Food',
            'slug'=>'food-food'
        ]);
        Category::create([
            'name'=>'Friends',
            'slug'=>'friends-friends'
        ]);
        Category::create([
            'name'=>'Traveling',
            'slug'=>'traveling-traveling'
        ]);

        Post::factory(15)->create();
        // Post::create([
        //     'title'=>'Judul Post Pertama',
        //     'slug'=>'judul-post-pertama',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique fuga consequuntur corrupti nemo molestiae nobis provident eaque sed eius ut. Rem dolore ratione consequatur magnam animi inventore similique asperiores eaque.',
        //     'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique fuga consequuntur corrupti nemo molestiae nobis provident eaque sed eius ut. Rem dolore ratione consequatur magnam animi inventore similique asperiores eaque. Harum mollitia odio assumenda ex vel voluptatum eos aliquam provident amet dolor at, ea excepturi qui dolorem minima impedit dolore aperiam et explicabo? Sint maxime sapiente quaerat nulla quae sit eum nobis cumque quas provident similique eaque obcaecati laboriosam architecto iste nam, placeat labore molestias? Dolores nisi inventore suscipit est adipisci amet, aliquid maiores atque id. Dolore molestiae placeat at qui voluptatum amet. Quia officiis error quaerat sint est animi?',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Judul Post Kedua',
        //     'slug'=>'judul-post-kedua',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique fuga consequuntur corrupti nemo molestiae nobis provident eaque sed eius ut. Rem dolore ratione consequatur magnam animi inventore similique asperiores eaque.',
        //     'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique fuga consequuntur corrupti nemo molestiae nobis provident eaque sed eius ut. Rem dolore ratione consequatur magnam animi inventore similique asperiores eaque. Harum mollitia odio assumenda ex vel voluptatum eos aliquam provident amet dolor at, ea excepturi qui dolorem minima impedit dolore aperiam et explicabo? Sint maxime sapiente quaerat nulla quae sit eum nobis cumque quas provident similique eaque obcaecati laboriosam architecto iste nam, placeat labore molestias? Dolores nisi inventore suscipit est adipisci amet, aliquid maiores atque id. Dolore molestiae placeat at qui voluptatum amet. Quia officiis error quaerat sint est animi?',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Judul Post Ketiga',
        //     'slug'=>'judul-post-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique fuga consequuntur corrupti nemo molestiae nobis provident eaque sed eius ut. Rem dolore ratione consequatur magnam animi inventore similique asperiores eaque.',
        //     'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique fuga consequuntur corrupti nemo molestiae nobis provident eaque sed eius ut. Rem dolore ratione consequatur magnam animi inventore similique asperiores eaque. Harum mollitia odio assumenda ex vel voluptatum eos aliquam provident amet dolor at, ea excepturi qui dolorem minima impedit dolore aperiam et explicabo? Sint maxime sapiente quaerat nulla quae sit eum nobis cumque quas provident similique eaque obcaecati laboriosam architecto iste nam, placeat labore molestias? Dolores nisi inventore suscipit est adipisci amet, aliquid maiores atque id. Dolore molestiae placeat at qui voluptatum amet. Quia officiis error quaerat sint est animi?',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);
        // Post::create([
        //     'title'=>'Judul Post Keempat',
        //     'slug'=>'judul-post-keempat',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique fuga consequuntur corrupti nemo molestiae nobis provident eaque sed eius ut. Rem dolore ratione consequatur magnam animi inventore similique asperiores eaque.',
        //     'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique fuga consequuntur corrupti nemo molestiae nobis provident eaque sed eius ut. Rem dolore ratione consequatur magnam animi inventore similique asperiores eaque. Harum mollitia odio assumenda ex vel voluptatum eos aliquam provident amet dolor at, ea excepturi qui dolorem minima impedit dolore aperiam et explicabo? Sint maxime sapiente quaerat nulla quae sit eum nobis cumque quas provident similique eaque obcaecati laboriosam architecto iste nam, placeat labore molestias? Dolores nisi inventore suscipit est adipisci amet, aliquid maiores atque id. Dolore molestiae placeat at qui voluptatum amet. Quia officiis error quaerat sint est animi?',
        //     'category_id'=>1,
        //     'user_id'=>2
        // ]);
    }
}
