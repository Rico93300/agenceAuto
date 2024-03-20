<?php

require_once(__DIR__ . "/../partials/head.php");
?>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) {
            echo "<tr>";
            echo "<td>" . $user->getId() . "</td>";
            echo "<td>" . $user->getName() . "</td>";
            echo "<td>" . $user->getEmail() . "</td>";
            
            echo '<td><a href =" /user/read?id=' . $user->getId() . ' ">voir(read)</a></td>';
            echo '<td><a href =" /user/update?id=' . $user->getId() . '">modifier(update)</a></td>';
             ?>
             <td>
             <form action="/user/delete" method="POST">
            <input type="hidden" name="id"value="<?php echo $user->getId() ?>">
            <button type="submit">supprimer</button>
        </form>
        </td>
        </tr>
        <?php  } ?>

      
    </tbody>
</table>