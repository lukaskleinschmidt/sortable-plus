<?php

class PlusLayout extends BaseLayout {

  public $edit      = true;
  public $limit     = false;
  public $toggle    = true;
  public $delete    = true;
  public $preview   = true;
  public $duplicate = true;

  public function action($type, $data = array()) {
    return parent::action($type, a::update($data, [ 'disabled' => $this->$type() === false ]));
  }

}
