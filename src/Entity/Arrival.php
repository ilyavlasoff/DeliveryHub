<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arrival
 *
 * @ORM\Table(name="arrival", indexes={@ORM\Index(name="IDX_5BE55CB412136921", columns={"delivery_id"}), @ORM\Index(name="IDX_5BE55CB45080ECDE", columns={"warehouse_id"})})
 * @ORM\Entity
 */
class Arrival
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="arrival_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="arrival_date", type="datetime", nullable=true)
     */
    private $arrivalDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="departure_date", type="datetime", nullable=true)
     */
    private $departureDate;

    /**
     * @var int
     *
     * @ORM\Column(name="storage", type="integer", nullable=false)
     */
    private $storage;

    /**
     * @var int
     *
     * @ORM\Column(name="shelf", type="integer", nullable=false)
     */
    private $shelf;

    /**
     * @var int
     *
     * @ORM\Column(name="place", type="integer", nullable=false)
     */
    private $place;

    /**
     * @var \Delivery
     *
     * @ORM\ManyToOne(targetEntity="Delivery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_id", referencedColumnName="id")
     * })
     */
    private $delivery;

    /**
     * @var \Warehouse
     *
     * @ORM\ManyToOne(targetEntity="Warehouse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="warehouse_id", referencedColumnName="id")
     * })
     */
    private $warehouse;


}
