<?php
/**
 * Created by PhpStorm.
 * User: mbayrak
 * Date: 07/06/2016
 * Time: 10:28
 */
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity
 * @Doctrine\ORM\Mapping\Table(name="working_hours")
 */
class WorkingHours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $day;

    /**
     * @ORM\Column(type="time")
     */
    protected $start;

    /**
     * @ORM\Column(type="time")
     */
    protected $end;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_location;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_open;

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
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param mixed $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param mixed $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Location", inversedBy="working_hours")
     * @ORM\JoinColumn(name="location_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $location_working_hours;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Field", inversedBy="working_hours")
     * @ORM\JoinColumn(name="field_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $field_working_hours;

}