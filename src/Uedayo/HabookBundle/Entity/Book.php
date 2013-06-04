<?php

namespace Uedayo\HabookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uedayo\HabookBundle\Entity\Book
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Book
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string $publisher
     *
     * @ORM\Column(name="publisher", type="string", length=255)
     */
    private $publisher;

    /**
     * @var string $small_image
     *
     * @ORM\Column(name="small_image", type="string", length=255)
     */
    private $small_image;

    /**
     * @var string $medium_image
     *
     * @ORM\Column(name="medium_image", type="string", length=255)
     */
    private $medium_image;

    /**
     * @var integer $listPrice
     *
     * @ORM\Column(name="listPrice", type="integer")
     */
    private $listPrice;

    /**
     * @var string $isbn
     *
     * @ORM\Column(name="isbn", type="string", length=255)
     */
    private $isbn;

    /**
     * @var text $detailPageUrl
     *
     * @ORM\Column(name="detailPageUrl", type="text")
     */
    private $detailPageUrl;

    /**
     * @var integer $number
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var smallint $status
     *
     * @ORM\Column(name="status", type="smallint", length=1)
     */
    private $status;

    /**
     * @var datetime $publicatedAt
     *
     * @ORM\Column(name="publicatedAt", type="datetime")
     */
    private $publicatedAt;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * Set publisher
     *
     * @param string $publisher
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * Get publisher
     *
     * @return string 
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Set small_image
     *
     * @param string $smallImage
     */
    public function setSmallImage($smallImage)
    {
        $this->small_image = $smallImage;
    }

    /**
     * Get small_image
     *
     * @return string 
     */
    public function getSmallImage()
    {
        return $this->small_image;
    }

    /**
     * Set medium_image
     *
     * @param string $mediumImage
     */
    public function setMediumImage($mediumImage)
    {
        $this->medium_image = $mediumImage;
    }

    /**
     * Get medium_image
     *
     * @return string 
     */
    public function getMediumImage()
    {
        return $this->medium_image;
    }

    /**
     * Set listPrice
     *
     * @param integer $listPrice
     */
    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;
    }

    /**
     * Get listPrice
     *
     * @return integer 
     */
    public function getListPrice()
    {
        return $this->listPrice;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set detailPageUrl
     *
     * @param text $detailPageUrl
     */
    public function setDetailPageUrl($detailPageUrl)
    {
        $this->detailPageUrl = $detailPageUrl;
    }

    /**
     * Get detailPageUrl
     *
     * @return text 
     */
    public function getDetailPageUrl()
    {
        return $this->detailPageUrl;
    }

    /**
     * Set number
     *
     * @param integer $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set status
     *
     * @param smallint $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return smallint 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set publicatedAt
     *
     * @param datetime $publicatedAt
     */
    public function setPublicatedAt($publicatedAt)
    {
        $this->publicatedAt = $publicatedAt;
    }

    /**
     * Get publicatedAt
     *
     * @return datetime 
     */
    public function getPublicatedAt()
    {
        return $this->publicatedAt;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get updatedAt
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}