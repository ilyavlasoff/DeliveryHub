<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusCodes
 *
 * @ORM\Table(name="status_codes")
 * @ORM\Entity
 */
class StatusCodes
{
    /**
     * @var string
     *
     * @ORM\Column(name="scode", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="status_codes_scode_seq", allocationSize=1, initialValue=1)
     */
    private $scode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=30, nullable=true)
     */
    private $title;


}
