#My first simple PHP framework
I shoult that every developer must create at least one framework in his life. This is my first attempt to do it. Zend Framework was major influence on this simple framework.

##What we have?
We have a front controller, but it not singleton yet.
We have Request object, but it's not perfect too )
Instead of View onject I use Smarty template engine. I shouldn't redevelop the wheel now. 

MVC_Controller_Abstract does all dirty work.

We should extend MVC_Controller_Abstract which incapsulate many things to run our first applicating based on this lite framework.

## Configuration
All configurating values is one file (application.ini) which consists of routes, application and view parts.

Have fun )
