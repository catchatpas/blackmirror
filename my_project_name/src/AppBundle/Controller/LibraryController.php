<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Utils\Listing;
class LibraryController extends Controller
{
    /**
     * @Route("/Library/")
     */
    

    public function listAction(Request $request, Listing $listing)
    {
        $list = $listing->listing();
        $sortedList = $this->sortList($list);
        // replace this example code with whatever you need
        return $this->render('library/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'listing' => $sortedList,
        ]);
    }
    private function sortList($list){
        return $list;
    }
}
