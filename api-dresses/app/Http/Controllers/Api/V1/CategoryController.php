<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        $new_category = Category::create($request->all());
        return response()->json(['ok' => true], Response::HTTP_CREATED);
    }

    public function show(Category $category)
    {
        $dressesController = new DressesController();
        $dresses = $dressesController->index();
        $categoryDress = $dresses->where('category_id', $category->id);
        $data = [
            'category' => $category,
            'dresses' => $categoryDress
            
        ];
    
        return response()->json($data);
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return response()->json(['ok' => true], Response::HTTP_OK);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['deleted' => true], Response::HTTP_ACCEPTED);
    }
}
