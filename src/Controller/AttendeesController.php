<?php
namespace App\Controller;

use App\Helper\AttendeesView;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AttendeesController extends Controller
{
    public function getAttendees()
    {
        $attendees = $this->get('doctrine.orm.entity_manager')
            ->getRepository('App:Attendees')
            ->findAll();

        return $this->render('attendees.html.twig', ['attendees' => AttendeesView::renderAttendees($attendees)]);
    }

    public function getAttendeeDetails(Request $request)
    {
        $attender = $this->get('doctrine.orm.entity_manager')
            ->getRepository('App:Attendees')
            ->find($request->get('attenderId'));

        return new JsonResponse(AttendeesView::renderAttender($attender));
    }
}
