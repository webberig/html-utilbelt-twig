<?php
namespace Webberig\HtmlUtilbelt\Twig;
/**
 * Description of newPHPClass
 *
 * @author webberig
 */
class GeneralExtension extends \Twig_Extension, Webberig\HtmlUtilbelt\Generator\General {
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('abbr', array($this, "abbr"))
        );
    }
}
