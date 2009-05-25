<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
		$this->view->title = 'My Albums';
		$this->view->headTitle($this->view->title, 'PREPEND');

		$albums = new Model_DbTable_Albums();
		$this->view->albums = $albums->fetchAll();
        // action body
    }

    public function addAction()
    {
        // action body
    }

    public function editAction()
    {
        // action body
    }

    public function deleteAction()
    {
        // action body
    }

}
