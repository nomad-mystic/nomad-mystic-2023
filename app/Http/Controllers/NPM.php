<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Utils;
use Illuminate\Routing\Controller;

/**
 * @classdesc
 * @class NPM
 * @extends Controller
 * @author Keith Murphy | nomadmystics@gmail.com
 */
class NPM extends Controller
{
    /**
     * @description
     * @public
     * @author Keith Murphy | nomadmystics@gmail.com
     * @link https://github.com/npm/registry/blob/master/docs/REGISTRY-API.md#registry
     *
     * @throws GuzzleException
     *
     * @param string $package
     * @return null | string
     */
    public static function getPackageMetadata(string $package): ?string
    {
        try {
            $client = new Client();

            $response = $client->request('GET', "https://registry.npmjs.org/{$package}", [
                'headers' => [
                    'Accept' => 'application/vnd.npm.install-v1+json'
                ],
            ]);

            // Helpful debugging
            // echo $response->getStatusCode(); // 200
            // echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
            // echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'

            return $response->getBody()->getContents();

        } catch (ClientException $exception) {
            $response = $exception->getResponse();
            echo Utils::jsonEncode($response->getBody()->getContents());
        }

        return null;
    }
}
