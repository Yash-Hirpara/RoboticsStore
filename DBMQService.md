Setup a systemd Service - HW

Explanation:

As a team we learned that .service file configurations contains all required information to control that unit such as the path of the file which starts the unit, the name of services/units which need to start before and after the unit, documentation location, dependency information, and conflict information. We learned about the three components of the .service file: Unit, Service and Install. 
* Unit component can contain the description of the file and the order of the file. The After= directive can be used to delay unit activation until another unit is started. User will run the service as a certain user. You can set this to your personal user account, root, or a custom-made service account.
* The service component contains about the management of the service and the exit condition of the file. It also contains the full path of the executing file. 
* Lastly, the [Install] section, which defines some more behavior related to how systemd handles the unit. This is most used to specify the WantedBy= directive, which is used to tell systemd when to start your service, and creates symlinks between targets and their dependent units.

Issues faced during the process:
* Tej Vyas - had issue with the Type directive and I had trouble running the Type=forking command to keep it running in the background. But the file was not working when I tried to run it and Eventually, I ended up using Type=Simple command.
* Yash Hirpara - had some issues running, runner.php, in hindsight should've double checked the code. It was a missing semicolon.
* Hiten Patel - had issues running the file. When 'status' command was typed, the file was showing details about runner.php instead of MQSample file. Solved it by putting the correct path in .service file.
* Parth Brahmbhatt - had issues finding the right command after After=network-online.target which would help for the requirement Starts only if the network is available.
* Amisha Patel - had issue with sample.service failed while running systemctl start command.
* Naiya Patel - was unable to run several commands and had difficulties connecting to servers.

![Screenshot 2021-06-30 222045](https://user-images.githubusercontent.com/70593347/124055470-f4108080-d9f1-11eb-9f71-58baa3222cef.png)
