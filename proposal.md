# IT 490 Final Deliverable & Features Status:

Link to Final Deliverables Google Doc: https://docs.google.com/document/d/1TJNBwHwSWSe9vPoHfG9TvYHnj9ZlwUfeckVgBkmSHDk/edit?usp=sharing

Group Name: The Network

Group Members: 
* Yash Hirpara 
* Tej Vyas
* Hiten Patel
* Parth Brahmbhatt
* Amisha Patel
* Naiya Patel

Targeted API(s): https://www.roboshop.com

PayPal Express checkout API collection(Capture): 
                              https://developer.paypal.com/docs/archive/orders-integration-guide/

Project Type: Web

Project Summary/Goal: This project is to create a website where the user can buy robotics parts conveniently.

Features and Status of the Feature:

* Core Requirements:

Users will be able to register : Done\
Users will be able to login : Done\
Users will be able to update their profile : Done\
Users will be able to logout (session will be destroyed appropriately) : Done\
Passwords will not be stored in plaintext : Done
* Project Requirements:\
Users will have different roles : In Progress\
Admin - Can do special tasks that aren’t available for the other roles\
Adjust assigned roles\
Can do all actions that the other roles can do\
Can edit the product listing of a robotic part\
Manager - Someone with ability to update the robotics products\
Client - Customer who is buying the robotics parts and machines\
Manager Role : In Progress\
Will be able to edit a product listing of a part\
Name\
Price\
Quantity\
Description\
Will be able to delete the product listing\
Has the same capabilities as the Client Role\
Will be able to cancel and refund the order\
Will able to see various reports of orders (completed, pending)\
Filter by date range\
Category\
Client Role : Done\
Will be able to search for robotics parts and machines\
Will be able to see a listings for the robotics parts\
Will be able to buy the parts for the given price\
Will be able to give review for the product
* Homepage of the website\
Will have the picture of the most popular products : Done\
Will have names of the companies of the robotic parts : Done  
Will have ‘About Us’ and ‘Contact information’ buttons : Done 
Will have Register button to create an account to purchase the product : Done \
Will have login and logout buttons for the user to login and out from their account : Done  
Will have shopping cart button which will initially be empty : Done 
* Product Information Page\
Will show pictures and product information about a part : Done\
Name\
Manufacturer\
Type\
Description\
Stock/Quantity\
Will show reviews for the product (or a message stating no reviews) : In Progress
* Shop Page\
The user will be able to see the list of products of different companies : Done\
Data shown: name of product, picture, price : Done\
User will be able to change the price range filter and see product within that price range : Pending\
The user will be able to search for the product : Pending\
The user will be able to sort/filter by : Pending\
Price \
Name \
Manufacturer \
Type\
Purchasing Process\
Clients will click the add button to add the product to the cart. : In Progress\
The client will be able to go to the cart page and see the order details : Done\
The customer can click on the ‘Proceed to Checkout’ button from the cart and go to the purchase page. : Done \
The client will be able to buy the product by using the PayPal payment method. : In Progress\
After successful purchase the cart will be cleared. : Pending\
After successful purchase it will redirect to an order summary page. : Pending
* Cart\
Each line item will show the following : Done\
Product name (links to the product details page)\
Desired quantity\
Line subtotal\
Will show the cart total of all line items : Done\
User will be able to change quantity of an item : Done\
User will be able to remove an item from the cart : In Progress\
Checkout process will be done via paypal : In Progress\
Cart will clear after successful checkout and the order details will be recorded : Pending\
Client (Customer) Profile : In Progress\
Will have their first and last name : In Progress\
Will have their address : Pending \
Will have their contact information such as email and phone number: Pending\
Will show their order history (along with the status of the order). Orders will have a “buy it again” button : Pending\
* Requirements:
All App data requests will go through MQ\
The App will not directly connect to DB Server or API Server\
DB will mostly act as your cache for API requests where applicable\
API data may be polled periodically via scheduled tasks\
All VMs should have their logs sent to a central location so you don’t need to login to each specific VM\
[Midterm] The core of your project should be working. All of the features from the previous list should be implemented.\
[Final] Your project will have a multi-lane deployment system developed (DEV/QA/Prod) you will write custom scripts to migrate your changes (code and data as applicable) from the previous lane to the next. Your scripts should handle scenarios where you may need to rollback changes.\
[Final] Demonstrate zero-downtime deployment strategy (i.e., clusters of VMs)\
Demonstrate monitoring of your VMs (Resources/Security) and handling such issues.

