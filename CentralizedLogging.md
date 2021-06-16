Group Name: The Network

Members:
- Tej Vyas
- Yash Hirpara
- Hiten Patel
- Parth Brahmbhatt
- Amisha Patel
- Naiya Patel

![image](https://user-images.githubusercontent.com/70593347/122290644-f63af100-cec1-11eb-989b-ad885242b2ff.png)


Solutions Explored:
The group collectively started researching together for the centralized logging issues and after doing some research we finalized to use 'Rsyslog' for out centralized logging. 

Each member of the group explored into different centralized logging solutions:

Parth explored LogStash - Logstash is a free and open server-side data processing pipeline that ingests data from a multitude of sources, transforms it, and then sends it to your favorite stash.
 
Amisha explored SolarWind Security Event Manager(SEM) - Delivers comprehensive Security Information and Event Management (SIEM) capabilities in a highly affordable, easy-to-deploy virtual appliance.SEM is targeted at tightly resourced, budget conscious security teams. Prepackaged features such as reports and rules ensure a short implementation cycle, gaining value from SIEM almost immediately 

Tej explored GrayLog - Graylog is a leading centralized log management solution built to open standards for capturing, storing, and enabling real-time analysis of terabytes of machine data.With Graylog you can accomplish all logging in one centralized spot. Syslog servers allow you to collect logs from all types of devices and applications and put them in an easy-to-read format and timestamps. The issue with this was it was best if it is used for statistics.

Hiten explored NXLog - NXLog Collection technology that works on all major operating systems, is compatible with most SIEM and log analytics products, and can handle data sources that other tools cannot cope with giving you more visibility into your systems and operations.

Naiya explored Logalize - LOGalyze is an open source, centralized log management and network monitoring software. It provides real-time event detection and extensive search capabilities.

Yash explored Rsyslog - Rsyslog has evolved into a kind of swiss army knife of logging, being able to accept inputs from a wide variety of sources, transform them, and output to the results to diverse destinations. It can deliver over one million messages per second to local destinations when limited processing is applied.

Rsyslog seemed to be better than others for our website requirements. It is an open-source software utility used on UNIX and Unix-like computer systems for forwarding log messages in an IP network which is very helpful for our project since we're using linux machines for development.

Step by step explanation: 
- After finalizing our centralized logging solution, we started by working on implementing it on our servers.
- We took references from some websites and watched some youtube videos to get familiar with the process of implementing it.
- We installed rsylog by typing the command apt-get install rsyslog -y 
- We edited the rsyslog.conf file and made it accessible for UDP and TCP ports 514.
- Then, we added some commands to set the file name, enable disk mode, to set the max disk usage, to save the memory if rsyslog shuts down, to use asynchronous processing, and to have infinite retries on insert failure.
- We made a template that will instruct rsyslog to store incoming messages.
- Then, to make the clients connect to the server, we typed the public ip address of the server and restarted the system.
- We faced challenges while connecting the server side because we were using private ip addresses.

Screenshots of the process:
![Screenshot (308)](https://user-images.githubusercontent.com/70593347/122295451-3355b200-cec7-11eb-9c22-75ed6efb271b.png)
![Screenshot (309)](https://user-images.githubusercontent.com/70593347/122295472-38b2fc80-cec7-11eb-98e6-5987bcc36892.png)
![Screenshot (310)](https://user-images.githubusercontent.com/70593347/122295480-3c468380-cec7-11eb-9a5e-b11b85879f85.png)


