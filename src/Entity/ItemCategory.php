<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemCategory
 *
 * @ORM\Table(name="item_category", indexes={@ORM\Index(name="IDX_6A41D10A4FE96834", columns={"parent_id_cat"})})
 * @ORM\Entity
 */
class ItemCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="item_category_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="fire_danger", type="boolean", nullable=false)
     */
    private $fireDanger;

    /**
     * @var bool
     *
     * @ORM\Column(name="toxic", type="boolean", nullable=false)
     */
    private $toxic;

    /**
     * @var bool
     *
     * @ORM\Column(name="explosive", type="boolean", nullable=false)
     */
    private $explosive;

    /**
     * @var \ItemCategory
     *
     * @ORM\ManyToOne(targetEntity="ItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id_cat", referencedColumnName="id")
     * })
     */
    private $parentIdCat;


}
