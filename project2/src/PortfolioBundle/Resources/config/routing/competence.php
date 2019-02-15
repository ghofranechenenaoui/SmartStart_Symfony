<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('competence_index', new Route(
    '/',
    array('_controller' => 'PortfolioBundle:Competence:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('competence_show', new Route(
    '/{id}/show',
    array('_controller' => 'PortfolioBundle:Competence:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));




return $collection;
