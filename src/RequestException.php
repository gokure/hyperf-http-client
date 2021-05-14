<?php

declare(strict_types=1);

namespace Gokure\Http\Client;

class RequestException extends HttpClientException
{
    /**
     * The response instance.
     *
     * @var \Gokure\Http\Client\Response
     */
    public $response;

    /**
     * Create a new exception instance.
     *
     * @param  \Gokure\Http\Client\Response  $response
     * @return void
     */
    public function __construct(Response $response)
    {
        parent::__construct($this->prepareMessage($response), $response->status());

        $this->response = $response;
    }

    /**
     * Prepare the exception message.
     *
     * @param  \Gokure\Http\Client\Response  $response
     * @return string
     */
    protected function prepareMessage(Response $response)
    {
        $message = "HTTP request returned status code {$response->status()}";

        $summary = class_exists(\GuzzleHttp\Psr7\Message::class)
            ? \GuzzleHttp\Psr7\Message::bodySummary($response->toPsrResponse())
            : \GuzzleHttp\Psr7\get_message_body_summary($response->toPsrResponse());

        return is_null($summary) ? $message : $message .= ":\n{$summary}\n";
    }
}
