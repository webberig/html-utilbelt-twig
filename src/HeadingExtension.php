<?php
namespace Webberig\HtmlUtilbelt\Twig;
/**
 * Description of newPHPClass
 *
 * @author webberig
 */
class HeadingExtension extends \Twig_Extension, Webberig\HtmlUtilbelt\Generator\Heading {
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('h1', array($this, "h1")),
            new \Twig_SimpleFilter('h2', array($this, "h2")),
            new \Twig_SimpleFilter('h3', array($this, "h3")),
            new \Twig_SimpleFilter('h4', array($this, "h4")),
            new \Twig_SimpleFilter('h5', array($this, "h5")),
            new \Twig_SimpleFilter('h6', array($this, "h6"))
        );
    }
}
