<?php

namespace Gokure\Http\Client;

/**
 * @mixin \Gokure\Http\Client\Factory
 */
class Pool
{
    /**
     * The factory instance.
     *
     * @var \Gokure\Http\Client\Factory
     */
    protected $factory;

    /**
     * The client instance.
     *
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * The pool of requests.
     *
     * @var array
     */
    protected $pool = [];

    /**
     * Create a new requests pool.
     *
     * @param  \Gokure\Http\Client\Factory|null  $factory
     * @return void
     */
    public function __construct(Factory $factory = null)
    {
        $this->factory = $factory ?: new Factory();

        $this->client = $this->factory->buildClient();
    }

    /**
     * Add a request to the pool with a key.
     *
     * @param  string  $key
     * @return \Gokure\Http\Client\PendingRequest
     */
    public function as(string $key)
    {
        return $this->pool[$key] = $this->asyncRequest();
    }

    /**
     * Retrieve a new async pending request.
     *
     * @return \Gokure\Http\Client\PendingRequest
     */
    protected function asyncRequest()
    {
        return $this->factory->setClient($this->client)->async();
    }

    /**
     * Retrieve the requests in the pool.
     *
     * @return array
     */
    public function getRequests()
    {
        return $this->pool;
    }

    /**
     * Add a request to the pool with a numeric index.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return \Gokure\Http\Client\PendingRequest
     */
    public function __call($method, $parameters)
    {
        return $this->pool[] = $this->asyncRequest()->$method(...$parameters);
    }
}
