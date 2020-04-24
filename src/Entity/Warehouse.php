<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warehouse
 *
 * @ORM\Table(name="warehouse")
 * @ORM\Entity
 */
class Warehouse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="warehouse_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=30, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=60, nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=50, nullable=false)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="building", type="string", length=10, nullable=false)
     */
    private $building;

    /**
     * @var float
     *
     * @ORM\Column(name="max_contain", type="float", precision=10, scale=0, nullable=false)
     */
    private $maxContain;


}
