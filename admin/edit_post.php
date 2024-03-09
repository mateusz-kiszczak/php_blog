<?php include 'includes/header.php' ?>
<?php 
  $id = $_GET['id'];

  // Create DB Object
  $db = new Database();

  /*
   * Posts
   */

  // Create Query
  $query = "SELECT * FROM `posts` WHERE id = " . $id;

  // RUN Query
  $post = $db->select($query)->fetch_assoc();


  /*
   * Categories
   */

  // Create Query
  $query = "SELECT * FROM `categories`";

  // RUN Query
  $categories = $db->select($query);
?>

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
     $query = "UPDATE posts
              SET 
              title = '$title', 
              body = '$body', 
              category = '$category', 
              author = '$author', 
              tags = '$tags' 
              WHERE id = " . $id;

     $update_row = $db->update($query);
   }
  }
?>

<?php 
  if (isset($_POST['delete'])) {
    $query = "DELETE FROM posts WHERE id = " . $id;
    $delete_row = $db->delete($query);
  }
?>

<form method="POST" action="edit_post.php?id=<?php echo $id ?>">
  <div class="mb-3">
    <label for="title" class="form-label">Post Title</label>
    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Post Body</label>
    <textarea name="body" type="text" class="form-control" id="body" placeholder="Enter Title"><?php echo $post['body']; ?></textarea>
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
        <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>><?php echo $row['name']; ?></option>
      <?php endwhile; ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input name="author" type="text" class="form-control" id="author" placeholder="Enter Author's Name" value="<?php echo $post['author']; ?>">
  </div>
  <div class="mb-3">
    <label for="tags" class="form-label">Tags</label>
    <input name="tags" type="text" class="form-control" id="tags" placeholder="Enter Tags" value="<?php echo $post['tags']; ?>">
  </div>
  
  <div>
    <input name="submit" type="submit" class="btn btn-primary" value="Submit">
    <a class="btn btn-secondary" href="index.php">Cancel</a>
    <input name="delete" type="submit" class="btn btn-danger" value="Delete">
  </div>
  <br>
</form>

<?php include 'includes/footer.php' ?>
