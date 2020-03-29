<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListController extends AbstractController
{
    /**
     * @Route("/", name="to_do_list")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/create", name="create_task")
     */
    public function create()
    {
        exit('to do: create');
    }

    /**
     * @Route("/switch-status/{id}", name="switch-status")
     */
    public function switchStatus($id)
    {
        exit('to do: switch status '.$id);
    }

    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete($id)
    {
        exit('to do:delete '.$id);
    }
}
