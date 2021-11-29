<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
        <?php
          while ($row = mysqli_fetch_assoc($customers)) {
              echo '<tr>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td><a href="view.php?id=' . $row['id'] . '">' . $row['first_name'] . ' ' . $row['last_name'] . '</a></td>';
              echo '<td>' . $row['email'] . '</td>';
              echo '<td>' . $row['phone'] . '</td>';
              echo '</td>';
          }
        ?>
    </tbody>
  </table>