<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auto
 *
 * @ORM\Table(name="auto")
 * @ORM\Entity
 */
class Auto
{
    /**
     * @var string
     *
     * @ORM\Column(name="num", type="string", length=8, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="auto_num_seq", allocationSize=1, initialValue=1)
     */
    private $num;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand", type="string", length=30, nullable=true)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="required_drive_cat", type="string", length=3, nullable=false)
     */
    private $requiredDriveCat;

    /**
     * @var float
     *
     * @ORM\Column(name="capacity", type="float", precision=10, scale=0, nullable=false)
     */
    private $capacity;

    /**
     * @var bool
     *
     * @ORM\Column(name="if_functional", type="boolean", nullable=false)
     */
    private $ifFunctional;


}
