<?php
namespace App\Controller;

use App\Helper\EventsView;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class EvaluationEventsController extends Controller
{
    public function getEvaluationEvents()
    {
        $events = $this->get('doctrine.orm.entity_manager')
            ->getRepository('App:EvaluationEvents')
            ->findAll();
        return $this->render('events.html.twig', ['events' => EventsView::renderEvents($events)]);
    }

    public function getEvaluationEventDetails(Request $request)
    {
        $event = $this->get('doctrine.orm.entity_manager')
            ->getRepository('App:EvaluationEvents')
            ->find($request->get('eventId'));
        return new JsonResponse(EventsView::renderEvent($event));
    }
}
