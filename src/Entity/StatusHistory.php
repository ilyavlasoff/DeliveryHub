<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusHistory
 *
 * @ORM\Table(name="status_history", indexes={@ORM\Index(name="IDX_2F6A07CE12136921", columns={"delivery_id"}), @ORM\Index(name="IDX_2F6A07CE4F139D0C", columns={"status_code"})})
 * @ORM\Entity
 */
class StatusHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="status_history_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_comment", type="string", length=50, nullable=true)
     */
    private $statusComment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="status_set_date", type="datetime", nullable=false)
     */
    private $statusSetDate;

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
     * @var \StatusCodes
     *
     * @ORM\ManyToOne(targetEntity="StatusCodes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_code", referencedColumnName="scode")
     * })
     */
    private $statusCode;


}
