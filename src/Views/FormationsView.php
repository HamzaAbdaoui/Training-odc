<?php
namespace App\Helper;

use App\Entity\EvaluationFormations;

class FormationsView
{
    public static function renderFormations(array $formations)
    {
        $formationType = [0 => 'Android', 1 => 'iOS', 2 => 'Laravel', 3 => 'Unity', 4 => 'Design', 5 => 'Data Science', 6 => 'Machine Learning', 7 => 'SuperCodeurs', 8 => 'Autre'];
        $contents = [1 => 'Insuffisant', 2 => 'Insuffisant', 3 => 'Insuffisant', 4 => 'Insuffisant', 5 => 'Parfaitement'];
        $conditions = [1 => 'Insuffisant', 2 => 'Insuffisant', 3 => 'Insuffisant', 4 => 'Insuffisant', 5 => 'Parfaitement'];
        $knowledge = [1 => 'Insuffisant', 2 => 'Insuffisant', 3 => 'Insuffisant', 4 => 'Insuffisant', 5 => 'Parfaitement'];
        $formatted = [];
        foreach ($formations as $formation) {
            $formatted[] = [
                'id' => $formation->getId(),
                'date' => $formation->getDate(),
                'formation' => ['id' => $formation->getFormation(), 'label' => $formationType[$formation->getFormation()]],
                'otherFormation' => $formation->getOtherFormation(),
                'contents' => ['id' => $formation->getContents(), 'label' => $contents[$formation->getContents()]],
                'contentsImprove' => $formation->getContentsImprove(),
                'conditions' => ['id' => $formation->getConditions(), 'label' => $conditions[$formation->getConditions()]],
                'conditionsImprove' => $formation->getConditionsImprove(),
                'newKnowledge' => ['id' => $formation->getNewKnowledge(), 'label' => $knowledge[$formation->getNewKnowledge()]]            ];
        }

        return $formatted;
    }

    public static function renderFormation(EvaluationFormations $formation)
    {
        $formationType = [0 => 'Android', 1 => 'iOS', 2 => 'Laravel', 3 => 'Unity', 4 => 'Design', 5 => 'Data Science', 6 => 'Machine Learning', 7 => 'SuperCodeurs', 8 => 'Autre'];
        $contents = [1 => 'Insuffisant', 2 => 'Insuffisant', 3 => 'Insuffisant', 4 => 'Insuffisant', 5 => 'Parfaitement'];
        $conditions = [1 => 'Insuffisant', 2 => 'Insuffisant', 3 => 'Insuffisant', 4 => 'Insuffisant', 5 => 'Parfaitement'];
        $knowledge = [1 => 'Insuffisant', 2 => 'Insuffisant', 3 => 'Insuffisant', 4 => 'Insuffisant', 5 => 'Parfaitement'];

        $formatted = [
            'id' => $formation->getId(),
            'date' => $formation->getDate(),
            'formation' => ['id' => $formation->getFormation(), 'label' => $formationType[$formation->getFormation()]],
            'otherFormation' => $formation->getOtherFormation(),
            'contents' => ['id' => $formation->getContents(), 'label' => $contents[$formation->getContents()]],
            'contentsImprove' => $formation->getContentsImprove(),
            'conditions' => ['id' => $formation->getConditions(), 'label' => $conditions[$formation->getConditions()]],
            'conditionImprove' => $formation->getConditionImprove(),
            'newKnowledge' => ['id' => $formation->getNewKnowledge(), 'label' => $knowledge[$formation->getNewKnowledge()]]            ];
        return $formatted;
    }
}