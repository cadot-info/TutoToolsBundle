<?php

namespace Tuto\ToolsBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;

class TestService
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }



    public function cool(): string
    {
        return $this->container->getParameter('tuto_tools.my_var_string');
    }
}
