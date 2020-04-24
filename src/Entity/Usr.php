<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usr
 *
 * @ORM\Table(name="usr")
 * @ORM\Entity
 */
class Usr
{
    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="usr_login_seq", allocationSize=1, initialValue=1)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="hpasswd", type="string", length=255, nullable=false)
     */
    private $hpasswd;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=false)
     */
    private $type;


}
