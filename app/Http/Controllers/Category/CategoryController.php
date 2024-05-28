<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Domain\Application\Usecases\Category\Usecase;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $usecase;

    public function __construct(Usecase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function index(Request $request) {
        return $this->usecase->index($request);
    }
}
