<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @author Konstantin Grachev <me@grachevko.ru>
 */
final class TestController extends Controller
{
    /**
     * @Route("/", name="test")
     */
    public function __invoke()
    {
    }
}
