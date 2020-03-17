<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PriceModel;

class PriceController extends Controller
{
    public function list()
    {
        return response()->json(PriceModel::get(), 200);
    }

    /**
     * @param integer $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function findById($id)
    {
        $price = PriceModel::find($id);
        if (!$price) {
            throw new \InvalidArgumentException('No such price.');
        }

        return response()->json($price);
    }
}
