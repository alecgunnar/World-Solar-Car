<?php

namespace SolarCar\Support\View;

interface ViewInterface
{
    /**
     * Supply parameters to be used while rendering
     * the view.
     *
     * @param mixed[] $params
     */
    public function addParams(array $params);

    /**
     * Render the view
     *
     * @return string
     */
    public function render(): string;
}
