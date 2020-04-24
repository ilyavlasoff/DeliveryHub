<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employee", indexes={@ORM\Index(name="IDX_5D9F75A148CA3048", columns={"user_login"}), @ORM\Index(name="IDX_5D9F75A1E5B533F9", columns={"appointment_id"}), @ORM\Index(name="IDX_5D9F75A15080ECDE", columns={"warehouse_id"})})
 * @ORM\Entity
 */
class Employee
{
    /**
     * @var string
     *
     * @ORM\Column(name="passport", type="string", length=10, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="employee_passport_seq", allocationSize=1, initialValue=1)
     */
    private $passport;

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
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="datetime", nullable=false)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="oms_num", type="string", length=16, nullable=false, options={"fixed"=true})
     */
    private $omsNum;

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

    /**
     * @var \Appointment
     *
     * @ORM\ManyToOne(targetEntity="Appointment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="appointment_id", referencedColumnName="id")
     * })
     */
    private $appointment;

    /**
     * @var \Warehouse
     *
     * @ORM\ManyToOne(targetEntity="Warehouse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="warehouse_id", referencedColumnName="id")
     * })
     */
    private $warehouse;


}
