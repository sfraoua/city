<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CityOpinion
 *
 * @ORM\Table(name="city_opinion")
 * @ORM\Entity
 */
class CityOpinion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="environment", type="smallint")
     */
    private $environment;

    /**
     * @var integer
     *
     * @ORM\Column(name="transport", type="smallint")
     */
    private $transport;

    /**
     * @var integer
     *
     * @ORM\Column(name="security", type="smallint")
     */
    private $security;

    /**
     * @var integer
     *
     * @ORM\Column(name="health", type="smallint")
     */
    private $health;

    /**
     * @var integer
     *
     * @ORM\Column(name="culture", type="smallint")
     */
    private $culture;

    /**
     * @var integer
     *
     * @ORM\Column(name="sportsAndLeisure", type="smallint")
     */
    private $sportsAndLeisure;

    /**
     * @var integer
     *
     * @ORM\Column(name="education", type="smallint")
     */
    private $education;

    /**
     * @var integer
     *
     * @ORM\Column(name="localCommerce", type="smallint")
     */
    private $localCommerce;

    /**
     * @var float
     *
     * @ORM\Column(name="overall", type="float")
     */
    private $overall;

    /**
     * @var string
     *
     * @ORM\Column(name="goodPointsMessage", type="text")
     */
    private $goodPointsMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="badPointsMessage", type="text")
     */
    private $badPointsMessage;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set environment
     *
     * @param integer $environment
     * @return CityOpinion
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;

        return $this;
    }

    /**
     * Get environment
     *
     * @return integer 
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Set transport
     *
     * @param integer $transport
     * @return CityOpinion
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Get transport
     *
     * @return integer 
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set security
     *
     * @param integer $security
     * @return CityOpinion
     */
    public function setSecurity($security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * Get security
     *
     * @return integer 
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set health
     *
     * @param integer $health
     * @return CityOpinion
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get health
     *
     * @return integer 
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set sportsAndLeisure
     *
     * @param integer $sportsAndLeisure
     * @return CityOpinion
     */
    public function setSportsAndLeisure($sportsAndLeisure)
    {
        $this->sportsAndLeisure = $sportsAndLeisure;

        return $this;
    }

    /**
     * Get sportsAndLeisure
     *
     * @return integer 
     */
    public function getSportsAndLeisure()
    {
        return $this->sportsAndLeisure;
    }

    /**
     * Set education
     *
     * @param integer $education
     * @return CityOpinion
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return integer 
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set localCommerce
     *
     * @param integer $localCommerce
     * @return CityOpinion
     */
    public function setLocalCommerce($localCommerce)
    {
        $this->localCommerce = $localCommerce;

        return $this;
    }

    /**
     * Get localCommerce
     *
     * @return integer 
     */
    public function getLocalCommerce()
    {
        return $this->localCommerce;
    }

    /**
     * Set overall
     *
     * @param float $overall
     * @return CityOpinion
     */
    public function setOverall($overall)
    {
        $this->overall = $overall;

        return $this;
    }

    /**
     * Get overall
     *
     * @return float 
     */
    public function getOverall()
    {
        return $this->overall;
    }

    /**
     * Set goodPointsMessage
     *
     * @param string $goodPointsMessage
     * @return CityOpinion
     */
    public function setGoodPointsMessage($goodPointsMessage)
    {
        $this->goodPointsMessage = $goodPointsMessage;

        return $this;
    }

    /**
     * Get goodPointsMessage
     *
     * @return string 
     */
    public function getGoodPointsMessage()
    {
        return $this->goodPointsMessage;
    }

    /**
     * Set badPointsMessage
     *
     * @param string $badPointsMessage
     * @return CityOpinion
     */
    public function setBadPointsMessage($badPointsMessage)
    {
        $this->badPointsMessage = $badPointsMessage;

        return $this;
    }

    /**
     * Get badPointsMessage
     *
     * @return string 
     */
    public function getBadPointsMessage()
    {
        return $this->badPointsMessage;
    }

    /**
     * Set culture
     *
     * @param integer $culture
     * @return CityOpinion
     */
    public function setCulture($culture)
    {
        $this->culture = $culture;

        return $this;
    }

    /**
     * Get culture
     *
     * @return integer 
     */
    public function getCulture()
    {
        return $this->culture;
    }
}
