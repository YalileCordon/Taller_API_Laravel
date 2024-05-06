<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Dresses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DressesRequest;
use Symfony\Component\HttpFoundation\Response;

class DressesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Dresses::all();
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(DressesRequest $request)
    {
        $new_dress = new Dresses($request->all());
        $new_dress->save();
        return response()->json(['ok' => true, Response::HTTP_CREATED]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dresses $dresses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DressesRequest $request, Dresses $dresses)
    {
        $dresses->update($request->all());
        return response()->json(['ok' => true], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dresses $dresses)
    {
        $dresses->delete();
        return response()->json(['deleted' => true, Response::HTTP_ACCEPTED]);
    }
}
