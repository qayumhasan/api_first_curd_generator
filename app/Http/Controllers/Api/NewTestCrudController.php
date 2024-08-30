<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NewTestCrud;
use App\Http\Requests\StoreNewTestCrudRequest;
use App\Http\Requests\UpdateNewTestCrudRequest;
use Illuminate\Http\Response;

class NewTestCrudController extends Controller
{
    public function index()
    {
        $items = NewTestCrud::all();
        return response()->json($items);
    }

    public function store(StoreNewTestCrudRequest $request)
    {
        $item = NewTestCrud::create($request->validated());
        return response()->json($item,Response::HTTP_CREATED);
    }

    public function show(NewTestCrud $NewTestCrud)
    {
        return response()->json($NewTestCrud);
    }

    public function update(UpdateNewTestCrudRequest $request, NewTestCrud $NewTestCrud)
    {
        $item = $NewTestCrud->update($request->validated());
        return response()->json($item);
    }

    public function destroy(NewTestCrud $NewTestCrud)
    {
        $NewTestCrud->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
