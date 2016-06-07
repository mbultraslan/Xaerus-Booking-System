<?php
/**
 * Created by PhpStorm.
 * User: mbayrak
 * Date: 07/06/2016
 * Time: 10:04
 */

namespace AppBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity
 * @Doctrine\ORM\Mapping\Table(name="fields")
 */
class Field
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $types;

    /**
     * @ORM\Column(type="string")
     */
    protected $address;

    /**
     * @ORM\Column(type="float")
     */
    protected $rate;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $has_working_hours;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $has_changed_days;

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
    public function getHasChangedDays()
    {
        return $this->has_changed_days;
    }

    /**
     * @param mixed $has_changed_days
     */
    public function setHasChangedDays($has_changed_days)
    {
        $this->has_changed_days = $has_changed_days;
    }

    /**
     * @return mixed
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param mixed $types
     */
    public function setTypes($types)
    {
        $this->types = $types;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param mixed $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return mixed
     */
    public function getHasWorkingHours()
    {
        return $this->has_working_hours;
    }

    /**
     * @param mixed $has_working_hours
     */
    public function setHasWorkingHours($has_working_hours)
    {
        $this->has_working_hours = $has_working_hours;
    }

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Location", inversedBy="fields")
     * @ORM\JoinColumn(name="location_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $location;



    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ChangedDays", mappedBy="field_changed_days")
     */
    private $changed_days;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Field", mappedBy="field_working_hours")
     */
    private $working_hours;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Booking", mappedBy="field_booking")
     */
    private $booking;


    public function __construct()
    {
        $this->changed_days=new ArrayCollection();
        $this->working_hours=new ArrayCollection();
        $this->booking=new ArrayCollection();
    }
}