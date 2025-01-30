<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Simple Website</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: #333;
    }
    header {
      background-color: #333;
      color: #fff;
      padding: 10px 0;
      text-align: center;
    }
    nav {
      background-color: #444;
      padding: 10px;
      text-align: center;
    }
    nav a {
      color: #fff;
      margin: 0 15px;
      text-decoration: none;
    }
    nav a:hover {
      text-decoration: underline;
    }
    main {
      padding: 20px;
      text-align: center;
    }
    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>
  <header>
    <h1>Welcome to My Simple Website</h1>
  </header>
  <nav>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Contact</a>
  </nav>
  <main>
    <h2>Website Using PHP</h2>
    <p>This is a simple website created using HTML and CSS. Feel free to modify it as you follow your tutorial!</p>
    <p>You can add more sections, images, or even JavaScript to make it more interactive.</p>
    <?php echo "<p>Today's date is: " . date("Y-m-d") . "</p>"; ?>
  </main>
  <footer>
    <p>&copy; 2023 My Simple Website. All rights reserved.</p>
  </footer>
</body>
</html>