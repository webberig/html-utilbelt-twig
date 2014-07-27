<?php
namespace Webberig\HtmlUtilbelt\Twig;

use Webberig\HtmlUtilbelt\Generator\Heading;

/**
 * Description of newPHPClass
 *
 * @author webberig
 */
class HeadingExtension extends \Twig_Extension {
    private $generator;
    public function getName() {
        return "htmlutilbelt_heading";
    }

    function __construct()
    {
        $this->generator = new Heading();
    }
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('h1', array($this->generator, "h1"), array('is_safe' => array('html'))),
            new \Twig_SimpleFilter('h2', array($this->generator, "h2"), array('is_safe' => array('html'))),
            new \Twig_SimpleFilter('h3', array($this->generator, "h3"), array('is_safe' => array('html'))),
            new \Twig_SimpleFilter('h4', array($this->generator, "h4"), array('is_safe' => array('html'))),
            new \Twig_SimpleFilter('h5', array($this->generator, "h5"), array('is_safe' => array('html'))),
            new \Twig_SimpleFilter('h6', array($this->generator, "h6"), array('is_safe' => array('html')))
        );
    }
}
