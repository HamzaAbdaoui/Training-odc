<?php
namespace App\Helper;

use App\Entity\Attendees;
use Symfony\Component\HttpFoundation\JsonResponse;

class AttendeesView
{
    public static function renderAttendees(array $attendees)
    {
        $jobs = [0=>'Elève', 1=>'Etudiant', 2=>'Salarié', 3=>'Demandeur d\'emploi', 4=>'Entrepreneur', 5=>'Autre'];
        $attended = [0=>'évènement', 1=>'formation'];
        $formatted = [];
        foreach ($attendees as $attender) {
            $formatted[] = [
                'id' => $attender->getId(),
                'name' => $attender->getName(),
                'email' => $attender->getEmail(),
                'phone' => $attender->getPhone(),
                'job' => ['id' => $attender->getJob(), 'label' => $jobs[$attender->getJob()]],
                'otherJob' => $attender->getOtherJob(),
                'establishment' => $attender->getEstablishment(),
                'attended' => ['id' => $attender->getAttended(), 'label' => $attended[$attender->getAttended()]],
                'createdAt' => $attender->getCreatedAt(),
                'updatedAt' => $attender->getUpdatedAt()
            ];
        }

        return $formatted;
    }

    public static function renderAttender(Attendees $attender)
    {
        $jobs = [0=>'Elève', 1=>'Etudiant', 2=>'Salarié', 3=>'Demandeur d\'emploi', 4=>'Entrepreneur', 5=>'Autre'];
        $attended = [0=>'évènement', 1=>'formation'];

        $formatted = [
            'id' => $attender->getId(),
            'name' => $attender->getName(),
            'email' => $attender->getEmail(),
            'phone' => $attender->getPhone(),
            'job' => ['id' => $attender->getJob(), 'label' => $jobs[$attender->getJob()]],
            'otherJob' => $attender->getOtherJob(),
            'establishment' => $attender->getEstablishment(),
            'attended' => ['id' => $attender->getAttended(), 'label' => $attended[$attender->getAttended()]],
            'createdAt' => $attender->getCreatedAt(),
            'updatedAt' => $attender->getUpdatedAt()
        ];
        
        return $formatted;
    }
}