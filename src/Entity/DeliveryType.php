<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeliveryType
 *
 * @ORM\Table(name="delivery_type")
 * @ORM\Entity
 */
class DeliveryType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="delivery_type_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="max_distance", type="float", precision=10, scale=0, nullable=false)
     */
    private $maxDistance;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $price;


}
