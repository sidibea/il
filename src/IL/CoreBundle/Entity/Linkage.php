<?php

namespace IL\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Souscription
 *
 * @ORM\Table(name="linkage")
 * @ORM\Entity(repositoryClass="IL\CoreBundle\Repository\SouscriptionRepository")
 */
class Linkage
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_de_compte", type="string", length=255)
     */
    private $numBanque;

    /**
     * @var string
     *
     * @ORM\Column(name="type_compte", type="string", length=255)
     */
    private $typeCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_carte", type="string", length=255)
     */
    private $statutCarte;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_liaison", type="string", length=255, nullable=true)
     */
    private $statutLiaison;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_no", type="string", length=255)
     */
    private $mobileNo;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_du_detenteur", type="string", length=255)
     */
    private $nomDetenteur;



    /**
     * @var string
     *
     * @ORM\Column(name="alias_account", type="string", length=255)
     */
    private $aliasAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="raison", type="string", length=255)
     */
    private $raison;

    /**
     * @var bool
     *
     * @ORM\Column(name="w2c", type="boolean")
     */
    private $cb2c;

    /**
     * @var bool
     *
     * @ORM\Column(name="c2w", type="boolean")
     */
    private $c2cb;

    /**
     * @var bool
     *
     * @ORM\Column(name="balance_inquery", type="boolean")
     */
    private $balanceInquery;

    /**
     * @var bool
     *
     * @ORM\Column(name="mini_statement", type="boolean")
     */
    private $miniStatement;








}

