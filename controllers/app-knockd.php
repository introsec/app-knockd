<?php

/**
 * Knockd Server controller.
 *
 * @category   Apps
 * @package    Knockd_Server
 * @subpackage Views
 * @author     Your name <your@e-mail>
 * @copyright  2013 Your name / Company
 * @license    Your license
 */

///////////////////////////////////////////////////////////////////////////////
// C L A S S
///////////////////////////////////////////////////////////////////////////////

/**
 * Knockd Server controller.
 *
 * @category   Apps
 * @package    Knockd_Server
 * @subpackage Controllers
 * @author     Your name <your@e-mail>
 * @copyright  2013 Your name / Company
 * @license    Your license
 */

class App-knockd extends ClearOS_Controller
{
    /**
     * Knockd Server default controller.
     *
     * @return view
     */

    function index()
    {
        // Load dependencies
        //------------------

        $this->lang->load('app-knockd');

        // Load views
        //-----------

        $this->page->view_form('app-knockd', NULL, lang('app-knockd_app_name'));
    }
}
