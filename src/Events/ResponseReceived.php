<?php

namespace Gokure\Http\Client\Events;

use Gokure\Http\Client\Request;
use Gokure\Http\Client\Response;

class ResponseReceived
{
    /**
     * The request instance.
     *
     * @var \Gokure\Http\Client\Request
     */
    public $request;

    /**
     * The response instance.
     *
     * @var \Gokure\Http\Client\Response
     */
    public $response;

    /**
     * Create a new event instance.
     *
     * @param  \Gokure\Http\Client\Request  $request
     * @param  \Gokure\Http\Client\Response  $response
     * @return void
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
}
