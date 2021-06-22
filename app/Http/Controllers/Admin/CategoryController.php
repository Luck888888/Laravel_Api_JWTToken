<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class CategoryController extends Controller
{

    public function index()
    {
        return CategoryResource::collection(Category::all());

    }

    public function store(CategoryRequest $request)
    {
        $category=Category::create($request->validated());
        return new CategoryResource($category);
    }

    public function show($id)
    {
        return new CategoryResource(Category::findOrFail($id));
    }

    public function update(CategoryRequest $request, Category $category)
    {
         $category->update($request->validated());
         return  new CategoryResource ($category);
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
