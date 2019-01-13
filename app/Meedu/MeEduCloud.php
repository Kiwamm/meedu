<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) XiaoTeng <616896861@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Meedu;

use GuzzleHttp\Client;

class MeEduCloud
{
    const URI = 'https://meedu.vip';

    protected $clientId;
    protected $clientSecret;
    protected $username;
    protected $password;

    protected $client;

    public function __construct()
    {
        $this->clientId = config('meedu.cloud.client_id');
        $this->clientSecret = config('meedu.cloud.client_secret');
        $this->username = config('meedu.cloud.username');
        $this->password = config('meedu.cloud.password');
        $this->client = new Client([
            'base_uri' => self::URI,
            'verify' => false,
            'timeout' => 5.0,
        ]);
    }

    public function getToken()
    {
        $response = $this->client->post('/oauth/token', [
            'form_params' => [
            ],
        ]);
    }
}