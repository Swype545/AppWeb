<?php

namespace NotepadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Note
 * 
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="NotepadBundle\Repository\NoteRepository")
 */
class Note
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=4000)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
	 * Many notes have One category
	 * @ORM\ManyToOne(targetEntity="Category")
	 * @ORM\JoinColumn(name="categoryId", referencedColumnName="id")
     */
    private $categoryId;

	//Constructeur de mon objet avec la date actuelle prédéfinie
	public function __construct(){
		$this->date = new \DateTime();
	}
	
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Note
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Note
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Note
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return Note
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
	
	/**
     * @Assert\isTrue(message="le contenu XML n'est pas valide")
     */
	
	public function isValid()
	{

			/*//XML validation
			$dom = new \DOMDocument();
			$dom->loadXML($this->getContent());
			$dom->schemaValidate('schema.xsd');*/
			
			$xml = new\DOMDocument();
			$implementation = new \DOMImplementation();
			$xml->appendChild($implementation->createDocumentType('content'));
			$content_elem = $xml->createElement('content');
			
			$content_xml = $xml->createDocumentFragment();
			$content_xml->appendXML($this->getContent());
			$content_elem->appendChild($content_xml);
			$xml->appendChild($content_elem);
			
			return $xml->schemaValidate('schema.xsd');
			
			//$dom->schemaValidate('..\Resources\xml\schema.xsd');

	}
	
}

