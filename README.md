## Run locally

Start off with cloning this project in your htdocs (or other server location of choice)

```bash
  git clone git@bitlab.bit-academy.nl:803ce71e-0a33-11ec-a943-4213e7ee7fac/7982caf1-0a5a-11ec-a943-4213e7ee7fac/deep-dive-bobby.git
```

Install Composer in your current work env: https://getcomposer.org/download/

Now you have composer installed you can go ahead and install all the requirements.

Run this in the directory that Bobbers is in:
```bash
    composer install
```

Change your DocumentRoot to ./public/

Create a 'Bobbers' database

Go into "seeder.php" and change the database credentials to your own.

Run seeder.php to feed the database with some data.

```bash
    php seeder.php
```

Now change the database info in ./public/index.php so it can connect succesfully.

Once this is all done you *should* be able to view Bobbers at whichever address you set your webserver up.


## Tech Stack

BYOF (Framework), RedBean ORM, TailwindCSS, MySQL
