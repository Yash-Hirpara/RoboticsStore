Login and Registration
Registration
A form must ask a user for registration details
email (must be valid)
username (required, add any other validation)
password (required, add any other validation like min length, characters, etc)
confirm password (required, must match password)
Password and confirm password must match before anything happens
Ensure email and username are unique
Before insertion to the Users table password must be hashed via password_hash($password, PASSWORD_BCRYPT)
Process should return a success message or a relevant error message
On successful registration redirect the user to the login page
Login
A form must ask for login details
either username or email (one input field should allow either)
You'll need a way to determine if it's an email or a username and validate accordingly
password (follows same rules as registration)
All data should be valid before being sent out
Find the single user by email or username
Return their id, username, email, password
Verify the password(hash) from the db compared to the password from the form
If there's a validation error or general error return the appropriate message
If the password matches
unset the password from the result set (we don't want it to leak from this scope/context)
return the data pulled from the db
Have the app store the user details in a session
Make sure the session doesn't get lost between pages
Set the session cookie to be secure and httponly and set other flags to improve security
On successful login redirect the user to a home/dashboard page
Navigation bar
include this nav on every page except logout
include login, register, logout
these must be functional
The navigation state should change based on whether or not the user is logged in
feel free to include any other links but use href="#" so it's there as a mockup for future features
 Home
Have a basic navigation bar with mock links
Display a welcome message to the user by username (i.e., Welcome, John Doe!);
Redirect the user to login page if they are not logged in
Logout
Should destroy the session
Redirect to login

Members and Contribution:
Tej Vyas - Worked on Login, Logout, Registration files, pushing the code to github branch and pull request
Yash Hirpara - Worked on mysql to create database
Hiten Patel - Worked on connecting the code with database and creating a table
Amisha Patel - Worked on creating the database in mysql and edited the project proposal
Parth Brahmbhatt - Worked on running test files in aws
Naiya Patel - Worked on creating project board and adding issues for the 'Login and Registration' assignment
