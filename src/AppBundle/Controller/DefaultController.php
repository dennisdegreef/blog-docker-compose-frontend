<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $client = new \Predis\Client(getenv('REDIS_PORT'));
        $client->set('hello', 'Docker-Compose');
        $client->incr('increment');

        return $this->render('default/index.html.twig', [
            'hello' => $client->get('hello'),
            'increment' => $client->get('increment')
        ]);
    }
}
