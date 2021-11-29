<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Time</th>
        <th>status</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Service</th>
      </tr>
    </thead>
    <tbody>
        <?php
          while ($row = mysqli_fetch_assoc($appointments)) {
              echo '<tr>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td><a href="/admin/appointments/view.php?id=' . $row['id'] . '">' . $row['appointment_time'] . '<a/></td>';
              echo '<td>' . $row['status'] . '</td>';
              echo '<td>' . $row['first_name'] . ' ' . $row['last_name'] . '</td>';
              echo '<td>' . $row['phone'] . '</td>';
              echo '<td>' . $row['email'] . '</td>';
              echo '<td> $' . $row['price'] . ' ' . $row['title'] . '</td>';
              echo '</td>';
          }
        ?>
    </tbody>
  </table>