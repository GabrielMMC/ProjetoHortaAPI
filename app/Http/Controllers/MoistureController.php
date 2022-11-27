<?php

namespace App\Http\Controllers;

use App\Http\Requests\MoisturesRequest;
use App\Models\Moisture;
use Exception;
use Illuminate\Http\Request;

class MoistureController extends Controller
{
    public function get_moistures()
    {
        try {
            $moistures = Moisture::get();
            return response()->json([
                'status' => true,
                'moistures' => $moistures
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'status' => false,
                'error' => $ex
            ]);
        }
    }

    public function store_moisture(MoisturesRequest $request)
    {
        try {
            $data = $request->validated();
            $moisture = new Moisture();
            $moisture->fill($data)->save();

            return response()->json([
                'status' => true,
                'moisture' => $moisture
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'status' => false,
                'error' => $ex
            ]);
        }
    }
}
