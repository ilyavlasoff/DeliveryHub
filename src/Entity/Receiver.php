<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Receiver
 *
 * @ORM\Table(name="receiver", indexes={@ORM\Index(name="IDX_3DB88C9648CA3048", columns={"user_login"})})
 * @ORM\Entity
 */
class Receiver
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="receiver_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=20, nullable=false)
     */
    private $surname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patronymic", type="string", length=30, nullable=true)
     */
    private $patronymic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="passport", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $passport;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=11, nullable=false, options={"fixed"=true})
     */
    private $phone;

    /**
     * @var \Usr
     *
     * @ORM\ManyToOne(targetEntity="Usr")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_login", referencedColumnName="login")
     * })
     */
    private $userLogin;


}
