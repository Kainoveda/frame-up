<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job; // Make sure this is included

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return response()->json([
            'status' => 'success',
            'data' => $jobs
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'salary' => 'required|numeric',
        ]);

        $job = Job::create($validated);

        return response()->json([
            'status' => 'success',
            'data' => $job
        ], 200);
    }
}
