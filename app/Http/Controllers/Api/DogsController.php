<?php

namespace App\Http\Controllers\Api;

use App\Models\Dog;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class DogsController extends Controller
{
    use DisableAuthorization;

    protected $model = Dog::class;
}
