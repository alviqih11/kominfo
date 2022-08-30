<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
     

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

      //   User::create([
      //       'name' => 'Fadillah',
      //       'email' => 'alviqih@gmail.com',
      //       'password' => bcrypt('12345')
      //   ]);

      //   User::create([
      //       'name' => 'Zulia Np',
      //       'email' => 'zulianp@gmail.com',
      //       'password' => bcrypt('12367')
      //   ]);

         User::factory(3)->create();
         

        Category::create([
           'name' => 'Web Programing',
           'slug' => 'web-programing' 
        ]);

        Category::create([
         'name' => 'Web Design',
         'slug' => 'web-design' 
      ]);

        Category::create([
           'name' => 'Personal',
           'slug' => 'personal' 
        ]);

        Post::factory(20)->create();

      //   Post::create([
      //      'title' => 'Judul Pertama',
      //      'slug' => 'judul-pertama',
      //      'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas exercitationem odit distinctio omnis molestias, fugit asperiores tenetur, quasi totam, eaque, dolore.',
      //      'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas exercitationem odit distinctio omnis molestias, fugit asperiores tenetur, quasi totam, eaque, dolore. Ex error, nulla veritatis dolorem doloribus quasi aspernatur earum consequuntur </p> <p> amet voluptatibus, neque soluta at placeat ab facere cum accusantium exercitationem in quas ad debitis tempora recusandae! Est expedita, assumenda quos autem aliquam. Modi cumque a, rem, voluptatibus nihil repellendus ducimus. </p> <p> Rerum facilis nihil esse facere tenetur, amet, ducimus voluptatem itaque! Dolor optio minima explicabo omnis laudantium recusandae amet distinctio, itaque aut numquam, nobis facilis earum, dolores quos fugiat illo, delectus reiciendis. Assumenda dolorem unde dicta ipsum molestias quaerat! </p>',
      //      'category_id' => 1,
      //      'user_id' => 1
      //   ]);

      //   Post::create([
      //      'title' => 'Judul Kedua',
      //      'slug' => 'judul-kedua',
      //      'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas exercitationem odit distinctio omnis molestias, fugit asperiores tenetur, quasi totam, eaque, dolore.',
      //      'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas exercitationem odit distinctio omnis molestias, fugit asperiores tenetur, quasi totam, eaque, dolore. Ex error, nulla veritatis dolorem doloribus quasi aspernatur earum consequuntur </p> <p> amet voluptatibus, neque soluta at placeat ab facere cum accusantium exercitationem in quas ad debitis tempora recusandae! Est expedita, assumenda quos autem aliquam. Modi cumque a, rem, voluptatibus nihil repellendus ducimus. </p> <p> Rerum facilis nihil esse facere tenetur, amet, ducimus voluptatem itaque! Dolor optio minima explicabo omnis laudantium recusandae amet distinctio, itaque aut numquam, nobis facilis earum, dolores quos fugiat illo, delectus reiciendis. Assumenda dolorem unde dicta ipsum molestias quaerat! </p>',
      //      'category_id' => 1,
      //      'user_id' => 1
      //   ]);
      //   Post::create([
      //      'title' => 'Judul Ketiga',
      //      'slug' => 'judul-ketiga',
      //      'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas exercitationem odit distinctio omnis molestias, fugit asperiores tenetur, quasi totam, eaque, dolore.',
      //      'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas exercitationem odit distinctio omnis molestias, fugit asperiores tenetur, quasi totam, eaque, dolore. Ex error, nulla veritatis dolorem doloribus quasi aspernatur earum consequuntur </p> <p> amet voluptatibus, neque soluta at placeat ab facere cum accusantium exercitationem in quas ad debitis tempora recusandae! Est expedita, assumenda quos autem aliquam. Modi cumque a, rem, voluptatibus nihil repellendus ducimus. </p> <p> Rerum facilis nihil esse facere tenetur, amet, ducimus voluptatem itaque! Dolor optio minima explicabo omnis laudantium recusandae amet distinctio, itaque aut numquam, nobis facilis earum, dolores quos fugiat illo, delectus reiciendis. Assumenda dolorem unde dicta ipsum molestias quaerat! </p>',
      //      'category_id' => 2,
      //      'user_id' => 1
      //   ]);

      //   Post::create([
      //      'title' => 'Judul Ke empat',
      //      'slug' => 'judul-keempat',
      //      'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas exercitationem odit distinctio omnis molestias, fugit asperiores tenetur, quasi totam, eaque, dolore.',
      //      'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas exercitationem odit distinctio omnis molestias, fugit asperiores tenetur, quasi totam, eaque, dolore. Ex error, nulla veritatis dolorem doloribus quasi aspernatur earum consequuntur </p> <p> amet voluptatibus, neque soluta at placeat ab facere cum accusantium exercitationem in quas ad debitis tempora recusandae! Est expedita, assumenda quos autem aliquam. Modi cumque a, rem, voluptatibus nihil repellendus ducimus. </p> <p> Rerum facilis nihil esse facere tenetur, amet, ducimus voluptatem itaque! Dolor optio minima explicabo omnis laudantium recusandae amet distinctio, itaque aut numquam, nobis facilis earum, dolores quos fugiat illo, delectus reiciendis. Assumenda dolorem unde dicta ipsum molestias quaerat! </p>',
      //      'category_id' => 2,
      //      'user_id' => 2
      //   ]);

    }
}
