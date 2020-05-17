<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class BasicController extends Controller
{
    public function count()
    {
        $countAttendees = $this->get('doctrine.orm.entity_manager')
            ->getRepository('App:Attendees')
            ->count([]);

        $countEvents = $this->get('doctrine.orm.entity_manager')
            ->getRepository('App:EvaluationEvents')
            ->count([]);

        $countFormations = $this->get('doctrine.orm.entity_manager')
            ->getRepository('App:EvaluationFormations')
            ->count([]);

        return $this->render('base.html.twig', [
            'Attendees' => $countAttendees,
            'Events' => $countEvents,
            'Formations' => $countFormations
        ]);
    }

}
