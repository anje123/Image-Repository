# IMAGE REPOSITORY.

## Introduction

Hello :+1::sparkling_heart:	 this is my solution for the backend developer internship, registered users has the ability to upload one or bulk images, this app accept image file type in JPG, PNG, JPEG and alot more

## Technologies Used
```
1. JWT
2. PHP [Laravel]
3. MYSQL
4. AMAZON S3

```


### HOW TO SETUP:

```
 clone the repo
```
```
 cp .env.example .env
```
```
 php artisan key:generate
```
```
 php artisan migrate
```
```
1. Create An Account With Amazon Cloud Service  https://docs.aws.amazon.com/AmazonS3/latest/gsg/SigningUpforS3.html
2. Fill the AWS Credentials on your env file
3. composer install
```

## RESTful URLs
```
* To register a user:
    * POST /api/register
      payload: email, name, password, password_confirmation

  Authorization Bearer Token is needed to access the next endpoints,  register first !!

 * To login a user :
    * POST /api/login
        payload: email, password


* To upload Image:
    * POST /api/image/add
      form_data:  imageField[] , accept both single and multiple images
     
 * To logout a user :
    * POST /api/logout

 * To refresh token :
    * POST /api/refresh
  
* To get user info:
    * POST /api/me
    
```

## HTTP Verbs

| HTTP METHOD | POST            | GET       | PUT         | DELETE |
| ----------- | --------------- | --------- | ----------- | ------ |
| CRUD OP     | CREATE          | READ      | UPDATE      | DELETE |

### :+1::sparkling_heart:	
