Milestone 3: Resiliency
If any VM of a pair goes down, the system should detect this and cleanly reroute traffic to the healthy VM
If APP A goes down, the user should be routed to APP B without losing their session (i.e., the user shouldn't notice a VM went down and should not have to relog)
If MQ A goes down, the remaining VMs should utilize MQ B
If DB A goes down, DB B should handle the requests
If API A goes down, API A should handle the requests
