<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
      $url=BASE_URL."/product";

      $this->response->redirect($url);
    }

}
