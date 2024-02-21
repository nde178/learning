<?php

    namespace App\Http\Controllers\Api;

    use Orion\Http\Controllers\Controller;

    use App\Models\Rest_place;

    use Orion\Concerns\DisableAuthorization;

    class Rest_place_Controller extends Controller

    {
        #use DisableAuthorization;

        protected $model = Rest_place::class;

    }
