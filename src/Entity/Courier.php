<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courier
 *
 * @ORM\Table(name="courier", indexes={@ORM\Index(name="IDX_CF134C7CDB46BC16", columns={"emp_passport"})})
 * @ORM\Entity
 */
class Courier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="courier_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="drive_cat", type="string", length=3, nullable=false)
     */
    private $driveCat;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emp_passport", referencedColumnName="passport")
     * })
     */
    private $empPassport;


}
