<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RuneModel;

class RuneController extends Controller
{
    public function list()
    {
        return response()->json(RuneModel::get(), 200);
    }

    /**
     * @param integer $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function findById($id)
    {
        $rune = RuneModel::find($id);
        if (!$rune) {
            throw new \InvalidArgumentException('No such rune.');
        }

        return response()->json($rune);
    }
}
