<?php
/**
 * Created by PhpStorm.
 * User: mbayrak
 * Date: 07/06/2016
 * Time: 12:01
 */
namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
* @Doctrine\ORM\Mapping\Entity
* @Doctrine\ORM\Mapping\Table(name="invoices")
*/
class Invoice
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
    protected $first_name;

    /**
     * @ORM\Column(type="string")
     */
    protected $last_name;

    /**
     * @ORM\Column(type="string")
     */
    protected $address;

    /**
     * @ORM\Column(type="float")
     */
    protected $sub_total;

    /**
     * @ORM\Column(type="float")
     */
    protected $vat;

    /**
     * @ORM\Column(type="float")
     */
    protected $total;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_cancelled;

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
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
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
    public function getSubTotal()
    {
        return $this->sub_total;
    }

    /**
     * @param mixed $sub_total
     */
    public function setSubTotal($sub_total)
    {
        $this->sub_total = $sub_total;
    }

    /**
     * @return mixed
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param mixed $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
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
     * @return mixed
     */
    public function getIsCancelled()
    {
        return $this->is_cancelled;
    }

    /**
     * @param mixed $is_cancelled
     */
    public function setIsCancelled($is_cancelled)
    {
        $this->is_cancelled = $is_cancelled;
    }


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Service", mappedBy="invoice")
     */
    private $services;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="invoices")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $user_invoice;


    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Booking", inversedBy="booking")
     * @ORM\JoinColumn(name="booking_id", referencedColumnName="id")
     */
    private $booking;


    public function __construct()
    {
        $this->service= new ArrayCollection();
    }
}