<?php

namespace App;


class Route
{
    private $route;

    public function initRoutes()
    {
        $routes['home'] = array("route"=>'/',"controller"=>"indexController","action"=>"index");
        $routes['contact'] = array("route"=>'/contact',"controller"=>"indexController","action"=>"contact");
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
}