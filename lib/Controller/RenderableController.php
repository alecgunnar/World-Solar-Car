<?php

namespace SolarCar\Support\Controller;

use SolarCar\Support\Controller\BaseController;
use SolarCar\Support\View\ViewInterface;

class RenderableController extends BaseController
{
    /**
     * @param ViewInterface $view
     * @param mixed $params = []
     */
    public function __construct(ViewInterface $view, array $params = [])
    {
        parent::__construct($view);
        $view->addParams($params);
    }

    protected function runAction()
    {
        // We do not need to do anything here...
    }
}
