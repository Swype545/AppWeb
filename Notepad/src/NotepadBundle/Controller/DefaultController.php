<?php

namespace NotepadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use NotepadBundle\Entity\Note;
use NotepadBundle\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\DomCrawler\Crawler;

//use Symfony\Component\Validator\Constraints\DateTime;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('NotepadBundle:Default:index.html.twig');
    }
	
	//------------------------------------------------------------------------------------------
	//------------------------------------------------------------------------------------------
	//Notelist
	//------------------------------------------------------------------------------------------
	//------------------------------------------------------------------------------------------
	
	/**
     * @Route("/notelist", name="notelist")
     */
	 
	//Accès à cette page: http://localhost/AppWeb/Notepad/web/app_dev.php/note/notelist
    
    public function notelistAction(Request $request)
    {
		
		//Formulaire pour la recherche
		$form = $this->createFormBuilder()
			->add('search', SearchType::class, array(
			'label'=> false,
			'required'=>false,
			'attr' => array(
				'placeholder'=>'search')))
			->getForm();
		//Ici se trouve l'ensemble du controle pour la page "notelist"
		//Recupération de l'ensemble des éléments de ma base de donnée
		$form->handleRequest($request);
		$em = $this->getDoctrine()->getManager();
		

		//Si la zone de recherche n'est pas vide
		$search = $form->getData()['search'];

		if(isset($search) && !empty($search))
		{
			$preNotes = $em->getRepository('NotepadBundle:Note')->findAll();
			$notes = [];
			
			//Chemin a trouver: /content/+$search
			foreach($preNotes as $note)
			{
				$crawler = new Crawler();
				$crawler->addXmlContent('<content>'.$note->getContent().'</content>');
				$tag = null;
				$body = $crawler->filterXPath('//content/'.$search);
				if($body->count() > 0){
					$tag = $body->nodeName();
				}

				if($tag != null)
				{
					$notes[]=$note;
				}
			}
			
			//$notes = $em->getRepository('NotepadBundle:Note')->findAll();	
		}else{
			$notes = $em->getRepository('NotepadBundle:Note')->findAll();
		}
				
		/*}catch(Exception $e){
			throw $this->createNotFoundException('Problème lors de la récupération des notes');
		}*/

		return $this->render('NotepadBundle:Pages:notelist.html.twig', array(
			'notes' => $notes,
			'form' => $form->createView()
		));
    }
	
	//------------------------------------------------------------------------------------------
	//------------------------------------------------------------------------------------------
	//Category List
	//------------------------------------------------------------------------------------------
	//------------------------------------------------------------------------------------------
	
	/**
     * @Route("/notelist/categorylist", name="categorylist")
     */
	 
	//Accès à cette page: http://localhost/AppWeb/Notepad/web/app_dev.php/note/notelist/categorylist
    public function categorylistAction()
    {
		
		//Ici se trouve l'ensemble du controle pour la page "notelist"
		//Recupération de l'ensemble des éléments de ma base de donnée
		try{
			$em = $this->getDoctrine()->getManager();
			$categories = $em->getRepository('NotepadBundle:Category')->findAll();
		}catch(Exception $e){
			throw $this->createNotFoundException('Problème lors de la récupération des categories');
		}

		return $this->render('NotepadBundle:Pages:categorylist.html.twig', array(
			'categories' => $categories,
		));
    }
	
	//------------------------------------------------------------------------------------------
	//------------------------------------------------------------------------------------------
	//Creation/Edition/Suppression d'une note 
	//------------------------------------------------------------------------------------------
	//------------------------------------------------------------------------------------------
	
	
	/**
     * @Route("/notelist/newnote", name="newnote")
     */
	
	//Accès à cette page: http://localhost/AppWeb/Notepad/web/app_dev.php/note/notelist/newnote
    public function newnoteAction(request $request)
    {

		$note = new Note();
		
		$form = $this->createFormBuilder($note)
			->add('title', TextType::class)
			->add('content', TextareaType::class)
			->add('tag', ButtonType::class)
			
			->add('categoryId', entityType::class,array(
				'class'=>'NotepadBundle:Category',
				'choice_label'=> 'label'))
			
			->add('submit', SubmitType::class)
			->getForm();
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$note = $form->getData();
			try{
				if($note->isValid())
				{
					$em = $this->getDoctrine()->getManager();
					$em->persist($note);
					$em->flush();
				}
				
				return $this->redirectToRoute('notelist');
			}catch(Exception $e){
				throw $this->createNotFoundException('Problème lors de la creation d\'une note');
			}
		}
		
		return $this->render('NotepadBundle:pages:newnote.html.twig', array(
			'form' => $form->createView(),
			'type' => 'create',
			));
    }
	
	//------------------------------------------------------------------------------------------
	
	/**
     * @Route("/notelist/editnote/{id}", name="editnote", requirements={"id":"\d+"} )
     */
	 
	//Accès à cette page: http://localhost/AppWeb/Notepad/web/app_dev.php/note/notelist/editnote/{id}
    public function editnoteAction(request $request, $id)
    {
		//Recupération de la note si elle existe
		try{
			$em = $this->getDoctrine()->getManager();
			$note = $em->getRepository('NotepadBundle:Note')->find($id);
		}catch(Exception $e){
			throw $this->createNotFoundException('Impossible de trouver la note');
		}
		
		$form = $this->createFormBuilder($note)
			->add('title', TextType::class)
			->add('content', TextareaType::class)
			->add('categoryId', entityType::class,array(
				'class'=>'NotepadBundle:Category',
				'choice_label'=> 'label'))
			->add('submit', SubmitType::class)
			->getForm();
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$note = $form->getData();
			try{
				if($note->isValid())
				{
					$em = $this->getDoctrine()->getManager();
					$em->persist($note);
					$em->flush();
				}
				return $this->redirectToRoute('notelist');
			}catch(Exception $e){
				throw $this->createNotFoundException('Problème lors de la validation d\'une note');
			}
		}
		
		return $this->render('NotepadBundle:pages:newnote.html.twig', array(
			'form' => $form->createView(),
			'type' => 'modify',
			));
    }
	
	//------------------------------------------------------------------------------------------
	
	/**
     * @Route("/notelist/deletenote/{id}", name="deletenote", requirements={"id":"\d+"} )
     */
	 
	//Accès à cette page: http://localhost/AppWeb/Notepad/web/app_dev.php/note/notelist/deletenote/{id}
    public function deletenoteAction(request $request, $id)
    {
		//Suppression de la note
		try{
			$em = $this->getDoctrine()->getManager();
			$note = $em->getRepository('NotepadBundle:Note')->find($id);
			$em->remove($note);
			$em->flush();
		}catch(Exception $e){
			throw $this->createNotFoundException('Impossible de trouver la note');
		}

		return $this->redirectToRoute('notelist');
    }
	
	
	//------------------------------------------------------------------------------------------
	//------------------------------------------------------------------------------------------
	//Creation/Edition/Suppression d'une categorie 
	//------------------------------------------------------------------------------------------
	//------------------------------------------------------------------------------------------
	
	/**
     * @Route("/notelist/newcategory", name="newcategory")
     */
	 
	//Accès à cette page: http://localhost/AppWeb/Notepad/web/app_dev.php/note/notelist/newcategory
    public function newcategoryAction(request $request)
    {
		$category = new Category();
		
		$form = $this->createFormBuilder($category)
			->add('label', TextType::class)
			->add('submit', SubmitType::class)
			->getForm();
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$note = $form->getData();
			try{
				$em = $this->getDoctrine()->getManager();
				$em->persist($category);
				$em->flush();
				return $this->redirectToRoute('categorylist');
			}catch(Exception $e){
				throw $this->createNotFoundException('Problème lors de la creation d\'une categorie');
			}
		}

		return $this->render('NotepadBundle:Pages:newcategory.html.twig', array(
			'form' => $form->createView(),
			'type' => 'create',
			));
    }
	
	//------------------------------------------------------------------------------------------
	
	/**
     * @Route("/notelist/editcategory/{id}", name="editcategory", requirements={"id":"\d+"})
     */
	 
	//Accès à cette page: http://localhost/AppWeb/Notepad/web/app_dev.php/note/notelist/editcategory/{id}
    public function editcategoryAction(request $request, $id)
    {
		try{
			$em = $this->getDoctrine()->getManager();
			$category = $em->getRepository('NotepadBundle:Category')->find($id);
		}catch(Exception $e){
			throw $this->createNotFoundException('Impossible de trouver la categorie');
		}
		
		$form = $this->createFormBuilder($category)
			->add('label', TextType::class)
			->add('submit', SubmitType::class)
			->getForm();
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$note = $form->getData();
			try{
				$em = $this->getDoctrine()->getManager();
				$em->persist($category);
				$em->flush();
				return $this->redirectToRoute('categorylist');
			}catch(Exception $e){
				throw $this->createNotFoundException('Problème lors de la modification d\'une categorie');
			}
		}

		return $this->render('NotepadBundle:Pages:newcategory.html.twig', array(
			'form' => $form->createView(),
			'type' => 'modify',
			));
    }
	
		//------------------------------------------------------------------------------------------
	
	/**
     * @Route("/notelist/deletecategory/{id}", name="deletecategory", requirements={"id":"\d+"} )
     */
	 
	//Accès à cette page: http://localhost/AppWeb/Notepad/web/app_dev.php/note/notelist/deletecategory/{id}
    public function deletecategoryAction(request $request, $id)
    {
		//Suppression de la categorie
		try{
			$em = $this->getDoctrine()->getManager();
			$category = $em->getRepository('NotepadBundle:Category')->find($id);
			$em->remove($category);
			$em->flush();
		}catch(\Doctrine\DBAL\DBALException $e){
			$this->addFlash('error','Vous ne pouvez pas supprimer une catégorie qui contient des notes!');
			return $this->redirectToRoute('categorylist');
		}

		return $this->redirectToRoute('categorylist');
    }
	
}
