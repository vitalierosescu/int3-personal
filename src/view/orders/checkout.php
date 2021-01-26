<div class="container checkout-container">
  <h1 class="shopping-cart-title">boeken</h1>
  <a href="index.php?page=cart" class="meer-boeken-box">
    <p class="meer-boeken">Boeking annuleren</p>
  </a>

  <form class="checkout-form" action="index.php?page=checkout" method="post">
    <input type="hidden" name="action" value="addBookingUser">
    <div class="form">
      <fieldset class="personal-fieldset">
        <legend class="personal-legend">vul hier je gegevens in</legend>
        <div class="name-box">
          <!-- lastname -->
          <div class="personal-input-flex">
            <label class="checkout-label" for="lastname">Naam</label>
            <input type="text" class="checkout-input <?php if (!empty($errors['lastname'])) echo 'input-error'; ?>" name="lastname" id="lastname" placeholder="Marie" value="<?php if (!empty($_POST['lastname'])) echo $_POST['lastname']; ?>">
            <?php if (!empty($errors['lastname'])) echo '<div class="checkout-error">' . $errors['lastname'] . '</div>'; ?>
          </div>

          <!-- firstname -->
          <div class="personal-input-flex">
            <label class="checkout-label" for="firstname">Voornaam</label>
            <input type="text" class="checkout-input <?php if (!empty($errors['firstname'])) echo 'input-error'; ?>" name="firstname" id="firstname" placeholder="Jane" value="<?php if (!empty($_POST['firstname'])) echo $_POST['firstname']; ?>">
            <?php if (!empty($errors['firstname'])) echo '<div class="checkout-error">' . $errors['firstname'] . '</div>'; ?>
          </div>
        </div>

        <div class="name-box">
          <!-- province -->
          <div class="personal-input-flex">
            <label class="checkout-label" for="province">Provincie</label>
            <input type="text" class="checkout-input <?php if (!empty($errors['province'])) echo 'input-error'; ?>" name="province" id="province" placeholder="Marie" value="<?php if (!empty($_POST['province'])) echo $_POST['province']; ?>">
            <?php if (!empty($errors['province'])) echo '<div class="checkout-error">' . $errors['province'] . '</div>'; ?>
          </div>

          <!-- city -->
          <div class="personal-input-flex">
            <label class="checkout-label" for="city">Stad</label>
            <input type="text" class="checkout-input <?php if (!empty($errors['city'])) echo 'input-error'; ?>" name="city" id="city" placeholder="Gent" value="<?php if (!empty($_POST['city'])) echo $_POST['city']; ?>">
            <?php if (!empty($errors['city'])) echo '<div class="checkout-error">' . $errors['city'] . '</div>'; ?>
          </div>
        </div>

        <div class="name-box">
          <!-- street -->
          <div class="personal-input-flex">
            <label class="checkout-label" for="street">Straatnaam</label>
            <input type="text" class="checkout-input <?php if (!empty($errors['street'])) echo 'input-error'; ?>" name="street" id="street" placeholder="Marie" value="<?php if (!empty($_POST['street'])) echo $_POST['street']; ?>">
            <?php if (!empty($errors['street'])) echo '<div class="checkout-error">' . $errors['street'] . '</div>'; ?>
          </div>

          <!-- number -->
          <div class="personal-input-flex">
            <label class="checkout-label" for="number">Nr</label>
            <input type="text" class="checkout-input <?php if (!empty($errors['number'])) echo 'input-error'; ?>" name="number" id="city" placeholder="Gent" width="30" value="<?php if (!empty($_POST['number'])) echo $_POST['number']; ?>">
            <?php if (!empty($errors['number'])) echo '<div class="checkout-error">' . $errors['number'] . '</div>'; ?>
          </div>
        </div>

        <div class="name-box">
          <!-- email -->
          <div class="personal-input-flex">
            <label class="checkout-label" for="email">Email</label>
            <input type="email" class="checkout-input <?php if (!empty($errors['email'])) echo 'input-error'; ?>" name="email" id="street" placeholder="Marie" value="<?php if (!empty($_POST['email'])) echo $_POST['email']; ?>">
            <?php if (!empty($errors['email'])) echo '<div class="checkout-error">' . $errors['email'] . '</div>'; ?>
          </div>

          <!-- phone -->
          <div class="personal-input-flex">
            <label class="checkout-label" for="phone">GSM</label>
            <input type="number" class="checkout-input <?php if (!empty($errors['phone'])) echo 'input-error'; ?>" name="phone" id="phone" placeholder="Gent" width="30" value="<?php if (!empty($_POST['phone'])) echo $_POST['phone']; ?>">
            <?php if (!empty($errors['phone'])) echo '<div class="checkout-error">' . $errors['phone'] . '</div>'; ?>
          </div>
        </div>
      </fieldset>

      <input type="submit" class="boeken" name="" value="boeken">
    </div>
  </form>
</div>
