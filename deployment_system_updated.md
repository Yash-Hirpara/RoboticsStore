# Deployment System for Milestone 2: Resubmission

* You will implement a system that allows transferring of files from VM A to VM B.
* Let me know if you'll be developing a push system A -> B : Done
* Or a pull system B <- A : We're using Push system
* Or if it'll support both
* Reception of the files should go to a landing point directory, not directly to the live data : Done
* Any live files should be backed up into a backup directory (include a timestamp in the backup name) : Done
* Once live files are backed up, overwrite/replace those files with the newly received changes : Done
* After this process, the new files should be usable/working on VM B : Done
* File/Data Support : Done
* php
* config files
* any content
* DB structural changes
* Be very particular about not including DB content, usually the different lanes have different data (or config settings) you don't want to get promoted : Done
* You wouldn't want to see "Test Product" in production for example or be connecting to DEV via Production by mistake : Done
* The system should also support Reverting changes / Restoring Backups : Done
* Create a new backup of the current files : Done
* Restore the previously backed up files from a specific "transaction" : In Progress
* After the process, the application should be in the state of the back up files (an older version of things): In progress

![Screenshot (381)](https://user-images.githubusercontent.com/70593347/127793847-3bf211ff-3455-40d5-82ec-ed25d016b786.png)
* Adding the file

![Screenshot (383)](https://user-images.githubusercontent.com/70593347/127793875-6869317c-a796-429a-a08a-bf9605ca92ff.png)
![Screenshot (384)](https://user-images.githubusercontent.com/70593347/127793892-1dda7574-a2d1-4248-82d8-4ca3f60da514.png)
* Updating the content of the file. 1st screenshot from VM A, 2nd screenshot shows the change of content in VM B

![Screenshot (385)](https://user-images.githubusercontent.com/70593347/127793935-ad3a8634-4a87-401c-8bc3-86b0d4ac3ad7.png)
* Removing the file from VM A to VM B

* Scripts and Process:
- We started by generating the SSH key using $ ssh-keygen -t command. After entering the password and path for the key, we added the key to the SSH agent. Then, we added the key to out Github Account and to VM B within .ssh/authorized_keys location. Once the SSH key was setup between 2 VMs, we created a demo file and pushed it using scp command. After the successful push to VM B, we updated the file and used the same command to see if the file is being changed on VM B. Then we removed the file using -p22 "rm -rf ..." command. 
- This deployment system can be used to transfer files from one VM to other. This could be helpful if one VM lose data and the other VM has a backup of it. 

* Team Members:
- Tej Vyas - Researched and worked on creating demo file, pushing, updating and removing the files from VM A to VM B. Successfully implemented the system on App VM(App A -> App B)
- Yash Hirpara - Figured out which command to use for us to set up the public key in VM B. For us to get a secure connection and transfer files between the two VM's.
- Hiten Patel - Successfully implemented the system on MQ and QA VMs.
- Parth Brambhatt - Researched on how to remove the file from VM A to VM B. Also successfully implemented adding, pushing, updating, and removing the file on APIA -> APIB VMs.
- Amisha Patel - Researched on implementing the SSH key setup.
- Naiya Patel - Researched on pushing, updating and removing the files from VM A to VM B.

* Difficulties:
- We had some challanges during the initial stage of setting up the SSH key as it wasn't fully clear to us how it works? We figured out researching through the websites and clearing our doubts with the professor. We also had a little hurdle pushing the file from VM A to VM B, but that was also solved after some reasearch on Google.
