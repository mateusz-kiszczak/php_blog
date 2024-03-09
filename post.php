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

<div class="blog-post">
  <h2 class="blog-post-title"><?php echo $post['title']; ?></h2>
  <p class="blog-post-meta"><?php echo formatDate($post['title']); ?> by <a href="#"><?php echo $post['author'] ?></a></p>

  <p><?php echo $post['body'] ?></p>
</div>

<?php include 'includes/footer.php' ?> 
