<?php

namespace SolarCar\Support\View;

use Twig_Environment;
use Twig_TemplateWrapper;

abstract class TwigView implements ViewInterface
{
    /**
     * @var Twig_Environment
     */
    protected $twig;

    /**
     * @var mixed[]
     */
    protected $params = [];

    /**
     * @param Twig_Environment $twig
     */
    public function __construct(Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function addParams(array $params)
    {
        $this->params = array_merge($this->params, $params);
    }

    public function render(): string
    {
        $this->processParams();

        return $this->twig->render($this->getTemplateName(), $this->params);
    }

    /**
     * Return the name of the Twig template to be rendered
     *
     * @return string
     */
    abstract protected function getTemplateName(): string;

    /**
     * Do any view specific processing needed on the params
     * before rendering takes place
     */
    protected function processParams()
    {
        // Does nothing by default
    }
}
