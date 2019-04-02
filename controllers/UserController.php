<?php
/**
 * Created by PhpStorm.
 * User: biv
 * Date: 02.04.2019
 * Time: 16:05
 */

namespace controllers;


use app\Controller;
use app\FrontController;

class UserController extends Controller implements IWebController
{
    /**
     * @var object $_fc instance of FrontController class
     * @var object $_model instance of FileModel class
     */
    private $_fc;
    public $_model;

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->_fc = FrontController::getInstance();
    }

    public function loginAction()
    {
        $output = $this->render(USER_AUTH_FILE,true);
        $this->_fc->setBody($output);
    }

}