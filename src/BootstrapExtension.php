<?php
namespace Webberig\HtmlUtilbelt\Twig;

use Webberig\HtmlUtilbelt\Generator\Bootstrap;

/**
 * Description of newPHPClass
 *
 * @author webberig
 */
class BootstrapExtension extends \Twig_Extension {
    private $generator;
    public function getName() {
        return "htmlutilbelt_bootstrap";
    }

    function __construct()
    {
        $this->generator = new Bootstrap();
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('lead', array($this->generator, "lead"), array('is_safe' => array('html'))),
            new \Twig_SimpleFilter('help', array($this->generator, "help"), array('is_safe' => array('html'))),
            new \Twig_SimpleFilter('button', array($this->generator, "button"), array('is_safe' => array('html'))),
            new \Twig_SimpleFilter('submit', array($this->generator, "submit"), array('is_safe' => array('html'))),
            new \Twig_SimpleFilter('glyphicon', array($this->generator, "glyphicon"), array('is_safe' => array('html')))

        );
    }
}