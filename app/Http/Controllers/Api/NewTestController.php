<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NewTest;
use App\Http\Requests\StoreNewTestRequest;
use App\Http\Requests\UpdateNewTestRequest;
use Illuminate\Http\Response;

class NewTestController extends Controller
{
    public function index()
    {
        $items = NewTest::all();
        return response()->json($items);
    }

    public function store(StoreNewTestRequest $request)
    {
        $item = NewTest::create($request->validated());
        return response()->json($item,Response::HTTP_CREATED);
    }

    public function show(NewTest $NewTest)
    {
        return response()->json($NewTest);
    }

    public function update(UpdateNewTestRequest $request, NewTest $NewTest)
    {
        $item = $NewTest->update($request->validated());
        return response()->json($item);
    }

    public function destroy(NewTest $NewTest)
    {
        $NewTest->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
