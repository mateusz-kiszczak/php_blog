<?php include 'includes/header.php' ?>
<?php 
  $id = $_GET['id'];

  // Create DB Object
  $db = new Database();

  // Create Query
  $query = "SELECT * FROM `categories` WHERE id = " . $id;

  // RUN Query
  $category = $db->select($query)->fetch_assoc();
?>

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
     $query = "UPDATE categories
              SET 
              name = '$name'
              WHERE id = " . $id;

     $update_row = $db->update($query);
   }
  }
?>

<?php 
  if (isset($_POST['delete'])) {
    $query = "DELETE FROM categories WHERE id = " . $id;
    $delete_row = $db->delete($query);
  }
?>

<form method="POST" action="edit_category.php?id=<?php echo $id ?>">
  <div class="mb-3">
    <label for="name" class="form-label">Category Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Enter Category" value="<?php echo $category['name']; ?>">
  </div>
  
  <div>
    <input name="submit" type="submit" class="btn btn-primary" value="Submit">
    <a class="btn btn-secondary" href="index.php">Cancel</a>
    <input name="delete" type="submit" class="btn btn-danger" value="Delete">
  </div>
  <br>
  </form>

<?php include 'includes/footer.php' ?>
