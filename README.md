# PHP-Rock-Paper-Scissors
A PHP application for playing Paper, Scissors, Rock, against a computer as part of the University of Michigan's Building Web Applications in PHP course.

There are four PHP files and one CSS file in this project:
- **index.php**
  - index.php is the homepage of the application and can direct the user to login.php to access game.php (to play Rock, Paper, Scissors).
  - game.php can also be access from index.php to demonstrate that the game.php page cannot be accessed without logging in through login.php.  
- **login.php**
  - login.php is used to access the game.php page for playing Rock, Paper, Scissors.
  - The user will need to login with a username of their choosing.
  - The password to login can be found in the source code for this page.
  - The password has been hashed using MD5 and also has a salt applied.
- **game.php**
  - game.php is the page where the user can play Rock, Paper, Scissors, against the computer.
  - The user can select Rock, Paper, or Scisssors from the HTML form and the computer will generate a random play in the background.
  - The results of each game is displayed back to the user on game.php.
  - There is also a 'test' option on this page which will loop through every possible play in Rock, Paper, Scissors, and display the results back to the user.  
- **bootstrap.php**
  - bootstrap.php is a page used for applying some basic styling to the index.php, login.php, and game.php pages.
- **starter-template.css**
  - starter-template.css is a basic CSS file which has some styles declared for the index.php, login.php, and game.php pages.
