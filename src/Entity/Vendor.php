<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendor
 *
 * @ORM\Table(name="vendor", indexes={@ORM\Index(name="IDX_F52233F648CA3048", columns={"user_login"})})
 * @ORM\Entity
 */
class Vendor
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="vendor_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ogrn", type="string", length=13, nullable=false, options={"fixed"=true})
     */
    private $ogrn;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cor_acc", type="string", length=20, nullable=true, options={"fixed"=true})
     */
    private $corAcc;

    /**
     * @var string
     *
     * @ORM\Column(name="bik", type="string", length=9, nullable=false, options={"fixed"=true})
     */
    private $bik;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_city", type="string", length=100, nullable=false)
     */
    private $bankCity;

    /**
     * @var string
     *
     * @ORM\Column(name="kpp", type="string", length=9, nullable=false, options={"fixed"=true})
     */
    private $kpp;

    /**
     * @var string
     *
     * @ORM\Column(name="inn", type="string", length=12, nullable=false, options={"fixed"=true})
     */
    private $inn;

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
