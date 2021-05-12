<h1 align="center">
eCommerce Cart</h1>
<p align="center">
a Shopping cart built with PHP's Laravel & Vuejs 
</p>

## Demo
### [cart.ibrahimgad.com](http://cart.ibrahimgad.com)
![Alt text](docs/screen.png?raw=true "Database Schema")

## Key Features


- a Shopping page to add items to cart.
- a Cart Page where you can add / remove / change content of cart & apply / remove coupons.
- a Manage section to add/edit/delete products & add/edit/delete coupons.


## Fast Try The App

- Clone the repo.
- Run `composer install` in the root of the project.
- Edit database details in `.env` file.
- Run `php artisan migrate:fresh --seed`
- Run `npm install` in the root of the project
- Run `npm run dev`
- Run `php artisan serve`
- Visit http://127.0.0.1:8000 in your browser.

## Database Schema
![Alt text](docs/graph.png?raw=true "Database Schema")

## a WalkThrough
a walk through the steps followed to create the app
### Backend
- Define requirements: in this step I realized that creating only a cart page will require products to be added to the cart, 
so there has to a place where these products will be added to the cart , then we need another shopping page, I could have preseeded the items in the cart
  but that didn't seem practical.
- Also, there should be a nice interface to add/edit/delete  products & coupons, because preseeding those didn't seem practical too.
- So the pages in the app are  **Shopping Page**, **Cart Page**, **Products CRUD**, **Coupons CRUD**
- Then I designed the schema above , the design was simple because i actually designed a full ecommerce solution on [mediville](https://www.mediville.com)
- Created Migrations & Models for the database.
- Create the controllers & connect the routes to it in `web.php`, `api.php`
- Create the form requests to validate requests made to the app [Requests](app/Http/Requests/ "Requests").
- Fill in the rules in the form requests.
- Fill in the logic in the controllers.
- Test the Api via postman.
- Create [seeders](database/seeders) to generate data to test the application with, a [factory](database/factories/CouponFactory.php) was used to generate coupons, but not with products because the data needed to seem real.  
- Write tests in [Tests](tests/Feature "Tests") and run the tests via `php artisan test`
### Frontend
- Create the basic structure of the app, add a [config.js](resources/js/config.js) to hold the route to app that's being used by axios to access the backend.
- Create [routes.js](resources/js/routes.js) , add routs and connect them to components created in [components](resources/js/components)
- Fill in the components, adding packages like 'vue-swal','vue-uuid','vue-session' when needed
### Things discovered and edited during work:
- shouldn't apply a coupon if the resulting grand total of the cart will be less than zero.
- even trickier: shouldn't allow removing item from the cart if the resulting grand total of the cart will be less than zero.
### Get Real Data:
- To make things more fun I decided to try to get real data from souq.com. 
- So I created a quick and dirty [python script](docs/souq.py) to scrape some data from souq.com.
- The script scrapes the data from the url at line 18 & outputs the result to a file named **output** next to the script as list of php arrays ready to be appended to the [products seeder](database/seeders/ProductSeeder.php) 
## Tests
- Copy `.env.testing.example` to `.env.testing`
- Edit database details in `.env.testing` 
- Simply : `php artisan test`
## API Documentations
Auto generated phpdoc documentations can be found at [docs](docs/api/index.html)  
