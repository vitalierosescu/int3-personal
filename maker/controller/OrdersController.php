<?php

require_once(__DIR__ . '/Controller.php');
require_once(__DIR__ . '/../dao/BookingUserDAO.php');

class OrdersController extends Controller
{
  private $bookingUserDAO;

  function __construct()
  {
    $this->bookingUserDAO = new BookingUserDAO();
  }

  public function checkout()
  {
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'addBookingUser') {
        $dataTour = array(
          // 'tour' => $item['tour']['title'],
          // 'quantity' => $item['amount']
        );

        $this->addBooking();
      }
    }


    $this->set('title', 'Checkout');
  }



  private function addBooking()
  {
    $errors = array();

    if (empty($_POST['lastname'])) {
      $errors['lastname'] = 'Gelieve een naam in te vullen';
    }

    if (empty($_POST['firstname'])) {
      $errors['firstname'] = 'Gelieve een voornaam in te vullen';
    }

    if (empty($_POST['email'])) {
      $errors['email'] = 'Gelieve een email in te vullen';
    }

    if (empty($_POST['phone'])) {
      $errors['phone'] = 'Gelieve een gsm nummer in te vullen';
    }

    if (empty($_POST['city'])) {
      $errors['city'] = 'Gelieve een stad in te vullen';
    }

    if (empty($_POST['street'])) {
      $errors['street'] = 'Gelieve een straat in te vullen';
    }

    if (empty($_POST['number'])) {
      $errors['number'] = 'Gelieve een straatnummer in te vullen';
    }

    if (empty($_POST['province'])) {
      $errors['province'] = 'Gelieve een provincie in te vullen';
    }

    // WELKE DATA???
    $dataUser = array(
      'lastname' => $_POST['lastname'],
      'firstname' => $_POST['firstname'],
      'email' => $_POST['email'],
      'province' => $_POST['province'],
      'city' => $_POST['city'],
      'street' => $_POST['street'],
      'number' => $_POST['number'],
      'phone' => $_POST['phone']
    );

    if (empty($errors)) {
      $insertedBooking = $this->bookingUserDAO->insert($dataUser);
      if (!empty($insertedBooking)) {
        unset($_SESSION['cart']);
        Header('Location:index.php');
        $_SESSION['info'] = 'Jouw boeking werd succesvol geregistreerd!';
      } else {
        print_r($this->bookingUserDAO->validate($dataUser));
      }
    }
    if (!empty($errors)) {
      $_SESSION['error'] = 'Gelieve te controleren of alles is ingevuld.';
      $this->set('errors', $errors);
    }
  }
}
