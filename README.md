# PHP-Rock-Paper-Scissors
A simple PHP application for playing Rock, Paper, Scissors, against the computer. This project was developed as part of the University of Michigan's Building Web Applications in PHP course.

# Features
- Pick your own play: The user has the option to pick Rock, Paper, or Scissors.
- The computer will pick a play: The computer will generate a random play for either Rock, Paper, or Scissors.
- Login/Logout functionality: The user must login via the login.php page to access the game.php page.

# Usage
1. From index.php, select the link 'Please Log In'.
2. Enter a Username of your choice and the Password 'php123' then press 'Log In' to access the game (game.php).
3. From game.php the user can select a play from the dropdown and select 'Play' to play Rock, Paper, Scissors, against the computer. The results of each game are rendered to the page.
4. The user can also logout from game.php and will be redirected back to index.php.
5. An optional step is to select the 'game.php' link without logging in to demonstrate that a $_SESSION['name'] parameter must be set to access game.php.
