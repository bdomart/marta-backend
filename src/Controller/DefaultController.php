<?php

namespace App\Controller;

use App\Entity\Site;
use App\Entity\Subscription;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/", name="app_homepage")
     * @return View
     */
    public function index()
    {
        return View::create([], Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/navigation", name="app_navigation")
     * @param Request $request
     * @return View
     */
    public function navigation(Request $request)
    {
        $departments = [];
        if ($request->query->get('regions')) {
            $departments = explode(',', $request->query->get('departments'));
        } elseif ($this->getUser()) {
            $user_adresses = $this->getUser()->getAdresses();
            $departments = [];
        }

        $tags = [];
        if ($request->query->get('tags')) {
            $tags = explode(',', $request->query->get('tags'));
        }

        $sites = $this->getDoctrine()
            ->getRepository(Site::class)
            ->findSitesByDepartmentOrTag($departments, $tags);

        return View::create($sites, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/presentation", name="app_presentation")
     * @return View
     */
    public function presentation()
    {
        $subscriptions = $this->getDoctrine()
            ->getRepository(Subscription::class)
            ->findAll();

        return View::create($subscriptions, Response::HTTP_OK);
    }
}
