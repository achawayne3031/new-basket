

Laravel Docker (Service and Notification)


Usage
- Make sure you have docker installed on your system
- Navigate to the project you want to start up 

example:
    - for service
    - cd newbasketservice


 - on the root directory of newbasketservice
 - run docker-compose build (to build up the project)
 - run docker-compose up (to start up the project)

 - port
    - laravel: 8001

 - api
    - url: /api/user
    - method: POST
    


NOTE: the post data are all saved in the laravel log file (laravel.log), to ensure communicate between the project, both of the should be up and running.


