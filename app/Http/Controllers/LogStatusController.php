<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogStatusRequest;
use App\Models\LogStatus;
use Exception;
use Illuminate\Http\Request;

class LogStatusController extends Controller
{
    public function get_log_status()
    {
        try {
            $status = LogStatus::get();
            return response()->json([
                'status' => true,
                'logs' => $status
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'status' => false,
                'error' => $ex
            ]);
        }
    }

    public function get_last_log_status()
    {
        try {
            $status = LogStatus::orderBy('created_at', 'desc')->first();
            return response()->json([
                'status' => true,
                'logs' => $status
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'status' => false,
                'error' => $ex
            ]);
        }
    }

    public function store_log_status(LogStatusRequest $request)
    {
        try {
            $data = $request->validated();
            $status = new LogStatus();
            $status->fill($data)->save();

            return response()->json([
                'status' => true,
                'logs' => $status
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'status' => false,
                'error' => $ex
            ]);
        }
    }
}
