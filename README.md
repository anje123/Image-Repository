# IMAGE REPOSITORY.

## Introduction

This is a Image Repository for uploading image fast and easy for storage, it gives registered users the ability to upload one or bulk images in any format at once.


## Technologies Used

#### 1. Google Cloud Storage.

There are several good cloud storage platforms but also I made use of Google Cloud Storage because it provides worldwide, highly durable object storage that scales to exabytes of data, it is also built to easily optimize price and performance, which I used due to easy access to data instantly, store images and also retrieve them anytime.

#### 2. Redis

I utilize redis to make easy access to images faster because Redis is very fast and can perform about 81000 GETs per second, and also supports data structures such as strings, hashes, lists, sets, and sorted sets with range queries, bitmaps, hyperloglogs, and geospatial indexes with radius queries.

#### 3.   JWT - Authentication
#### 4.   PHP [Laravel] - Framework
#### 5.   MYSQL  - Database



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
1. Creating and activating a gcloud service account will give you a JSON file for accessing Google Cloud check
https://cloud.google.com/speech-to-text/docs/quickstart-gcloud for quickstart, Once you’ve met the requirement,
you can quickly create a bucket check https://cloud.google.com/storage/docs/creating-buckets for more information.

2. Fill the GCS Credentials on your env file
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

* To retrieve Images:
    * GET /api/images
     
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

### Thanks For Reviewing The Application :+1::sparkling_heart:	