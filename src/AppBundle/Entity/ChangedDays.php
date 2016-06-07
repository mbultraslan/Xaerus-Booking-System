<?php
/**
 * Created by PhpStorm.
 * User: mbayrak
 * Date: 07/06/2016
 * Time: 10:23
 */
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity
 * @Doctrine\ORM\Mapping\Table(name="changed_days")
 */


class ChangedDays
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_open;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_location;

    /**
     * @ORM\Column(type="date")
     */
    protected $date;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getIsOpen()
    {
        return $this->is_open;
    }

    /**
     * @param mixed $is_open
     */
    public function setIsOpen($is_open)
    {
        $this->is_open = $is_open;
    }

    /**
     * @return mixed
     */
    public function getIsLocation()
    {
        return $this->is_location;
    }

    /**
     * @param mixed $is_location
     */
    public function setIsLocation($is_location)
    {
        $this->is_location = $is_location;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Location", inversedBy="changed_days")
     * @ORM\JoinColumn(name="location_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $location_changed_days;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Field", inversedBy="changed_days")
     * @ORM\JoinColumn(name="field_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $field_changed_days;

}