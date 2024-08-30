<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HelloCurd;
use App\Http\Requests\StoreHelloCurdRequest;
use App\Http\Requests\UpdateHelloCurdRequest;
use Illuminate\Http\Response;

class HelloCurdController extends Controller
{
    public function index()
    {
        $items = HelloCurd::all();
        return response()->json($items);
    }

    public function store(StoreHelloCurdRequest $request)
    {
        $item = HelloCurd::create($request->validated());
        return response()->json($item,Response::HTTP_CREATED);
    }

    public function show(HelloCurd $HelloCurd)
    {
        return response()->json($HelloCurd);
    }

    public function update(UpdateHelloCurdRequest $request, HelloCurd $HelloCurd)
    {
        $item = $HelloCurd->update($request->validated());
        return response()->json($item);
    }

    public function destroy(HelloCurd $HelloCurd)
    {
        $HelloCurd->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
