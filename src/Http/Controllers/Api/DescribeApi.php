<?php

/*
 * This file is part of TechnicPack Launcher Api.
 *
 * (c) Syndicate LLC
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Platform\Http\Controllers\Api;

use Platform\Http\Controllers\Controller;

class DescribeApi extends Controller
{
    /**
     * Return a JSON response describing the API.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        return response()->json([
            'api' => config('platform.provider'),
            'version' => config('platform.version'),
            'stream' => config('platform.stream'),
        ]);
    }
}