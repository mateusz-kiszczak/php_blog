<?php include 'includes/header.php' ?>
<?php 
   // Create DB Object
   $db = new Database();

   if (isset($_POST['submit'])) {
    // Assign Variables
    $title = mysqli_real_escape_string($db->link, $_POST['title']);
    $body = mysqli_real_escape_string($db->link, $_POST['body']);
    $category = mysqli_real_escape_string($db->link, $_POST['category']);
    $author = mysqli_real_escape_string($db->link, $_POST['author']);
    $tags = mysqli_real_escape_string($db->link, $_POST['tags']);

    // Simple Validation
    if ($title == '' OR $body == '' OR $category == '' OR $author == '') {
      // Set Error
      $error = 'Please fill out all required field.';
    } else {
      $query = "INSERT INTO posts
                (title, body, category, author, tags)
                VALUES ('$title', '$body', $category, '$author', '$tags')";
      
      $insert_row = $db->insert($query);
    }
   }
?>

<?php 
  // Create Query
  $query = "SELECT * FROM `categories`";

  // RUN Query
  $categories = $db->select($query);
?>

<form method="POST" action="add_post.php">
  <div class="mb-3">
    <label for="title" class="form-label">Post Title</label>
    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title">
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Post Body</label>
    <textarea name="body" type="text" class="form-control" id="body" placeholder="Enter Text"></textarea>
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select name="category" id="category" class="mb-3">
      <?php while($row = $categories->fetch_assoc()) : ?>
        <?php if ($row['id'] == $post['category']) {
          $selected = 'selected';
        } else {
          $selected = '';
        }
        ?>
        <option <?php echo $selected; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
      <?php endwhile; ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input name="author" type="text" class="form-control" id="author" placeholder="Enter Author's Name">
  </div>
  <div class="mb-3">
    <label for="tags" class="form-label">Tags</label>
    <input name="tags" type="text" class="form-control" id="tags" placeholder="Enter Tags">
  </div>
  
  <div>
    <input name="submit" type="submit" class="btn btn-primary" value="Submit">
    <a class="btn btn-secondary" href="index.php">Cancel</a>
  </div>
  <br>
</form>

<?php include 'includes/footer.php' ?>
