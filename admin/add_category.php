<?php include 'includes/header.php' ?>
<?php 
   // Create DB Object
   $db = new Database();

   if (isset($_POST['submit'])) {
    // Assign Variables
    $name = mysqli_real_escape_string($db->link, $_POST['name']);

    // Simple Validation
    if ($name == '') {
      // Set Error
      $error = 'Please fill out all required field.';
    } else {
      $query = "INSERT INTO categories
                (name)
                VALUES ('$name')";
      
      $update_row = $db->update($query);
    }
   }
?>

<form method="POST" action="add_category.php">
  <div class="mb-3">
    <label for="name" class="form-label">Category Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Enter Category">
  </div>

  <div>
  <input name="submit" type="submit" class="btn btn-primary" value="Submit">
    <a class="btn btn-secondary" href="index.php">Cancel</a>
  </div>
  <br>
  </form>

<?php include 'includes/footer.php' ?>
