<?php

namespace SolarCar\ComingSoon;

use SolarCar\Support\View\TwigView;

class View extends TwigView
{
    protected function getTemplateName(): string
    {
        return 'coming_soon.twig';
    }
}
