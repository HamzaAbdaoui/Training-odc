<?php
namespace App\Helper;

use App\Entity\EvaluationEvents;
use Symfony\Component\HttpFoundation\JsonResponse;

class EventsView
{
    public static function renderEvents(array $events)
    {
        $eventType = [0 => 'Hello Startups', 1 => '6 to 8 talks', 2 => 'Speed Recruiting', 3 => 'Autre'];
        $contents = [1 => 'Insuffisant', 2 => 'Insuffisant', 3 => 'Insuffisant', 4 => 'Insuffisant', 5 => 'Parfaitement'];
        $satisfaction = [1 => 'Insuffisant', 2 => 'Insuffisant', 3 => 'Insuffisant', 4 => 'Insuffisant', 5 => 'Parfaitement'];
        $subscribe = [0 => 'Non', 1 => 'Oui'];
        $formatted = [];
        foreach ($events as $event) {
            $formatted[] = [
                'id' => $event->getId(),
                'date' => $event->getDate(),
                'place' => $event->getPlace(),
                'event' => ['id' => $event->getEvent(), 'label' => $eventType[$event->getEvent()]],
                'otherEvent' => $event->getOtherEvent(),
                'contents' => ['id' => $event->getContents(), 'label' => $contents[$event->getContents()]],
                'satisfactionSpeaker' => ['id' => $event->getSatisfactionSpeaker(), 'label' => $satisfaction[$event->getSatisfactionSpeaker()]],
                'speakerImprove' => $event->getSpeakerImprove(),
                'subscribe' => ['id' => $event->getContents(), 'label' => $subscribe[$event->getSubscribe()]],
                'interestedTechnology' => $event->getInterestedTechnology(),
                'goodRemarks' => $event->getGoodRemarks(),
                'improveRemarks' => $event->getImproveRemarks(),
                'createdAt' => $event->getCreatedAt(),
                'updatedAt' => $event->getUpdatedAt(),
                'Attendee' => $event->getAttendee()

            ];
        }

        return $formatted;
    }

    public static function renderEvent(EvaluationEvents $event)
    {
        $eventType = [0 => 'Hello Startups', 1 => '6 to 8 talks', 2 => 'Speed Recruiting', 3 => 'Autre'];
        $contents = [1 => 'Insuffisant', 2 => 'Insuffisant', 3 => 'Insuffisant', 4 => 'Insuffisant', 5 => 'Parfaitement'];
        $satisfaction = [1 => 'Insuffisant', 2 => 'Insuffisant', 3 => 'Insuffisant', 4 => 'Insuffisant', 5 => 'Parfaitement'];
        $subscribe = [0 => 'Non', 1 => 'Oui'];
        $formatted = [
            'id' => $event->getId(),
            'date' => $event->getDate(),
            'place' => $event->getPlace(),
            'event' => ['id' => $event->getEvent(), 'label' => $eventType[$event->getEvent()]],
            'otherEvent' => $event->getOtherEvent(),
            'contents' => ['id' => $event->getContents(), 'label' => $contents[$event->getContents()]],
            'satisfactionSpeaker' => ['id' => $event->getSatisfactionSpeaker(), 'label' => $satisfaction[$event->getSatisfactionSpeaker()]],
            'speakerImprove' => $event->getSpeakerImprove(),
            'subscribe' => ['id' => $event->getContents(), 'label' => $subscribe[$event->getSubscribe()]],
            'interestedTechnology' => $event->getInterestedTechnology(),
            'goodRemarks' => $event->getGoodRemarks(),
            'improveRemarks' => $event->getImproveRemarks(),
            'createdAt' => $event->getCreatedAt(),
            'updatedAt' => $event->getUpdatedAt(),
            'Attendee' => $event->getAttendee()

        ];

        return $formatted;
    }
}