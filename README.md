GetFoundFirst.com Reporting Engine
==========

# Installation

First cd to the directory on the web server where the engine will be installed.

    cd /srv/www/example.com/public_html

*Note: you will not have an example.com directory. Use your web site in place of example.com*

Next check out the code

    git checkout git://github.com/davidhubbard/gffreports.git

Install the required packages. The next command will work on Debian and Ubuntu Linux. If you have Apache, MySQL, and PHP set up, you can skip this step and the engine will warn you when you need to install additional packages.

    apt-get install mysql-server apache2 php5 libapache2-mod-php5 php5-mysql

Finally, open a browser and view the instructions at http://example.com/gffreports/

# MySQL Permissions

This engine creates a database for each report. During installation you will need to grant more permissions to the DB user for this engine than most typical web apps. By choosing the $db_db prefix, you can restrict what databases the engine will use. A suggested prefix of "gffreports" should prevent any database conflicts.
