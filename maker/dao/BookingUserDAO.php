<?php

require_once __DIR__ . '/DAO.php';

class BookingUserDAO extends DAO
{

  public function insert($data)
  {
    $errors = $this->validate($data);
    if (empty($errors)) {
      $sql = "INSERT INTO `maker_booking_users` (`lastname`, `firstname`, `email`, `province`, `city`, `street`, `number`, `phone`) VALUES ( :lastname, :firstname, :email, :province, :city, :street, :number, :phone)";
      $stmt = $this->pdo->prepare($sql);
      // $stmt->bindValue(':booking_tour_id', $data['booking_tour_id']);
      $stmt->bindValue(':lastname', $data['lastname']);
      $stmt->bindValue(':firstname', $data['firstname']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':province', $data['province']);
      $stmt->bindValue(':city', $data['city']);
      $stmt->bindValue(':street', $data['street']);
      $stmt->bindValue(':number', $data['number']);
      $stmt->bindValue(':phone', $data['phone']);
      if ($stmt->execute()) {
        // $insertedId = $this->pdo->lastInsertId();
        // return $this->selectById($insertedId);
      }
    }
    return false;
  }

  public function validate($data)
  {
    $errors = array();
    if (empty($data['lastname'])) {
      $errors['lastname'] = 'lastname is missing';
    }
    if (empty($data['firstname'])) {
      $errors['firstname'] = 'firstname is missing';
    }
    if (empty($data['email'])) {
      $errors['email'] = 'email is missing';
    }
    if (empty($data['province'])) {
      $errors['province'] = 'province is missing';
    }
    if (empty($data['city'])) {
      $errors['city'] = 'city is missing';
    }
    if (empty($data['street'])) {
      $errors['street'] = 'street is missing';
    }
    if (empty($data['number'])) {
      $errors['number'] = 'number is missing';
    }
    if (empty($data['phone'])) {
      $errors['phone'] = 'phone is missing';
    }
    return $errors;
  }
}
