<?php

namespace AppBundle\Twig;
use AppBundle\Utils\Slugger;

class SlugifyExtension extends \Twig_Extension
{
    private $slugger;

    public function __construct(Slugger $slugger)
    {
        $this->slugger = $slugger;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('slugify', array($this, 'slugifyFilter')),
        );
    }

    public function slugifyFilter($string)
    {
        return $this->slugger->slugify($string);
    }

    public function getName()
    {
        return 'slugify_extension';
    }
}