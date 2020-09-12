<?php

declare(strict_types=1);

namespace TomasVotruba\Website\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ProjectsController extends AbstractController
{
    /**
     * @Route(path="projects", name="projects")
     */
    public function __invoke(): Response
    {
        return $this->render('projects/projects.twig', [
            'title' => 'Projects',
        ]);
    }
}
