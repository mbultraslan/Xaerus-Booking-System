<?php
/**
 * Created by PhpStorm.
 * User: mbayrak
 * Date: 07/06/2016
 * Time: 11:36
 */
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @Doctrine\ORM\Mapping\Entity
* @Doctrine\ORM\Mapping\Table(name="bookings")
*/
class Booking
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $start_time;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $end_time;

    /**
     * @ORM\Column(type="integer")
     */
    protected $duration;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $unavailable;

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
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * @param mixed $start_time
     */
    public function setStartTime($start_time)
    {
        $this->start_time = $start_time;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * @param mixed $end_time
     */
    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getUnavailable()
    {
        return $this->unavailable;
    }

    /**
     * @param mixed $unavailable
     */
    public function setUnavailable($unavailable)
    {
        $this->unavailable = $unavailable;
    }



    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Field", inversedBy="booking")
     * @ORM\JoinColumn(name="field_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $field_booking;



    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="booking")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $user_booking;


    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Invoice", mappedBy="booking")
     */
    private $booking;

}