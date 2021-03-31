<?php

namespace App\Http\Controllers;

use App\DTO\TestData;
use App\Http\Requests\TestRequest;
use App\User;

class TestController extends Controller
{
    public function test(TestRequest $request)
    {
        $testData = new TestData([
            'name' => $request->get('name'),
            'users' => User::all()
        ]);

        \Log::debug($testData->toArray());
    }
}
