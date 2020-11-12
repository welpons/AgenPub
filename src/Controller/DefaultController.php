<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class DefaultController
{
    private $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    public function index(): Response
    {
        $env = $this->params->get('your_variable');

        return new Response(
            sprintf('<html><body><h1>Main Page: %s</h1><p><a href="article/number">Article</a></p></body></html>', $env)
        );
    }
}
