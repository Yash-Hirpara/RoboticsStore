* Milestone 2: Deployment/Promotion System

* You will implement a system that allows transferring of files from VM A to VM B. 
Let me know if you'll be developing a push system A -> B
Or a pull system B <- A
Or if it'll support both
: In Progress
* Reception of the files should go to a landing point directory, not directly to the live data
 : In Progress
* Any live files should be backed up into a backup directory (include a timestamp in the backup name) : In Progress
* Once live files are backed up, overwrite/replace those files with the newly received changes : In Progress
* After this process, the new files should be usable/working on VM B : In Progress
* File/Data Support
php
config files
any content
DB structural changes
Be very particular about not including DB content, usually the different lanes have different data (or config settings) you don't want to get promoted
You wouldn't want to see "Test Product" in production for example or be connecting to DEV via Production by mistake : In Progress
* The system should also support Reverting changes / Restoring Backups
Create a new backup of the current files
Restore the previously backed up files from a specific "transaction"
After the process, the application should be in the state of the back up files (an older version of things) : In Progress


* Screenshots:

![image](https://user-images.githubusercontent.com/70593347/125717656-aa35d39f-0ccb-45ea-a859-b1b9f685e9a7.png)
- The screenshot above shows the errors we are getting on DB VM during the process of connecting the VMs. 

![image](https://user-images.githubusercontent.com/70593347/125717705-da2b0f5b-988e-4ac5-af70-cb378ee9372b.png)
- The screenshot above shows the errors we are getting on App VM. 

![image](https://user-images.githubusercontent.com/70593347/125717938-c207ae6e-ad3e-492c-9c77-60d5e3ac9d6d.png)
- The screenshot above is from MQ VM which shows that the RabbitMQ service is active.

* Scripts:
We added some scripts from the professor's github. We added new scripts for Login and Registration which requires DB VM and MQ VM to work together. 
We added MQ Functions for App and DB VMs. While working on the login and registration files, we some errors which are preventing the VMs to connect and work simultaneously. We edited config file and added mysql database and connected it with MQFunctions.

* Team Memeber and Contribution:
- Tej Vyas - worked on App VM. Added new scripts for login and registration part. Edited login, registration files. Worked on connecting the App VM with MQ and DB.
- Yash Hirpara - worked on DB VM. Made changes in the config.php file to match up with the database on mysql.
- Hiten Patel - worked on MQ server. Installed RabbitMQ service and configured it to get it running. Also started working on the QA VM and started importing files.
- Parth Brahmbhatt - worked on API server. Imported necessary files in it.
- Amisha Patel - Worked on creating issues on github with Naiya and also worked on creating VM.
- Naiya Patel - Managed issues and helped other team members creating VMs.

* Difficulties:
We faced difficulties connecting the VMs so when the user registers, their info gets stored into the database on DB VM. We're working on solving the errrors during connecting the VMs. 
