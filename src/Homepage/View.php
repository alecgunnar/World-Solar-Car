<?php

namespace SolarCar\Homepage;

use SolarCar\Support\View\TwigView;

class View extends TwigView
{
    protected function getTemplateName(): string
    {
        return 'homepage.twig';
    }
}
