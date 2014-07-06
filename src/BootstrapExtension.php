<?php
namespace Webberig\HtmlUtilbelt\Twig;

/**
 * Description of newPHPClass
 *
 * @author webberig
 */
class BootstrapExtension extends \Twig_Extension, Webberig\HtmlUtilbelt\Generator\Bootstrap {
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('lead', array($this, "lead")),
            new \Twig_SimpleFilter('help', array($this, "help")),
            new \Twig_SimpleFilter('button', array($this, "button")),
            new \Twig_SimpleFilter('submit', array($this, "submit")),
            new \Twig_SimpleFilter('glyphicon', array($this, "glyphicon"))

        );
    }
}