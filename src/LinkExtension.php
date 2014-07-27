<?php
namespace Webberig\HtmlUtilbelt\Twig;

use Webberig\HtmlUtilbelt\Generator\Link;

/**
 * Description of newPHPClass
 *
 * @author webberig
 */
class LinkExtension extends \Twig_Extension {
    private $generator;
    public function getName() {
        return "htmlutilbelt_link";
    }

    function __construct()
    {
        $this->generator = new Link();
    }
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('link', array($this->generator, "link"), array('is_safe' => array('html'))),
            new \Twig_SimpleFilter('anchor', array($this->generator, "anchor"), array('is_safe' => array('html')))
        );
    }
}
