Milestone 3: Resiliency


Tej Vyas - Researched about Amazon Virtual Private Cloud (VPC), where you are able to create and manage security groups associated with Elastic Load Balancing to provide additional networking and security options. Can also configure an Application Load Balancer to be Internet facing or create a load balancer without public IP addresses to serve as an internal load balancer.

Yash Hirpara - Looked into Aws' elastic load balancing. Elastic Load Balancing automatically distributes incoming application traffic across multiple Amazon EC2 instances. 

Hiten Patel - Figured out which specific load balaning feature needed for this project. Some of the one needed are; Sticky sessions (cookies), Health checks, Access logs, and Cross-zone load balancing. 

Parth Brahmbhatt - Another vaibale option was Round Robin. Round-robin load balancing is one of the simplest and most used load balancing algorithms. Client requests are distributed to application servers in rotation.

Amisha Patel - URL Hash is a load balancing algorithm to distribute writes evenly across multiple sites and sends all reads to the site owning the object.

Naiya Patel - Least Connections Algorithm: In this algorithm, traffic is directed to the server having the least traffic. This helps maintain the optimized performance, especially at peak hours by maintaining a uniform load at all the servers.

We ultimately decided to use Classic Load Balancer provides basic load balancing across multiple Amazon EC2 instances and operates at both the request level and connection level. Classic Load Balancer is intended for applications that are built within the EC2-Classic network. 

Attacted below are the screenshots of the load balancers showing its health checks of the vm on the aws dashboard. 

DB VM:
![image](https://user-images.githubusercontent.com/60191846/126584469-ba486dc8-76f8-4015-bcfe-ca55de6484e0.png)
![image](https://user-images.githubusercontent.com/60191846/126583953-0c2904cb-eeb5-4880-82a9-919e871d43c6.png)

APP VM:
![image](https://user-images.githubusercontent.com/60191846/126583974-5d45ee55-356e-4d86-9358-e6df19e83c43.png)
![image](https://user-images.githubusercontent.com/60191846/126583983-6de2ff39-f49d-4ecf-8c2c-c81ae590e869.png)

MQ VM:
![image](https://user-images.githubusercontent.com/60191846/126584114-55c77971-39a4-43c7-bd59-5cd71a30af7e.png)
![image](https://user-images.githubusercontent.com/60191846/126584122-5c1991bc-d3fc-4802-a852-1a32392ab6db.png)

API VM:
![image](https://user-images.githubusercontent.com/60191846/126584482-26ae167f-1359-4586-8348-7b2e27f1c929.png)


