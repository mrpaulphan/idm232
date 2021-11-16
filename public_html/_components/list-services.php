<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Price</th>
        <th>Image</th>
        <th>View</th>
      </tr>
    </thead>
    <tbody>
        <?php
          while ($row = mysqli_fetch_assoc($db_results)) {
              echo '<tr>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td>' . $row['title'] . '</td>';
              echo '<td>$' . $row['price'] . '</td>';
              echo '<td> <img width="50" src="' . $row['file_path'] . '" alt=""></td>';
              echo '<td><a href="/admin/services/view.php?id=' . $row['id'] . '">View</a></td>';
              echo '</td>';
          }
        ?>
    </tbody>
  </table>