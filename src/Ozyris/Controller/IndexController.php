<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 08/06/16
 * Time: 13:01
 */

namespace Ozyris\Controller;

class IndexController extends AbstractController
{

    public function indexAction()
    {
        return $this->getView();
    }
}
