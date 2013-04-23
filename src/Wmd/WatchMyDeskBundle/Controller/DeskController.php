<?php
 
namespace Wmd\WatchMyDeskBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
 

class DeskController extends Controller
{
    /**
    * @Route("/show/{deskId}", name="desk_show")
    * @Template()
    */
    public function showAction($deskId)
    {
        return array('id' => $deskId);
    }
}