<?php


namespace Domain\Services\Category;

use App\Models\Category;


class Service 
{
    public function categoryList($request)
    {
        $categories = Category::all();

        return $categories;
    }

}