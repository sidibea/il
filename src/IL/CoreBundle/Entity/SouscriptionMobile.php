<?php

namespace IL\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SouscriptionMobile
 *
 * @ORM\Table(name="souscription_mobile")
 * @ORM\Entity(repositoryClass="IL\CoreBundle\Repository\SouscriptionMobileRepository")
 */
class SouscriptionMobile
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
     * @ORM\Column(name="operateur", type="string", length=255)
     */
    private $operateur;

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
     * @ORM\Column(name="numero_mobile", type="string", length=255)
     */
    private $numeroMobile;

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
     * @ORM\Column(name="w2c", type="boolean")
     */
    private $w2c;

    /**
     * @var bool
     *
     * @ORM\Column(name="c2w", type="boolean")
     */
    private $c2w;

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
     * Set numeroCarte
     *
     * @param string $numeroCarte
     *
     * @return SouscriptionMobile
     */
    public function setNumeroCarte($numeroCarte)
    {
        $this->numeroCarte = $numeroCarte;

        return $this;
    }

    /**
     * Get numeroCarte
     *
     * @return string
     */
    public function getNumeroCarte()
    {
        return $this->numeroCarte;
    }

    /**
     * Set moisExpiration
     *
     * @param integer $moisExpiration
     *
     * @return SouscriptionMobile
     */
    public function setMoisExpiration($moisExpiration)
    {
        $this->moisExpiration = $moisExpiration;

        return $this;
    }

    /**
     * Get moisExpiration
     *
     * @return int
     */
    public function getMoisExpiration()
    {
        return $this->moisExpiration;
    }

    /**
     * Set anneeExpiration
     *
     * @param integer $anneeExpiration
     *
     * @return SouscriptionMobile
     */
    public function setAnneeExpiration($anneeExpiration)
    {
        $this->anneeExpiration = $anneeExpiration;

        return $this;
    }

    /**
     * Get anneeExpiration
     *
     * @return int
     */
    public function getAnneeExpiration()
    {
        return $this->anneeExpiration;
    }

    /**
     * Set typeCarte
     *
     * @param string $typeCarte
     *
     * @return SouscriptionMobile
     */
    public function setTypeCarte($typeCarte)
    {
        $this->typeCarte = $typeCarte;

        return $this;
    }

    /**
     * Get typeCarte
     *
     * @return string
     */
    public function getTypeCarte()
    {
        return $this->typeCarte;
    }

    /**
     * Set statutLiaison
     *
     * @param string $statutLiaison
     *
     * @return SouscriptionMobile
     */
    public function setStatutLiaison($statutLiaison)
    {
        $this->statutLiaison = $statutLiaison;

        return $this;
    }

    /**
     * Get statutLiaison
     *
     * @return string
     */
    public function getStatutLiaison()
    {
        return $this->statutLiaison;
    }

    /**
     * Set statutCarte
     *
     * @param string $statutCarte
     *
     * @return SouscriptionMobile
     */
    public function setStatutCarte($statutCarte)
    {
        $this->statutCarte = $statutCarte;

        return $this;
    }

    /**
     * Get statutCarte
     *
     * @return string
     */
    public function getStatutCarte()
    {
        return $this->statutCarte;
    }

    /**
     * Set numeroMobile
     *
     * @param string $numeroMobile
     *
     * @return SouscriptionMobile
     */
    public function setNumeroMobile($numeroMobile)
    {
        $this->numeroMobile = $numeroMobile;

        return $this;
    }

    /**
     * Get numeroMobile
     *
     * @return string
     */
    public function getNumeroMobile()
    {
        return $this->numeroMobile;
    }

    /**
     * Set nomCarte
     *
     * @param string $nomCarte
     *
     * @return SouscriptionMobile
     */
    public function setNomCarte($nomCarte)
    {
        $this->nomCarte = $nomCarte;

        return $this;
    }

    /**
     * Get nomCarte
     *
     * @return string
     */
    public function getNomCarte()
    {
        return $this->nomCarte;
    }

    /**
     * Set labelCarte
     *
     * @param string $labelCarte
     *
     * @return SouscriptionMobile
     */
    public function setLabelCarte($labelCarte)
    {
        $this->labelCarte = $labelCarte;

        return $this;
    }

    /**
     * Get labelCarte
     *
     * @return string
     */
    public function getLabelCarte()
    {
        return $this->labelCarte;
    }

    /**
     * Set aliasCompte
     *
     * @param string $aliasCompte
     *
     * @return SouscriptionMobile
     */
    public function setAliasCompte($aliasCompte)
    {
        $this->aliasCompte = $aliasCompte;

        return $this;
    }

    /**
     * Get aliasCompte
     *
     * @return string
     */
    public function getAliasCompte()
    {
        return $this->aliasCompte;
    }

    /**
     * Set raison
     *
     * @param string $raison
     *
     * @return SouscriptionMobile
     */
    public function setRaison($raison)
    {
        $this->raison = $raison;

        return $this;
    }

    /**
     * Get raison
     *
     * @return string
     */
    public function getRaison()
    {
        return $this->raison;
    }

    /**
     * Set w2c
     *
     * @param boolean $w2c
     *
     * @return SouscriptionMobile
     */
    public function setW2c($w2c)
    {
        $this->w2c = $w2c;

        return $this;
    }

    /**
     * Get w2c
     *
     * @return bool
     */
    public function getW2c()
    {
        return $this->w2c;
    }

    /**
     * Set c2w
     *
     * @param boolean $c2w
     *
     * @return SouscriptionMobile
     */
    public function setC2w($c2w)
    {
        $this->c2w = $c2w;

        return $this;
    }

    /**
     * Get c2w
     *
     * @return bool
     */
    public function getC2w()
    {
        return $this->c2w;
    }

    /**
     * Set balanceInquery
     *
     * @param boolean $balanceInquery
     *
     * @return SouscriptionMobile
     */
    public function setBalanceInquery($balanceInquery)
    {
        $this->balanceInquery = $balanceInquery;

        return $this;
    }

    /**
     * Get balanceInquery
     *
     * @return bool
     */
    public function getBalanceInquery()
    {
        return $this->balanceInquery;
    }

    /**
     * Set miniStatement
     *
     * @param boolean $miniStatement
     *
     * @return SouscriptionMobile
     */
    public function setMiniStatement($miniStatement)
    {
        $this->miniStatement = $miniStatement;

        return $this;
    }

    /**
     * Get miniStatement
     *
     * @return bool
     */
    public function getMiniStatement()
    {
        return $this->miniStatement;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return SouscriptionMobile
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return SouscriptionMobile
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @return string
     */
    public function getOperateur()
    {
        return $this->operateur;
    }

    /**
     * @param string $operateur
     */
    public function setOperateur($operateur)
    {
        $this->operateur = $operateur;
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




}

