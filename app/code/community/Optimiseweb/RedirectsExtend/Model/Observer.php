<?php

/**
 * Optimiseweb RedirectsExtend Model Redirector
 *
 * @package     Optimiseweb_RedirectsExtend
 * @author      Kathir Vel (vkathirvel@gmail.com)
 * @copyright   Copyright (c) 2015 Kathir Vel
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Optimiseweb_RedirectsExtend_Model_Observer extends Varien_Object
{

    /**
     * Run before the Legacy version of redirection is executed
     * 
     * @param type $evt
     */
    public function beforeLegacy($evt)
    {
        $event = $evt->getEvent();
        $requestUrl = $event->getRequestUrl();
    }

    /**
     * Run before the Version One of redirection is executed
     * 
     * @param type $evt
     */
    public function beforeVersionOne($evt)
    {
        $event = $evt->getEvent();
        $requestUrl = $event->getRequestUrl();
    }

    /**
     * Run before the Query Strings version of redirection is executed
     * 
     * @param type $evt
     */
    public function beforeQueryStrings($evt)
    {
        $event = $evt->getEvent();
        $requestUrl = $event->getRequestUrl();
    }

    /**
     * Run before the Catalogue Search version of redirection is executed
     * 
     * @param type $evt
     */
    public function beforeCatalogueSearch($evt)
    {
        $event = $evt->getEvent();
        $requestUrl = $event->getRequestUrl();
    }

    /**
     * Run before the module gives up and router flow exits to display a 404 page
     * 
     * @param type $evt
     */
    public function beforeExiting($evt)
    {
        $event = $evt->getEvent();
        $requestUrl = $event->getRequestUrl();
    }

}
