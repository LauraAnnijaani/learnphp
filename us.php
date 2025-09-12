<?php
$title = 'U.S news';
  $posts = [
    ['title' => 'U.S news 1', 'author' => 'Pets', 'published' => '12.09.2025', 'body' => 'Some world news 1 body'],
    ['title' => 'U.S news 2', 'author' => 'Maali', 'published' => '11.09.2025', 'body' => 'Some world news 2 body'],
    ['title' => 'U.S news 3', 'author' => 'Bob', 'published' => '10.09.2025', 'body' => 'Some world news 3 body'],
    ['title' => 'U.S news 4', 'author' => 'Ats', 'published' => '09.09.2025', 'body' => 'Some world news 4 body'],
  ];
?>

<?php include 'partials/header.php'; ?>
    <main class="container">
      <div class="row g-5">
        <div class="col-md-8">
          <?php include 'partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include 'partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
<?php include 'partials/footer.php'; ?>
