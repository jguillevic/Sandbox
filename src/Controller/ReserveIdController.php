<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReserveIdController extends AbstractController
{
    /**
     * @Route("/reserveid", name="reserveid")
     */
    public function index(): Response
    {
        return $this->render('reserve_id/index.html.twig', [
            'controller_name' => 'ReserveIdController',
        ]);
    }

    /**
     * @Route("/reserveid/load", name="reserveid_load")
     */
    public function load(): Response
    {
        return $this->json();
    }

    /**
     * @Route("/reserveid/add", name="reserveid_add")
     */
    public function add(): Response
    {
        return null;
    }

    /**
     * @Route("/reserveid/update", name="reserveid_update")
     */
    public function update(): Response
    {
        return null;
    }

    /**
     * @Route("/reserveid/delete", name="reserveid_delete")
     */
    public function delete(): Response
    {
        return null;
    }
}
