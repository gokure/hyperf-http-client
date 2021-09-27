<?php

namespace Gokure\Http\Client\Events;

use Gokure\Http\Client\Request;

class RequestSending
{
    /**
     * The request instance.
     *
     * @var \Gokure\Http\Client\Request
     */
    public $request;

    /**
     * Create a new event instance.
     *
     * @param  \Gokure\Http\Client\Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
