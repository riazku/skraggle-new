<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student; // ✅ Add this line

class StudentController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'message' => 'Authenticated user',
            'user' => $request->user(),
            'students' => Student::all()
        ]);
    }
}
