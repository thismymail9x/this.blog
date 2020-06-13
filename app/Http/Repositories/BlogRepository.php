<?php


namespace App\Http\Repositories;


use App\Blog;

class BlogRepository
{
    protected $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function getAll()
    {
        return $this->blog->all();

    }

    public function save($blog)
    {
        $blog->save();
    }
}