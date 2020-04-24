<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkShift
 *
 * @ORM\Table(name="work_shift", indexes={@ORM\Index(name="IDX_8DF0406AE3D8151C", columns={"courier_id"}), @ORM\Index(name="IDX_8DF0406AFC8E4603", columns={"auto_num"})})
 * @ORM\Entity
 */
class WorkShift
{
    /**
     * @var int
     *
     * @ORM\Column(name="workshift_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="work_shift_workshift_id_seq", allocationSize=1, initialValue=1)
     */
    private $workshiftId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_time", type="datetime", nullable=true)
     */
    private $endTime;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var \Courier
     *
     * @ORM\ManyToOne(targetEntity="Courier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="courier_id", referencedColumnName="id")
     * })
     */
    private $courier;

    /**
     * @var \Auto
     *
     * @ORM\ManyToOne(targetEntity="Auto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auto_num", referencedColumnName="num")
     * })
     */
    private $autoNum;


}
