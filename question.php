<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> PHP Quizzer</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div class="container">
      <a href="index.php" class='start' >Home</a>
      <h1>PHP Quizzer</h1>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="current">Question 1 of 5</div>
      <p class="qestion">What does PHP stand for?</p>
      <form action="process.php" method="post">
        <ul class="choices">
          <li><input type="radio" name="choice" value="1">PHP: Hypertext Preprocessor </li>
          <li><input type="radio" name="choice" value="2">Private Home Page</li>
          <li><input type="radio" name="choice" value="3">Personal Home Page</li>
          <li><input type="radio" name="choice" value="4">Personal Hypertext Preprocessor </li>
        </ul>
        <button type='submit' class='button'>Submit</button>
      </form>
    </div>
  </main>
  <footer>
    <div class="container">
      copyright &copy; 2020, PHP Quizzer
    </div>
  </footer>
</body>
</html>