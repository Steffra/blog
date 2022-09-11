# Dotbite take home challange

Dockerized implementation of a basic blog application.

The original task description can be read **[here]( https://gitlab.timebite.eu/rec-challenges/take-home-challenge-bertold-krausz/-/blob/master/description.md "here.")**.
## Prerequisites
- Make sure you have **docker**, and **docker compose** installed.

## Installation
-  Start the application with the following command: 

```docker-compose up -d```

## Initialization
-  When running the app for the first time, initialize it with:

```docker exec -it blog_php /bin/bash init_app.sh```


-  Open [ localhost:8000]( localhost:8000 " localhost:8000") in a browser.

### Test credentials
- Test user:
    -  email:testuser@test.test
    -  password: password
- Admin:
    -  email:testadmin@test.test
    -  password: password

