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

        User::create([
            'name' => 'Muhamad Ridwan',
            'username' => 'MRidwan',
            'email' => 'Ridwan18@gmail.com',
            'password' => bcrypt( 'password')
        ]);
        User::factory(6)->create();
        Post::factory(80)->create();

        Category::create([
            'name' => 'Olahraga',
            'slug' => 'olahraga'
        ]);
        
        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, ea rem. Molestiae pariatur unde consequatur numquam nihil ex sapiente voluptatum.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis dolor dolorum minima eveniet quia vel necessitatibus hic sequi, beatae in natus facere quae! Odit voluptates esse tempore eligendi sed, repellat eveniet eius quae assumenda ipsum, et iste soluta! Corrupti voluptatibus</p><p> rerum quasi. Quas debitis omnis, dolorem voluptate voluptates vero, facere voluptatum praesentium consequuntur laudantium illo. Modi aspernatur tenetur alias reprehenderit aliquam quibusdam quo, vitae cumque fuga repellendus magni, nisi quae itaque recusandae earum praesentium velit laudantium architecto libero quos qui est atque unde? Nam quasi sed omnis exercitationem ad</p><p>quisquam, natus necessitatibus dolor, eos blanditiis numquam assumenda aperiam at eaque totam velit perspiciatis nostrum quidem quaerat. Labore voluptas id vel hic non ad ullam, culpa soluta consectetur, dignissimos iure neque?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        //         Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, ea rem. Molestiae pariatur unde consequatur numquam nihil ex sapiente voluptatum.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis dolor dolorum minima eveniet quia vel necessitatibus hic sequi, beatae in natus facere quae! Odit voluptates esse tempore eligendi sed, repellat eveniet eius quae assumenda ipsum, et iste soluta! Corrupti voluptatibus</p><p> rerum quasi. Quas debitis omnis, dolorem voluptate voluptates vero, facere voluptatum praesentium consequuntur laudantium illo. Modi aspernatur tenetur alias reprehenderit aliquam quibusdam quo, vitae cumque fuga repellendus magni, nisi quae itaque recusandae earum praesentium velit laudantium architecto libero quos qui est atque unde? Nam quasi sed omnis exercitationem ad</p><p>quisquam, natus necessitatibus dolor, eos blanditiis numquam assumenda aperiam at eaque totam velit perspiciatis nostrum quidem quaerat. Labore voluptas id vel hic non ad ullam, culpa soluta consectetur, dignissimos iure neque?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, ea rem. Molestiae pariatur unde consequatur numquam nihil ex sapiente voluptatum.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis dolor dolorum minima eveniet quia vel necessitatibus hic sequi, beatae in natus facere quae! Odit voluptates esse tempore eligendi sed, repellat eveniet eius quae assumenda ipsum, et iste soluta! Corrupti voluptatibus</p><p> rerum quasi. Quas debitis omnis, dolorem voluptate voluptates vero, facere voluptatum praesentium consequuntur laudantium illo. Modi aspernatur tenetur alias reprehenderit aliquam quibusdam quo, vitae cumque fuga repellendus magni, nisi quae itaque recusandae earum praesentium velit laudantium architecto libero quos qui est atque unde? Nam quasi sed omnis exercitationem ad</p><p>quisquam, natus necessitatibus dolor, eos blanditiis numquam assumenda aperiam at eaque totam velit perspiciatis nostrum quidem quaerat. Labore voluptas id vel hic non ad ullam, culpa soluta consectetur, dignissimos iure neque?</p>',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);

        //     Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, ea rem. Molestiae pariatur unde consequatur numquam nihil ex sapiente voluptatum.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis dolor dolorum minima eveniet quia vel necessitatibus hic sequi, beatae in natus facere quae! Odit voluptates esse tempore eligendi sed, repellat eveniet eius quae assumenda ipsum, et iste soluta! Corrupti voluptatibus</p><p> rerum quasi. Quas debitis omnis, dolorem voluptate voluptates vero, facere voluptatum praesentium consequuntur laudantium illo. Modi aspernatur tenetur alias reprehenderit aliquam quibusdam quo, vitae cumque fuga repellendus magni, nisi quae itaque recusandae earum praesentium velit laudantium architecto libero quos qui est atque unde? Nam quasi sed omnis exercitationem ad</p><p>quisquam, natus necessitatibus dolor, eos blanditiis numquam assumenda aperiam at eaque totam velit perspiciatis nostrum quidem quaerat. Labore voluptas id vel hic non ad ullam, culpa soluta consectetur, dignissimos iure neque?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
