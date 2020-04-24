<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carry
 *
 * @ORM\Table(name="carry", indexes={@ORM\Index(name="IDX_F88F04341AF3E551", columns={"workshift_id"}), @ORM\Index(name="IDX_F88F043412136921", columns={"delivery_id"}), @ORM\Index(name="IDX_F88F0434FC2F1E46", columns={"from_warehouse"}), @ORM\Index(name="IDX_F88F0434DD105C8D", columns={"to_warehouse"})})
 * @ORM\Entity
 */
class Carry
{
    /**
     * @var \WorkShift
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="WorkShift")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="workshift_id", referencedColumnName="workshift_id")
     * })
     */
    private $workshift;

    /**
     * @var \Delivery
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Delivery")
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
     *   @ORM\JoinColumn(name="from_warehouse", referencedColumnName="id")
     * })
     */
    private $fromWarehouse;

    /**
     * @var \Warehouse
     *
     * @ORM\ManyToOne(targetEntity="Warehouse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_warehouse", referencedColumnName="id")
     * })
     */
    private $toWarehouse;


}
