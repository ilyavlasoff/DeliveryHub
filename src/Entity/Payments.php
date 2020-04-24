<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 *
 * @ORM\Table(name="payments")
 * @ORM\Entity
 */
class Payments
{
    /**
     * @var string
     *
     * @ORM\Column(name="sum", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $sum;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=10, nullable=false)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uip", type="string", length=25, nullable=true)
     */
    private $uip;

    /**
     * @var \Delivery
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Delivery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;


}
