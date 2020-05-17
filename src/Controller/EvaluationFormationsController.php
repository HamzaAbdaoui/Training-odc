<?php
namespace App\Controller;

use App\Helper\FormationsView;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class EvaluationFormationsController extends Controller
{
    public function getEvaluationFormations()
    {
        $formations = $this->get('doctrine.orm.entity_manager')
            ->getRepository('App:EvaluationFormations')
            ->findAll();
        return $this->render('formations.html.twig', ['formations' => FormationsView::renderFormations($formations)]);
    }

    public function getEvaluationFormationDetails(Request $request)
    {
        $formation = $this->get('doctrine.orm.entity_manager')
            ->getRepository('App:EvaluationFormations')
            ->find($request->get('formationId'));
        return new JsonResponse(FormationsView::renderFormation($formation));
    }
}
