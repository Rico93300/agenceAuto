<?php

require_once(__DIR__ . "/../partials/head.php");
?>

<h1>create user</h1>


<form action="" method="POST">
  <div>
    <label for="name">name</label>
    <input type="text" name='name'>
  </div>
  <div>
    <label for="email">email</label>
    <input type="text" name='email'>
  </div>

  <div>
    <label for="password">password</label>
    <input type="text" name='password'>
  </div>

  <button type="submit">create</button>
</form>
<?php
require_once(__DIR__ . "/../partials/footer.php"); ?>