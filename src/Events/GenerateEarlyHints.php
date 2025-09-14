<?php

declare(strict_types=1);

namespace JustBetter\Http3EarlyHints\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use JustBetter\Http3EarlyHints\Data\LinkHeaders;
use Symfony\Component\HttpFoundation\Response;

class GenerateEarlyHints
{
    use Dispatchable;

    public LinkHeaders $linkHeaders;

    public Request $request;

    public Response $response;

    public function __construct(
        LinkHeaders $linkHeaders,
        Request $request,
        Response $response
    ) {
        $this->linkHeaders = $linkHeaders;
        $this->request = $request;
        $this->response = $response;
    }
}
