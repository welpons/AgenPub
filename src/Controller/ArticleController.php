<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body><h1>Number of articles</h1><p>Lucky number: '.$number.'</p></body></html>'
        );
    }
}
