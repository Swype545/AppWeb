<?php

namespace NotepadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use NotepadBundle\Entity\Note;
use NotepadBundle\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

//use Symfony\Component\Validator\Constraints\DateTime;


class APIController extends Controller
{
    /**
     * @Route("/API/reset")
     */
    public function indexAction()
    {
        return $this->render('NotepadBundle:Default:index.html.twig');
    }
	
	/**
     * @Route("API/notes/showAll", name="show_notes")
	 * @Method({"GET"})
     */

	//---------------------------------------------------------------
	//GETS
	//---------------------------------------------------------------


	//link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/notes/showAll
    public function getNotesAction(request $request)
    {
		try{
			$em = $this->getDoctrine()->getManager();
			$notes = $em->getRepository('NotepadBundle:Note')->findAll();
		}catch(Exception $e){
			throw $this->createNotFoundException('Problème lors de la récupération des notes');
		}
		$formatted =[];
		foreach($notes as $note){
			$formatted[]=[
				'id'=> $note->getId(),
				'title'=>$note->getTitle(),
				'content'=>$note->getContent(),
				'category'=>$note->getCategoryId()->getLabel(),
			];
		}
		
		return new JsonResponse($formatted);
    }
	
	/**
     * @Route("API/notes/showOne", name="show_note")
	 * @Method({"GET"})
     */

	//link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/notes/showOne?id=2
    public function getNoteAction(request $request)
    {
		$encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);


		$id = $request->query->get('id');
		$em = $this->getDoctrine()->getManager();
		$note = $em->getRepository('NotepadBundle:Note')->find($id);
		 if (!$note) {
            return new Response("No note with this ID");
        }

		$formatted=[
			'id'=> $note->getId(),
			'title'=>$note->getTitle(),
			'content'=>$note->getContent(),
			'category'=>$note->getCategoryId()->getLabel(),
		];		
		return new JsonResponse($formatted);
		
    }
	
	/**
     * @Route("/API/categories/showAll", name="show_categories")
	 * @Method({"GET"})
     */

	//link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/categories/showAll
    public function getCategoriesAction(request $request)
    {
        //Recupératio nde toutes les catégories
        try{
			$em = $this->getDoctrine()->getManager();
			$categories = $em->getRepository('NotepadBundle:Category')->findAll();
		}catch(Exception $e){
			throw $this->createNotFoundException('Problème lors de la récupération des notes');
		}
		$formatted =[];
		foreach($categories as $category){
			$formatted[]=[
				'id'=> $category->getId(),
				'label'=>$category->getLabel(),
			];
		}
		
		return new JsonResponse($formatted);
    }
	
	//---------------------------------------------------------------
	//Create/modify/delete
	//---------------------------------------------------------------


	/**
     * @Route("/API/notes/create", name="API_createNote")
	 * @Method({"POST"})
     */

	//link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/notes/create
	/*
	POST value for tests: 
	{
		"title":"newNote",
		"content":"this is an API note",
		"categoryId":1
	}
	*/
    public function createNoteAction(request $request)
    {
		//recuperation des éléments du JSON envoyé
		$em = $this->getDoctrine()->getManager();
		$json= $request->getContent();
		$data=json_decode($json, true);

		$title=$data['title'];
		$content = $data['content'];
        $categoryId = $data['categoryId'];

        //creation de la note
        $note = new Note();
        $note->setTitle($title);
        $note->setContent($content);
       
        $category = $em->getRepository('NotepadBundle:Category')->find($categoryId);
        if (!$category) {
            return new Response("this category doesn't exist");
        }

        $note->setCategoryId($category);
		try {
            $em->persist($note);
            $em->flush();
            return new Response("success");
        } catch(Exception $e) {
            return new Response("error");
        }
		
		return new JsonResponse($formatted);
    }

    /**
     * @Route("/API/notes/edit", name="API_editNote")
     * @Method("PUT")
     */

    //link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/notes/edit
    /*
	PUT value for tests: 
	{
		"id":"3",
		"title":"modifiedNote",
		"content":"this is an API modified note",
		"categoryId":1
	}
	*/
    public function editNoteAction(Request $request)
    {
        //Recupération des éléments du JSON envoyé
        $em = $this->getDoctrine()->getManager();
        $json = $request->getContent();
        $data = json_decode($json, true);
        
        $id = $data['id'];
        $title = $data['title'];
        $content = $data['content'];
        $categoryId = $data['categoryId'];

        //recupération de la note (avec son ID)
        $note = $em->getRepository('NotepadBundle:Note')->find($id);
        if (!$note) {
            return new Response("this note doesn't exist");
        }

        //Updating des info de la note
        $note->setTitle($title);
        $note->setContent($content);
        $category = $em->getRepository('NotepadBundle:Category')->find($categoryId);
        if (!$category) {
            return new Response("category not found");
        }

        $note->setCategoryId($category);
        try {
            $em->flush();
            return new Response("success");
        } catch(Exception $e) {
            return new Response("error");
        }
    }

     /**
     * @Route("/API/notes/delete", name="API_deleteNote")
     * @Method("DELETE")
     */

     //link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/notes/delete?id=2
    public function deleteNoteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        //Recupération de l'ID
        $id = $request->query->get('id');
        $note = $em->getRepository('NotepadBundle:Note')->find($id);
        if (!$note) {
            return new Response("note not found");
        }

        //Delete de la note associée
        try {
            $em->remove($note);
            $em->flush();
            return new Response("success");
        } catch(Exception $e) {
            return new Response("error");
        }
    }

    /**
     * @Route("/API/categories/create", name="API_createCategory")
     * @Method("POST")
     */

    //link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/categories/create
    /*
	POST value for tests: 
	{
		"label":"APILabel"
	}
	*/
    public function newCategoryAction(Request $request)
    {
        //Recupération des informations
        $em = $this->getDoctrine()->getManager();
        $json = $request->getContent();
        $data = json_decode($json, true);
        
        //Creation de la catégorie
        $label = $data['label'];
        $category = new Category();
        $category->setLabel($label);
        try {
            $em->persist($category);
            $em->flush();
            return new Response("success");
        } catch(Exception $e) {
            return new Response("error");
        }
    }

    /**
     * @Route("/API/categories/edit", name="API_editCategory")
     * @Method("PUT")
     */

      //link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/categories/edit
    /*
	POST value for tests: 
	{
		"id":"2",
		"label":"APILabelModified"
	}
	*/
    public function editCategoryAction(Request $request)
    {   
        
    	//Recupération des infos
        $em = $this->getDoctrine()->getManager();
        $json = $request->getContent();
        $data = json_decode($json, true);
        
        $id = $data['id'];
        $label = $data['label'];
        $category = $em->getRepository('NotepadBundle:Category')->find($id);
        if (!$category) {
            return new Response("category not found");
        }
        $category->setLabel($label);
        try {
            $em->flush();
            return new Response("success");
        } catch(Exception $e) {
            return new Response("error");
        }
    }

    /**
     * @Route("/API/categories/delete", name="API_deleteCategory")
     * @Method("DELETE")
     */

     //link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/categories/delete?id=2
    public function delCategoryAction(Request $request)
    {
        //Recupération de l'ID en paramètre
        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');
        //recupération en DB
        $category = $em->getRepository('NotepadBundle:Category')->find($id);
        if (!$category) {
            return new Response("category not found");
        }
        
        //suppression de la categorie
        try {
            $em->remove($category);
            $em->flush();
            return new Response("success");
        } catch(Exception $e) {
            return new Response("error");
        }
    }
	
}
