<?php
/**
 *
 */
class Users extends Database
{

  function __construct()
  {

  }

  //For test
  public function getAllMembers()
  {
    return $this->select("SELECT * FROM members");
  }
}
 ?>
