<?php
namespace App\Http\Controllers\Api\V1;

use App\Models\Dresses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Requests\DressesRequest;
use Symfony\Component\HttpFoundation\Response;

class DressesController extends Controller
{
    public function index()
    {
        return Dresses::all();
    }

    /**
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\JsonResponse
    */
    public function store(DressesRequest $request)
    {
        $newModel = Dresses::create([
            'name' => $request->name,
            'size' => $request->size,
            'color' => $request,
            'material' => $request->material,
            'gender' => $request->gender,
            'origin' => $request->origin ,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'designer' => $request->designer,
            'status' => $request->status,
            'manufacturing_date' => $request->manufacturing_date
          ]);
        $newModel->save();
        return response()->json(['ok' => true], Response::HTTP_CREATED);
    }

    public function show(Dresses $dress)
    {
        $categoryController = new CategoryController();
        $category = $categoryController->index();
        $categoryDress = $category->where('id', $dress->category_id)->first();
        $data = [
            'dress' => $dress,
            'category' => $categoryDress
        ];
    
        return response()->json($data);
    }

    public function update(DressesRequest $request, Dresses $dress)
    {
        $dress->update($request->all());
        return response()->json(['ok' => true], Response::HTTP_OK);
    }

    public function destroy(Dresses $dress)
    {
        $dress->delete();
        return response()->json(['deleted' => true], Response::HTTP_ACCEPTED);
    }
}
