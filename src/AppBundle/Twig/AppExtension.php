<?php

namespace AppBundle\Twig;

class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('user', array($this, 'userFilter')),
        );
    }

    public function userFilter($id)
    {
    }
}