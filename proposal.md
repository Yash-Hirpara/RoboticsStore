IT 490 Project Proposal
Instructions: Only one member of the group needs to submit this. Go to File > Make a Copy, fill in the details as a group, click the big blue button in the top right labeled “Share”. In the popup click “Get Shareable Link” in the top right. Copy and paste this url for the submission.
Note: Google Docs UI might have updated, new method is Click “Share button”. Click “Get Link” section. Pick either “Restricted: Only people with this link can access” or another option of your preference. Submit this link to Canvas.
Important: For this assignment choose “NJ Institute of Technology” and give “Commenter” permissions.

Group Name: The Network
Group Members: 
Yash Hirpara 
Tej Vyas
Hiten Patel
Parth Brahmbhatt
Amisha Patel
Naiya Patel
Targeted API(s): https://www.roboshop.com
PayPal Express checkout API collection(Capture): 
                              https://developer.paypal.com/docs/archive/orders-integration-guide/

Project Type: Web
Project Summary/Goal: This project is to create a website where the user can buy robotics parts conveniently.
Features:
Core Requirements:
Users will be able to register
Users will be able to login
Users will be able to update their profile
Users will be able to logout (session will be destroyed appropriately)
Passwords will not be stored in plaintext
Project Requirements:
Users will have different roles
Admin - Can do special tasks that aren’t available for the other roles
Adjust assigned roles
Can do all actions that the other roles can do
Can edit the product listing of a robotic part
Manager - Someone with ability to update the robotics products
Client - Customer who is buying the robotics parts and machines
Manager Role
Will be able to edit a product listing of a part
Name
Price
Quantity
Description
Will be able to delete the product listing
Has the same capabilities as the Client Role
Will be able to cancel and refund the order
Will able to see various reports of orders (completed, pending)
Filter by date range
Category
Client Role
Will be able to search for robotics parts and machines
Will be able to see a listings for the robotics parts
Will be able to buy the parts for the given price
Will be able to give review for the product
Homepage of the website
Will have the picture of the most popular products
Will have names of the companies of the robotic parts 
Will have ‘About Us’ and ‘Contact information’ buttons
Will have Register button to create an account to purchase the product
Will have login and logout buttons for the user to login and out from their account 
Will have shopping cart button which will initially be empty
Product Information Page
Will show pictures and product information about a part
Name
Manufacturer
Type
Description
Stock/Quantity
Will show reviews for the product (or a message stating no reviews)
Shop Page
The user will be able to see the list of products of different companies
Data shown: name of product, picture, price
User will be able to change the price range filter and see product within that price range
The user will be able to search for the product
The user will be able to sort/filter by 
Price 
Name 
Manufacturer 
Type
Purchasing Process
Clients will click the add button to add the product to the cart.
The client will be able to go to the cart page and see the order details
The customer can click on the ‘Proceed to Checkout’ button from the cart and go to the purchase page. 
The client will be able to buy the product by using the PayPal payment method.
After successful purchase the cart will be cleared.
After successful purchase it will redirect to an order summary page.
Cart
Each line item will show the following
Product name (links to the product details page)
Desired quantity
Line subtotal
Will show the cart total of all line items
User will be able to change quantity of an item
User will be able to remove an item from the cart
Checkout process will be done via paypal
Cart will clear after successful checkout and the order details will be recorded
Client (Customer) Profile
Will have their first and last name
Will have their address 
Will have their contact information such as email and phone number
Will show their order history (along with the status of the order). Orders will have a “buy it again” button
Requirements:
All App data requests will go through MQ
The App will not directly connect to DB Server or API Server
DB will mostly act as your cache for API requests where applicable
API data may be polled periodically via scheduled tasks
All VMs should have their logs sent to a central location so you don’t need to login to each specific VM
[Midterm] The core of your project should be working. All of the features from the previous list should be implemented.
[Final] Your project will have a multi-lane deployment system developed (DEV/QA/Prod) you will write custom scripts to migrate your changes (code and data as applicable) from the previous lane to the next. Your scripts should handle scenarios where you may need to rollback changes.
[Final] Demonstrate zero-downtime deployment strategy (i.e., clusters of VMs)
Demonstrate monitoring of your VMs (Resources/Security) and handling such issues.

