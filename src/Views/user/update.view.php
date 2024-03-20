<?php

require_once(__DIR__ . "/../partials/head.php");
?>

<h1>create user</h1>


<form action="" method="POST">
  <div>
    <label for="name">Name</label>
    <input type="text" name='name' value="<?php echo $user->getName() ?>">
  </div>
  <div>
    <label for="email">Email</label>
    <input type="text" name='email'value="<?php echo $user->getEmail() ?>">
  </div>

  <div>
    <label for="password">Password</label>
    <input type="text" name='password'value="<?php echo $user->getPassword() ?>">
  </div>

  <button type="submit">modifier</button>
</form>
<?php
require_once(__DIR__ . "/../partials/footer.php"); ?>