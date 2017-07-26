<?php

class SortablePlusField extends SortableField {

  public $add     = true;
  public $copy    = true;
  public $paste   = true;
  public $layout  = 'plus';
  public $actions = array(
    'edit',
    'duplicate',
    'delete',
    'toggle',
  );

}
