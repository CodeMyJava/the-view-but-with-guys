<?php

class Tasks extends CSV_Model {
public function __construct()
  {
    parent::__construct(PATHOFTASKS, 'id');
  }
}
