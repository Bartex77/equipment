<?php

namespace App\Http\Controllers;

use http\Exception\InvalidArgumentException;
use Illuminate\Http\Request;
use App\Models\ChestModel;

class ChestController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        return response()->json(ChestModel::get(), 200);
    }

    /**
     * @param integer $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function findById($id)
    {
        $chest = ChestModel::find($id);
        if (!$chest) {
            throw new \InvalidArgumentException('No such chest.');
        }

        return response()->json($chest);
    }

    public function save(Request $request)
    {
        $chest = ChestModel::create($request->all());

        return response()->json($chest, 201);
    }
}
