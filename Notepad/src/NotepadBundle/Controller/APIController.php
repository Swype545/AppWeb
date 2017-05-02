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
    private function corsFix(){
		if($_SERVER['REQUEST_METHOD'] == 'OPTIONS')
		{
			$response = new Response();
			$response->headers->set('Content-Type', 'application/text');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			return $response;
		}
	}
	
	/**
     * @Route("/API/reset")
     */
    public function indexAction()
    {
        return $this->render('NotepadBundle:Default:index.html.twig');
    }
	
	/**
     * @Route("API/notes/showAll", name="show_notes")
	 * @Method({"OPTIONS", "GET"})
     */

	//---------------------------------------------------------------
	//GETS
	//---------------------------------------------------------------


	//link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/notes/showAll
    public function getNotesAction(request $request)
    {
		$this->corsFix();
		
		try{
			$em = $this->getDoctrine()->getManager();
			$notes = $em->getRepository('NotepadBundle:Note')->findAll();
			
			$encoders = array(new XmlEncoder(), new JsonEncoder());
			$normalizers = array(new ObjectNormalizer());
			$serializer = new Serializer($normalizers, $encoders);
			$response = new Response();
			
		}catch(Exception $e){
			throw $this->createNotFoundException('Problème lors de la récupération des notes');
		}
		
		
		$jsonValue = $serializer->serialize($notes, 'json');
		$response->setContent($jsonValue);
		
		$response->headers->set('Content-Type', 'application/json');
		$response->headers->set('Access-Control-Allow-Origin', '*');
		$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
		
		return $response;
    }
	
	/**
     * @Route("API/notes/showOne", name="show_note")
	 * @Method({"OPTIONS", "GET"})
     */

	//link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/notes/showOne?id=2
    public function getNoteAction(request $request)
    {
		$this->corsFix();
		
		
		$encoders = array(new XmlEncoder(), new JsonEncoder());
		$normalizers = array(new ObjectNormalizer());
		$serializer = new Serializer($normalizers, $encoders);
		$response = new Response();


		$id = $request->query->get('id');
		$em = $this->getDoctrine()->getManager();
		$note = $em->getRepository('NotepadBundle:Note')->find($id);
		 if (!$note) {
            return new Response("No note with this ID");
        }

		$jsonValue = $serializer->serialize($note, 'json');
		$response->setContent($jsonValue);
		
		$response->headers->set('Content-Type', 'application/json');
		$response->headers->set('Access-Control-Allow-Origin', '*');
		$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
		
		return $response;
		
    }
	
	/**
     * @Route("/API/categories/showAll", name="show_categories")
	 * @Method({"GET", "OPTIONS"})
     */

	//link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/categories/showAll
    public function getCategoriesAction(request $request)
    {
        $this->corsFix();
		
		
		//Recupératio nde toutes les catégories
        try{
			$em = $this->getDoctrine()->getManager();
			$categories = $em->getRepository('NotepadBundle:Category')->findAll();
			
			$encoders = array(new XmlEncoder(), new JsonEncoder());
			$normalizers = array(new ObjectNormalizer());
			$serializer = new Serializer($normalizers, $encoders);
			$response = new Response();
			
		}catch(Exception $e){
			throw $this->createNotFoundException('Problème lors de la récupération des notes');
		}
		
		$jsonValue = $serializer->serialize($categories, 'json');
		$response->setContent($jsonValue);
		
		$response->headers->set('Content-Type', 'application/json');
		$response->headers->set('Access-Control-Allow-Origin', '*');
		$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
		
		return $response;
    }
	
	//---------------------------------------------------------------
	//Create/modify/delete
	//---------------------------------------------------------------


	/**
     * @Route("/API/notes/create", name="API_createNote")
	 * @Method({"OPTIONS", "POST"})
     */

	//link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/notes/create
	/*
	POST value for tests: 
	{
		"title":"newNote",
		"content":"this is an API note",
		"category":1
	}
	*/
    public function createNoteAction(request $request)
    {
		$this->corsFix();
		
		
		//recuperation des éléments du JSON envoyé
		$em = $this->getDoctrine()->getManager();
		
		$resp = new Response();
		$json= $request->getContent();
		$data=json_decode($json, true);
		
		$title=$data['title'];
		$content = $data['content'];
        $category = $data['category'];

        //creation de la note
        $note = new Note();
        $note->setTitle($title);
        $note->setContent($content);
       
        $category = $em->getRepository('NotepadBundle:Category')->find($category);
        if (!$category) {
            $resp->setStatusCode(Response::HTTP_BAD_REQUEST);
            $response = array('error' => "This category doesn't exist");
			
            $jsonContent = json_encode($response);
            $resp->setContent($jsonContent);
			$resp->headers->set('Content-Type', 'application/json');
			$resp->headers->set('Access-Control-Allow-Origin', '*');
			$resp->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $resp;
        }

        $note->setCategory($category);
		try {
            $em->persist($note);
            $em->flush();
			
			$resp->setStatusCode(Response::HTTP_OK);
            $response = array('success' => true);
			
            $jsonContent = json_encode($response);
            $resp->setContent($jsonContent);
			$resp->headers->set('Content-Type', 'application/json');
			$resp->headers->set('Access-Control-Allow-Origin', '*');
			$resp->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
            return $resp;

        } catch(Exception $e) {
            $resp->setStatusCode(Response::HTTP_BAD_REQUEST);
            $response = array('error' => "Error");
			
            $jsonContent = json_encode($response);
            $resp->setContent($jsonContent);
			$resp->headers->set('Content-Type', 'application/json');
			$resp->headers->set('Access-Control-Allow-Origin', '*');
			$resp->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $resp;
        }
		
		return $response;
    }
	
	/**
     * @Route("/API/notes/edit", name="API_editNote")
     * @Method({"OPTIONS", "PUT"})
     */

    //link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/notes/edit
    /*
	PUT value for tests: 
	{
		"id":"3",
		"title":"modifiedNote",
		"content":"this is an API modified note",
		"category":1
	}
	*/
    public function editNoteAction(Request $request)
    {
        $this->corsFix();
		
		
		//Recupération des éléments du JSON envoyé
        $em = $this->getDoctrine()->getManager();
        $json = $request->getContent();
        $data = json_decode($json, true);
        
        $id = $data['id'];
        $title = $data['title'];
        $content = $data['content'];
        $category = $data['category'];

        //recupération de la note (avec son ID)
        $note = $em->getRepository('NotepadBundle:Note')->find($id);
        if (!$note) {
            $response = new JsonResponse("this note doesn't exist");
			$response->headers->set('Content-Type', 'application/json');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $response;
        }

        //Updating des info de la note
        $note->setTitle($title);
        $note->setContent($content);
        $category = $em->getRepository('NotepadBundle:Category')->find($category);
        if (!$category) {
            $response = new JsonResponse("category not found");
			$response->headers->set('Content-Type', 'application/json');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $response;
        }

        $note->setCategory($category);
        try {
            $em->flush();
            $response = new JsonResponse("success");
			$response->headers->set('Content-Type', 'application/json');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $response;
        } catch(Exception $e) {
            $response = new JsonResponse("error");
			$response->headers->set('Content-Type', 'application/json');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $response;
        }
    }

     /**
     * @Route("/API/notes/delete", name="API_deleteNote")
     * @Method({"OPTIONS", "DELETE"})
     */

     //link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/notes/delete?id=2
    public function deleteNoteAction(Request $request)
    {
        $this->corsFix();
		
		$em = $this->getDoctrine()->getManager();
        
        //Recupération de l'ID
        $id = $request->query->get('id');
        $note = $em->getRepository('NotepadBundle:Note')->find($id);
        if (!$note) {
            
			$response = new JsonResponse("note not found");
			$response->headers->set('Content-Type', 'application/json');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $response;
        }

        //Delete de la note associée
        try {
            $em->remove($note);
            $em->flush();
			$response = new JsonResponse("success");
			$response->headers->set('Content-Type', 'application/json');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $response;
        } catch(Exception $e) {
			$response = new JsonResponse("error");
			$response->headers->set('Content-Type', 'application/json');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $response;
        }
    }

    /**
     * @Route("/API/categories/create", name="API_createCategory")
     * @Method({"OPTIONS", "POST"})
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
       $this->corsFix();
	   
	   //Recupération des informations
        $em = $this->getDoctrine()->getManager();
        
		$resp = new Response();
		$json= $request->getContent();
		$data=json_decode($json, true);
        
        //Creation de la catégorie
        $label = $data['label'];
        $category = new Category();
        $category->setLabel($label);
        try {
		   $em->persist($category);
            $em->flush();
			$resp->setStatusCode(Response::HTTP_OK);
            $response = array('success' => true);
			
            $jsonContent = json_encode($response);
            $resp->setContent($jsonContent);
			$resp->headers->set('Content-Type', 'application/json');
			$resp->headers->set('Access-Control-Allow-Origin', '*');
			$resp->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
            return $resp;
			
        } catch(Exception $e) {
			$resp->setStatusCode(Response::HTTP_BAD_REQUEST);
            $response = array('error' => "can't creat a category");
			
            $jsonContent = json_encode($response);
            $resp->setContent($jsonContent);
			$resp->headers->set('Content-Type', 'application/json');
			$resp->headers->set('Access-Control-Allow-Origin', '*');
			$resp->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $resp;
        }
    }

    /**
     * @Route("/API/categories/edit", name="API_editCategory")
     * @Method({"OPTIONS", "PUT"})
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
        $this->corsFix();
		
    	//Recupération des infos
        $em = $this->getDoctrine()->getManager();
        $json = $request->getContent();
        $data = json_decode($json, true);
        
        $id = $data['id'];
        $label = $data['label'];
        $category = $em->getRepository('NotepadBundle:Category')->find($id);
        if (!$category) {
            $response = new JsonResponse("category not found");
			$response->headers->set('Content-Type', 'application/json');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $response;
        }
        $category->setLabel($label);
        try {
            $em->flush();
            $response = new JsonResponse("success");
			$response->headers->set('Content-Type', 'application/json');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $response;
        } catch(Exception $e) {
			$response = new JsonResponse("error");
			$response->headers->set('Content-Type', 'application/json');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $response;
        }
    }

    /**
     * @Route("/API/categories/delete", name="API_deleteCategory")
     * @Method({"OPTIONS", "DELETE"})
     */

     //link: http://localhost/AppWeb/Notepad/web/app_dev.php/note/API/categories/delete?id=2
    public function delCategoryAction(Request $request)
    {
        $this->corsFix();
		
		//Recupération de l'ID en paramètre
        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');
        //recupération en DB
        $category = $em->getRepository('NotepadBundle:Category')->find($id);
        if (!$category) {
			$response = new JsonResponse("category not found");
			$response->headers->set('Content-Type', 'application/json');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $response;
        }
        
        //suppression de la categorie
        try {
            $em->remove($category);
            $em->flush();
			$response = new JsonResponse("success");
			$response->headers->set('Content-Type', 'application/json');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $response;

        } catch(Exception $e) {
			$response = new JsonResponse("error");
			$response->headers->set('Content-Type', 'application/json');
			$response->headers->set('Access-Control-Allow-Origin', '*');
			$response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
			
			return $response;
        }
    }
	
}
