<?php

namespace SolarCar\Support\Controller;

use SolarCar\Support\View\ViewInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;

abstract class BaseController
{
    /**
     * @var ServerRequestInterface
     */
    protected $request;

    /**
     * @var ResponseInterface
     */
    protected $response;

    /**
     * @var ViewInterface
     */
    protected $view;

    /**
     * @param ViewInterface $view
     */
    public function __construct(ViewInterface $view)
    {
        $this->view = $view;
    }

    /**
     * @param ServerRequestInterface $request
     *
     * @return ResponseInterface
     */
    final public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $this->request = $request;
        $this->response = new Response();

        $this->runAction();

        $this->response->getBody()
            ->write($this->view->render());

        return $this->response;
    }

    /**
     * Perform the actions necessary for this controller
     */
    abstract protected function runAction();
}
