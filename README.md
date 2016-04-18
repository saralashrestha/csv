Yii 2 CREATE AND READ CSV FILE PROJECT
======================================

DIRECTORY STRUCTURE
-------------------
      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------
The minimum requirement by this project that your Web server supports PHP 5.4.0.


INSTALLATION
------------
### Install from an Archive File

Extract the archive file to a directory that is directly under the Web root.

You can then access the application through the following URL:

~~~
http://localhost/basic/web/
~~~

FILES USED
-------------
    models/ContactForm.php
    controllers/SiteController.php
    views/
        site/index.php
        site/client.php
        site/error.php
    upload (the directory folder where csv file gets stored)

DEMO
-----------
1. Go to http://localhost/basic/web/
2. Add client.
3. Click on client list to view the client detail.
4. Client information is saved as client.csv on upload folder. 
