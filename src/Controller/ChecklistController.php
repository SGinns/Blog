<?php

namespace App\Controller;

use App\Entity\Checklist;
use App\Form\ChecklistType;
use App\Repository\ChecklistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ChecklistController extends AbstractController
{
    public function checklist(Request $request)
    {
        $checklist = new Checklist();

        $checklistForm = $this->createForm(ChecklistType::class, $checklist);

        $checklistForm->handleRequest($request);

        $entityManager = $this->getDoctrine()->getManager();

        $checklistRepository = $this->getDoctrine()->getRepository(Checklist::class);
        assert($checklistRepository instanceof ChecklistRepository);

        if($checklistForm->isSubmitted() && $checklistForm->isValid()){
            $entityManager->persist($checklist);
            $entityManager->flush();
        }

        $itemsFromDB = $checklistRepository->getAllItemsForChecklist();
        $items = array_map('array_pop', $itemsFromDB);

        return $this->render('Checklist/view.html.twig', [
            'checklist_form'    => $checklistForm->createView(),
            'items'             => $items
        ]);
    }
}
