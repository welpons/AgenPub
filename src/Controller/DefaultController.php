<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(): Response
    {

        return new Response(
            '<html><body><h1>Main Page</h1><p><a href="article/number">Article</a></p></body></html>'
        );
    }
}
