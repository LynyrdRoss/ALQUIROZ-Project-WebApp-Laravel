<p align="right"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="right"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg"></p>

# Web Application 2 Project


# Le iStorya
### *The Story*
----------

> **Supported with:**
* Bootstrap
* BootFlat
* Basic JavaScript


### *"/posts"*
Home page. Can be visited by guest and logged-in user.
*(Viewing as guest)*

![Posts Home Page](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/1.png "Posts Home Page")




### *"/posts/{id}"*
View posts individually, this can be seen by both guest and logged-in user.
+ All logged in user can make a post and comment.
+ *__NOTE:__ If a guest tries to make a comment, he will be redirected back to __(/login-user)__ page as middleware.*


![Show solo posts](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/8.png "Show solo posts")

+ If currently logged in user match with the author of the current post, current user can edit or delete the post.

![User and Author match](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/9.png "User and Author match")

* If currently logged in user match with the author of the current post, current user can edit or delete his comment.

![Comment match feature](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/12.png "Comment match feature")




### *"/register-user"*
Registration page
+ Interface.

![Registration Page](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/2.png "Registration Page")

+ Validation via browser side and server side supported.

![Registration Page validation](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/3.png "Registration Page validation")

+ Upon Successfull Registration, user will be redirected to the home page *(/posts)* and a 3 - seconds confirmation flash message will appear.

![Registration success with flash message](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/4.png "Registration success with flash message")

*__NOTE:__ If a logged-in user visits __(/register-user)__ page, he will be redirected to the __(/posts)__ page as middleware.*




### *"/login-user"*
Log-in page
+ Interface.

![Log-in page](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/5.png "Log-in page")

+ Supports validation.

![Log-in page validation](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/6.png "Log-in page validation")

+ After signing-in successfully, user will be redirected to the home page *(/posts)* and a 3 - seconds confirmation flash message will appear.

![Login success with flash message](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/7.png "Login success with flash message")

*__NOTE:__ If a logged-in user visits __(/login-user)__ page, he will be redirected to the __(/posts)__ page as middleware.*




### *"/posts/create"*
+ Create post page. This is only accessible by logged in users.
+ *__NOTE:__ If a guest tries to visit this page, he will be redirected back to __(/login-user)__ page as middleware.*

![Create post page](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/10.png "Create post page")

+ After creating a post, it will provide a 3 - seconds confirmation flash message for the user.

![Create post flash](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/11.png "Create post flash")




### *"posts/comment/{id}"*
Deleting and editing a comment, can only be done if the current user and author of the comment match as middleware.

![Validate user](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/14.png "Validate user")

*EDIT and SAVE function*
![Validate user](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/15.png "Validate user")

*Delete function*
![Delete Comment](https://github.com/LynyrdRoss/ALQUIROZ-Project-WebApp-Laravel/blob/master/13.png "Delete Comment")


> **_FIN_**
