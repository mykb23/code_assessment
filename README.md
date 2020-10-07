<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About
This app is a combination of a web which list all the books in the database and also includes api routes.

# Book Api
# Get 
http://127.0.0.1:8000/external-books/?name

returns a book with search parameter from the external api.
# Get

http://127.0.0.1:8000/api/v1/books

return the collection of books

# Get

http://127.0.0.1:8000/api/v1/books/id
return a book

# Post

http://127.0.0.1:8000/api/v1/books
create a book and return the book

# Put

http://127.0.0.1:8000/api/v1/books/id
update a book and return the book

# Delete

http://127.0.0.1:8000/api/v1/books/id
delete a book and return the book deleted.
