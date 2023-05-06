<?php

class Admin {
  private ?int $idAdmin = null;
  private ?int $idClient = null;
  private ?string $firstName = null;
  private ?string $lastName = null;
  private ?string $email = null;
  private ?string $password = null;

  //Construct
  public function __construct(
    $idAdmin,
    $firstName,
    $lastName,
    $email,
    $password,
    $idClient,
  ) {
    $this->idAdmin = $idAdmin;
    $this->idClient = $idClient;
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->password = $password;
  }

  // Getters
  public function getIdAdmin() {
    return $this->idAdmin;
  }

  public function getIdClient() {
    return $this->idClient;
  }

  public function getFirstName() {
    return $this->firstName;
  }
  public function getLastName() {
    return $this->lastName;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getPassword() {
    return $this->password;
  }

  // Setters
  public function setId($idAdmin) {
    $this->idAdmin = $idAdmin;
  }

  public function setIdClient($idClient) {
    $this->idClient = $idClient;
  }

  public function setFirstName($firstName) {
    $this->firstName = $firstName;
  }

  public function setLastName($lastName) {
    $this->lastName = $lastName;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function setPassword($password) {
    $this->password = $password;
  }
}

?>