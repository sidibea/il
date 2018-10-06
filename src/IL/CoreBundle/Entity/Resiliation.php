<?php

namespace IL\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Souscription
 *
 * @ORM\Table(name="resiliation")
 * @ORM\Entity(repositoryClass="IL\CoreBundle\Repository\SouscriptionRepository")
 */
class Resiliation
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
     * @ORM\Column(name="num_carte_prepaye", type="string", length=255)
     */
    private $numCartePrepaye;

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
     * @var bool
     *
     * @ORM\Column(name="mini_statement", type="boolean")
     */
    private $miniStatement;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setOperateur($operateur)
    {
        $this->operateur = $operateur;

        return $this;
    }

    /**
     * Get operateur
     *
     * @return string
     */
    public function getOperateur()
    {
        return $this->operateur;
    }

    /**
     * Set numCartePrepaye
     *
     * @param string $numCartePrepaye
     *
     * @return Souscription
     */
    public function setNumCartePrepaye($numCartePrepaye)
    {
        $this->numCartePrepaye = $numCartePrepaye;

        return $this;
    }

    /**
     * Get numCartePrepaye
     *
     * @return string
     */
    public function getNumCartePrepaye()
    {
        return $this->numCartePrepaye;
    }

    /**
     * Set statutCarte
     *
     * @param string $statutCarte
     *
     * @return Souscription
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
     * Set statutLiaison
     *
     * @param string $statutLiaison
     *
     * @return Souscription
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
     * Set mobileNo
     *
     * @param string $mobileNo
     *
     * @return Souscription
     */
    public function setMobileNo($mobileNo)
    {
        $this->mobileNo = $mobileNo;

        return $this;
    }

    /**
     * Get mobileNo
     *
     * @return string
     */
    public function getMobileNo()
    {
        return $this->mobileNo;
    }

    /**
     * Set nomCarte
     *
     * @param string $nomCarte
     *
     * @return Souscription
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
     * @return Souscription
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
     * Set aliasAccount
     *
     * @param string $aliasAccount
     *
     * @return Souscription
     */
    public function setAliasAccount($aliasAccount)
    {
        $this->aliasAccount = $aliasAccount;

        return $this;
    }

    /**
     * Get aliasAccount
     *
     * @return string
     */
    public function getAliasAccount()
    {
        return $this->aliasAccount;
    }

    /**
     * Set raison
     *
     * @param string $raison
     *
     * @return Souscription
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
     * @return Souscription
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
     * @param string $c2w
     *
     * @return Souscription
     */
    public function setC2w($c2w)
    {
        $this->c2w = $c2w;

        return $this;
    }

    /**
     * Get c2w
     *
     * @return string
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
     * @return Souscription
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
     * @return Souscription
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
}

