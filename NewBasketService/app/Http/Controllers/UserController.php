<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected User $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        $request = $request->all();
        \Log::info($request);

        \App\Jobs\UserCreated::dispatch($request);

        // $user = $this->model->create($request);
        return response()->json([
            'data' => $request,
            'message' => 'User added successfully',
        ]);
    }

    public function index()
    {
        $users = $this->model->all();
        return response()->json([
            'data' => $users,
            'message' => 'All users',
        ]);
    }

    public function show(User $user)
    {
        return response()->json([
            'data' => $user,
        ]);
    }

    public function destory(User $user)
    {
        $user->delete();
        return response->json([
            'message' => 'User deleted successfully',
        ]);
    }
}
