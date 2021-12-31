<?php


namespace Ozyris\Controller;


class MentionsController extends AbstractController
{

    public function indexAction()
    {
        return $this->getView('mentions');
    }
}