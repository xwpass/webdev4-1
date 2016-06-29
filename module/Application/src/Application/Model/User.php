<?php

namespace Application\Model;


class User{
  private $id;

  private $firstname;
  private $middlename;
  private $lastname;

  private $email;
  /**
  *@var array
  */
  private $skills;

  // private $img;
  // private $desc;

  public function __construct($id,$firstname,$middlename, $lastname,$email, $skills)
  {
    $this->id = $id;
    $this->firstname = $firstname;
    $this->middlename = $middlename;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->skills = explode(",", $skills);
  }

  public function addSkill($skill){

    array_push($this->skills, trim($skill));

  }

  public function getId()
  {
    return $this->id;
  }

  public function getName(){

    return "$this->firstname $this->middlename $this->lastname";

  }

  public function getEmail(){

    return $this->email;

  }

  public function getSkills()
  {
    return $this->skills;
  }

  public function getAll_array()
  {
    return array(
      'id' => $this->id,
      'name'=> "$this->firstname $this->middlename $this->lastname",
      'email'=> $this->email,
      'skills' => $this->skills,
    );
  }






}


?>
