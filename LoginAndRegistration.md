# Login and Registration
* Registration
* A form must ask a user for registration details : done
* email (must be valid) : done
* username (required, add any other validation) : in progress
* password (required, add any other validation like min length, characters, etc) : done
* confirm password (required, must match password) : in progress
* Password and confirm password must match before anything happens : in progress
* Ensure email and username are unique : done
* Before insertion to the Users table password must be hashed via password_hash($password, PASSWORD_BCRYPT) : done
* Process should return a success message or a relevant error message : done
* On successful registration redirect the user to the login page : done
* Login 
* A form must ask for login details : done
* either username or email (one input field should allow either) : done
* You'll need a way to determine if it's an email or a username and validate accordingly : done
* password (follows same rules as registration) : done
* All data should be valid before being sent out : done
* Find the single user by email or username : done
* Return their id, username, email, password : done
* Verify the password(hash) from the db compared to the password from the form : done
* If there's a validation error or general error return the appropriate message : done
* If the password matches : done
* unset the password from the result set (we don't want it to leak from this scope/context) : done
* return the data pulled from the db : done
* Have the app store the user details in a session : done
* Make sure the session doesn't get lost between pages : done
* Set the session cookie to be secure and httponly and set other flags to improve security : in progress
* On successful login redirect the user to a home/dashboard page  : done
* Navigation bar
* include this nav on every page except logout : done
* include login, register, logout : done
* these must be functional : done
* The navigation state should change based on whether or not the user is logged in : done
* feel free to include any other links but use href="#" so it's there as a mockup for future features : done
*  Home
* Have a basic navigation bar with mock links : done
* Display a welcome message to the user by username (i.e., Welcome, John Doe!); : done
* Redirect the user to login page if they are not logged in : done
* Logout
* Should destroy the session : done
* Redirect to login : done


* Screenshots:

![Screenshot (375)](https://user-images.githubusercontent.com/70593347/127724564-7c145a9c-f25a-4c4a-9e06-0e30ce7b9a71.png)
* User able to register successfully

![Screenshot (377)](https://user-images.githubusercontent.com/70593347/127724572-4d0ea2c7-8712-4e5e-813a-64fd515f06d8.png)
* User able to ogin to the account successfully

![Screenshot (376)](https://user-images.githubusercontent.com/70593347/127724580-83ba3bde-0fbd-474b-a4b4-e044b7be8181.png)
* username and password

![Screenshot (379)](https://user-images.githubusercontent.com/70593347/127724589-9204db2d-c875-4709-8e24-d7ba3ae96275.png)
* Home page with navigation bar and welcoming user message.

![Screenshot (378)](https://user-images.githubusercontent.com/70593347/127724594-9284372e-27e6-4a83-a6e4-5426ece8d109.png)
* Logout page with Link to Home page

![image](https://user-images.githubusercontent.com/70593347/127382923-a4c3d71d-29a5-4655-a2ce-601a9db83ee0.png)
* MQ VM and rabbitMQ service running

![image](https://user-images.githubusercontent.com/70593347/127382881-4f63e56c-9285-46d2-aac8-0e38e0029a9a.png)
* DB VM consuming the queue

![image](https://user-images.githubusercontent.com/70593347/127724644-c82750ce-dfbe-4cda-b84b-e3ed79a53d4e.png)
* Registration page code showing Password hash

![image](https://user-images.githubusercontent.com/70593347/127724674-88c30758-f001-481c-98f7-123c2108105d.png)
* Login page code

Contributions:
* Tej Vyas - Worked on App VM, Login, Logout, Registration files, pushing the code to github branch and pull request
* Yash Hirpara - Worked on DB VM, Login, Registration files from DB side and mysql to create database
* Hiten Patel - Worked on MQ VM and RabbitMQ service
* Amisha Patel - Worked on creating the database in mysql and edited the project proposal
* Parth Brahmbhatt - Worked on running test files in aws
* Naiya Patel - Worked on creating project board and adding issues for the 'Login and Registration' assignment
