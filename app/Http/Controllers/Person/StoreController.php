<?php

namespace App\Http\Controllers\Person;
use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validate();
        return $data;
    }
}
