# Dotbite Take Home Challenge Bertold Krausz

### Objective

Create a simplified blog application using PHP and Laravel.

### Brief

You really like to document your life. That is the reason why you want to create your own blog.
But you still want to control, what the internet writes on your blog, so you implement an authorization system. This will help you keep an eye on the posts and give you the possibility to delete one, if it does not fit your needs.

### Tasks

- Implement challenge using:
    - PHP & Laravel
- The application should persist data in a database
    - MySQL is preferred, but you are free to use a database of your choice
- Create a User Model
    - You can use the default Laravel user table.
    - The user table also should have a is_admin field, which tells if the user is a admin.
- Create a Post Model.
    - Each Post should have a unique id, headline, text, published_at and a created_at field
    - The Post Model should also have an user_id and a relationship to the users table
- Implement the typical CRUD operations for the Post resource
    - Validate and authorize the operations
    - Exclude the update operation
- Implement a PostPolicy 
    - Every logged in user can read all posts.
    - A user can create, read and delete his own posts.
    - An Admin can read and delete all posts.
- Implement an Auth system
    - Create a signup form for the user
    - Create a login form for the user and the admin
    - You can use a official Laravel package (ex. Breeze)
- Create a page that shows:
    - A list of the latest Posts. The admin can see the authors email address
    - A delete button for the author and the admin that deletes the post
    - A simple form to add new posts for the user.
    - The design of the page can be very simple. 

### Note

Feel free to use any Laravel recommended or 3rd party package.
Also please use a frontend toolkit like Bootstrap or a css framework like Tailwind for faster development.

### Evaluation Criteria

- PHP & Laravel best practices
- Show us your work through your commit history
- Completeness: did you complete the features?
- Correctness: does the functionality act in sensible, thought-out ways?
- Maintainability: is it written in a clean, maintainable way?
- Simplistic design: do you have an understanding of distances, typography & hierarchy, colors?

### Finish

If you have pushed your last changes to the master branch, please let us know. 
Then we will have a look at it.

All the best and happy coding,

The Dotbite Team
