<?php

namespace TeachMe\Components;

/**
 * Created by PhpStorm.
 * User: Jonier
 * Date: 2016-07-18
 * Time: 3:46 PM
 */



use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Contracts\View\Factory as View;
use Illuminate\Routing\UrlGenerator;

use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

class HtmlBuilder extends CollectiveHtmlBuilder
{

    /**
     * @var Config
     */
    private $config;
    /**
     * @var View
     */
    private $view;

    public function __construct(Config $config, View $view, UrlGenerator $url)
    {

        $this->config = $config;
        $this->view = $view;
        $this->url = $url;
    }


    public function menu($items)
    {
        if( ! is_array($items)){
            $items = $this->config->get($items, array());
        }
        return $this->view->make('partials/menu', compact('items'));
    }

    /**
     * Build an HTML class attribute dynamically
     * Usage:
     * {!! Html::classes(['home' => true, 'main', 'dont-use-this' => false]) !!}
     * Returns:
     *  class = "home main"
     *
     * @param array $classes
     *
     * @return string
     */

    public function classes(array $classes)
    {
        $html = '';
        //dd($classes);
        foreach ($classes as $name => $bool){
//            dd($name);
//            dd(is_int($name));

            if(is_int($name)){
                $name = $bool;
                $bool = true;
            }

            if($bool){
                $html .= $name.' ';
            }
        }
        if(! empty($html)){
            return ' class = "'.trim($html).'"';
        }
        return '';
    }
}
/*
Ariendo                         580
Virgin + Videotron              200
Hidroquebec + HidroSoluciones   100
Transporte                      270
Seguros                          60
Coomeva                          75
Tarjetas                        300
Carro                           364
Comida                          300
Ahorro                          250
                               2399
*/








