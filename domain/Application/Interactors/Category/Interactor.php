<?php

namespace Domain\Application\Interactors\Category;

use Domain\Application\Usecases\Category\Usecase;
use Domain\Services\Category\Service;

class Interactor implements Usecase
{
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index($request){

        $categories = $this->service->categoryList($request);

        $data = [
            'categories' => $categories
        ];

        return view('welcome', $data);
    }

}
