<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;
    public $slug;
    public $excerpt;
    public $date;
    public $body;

    public function __construct($title, $slug, $excerpt, $date, $body){
        $this->title = $title;
        $this->slug = $slug;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }

    public static function all()
    {
        return cache()->rememberForever('post.all', function () {
            return collect($files = File::files(resource_path('posts')))
            ->map(fn ($file) => $document = YamlFrontMatter::parseFile($file))
            ->map(fn ($document) => new Post(
                $document->title,
                $document->slug,
                $document->excerpt,
                $document->date,
                $document->body(),
            ))->sortByDesc('date');
        });



        // $posts = array_map(function ($file){
        //     $document = YamlFrontMatter::parseFile($file);

        //     return new Post(
        //         $document->title,
        //         $document->slug,
        //         $document->excerpt,
        //         $document->date,
        //         $document->body(),
        //     );
        // }, $files);

        // foreach ($files as $file) {
        //     $document = YamlFrontMatter::parseFile($file);
        //     $posts[] = new Post(
        //         $document->title,
        //         $document->slug,
        //         $document->excerpt,
        //         $document->date,
        //         $document->body(),
        //     );
        // }
        // ddd($posts);
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);


        // if(! file_exists($path = resource_path("posts/{$slug}.html"))){
        //     // abort(404);
        //     // return redirect('/');
        //     throw new ModelNotFoundException();
        // }

        // return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
    }

    public static function findOrFail($slug)
    {
        $post = static::find($slug);

        if(!$post){
            throw new ModelNotFoundException();
        }
        return $post;
    }
}