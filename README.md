# a-simple-shop

A simple, modular, light web shop made from scratch with CSS, JS and PHP. Fully responsive for use with mobile and tablet devices. In this instance modelled to be a bakery/coffee shop, it provides a lightweight and useful way for customers to purchase items without having to queue in front of the store.

## How it works

Deployment on a hosting server is super simple. Given the database schema just create a database on phpmyadmin called 'coffee' and import the coffee.sql file to fill and create the appropiate tables.

Once you have all your SQL database up and running just launch a web browser and navigate to the /index.php page and you'll be up and running.

Feel free to modify all items and modals and color schemes. This is just a simple version for a bakery but it can be adapted to any shop.

## A visual tour of the website.

### Landing Page.

Users can fully customize size of cover picture and of course the picture itself.

![image](https://user-images.githubusercontent.com/49954228/56677465-eff6c300-6703-11e9-9bcb-911d0638e33b.png)

Scrolling down will land them in the shop itself.

![image](https://user-images.githubusercontent.com/49954228/56678344-cfc80380-6705-11e9-95ed-86723468a5a9.png)

Once the users click on a modal they can visualize the order, pick the size and write their name on the order as the barista will need it when calling out their order. They can also choose to pay by card or cash (card payments are disabled for security reasons in this version.)

![image](https://user-images.githubusercontent.com/49954228/56678589-6bf20a80-6706-11e9-88ba-4915c0adae46.png)


A very handy feature is the top display live counter that allows the user to visualize in real time a "virtual queue" where they can see how many orders are yet to be fulfilled and so gauge the waiting time until their order is prepared. 


![image](https://user-images.githubusercontent.com/49954228/56678450-1584cc00-6706-11e9-91ad-c8a95044772c.png)


### As a Staff Member (or Admin)

As a staff member, clicking the "Staff Login" button on the navigation bar will land you in this page where pre-authorised memebers can join and look at the realtime view of all the outstanding orders.

![image](https://user-images.githubusercontent.com/49954228/56678797-e7ec5280-6706-11e9-8790-c0f4e3875af3.png)

Once you're in, its a simple uncluttered live table that updates every few seconds that queries the SQL database to view the outstanding orders the barista or staff member needs to attend to. Once the orders are complete the staff member clicks on confirm order and the order leaves the table and the next one replaces it.

![image](https://user-images.githubusercontent.com/49954228/56679095-9c867400-6707-11e9-9c4a-ba5a0082b659.png)

From here you can also add new staff members and remove staff members from the system.

Lastly, you can see some screenshots of the page being used by a mobile device.

![image](https://user-images.githubusercontent.com/49954228/56679308-19195280-6708-11e9-83fc-b719ac8a8aa2.png)

![image](https://user-images.githubusercontent.com/49954228/56679359-39e1a800-6708-11e9-8642-3b6489b3b738.png)

![image](https://user-images.githubusercontent.com/49954228/56679376-482fc400-6708-11e9-946f-8ba9919674cb.png)

![image](https://user-images.githubusercontent.com/49954228/56679425-61d10b80-6708-11e9-9a21-1c87695a4f63.png)

