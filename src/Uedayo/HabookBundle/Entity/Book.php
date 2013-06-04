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
     * @var datetime $publication_date
     *
     * @ORM\Column(name="publication_date", type="datetime")
     */
    private $publication_date;

    /**
     * @var integer $list_price
     *
     * @ORM\Column(name="list_price", type="integer")
     */
    private $list_price;

    /**
     * @var string $isbn
     *
     * @ORM\Column(name="isbn", type="string", length=255)
     */
    private $isbn;

    /**
     * @var text $detail_page_url
     *
     * @ORM\Column(name="detail_page_url", type="text")
     */
    private $detail_page_url;

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
     * Set publication_date
     *
     * @param datetime $publicationDate
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publication_date = $publicationDate;
    }

    /**
     * Get publication_date
     *
     * @return datetime 
     */
    public function getPublicationDate()
    {
        return $this->publication_date;
    }

    /**
     * Set list_price
     *
     * @param int $listPrice
     */
    public function setListPrice(\int $listPrice)
    {
        $this->list_price = $listPrice;
    }

    /**
     * Get list_price
     *
     * @return int 
     */
    public function getListPrice()
    {
        return $this->list_price;
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
     * Set detail_page_url
     *
     * @param text $detailPageUrl
     */
    public function setDetailPageUrl($detailPageUrl)
    {
        $this->detail_page_url = $detailPageUrl;
    }

    /**
     * Get detail_page_url
     *
     * @return text 
     */
    public function getDetailPageUrl()
    {
        return $this->detail_page_url;
    }

    /**
     * Set number
     *
     * @param int $number
     */
    public function setNumber(\int $number)
    {
        $this->number = $number;
    }

    /**
     * Get number
     *
     * @return int 
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