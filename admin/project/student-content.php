<?php 
    $userObject = new User();
    $users = $userObject->fetchAllUsers();
?>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Name</th>
        <th scope="col">Email </th>
        <th scope="col">Phone</th>
        <th style="text-align: right">Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php  while ($user = mysqli_fetch_assoc($users)) { ?>
      <tr>
        <th><?php print($user['id'].'.'); ?></th>
        <td><?php print($user['name']); ?></td>
        <td><?php print($user['email']); ?></td>
        <td><?php print($user['phone']); ?></td>
        <td style="text-align: right">
            <a href="./student-list.php?user_id=<?php echo$user['id']; ?>">
              <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </a>
        </td>
      </tr>
    </tbody>
    <?php } ?>
</table>
