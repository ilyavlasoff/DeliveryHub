<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Delivery
 *
 * @ORM\Table(name="delivery", indexes={@ORM\Index(name="IDX_3781EC108CDE5729", columns={"type"}), @ORM\Index(name="IDX_3781EC10F603EE73", columns={"vendor_id"}), @ORM\Index(name="IDX_3781EC10CD53EDB6", columns={"receiver_id"})})
 * @ORM\Entity
 */
class Delivery
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="delivery_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="dep_city", type="string", length=30, nullable=false)
     */
    private $depCity;

    /**
     * @var string
     *
     * @ORM\Column(name="dep_country", type="string", length=30, nullable=false)
     */
    private $depCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="dep_street", type="string", length=40, nullable=false)
     */
    private $depStreet;

    /**
     * @var int
     *
     * @ORM\Column(name="dep_building", type="integer", nullable=false)
     */
    private $depBuilding;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dep_flat", type="integer", nullable=true)
     */
    private $depFlat;

    /**
     * @var string
     *
     * @ORM\Column(name="dep_postcode", type="string", length=20, nullable=false)
     */
    private $depPostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="dest_city", type="string", length=30, nullable=false)
     */
    private $destCity;

    /**
     * @var string
     *
     * @ORM\Column(name="dest_country", type="string", length=30, nullable=false)
     */
    private $destCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="dest_street", type="string", length=40, nullable=false)
     */
    private $destStreet;

    /**
     * @var int
     *
     * @ORM\Column(name="dest_house", type="integer", nullable=false)
     */
    private $destHouse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dest_flat", type="integer", nullable=true)
     */
    private $destFlat;

    /**
     * @var string
     *
     * @ORM\Column(name="dest_postcode", type="string", length=20, nullable=false)
     */
    private $destPostcode;

    /**
     * @var float
     *
     * @ORM\Column(name="route_length", type="float", precision=10, scale=0, nullable=false)
     */
    private $routeLength;

    /**
     * @var \DeliveryType
     *
     * @ORM\ManyToOne(targetEntity="DeliveryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type", referencedColumnName="id")
     * })
     */
    private $type;

    /**
     * @var \Vendor
     *
     * @ORM\ManyToOne(targetEntity="Vendor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vendor_id", referencedColumnName="id")
     * })
     */
    private $vendor;

    /**
     * @var \Receiver
     *
     * @ORM\ManyToOne(targetEntity="Receiver")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="receiver_id", referencedColumnName="id")
     * })
     */
    private $receiver;


}
