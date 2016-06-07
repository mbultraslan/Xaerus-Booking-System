<?php
/**
 * Created by PhpStorm.
 * User: mbayrak
 * Date: 07/06/2016
 * Time: 09:53
*/

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity
 * @Doctrine\ORM\Mapping\Table(name="locations")
 */
 class Location
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
     protected $name;

     /**
      * @ORM\Column(type="time")
      */
     protected $working_hours_start;

     /**
      * @ORM\Column(type="time")
      */
     protected  $working_hours_end;

     /**
      * @ORM\Column(type="string")
      */
     protected $working_days;

     /**
      * @ORM\Column(type="float")
      */
     protected $latitude;

     /**
      * @ORM\Column(type="float")
      */
     protected $longitude;

     /**
      * @ORM\Column(type="string")
      */
     protected $address;

     /**
      * @ORM\Column(type="string")
      */
     protected $postcode;

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
     public function getName()
     {
         return $this->name;
     }

     /**
      * @param mixed $name
      */
     public function setName($name)
     {
         $this->name = $name;
     }

     /**
      * @return mixed
      */
     public function getWorkingHoursStart()
     {
         return $this->working_hours_start;
     }

     /**
      * @param mixed $working_hours_start
      */
     public function setWorkingHoursStart($working_hours_start)
     {
         $this->working_hours_start = $working_hours_start;
     }

     /**
      * @return mixed
      */
     public function getWorkingHoursEnd()
     {
         return $this->working_hours_end;
     }

     /**
      * @param mixed $working_hours_end
      */
     public function setWorkingHoursEnd($working_hours_end)
     {
         $this->working_hours_end = $working_hours_end;
     }

     /**
      * @return mixed
      */
     public function getWorkingDays()
     {
         return $this->working_days;
     }

     /**
      * @param mixed $working_days
      */
     public function setWorkingDays($working_days)
     {
         $this->working_days = $working_days;
     }

     /**
      * @return mixed
      */
     public function getLatitude()
     {
         return $this->latitude;
     }

     /**
      * @param mixed $latitude
      */
     public function setLatitude($latitude)
     {
         $this->latitude = $latitude;
     }

     /**
      * @return mixed
      */
     public function getLongitude()
     {
         return $this->longitude;
     }

     /**
      * @param mixed $longitude
      */
     public function setLongitude($longitude)
     {
         $this->longitude = $longitude;
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
     public function getPostcode()
     {
         return $this->postcode;
     }

     /**
      * @param mixed $postcode
      */
     public function setPostcode($postcode)
     {
         $this->postcode = $postcode;
     }


     /**
      * @ORM\OneToMany(targetEntity="AppBundle\Entity\Field", mappedBy="location")
      */
    private $fields;


     /**
      * @ORM\OneToMany(targetEntity="AppBundle\Entity\ChangedDays", mappedBy="location_changed_days")
      */
     private $changed_days;


     /**
      * @ORM\OneToMany(targetEntity="AppBundle\Entity\Field", mappedBy="location_working_hours")
      */
     private $working_hours;


     public function __construct()
     {
         $this->fields=new ArrayCollection();
         $this->changed_days=new ArrayCollection();
         $this->working_hours=new ArrayCollection();
     }


 }
