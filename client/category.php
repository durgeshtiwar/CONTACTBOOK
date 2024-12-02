<select class="form-control" name="category" id="category">
      <option value="">Select Cotegory</option>
      <?php
      include_once("./common/db.php");
      $query = "select * from category";
      $result = $conn->query($query);
      foreach ($result as $key) {
        $id = $key['id'];
        $name = ucfirst($key['name']);
        echo"<option value=$id>$name</option>";
      }
      ?>

    </select>