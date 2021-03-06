<?php
/**
 * Library controller
 *
 * @author Nicolas Bruyere <bruyere.nicolas@gmail.com>
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Utils\Listing;
class LibraryController extends Controller
{
    /**
     * @Route("/")
     */
    public function listAction(Request $request, Listing $listing)
    {
        $list = $listing->listing();
        $sortedList = $this->sortList($list);

        return $this->render('library/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'listing' => $sortedList,
        ]);
    }
    
    /**
     * @Route("/{episodeId}", name="episode_display")
     */
    public function getepisodeAction(Request $request, Listing $listing, $episodeId)
    {
        $list = $listing->listing();
        $episodeDetail = $this->getEpisode($episodeId, $list);
        
        return $this->render('library/episode.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'episode' => $episodeDetail
        ]);
    }
    private function sortList($list){
        return $list;
    }
    private function getEpisode($episodeId, $list){
        $episodes = $list["resources"]["_embedded"]["episodes"];
        foreach($episodes as $key => $episode){
            if($episode["id"]==$episodeId){
                $episodeDetail = $episode;
            }
        }
        return $episodeDetail;
    }
}
