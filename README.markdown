# CakePHP JavaScript Unit Testing 
Test JavaScript using Jasmine BDD from the browser and on the command line. Output the results to JUnit!

## Requirements
* Java (Rhino needs it to do command line tests)

## Overview

By default, CakePHP does not come with any kind of support for JavaScript unit testing....
But most of us need it, right? Here is an example of Jasmine BDD (http://pivotal.github.com/jasmine/) integrated
with CakePHP. This example allows you to test in the browser and also run your tests from the command line and output
the results to a JUnit xml file. JUnit is a format used in numerous Continuous Integration apps.

The reason I've added the entire app directory is so you can get this up and running quickly.
If you're looking to just add the necessary files/folders to your own project, here they are:

* app/webroot/js/YourApp.js - just a test app file (optional)
* app/webroot/testjs.php - like CakePHP's test.php, directly access your tests via the browser (required)
* app/webroot/tests - test specs and other 3rd party libs like Jasmine (required)
* app/vendors/shells/testjssuite.php - command line script (required)

## Writing tests

Open up app/webroot/tests/index.html and include any of your core lib files. From index.html, include your spec test files (examples included).

## Testing in the browser

* You know how you can navigate to "http://yourapp/test.php" to run CakePHP's unit tests? Navigate to testjs.php instead. Voila!

## Testing on the command line (with JUnit output)

* Navigate to cake/console/ and run "./cake testjssuite".  By default, the results will be output to app/webroot/tests/results/.
* To change where the results output to, open up webroot/tests/index.html and alter the last line where it says "results/"

## Testing different spec files

By default, it will only test against index.html.  If you want to add different .html files to test against, you can do so by create another html file in the app/webroot/tests/ directory, let's say we created "anothertest.html".  To test that in our browser we would navigate to "http://yourapp/testjs.php?file=anothertest". To test it on the command line you would do ./cake testjssuite anothertest

Happy coding!