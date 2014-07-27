<?php
namespace Webberig\HtmlUtilbelt\Twig;

use Webberig\HtmlUtilbelt\Generator\General;

/**
 * Description of newPHPClass
 *
 * @author webberig
 */
class GeneralExtension extends \Twig_Extension {
    private $generator;
    public function getName() {
        return "htmlutilbelt_general";
    }

    function __construct()
    {
        $this->generator = new General();
    }
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('abbr', array($this->generator, "abbr"), array('is_safe' => array('html')))
        );
    }
}
