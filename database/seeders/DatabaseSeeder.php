<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // $user = User::factory(5)->create();
        // $category = Category::factory(5)->create();

        $user = User::factory()->create([
            'username' => 'johndoe',
            'name' => 'John Doe'
        ]);

        $post = Post::factory(15)->create([
            'user_id' => $user->id
        ]);

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);
        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family',
        // ]);
        // $hobbies = Category::create([
        //     'name' => 'Hobbies',
        //     'slug' => 'hobbies',
        // ]);

        // Post::create([
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'title' => 'My First Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae justo porta, tincidunt massa nec, efficitur risus. Fusce a justo ac elit fermentum venenatis. Vestibulum a lectus non enim dictum condimentum eu vitae arcu.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae justo porta, tincidunt massa nec, efficitur risus. Fusce a justo ac elit fermentum venenatis. Vestibulum a lectus non enim dictum condimentum eu vitae arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sem dolor, viverra sed magna id, rhoncus ultricies erat. Duis libero ante, blandit a iaculis nec, porttitor non metus. Ut vitae orci sed est scelerisque semper. Duis eget rutrum arcu. In id mattis diam. Nullam non pretium tellus. Cras nunc mi, volutpat at pharetra id, finibus id dolor. Nullam varius faucibus mi, sit amet sodales lorem aliquam ac. Integer vestibulum iaculis nibh.<br>

        //     Donec auctor libero et ex sodales, bibendum dictum risus rhoncus. Nunc dictum euismod arcu, at vehicula velit aliquet non. Curabitur a viverra dui. Nullam lorem nulla, tincidunt id aliquam id, elementum eu nibh. Nullam lorem arcu, laoreet quis mauris et, pellentesque sollicitudin justo. Sed tincidunt imperdiet molestie. Sed vitae sagittis justo. Donec eu sem in dolor egestas faucibus non quis arcu. Vestibulum mi libero, fermentum in auctor sit amet, venenatis in erat. Praesent rutrum rhoncus turpis, sed fermentum ipsum faucibus vel. Duis tempus eros nibh, pulvinar pulvinar nulla porttitor sit amet.<br>
            
        //     Pellentesque in tincidunt nulla. Curabitur vestibulum, leo quis dignissim accumsan, leo lorem semper tellus, sit amet tincidunt diam dolor ut turpis. Integer fringilla mollis ex, porta aliquam sem imperdiet sit amet. Suspendisse ultricies fermentum tincidunt. Nullam quis nunc at erat sollicitudin imperdiet. Ut sed pretium risus. Cras fringilla nulla sapien, eget pharetra odio gravida et. Nunc eu neque rhoncus, convallis arcu sed, mattis sapien.</p>',
        // ]);
        // Post::create([
        //     'user_id' => 2,
        //     'category_id' => 2,
        //     'title' => 'My Second Post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae justo porta, tincidunt massa nec, efficitur risus. Fusce a justo ac elit fermentum venenatis. Vestibulum a lectus non enim dictum condimentum eu vitae arcu.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae justo porta, tincidunt massa nec, efficitur risus. Fusce a justo ac elit fermentum venenatis. Vestibulum a lectus non enim dictum condimentum eu vitae arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sem dolor, viverra sed magna id, rhoncus ultricies erat. Duis libero ante, blandit a iaculis nec, porttitor non metus. Ut vitae orci sed est scelerisque semper. Duis eget rutrum arcu. In id mattis diam. Nullam non pretium tellus. Cras nunc mi, volutpat at pharetra id, finibus id dolor. Nullam varius faucibus mi, sit amet sodales lorem aliquam ac. Integer vestibulum iaculis nibh.
        //     <br>
        //     Donec auctor libero et ex sodales, bibendum dictum risus rhoncus. Nunc dictum euismod arcu, at vehicula velit aliquet non. Curabitur a viverra dui. Nullam lorem nulla, tincidunt id aliquam id, elementum eu nibh. Nullam lorem arcu, laoreet quis mauris et, pellentesque sollicitudin justo. Sed tincidunt imperdiet molestie. Sed vitae sagittis justo. Donec eu sem in dolor egestas faucibus non quis arcu. Vestibulum mi libero, fermentum in auctor sit amet, venenatis in erat. Praesent rutrum rhoncus turpis, sed fermentum ipsum faucibus vel. Duis tempus eros nibh, pulvinar pulvinar nulla porttitor sit amet.
        //     <br>
        //     Pellentesque in tincidunt nulla. Curabitur vestibulum, leo quis dignissim accumsan, leo lorem semper tellus, sit amet tincidunt diam dolor ut turpis. Integer fringilla mollis ex, porta aliquam sem imperdiet sit amet. Suspendisse ultricies fermentum tincidunt. Nullam quis nunc at erat sollicitudin imperdiet. Ut sed pretium risus. Cras fringilla nulla sapien, eget pharetra odio gravida et. Nunc eu neque rhoncus, convallis arcu sed, mattis sapien.</p>',
        // ]);
        // Post::create([
        //     'user_id' => 2,
        //     'category_id' => 1,
        //     'title' => 'My Third Post',
        //     'slug' => 'my-third-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae justo porta, tincidunt massa nec, efficitur risus. Fusce a justo ac elit fermentum venenatis. Vestibulum a lectus non enim dictum condimentum eu vitae arcu.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae justo porta, tincidunt massa nec, efficitur risus. Fusce a justo ac elit fermentum venenatis. Vestibulum a lectus non enim dictum condimentum eu vitae arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sem dolor, viverra sed magna id, rhoncus ultricies erat. Duis libero ante, blandit a iaculis nec, porttitor non metus. Ut vitae orci sed est scelerisque semper. Duis eget rutrum arcu. In id mattis diam. Nullam non pretium tellus. Cras nunc mi, volutpat at pharetra id, finibus id dolor. Nullam varius faucibus mi, sit amet sodales lorem aliquam ac. Integer vestibulum iaculis nibh.
        //     <br>
        //     Donec auctor libero et ex sodales, bibendum dictum risus rhoncus. Nunc dictum euismod arcu, at vehicula velit aliquet non. Curabitur a viverra dui. Nullam lorem nulla, tincidunt id aliquam id, elementum eu nibh. Nullam lorem arcu, laoreet quis mauris et, pellentesque sollicitudin justo. Sed tincidunt imperdiet molestie. Sed vitae sagittis justo. Donec eu sem in dolor egestas faucibus non quis arcu. Vestibulum mi libero, fermentum in auctor sit amet, venenatis in erat. Praesent rutrum rhoncus turpis, sed fermentum ipsum faucibus vel. Duis tempus eros nibh, pulvinar pulvinar nulla porttitor sit amet.
        //     <br>
        //     Pellentesque in tincidunt nulla. Curabitur vestibulum, leo quis dignissim accumsan, leo lorem semper tellus, sit amet tincidunt diam dolor ut turpis. Integer fringilla mollis ex, porta aliquam sem imperdiet sit amet. Suspendisse ultricies fermentum tincidunt. Nullam quis nunc at erat sollicitudin imperdiet. Ut sed pretium risus. Cras fringilla nulla sapien, eget pharetra odio gravida et. Nunc eu neque rhoncus, convallis arcu sed, mattis sapien.</p>',
        // ]);
    }
}
