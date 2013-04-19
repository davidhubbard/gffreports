GetFoundFirst.com Reporting Engine
==========

The GetFoundFirst.com Reporting Engine was built out of a need for a flexible, open source reporting engine.

Customizable templates make decision making simple.

# Installation

First cd to the directory on the web server where the engine will be installed.

    cd /srv/www/example.com/public_html

*Note: you will not have an example.com directory. Use your web site in place of example.com*

Next check out the code

    git checkout git://github.com/davidhubbard/gffreports.git

Install the required packages. The next command will work on Debian and Ubuntu Linux. If you have Apache, MySQL, and PHP set up, you can skip this step and the engine will warn you when you need to install additional packages.

    apt-get install mysql-server apache2 php5 libapache2-mod-php5 php5-mysql

Finally, open a browser and view the instructions at http://example.com/gffreports/

# Customizing the Templates

This engine makes generating reports easy. To create a new template, copy one of the existing templates in chroot/report to a new file.

The first line of the file must be a title for the template, starting with {* and ending with *}

For example, the file gff_sample_template.html has this first line: {* GFF Sample Template *}

## Using an ssh chroot

If you have access to the sshd_config on your server, you can create a limited-access SSH account that can only modify files in the chroot subdirectory.

This is ideal for users who only need to work on the templates.

Add the following lines to the end of your /etc/ssh/sshd_config file:

    Match User getfoundfirst
        ChrootDirectory /srv/www/example.com/gffreports/chroot
        X11Forwarding no
        AllowTcpForwarding no
        ForceCommand internal-sftp

**You must change the ChrootDirectory to match the location where you ran git checkout. Be sure to only use a Match User command at the bottom of /etc/ssh/sshd_config or it may break your ssh access.**

Then restart sshd to apply the changes:

    service sshd restart

# MySQL Permissions

This engine creates a database for each report. During installation you will need to grant more permissions to the DB user for this engine than most typical web apps. By choosing the $db_db prefix, you can restrict what databases the engine will use. A suggested prefix of "gffreports" should prevent any database conflicts.

# Copyright

The GetFoundFirst.com Reporting Engine is Copyright 2013 ndisp.com and getfoundfirst.com and licensed under the GPL.

Smarty (http://www.smarty.net/) is Copyright 2008 New Digital Group, Inc. and licensed under the LGPL.

jQuery (http://jquery.com/) is Copyright 2013 jQuery Foundation and other contributors.

This application is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version.

This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
