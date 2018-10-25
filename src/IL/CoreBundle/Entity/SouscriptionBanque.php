<?php

namespace IL\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SouscriptionBanque
 *
 * @ORM\Table(name="souscription_banque")
 * @ORM\Entity(repositoryClass="IL\CoreBundle\Repository\SouscriptionBanqueRepository")
 */
class SouscriptionBanque
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
     * @ORM\Column(name="numero_carte", type="string", length=255)
     */
    private $numeroCarte;

    /**
     * @var int
     *
     * @ORM\Column(name="mois_expiration", type="integer")
     */
    private $moisExpiration;

    /**
     * @var int
     *
     * @ORM\Column(name="annee_expiration", type="integer")
     */
    private $anneeExpiration;

    /**
     * @var string
     *
     * @ORM\Column(name="type_carte", type="string", length=255)
     */
    private $typeCarte;

    /**
     * @var string
     *
     * @ORM\Column(name="type_compte", type="string", length=255)
     */
    private $typeCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_liaison", type="string", length=255)
     */
    private $statutLiaison;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_carte", type="string", length=255)
     */
    private $statutCarte;



    /**
     * @var string
     *
     * @ORM\Column(name="nom_carte", type="string", length=255)
     */
    private $nomCarte;

    /**
     * @var string
     *
     * @ORM\Column(name="label_carte", type="string", length=255)
     */
    private $labelCarte;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_compte", type="string", length=255)
     */
    private $numeroCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="alias_compte", type="string", length=255)
     */
    private $aliasCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="raison", type="text", nullable=true)
     */
    private $raison;

    /**
     * @var bool
     *
     * @ORM\Column(name="cb2c", type="boolean")
     */
    private $cb2c;

    /**
     * @var bool
     *
     * @ORM\Column(name="c2cb", type="boolean")
     */
    private $c2cb;

    /**
     * @var bool
     *
     * @ORM\Column(name="balance_inquery", type="boolean")
     */
    private $balanceInquery;

    /**
     *
     * @ORM\ManyToOne(targetEntity="IL\UserBundle\Entity\User")
     */
    private $effectuerPar;

    /**
     * @var bool
     *
     * @ORM\Column(name="mini_statement", type="boolean")
     */
    private $miniStatement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNumeroCarte()
    {
        return $this->numeroCarte;
    }

    /**
     * @param string $numeroCarte
     */
    public function setNumeroCarte($numeroCarte)
    {
        $this->numeroCarte = $numeroCarte;
    }

    /**
     * @return int
     */
    public function getMoisExpiration()
    {
        return $this->moisExpiration;
    }

    /**
     * @param int $moisExpiration
     */
    public function setMoisExpiration($moisExpiration)
    {
        $this->moisExpiration = $moisExpiration;
    }

    /**
     * @return int
     */
    public function getAnneeExpiration()
    {
        return $this->anneeExpiration;
    }

    /**
     * @param int $anneeExpiration
     */
    public function setAnneeExpiration($anneeExpiration)
    {
        $this->anneeExpiration = $anneeExpiration;
    }

    /**
     * @return string
     */
    public function getTypeCarte()
    {
        return $this->typeCarte;
    }

    /**
     * @param string $typeCarte
     */
    public function setTypeCarte($typeCarte)
    {
        $this->typeCarte = $typeCarte;
    }

    /**
     * @return string
     */
    public function getTypeCompte()
    {
        return $this->typeCompte;
    }

    /**
     * @param string $typeCompte
     */
    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;
    }

    /**
     * @return string
     */
    public function getStatutLiaison()
    {
        return $this->statutLiaison;
    }

    /**
     * @param string $statutLiaison
     */
    public function setStatutLiaison($statutLiaison)
    {
        $this->statutLiaison = $statutLiaison;
    }

    /**
     * @return string
     */
    public function getStatutCarte()
    {
        return $this->statutCarte;
    }

    /**
     * @param string $statutCarte
     */
    public function setStatutCarte($statutCarte)
    {
        $this->statutCarte = $statutCarte;
    }



    /**
     * @return string
     */
    public function getNomCarte()
    {
        return $this->nomCarte;
    }

    /**
     * @param string $nomCarte
     */
    public function setNomCarte($nomCarte)
    {
        $this->nomCarte = $nomCarte;
    }

    /**
     * @return string
     */
    public function getLabelCarte()
    {
        return $this->labelCarte;
    }

    /**
     * @param string $labelCarte
     */
    public function setLabelCarte($labelCarte)
    {
        $this->labelCarte = $labelCarte;
    }

    /**
     * @return string
     */
    public function getNumeroCompte()
    {
        return $this->numeroCompte;
    }

    /**
     * @param string $numeroCompte
     */
    public function setNumeroCompte($numeroCompte)
    {
        $this->numeroCompte = $numeroCompte;
    }

    /**
     * @return string
     */
    public function getAliasCompte()
    {
        return $this->aliasCompte;
    }

    /**
     * @param string $aliasCompte
     */
    public function setAliasCompte($aliasCompte)
    {
        $this->aliasCompte = $aliasCompte;
    }

    /**
     * @return string
     */
    public function getRaison()
    {
        return $this->raison;
    }

    /**
     * @param string $raison
     */
    public function setRaison($raison)
    {
        $this->raison = $raison;
    }

    /**
     * @return bool
     */
    public function isCb2c()
    {
        return $this->cb2c;
    }

    /**
     * @param bool $cb2c
     */
    public function setCb2c($cb2c)
    {
        $this->cb2c = $cb2c;
    }

    /**
     * @return bool
     */
    public function isC2cb()
    {
        return $this->c2cb;
    }

    /**
     * @param bool $c2cb
     */
    public function setC2cb($c2cb)
    {
        $this->c2cb = $c2cb;
    }

    /**
     * @return bool
     */
    public function isBalanceInquery()
    {
        return $this->balanceInquery;
    }

    /**
     * @param bool $balanceInquery
     */
    public function setBalanceInquery($balanceInquery)
    {
        $this->balanceInquery = $balanceInquery;
    }

    /**
     * @return mixed
     */
    public function getEffectuerPar()
    {
        return $this->effectuerPar;
    }

    /**
     * @param mixed $effectuerPar
     */
    public function setEffectuerPar($effectuerPar)
    {
        $this->effectuerPar = $effectuerPar;
    }

    /**
     * @return bool
     */
    public function isMiniStatement()
    {
        return $this->miniStatement;
    }

    /**
     * @param bool $miniStatement
     */
    public function setMiniStatement($miniStatement)
    {
        $this->miniStatement = $miniStatement;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }




}

