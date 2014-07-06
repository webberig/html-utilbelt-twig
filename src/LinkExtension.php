<?php
namespace Webberig\HtmlUtilbelt\Twig;
/**
 * Description of newPHPClass
 *
 * @author webberig
 */
class LinkExtension extends \Twig_Extension, Webberig\HtmlUtilbelt\Generator\Link {
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('link', array($this, "link")),
            new \Twig_SimpleFilter('anchor', array($this, "anchor"))
        );
    }
}
