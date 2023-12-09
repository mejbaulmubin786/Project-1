<?php
include 'header.php';
?>
<div id="main-content">
  <h2>All Records</h2>

  <?php
$conn = mysqli_connect("localhost", "root", "", "coudpractice") or die("Connection Faild");
$sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
if (mysqli_num_rows($result) > 0) { // This function checks whether any data has arrived in the $result variable
    ?>
  <table cellpadding="7px">
    <thead>
      <th>Id</th>
      <th>Name</th>
      <th>Address</th>
      <th>Class</th>
      <th>Phone</th>
      <th>Action</th>
    </thead>
    <tbody>
      <?php
while ($row = mysqli_fetch_assoc($result)) {

        /*
        In PHP, mysqli_fetch_assoc is a function used to fetch a result row as an associative array from a MySQL database query result.
        This function is often used in conjunction with the mysqli_query function to execute a SELECT query. Here's a basic example of how it is used:

         */
        ?>
      <tr>
        <td><?php echo $row['sid'] ?></td>
        <td><?php echo $row['sname'] ?></td>
        <td><?php echo $row['saddress'] ?></td>
        <td><?php echo $row['cname'] ?></td>
        <td><?php echo $row['sphone'] ?></td>
        <td>
          <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
          <a href='delete-inline.php?id=<?php echo $row['sid']; ?>'>Delete</a>
        </td>
      </tr>
      <?php }?>

    </tbody>
  </table>
  <?php } else {
    echo "<h2>No Record Found</h2>";
}
mysqli_close($conn);
?>
</div>
</div>
</body>

</html>