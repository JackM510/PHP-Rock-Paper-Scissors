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
  - There is also a 'Test' option on this page which will loop through every possible play in Rock, Paper, Scissors, and display the results back to the user.  
- **bootstrap.php**
  - bootstrap.php is a page used for applying some basic styling to the index.php, login.php, and game.php pages.
- **starter-template.css**
  - starter-template.css is a basic CSS file which has some styles declared for the index.php, login.php, and game.php pages.

**Overview of the Application:**
- The homepage of this application is **index.php**.
  - From this page, the user can select the link 'Please Log in' and be directed to login.php. 
  - The user can also select the 'game.php' link and attempt to access the game.php page without logging in (this will generate an error and the page will be killed).
    - This error occurs because a username value must be passed to game.php to access the page using the superglobal variables POST and GET.
    - As a test, users can get around this by entering '?username=name' at the end of the URL on game.php (note that 'name' can be any name or set of characters). 
- From **login.php**, the user will need to enter a username of their choosing and the correct password (which can be found in the source code) to successfully login and be directed to game.php.
  - If one or both input elements are vacant, a prompt will be displayed to the user on the page 'User name and password are required'.
  - If the user enters an incorrect password, a prompt will be displayed to the user on the page 'Incorrect password'.
 - From the **game.php** page, users can play Rock, Paper, Scissors with the computer by interacting with the HTML form elements.
   - Based on whether the user selects 'Rock', 'Paper', or 'Scissors', PHP will generate a random number in the background for the computers play and associate the number with the corresponding play in an Array called $names.
     - The $names Array holds the names 'Rock', 'Paper', 'Scissors', and the random number generated for the computer will be the index referenced in the Array to determine the computers play (0-2).
     - The check() function uses conditional statements to determine the outcome of the game and whether the user wins or loses against the computers play.
       - The results of each game are displayed back on the page.
     - There is also a 'Test' option in the HTML form which can be selected to play every possible combination in Rock, Paper, Scissors.
       - The results are returned to the page for the user to view.
       - This is accomplished using a conditional statement and nested for loop that will iterate a total of nine times.
 
