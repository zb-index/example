<?php

namespace Mak\Example\Http\Controllers;

use Mak\Example\Http\Requests\ExampleRequest;
use Mak\Example\Http\Resources\ExampleResource;
use Mak\Example\Models\Example;

class IndexController
{
    public function __invoke(ExampleRequest $request)
    {
        $model = Example::query();

        $model->orderBy('id', 'desc');
        $rates = $model->paginate(null, ['*'], 'page', 1);

        return ExampleResource::collection($rates);
    }
}
