<?php

/*
 * This file is part of TechnicPack Launcher Api.
 *
 * (c) Syndicate LLC
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$factory->define(Platform\Key::class, function () {
    return [
        'name' => 'Test Key',
        'token' => 'test-key-token',
    ];
});
