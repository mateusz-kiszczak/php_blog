<?php include 'includes/header.php'; ?> 

<?php 
  // Create DB Object
  $db = new Database();
  
  // Check URL for "category".
  if (isset($_GET['category'])) {
    $category = $_GET['category'];
    // Create Query
    $query = "SELECT * FROM `posts` WHERE `category` = " . $category . " ORDER BY date DESC";
    // RUN Query
    $posts = $db->select($query);
  } else {
    // Create Query
    $query = "SELECT * FROM `posts` ORDER BY date DESC";
    // RUN Query
    $posts = $db->select($query);
  }

  // Create Query
  $query = "SELECT * FROM `categories`";
  // RUN Query
  $categories = $db->select($query);
?>

<!-- If there are any posts in the database, display them. -->
<?php if ($posts) : ?>
  <!-- Loop through the results -->
  <?php while($row = $posts->fetch_assoc()) : ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>

            <?php echo shortenText($row['body']); ?>
            
            <a class="read-more-button" href="post.php?id=<?php echo urlencode($row['id']); ?>">Read More</a>
          </div>
  <?php endwhile; ?>

<!-- If not post exist in database, display a message. -->
<?php else : ?>
  <p>There are no posts yet.</p>

<?php endif; ?>

<?php include 'includes/footer.php' ?> 
