<?php include 'header.php';?>
<div id="main-content">
  <h2>Add New Record</h2>
  <form class="post-form" action="savedata.php" method="post">
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="sname" />
    </div>
    <div class="form-group">
      <label>Address</label>
      <input type="text" name="saddress" />
    </div>
    <div class="form-group">
      <label>Class</label>
      <select name="class">
        <option value="" selected disabled>Select Class</option>
        <?php
$conn = mysqli_connect("localhost", "root", "", "coudpractice") or die("Connection Faild");
$sql = "SELECT * FROM studentclass";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>
        <?php }?>
      </select>
    </div>
    <div class="form-group">
      <label>Phone</label>
      <input type="text" name="sphone" />
    </div>
    <input class="submit" type="submit" value="Save" />
  </form>
</div>
</div>
</body>

</html>