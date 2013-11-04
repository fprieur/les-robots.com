<?php
/**
 * Test controller for built-in web services in Cake 1.2.x.x
 *
 * @author Chris Hartjes
 *
 */

class FooController extends AppController
{
    var $components = array('RequestHandler');
    var $uses = '';
    var $helpers = array('Text', 'Xml');
    
    function index()
    {
        $message = 'Testing';
        $this->set('message', $message);
        $this->RequestHandler->respondAs('xml');
        $this->viewPath .= '/xml';
        $this->layoutPath = 'xml';
    }
}