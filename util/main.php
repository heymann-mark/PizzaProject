<?php
//For inclusion of all web app controllers, including
//client-side web services support, but not the server-side
//web service controller. See its index.php for somewhat similar code.

//Get the document root
//there are a number of external variables automatically sent
//to the php page via GET.
//INPUT_SERVER will return the number of it's attributes
//here, at this point, there's 5, 'DOCUMENT_ROOT' is one
//which is C:/xampp/htdocs

$doc_root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');
// Improved way to set the include path to the project root
// Works even if the project is redeployed at another
// level in the web server's filesystem

//__DIR__ is C:\xampp\htdocs\pizza2\util
//tells you exactly where you are
//explode converts the string into an array
$dirs = explode(DIRECTORY_SEPARATOR, __DIR__);
//foreach($dirs as $value){
//echo "dirs: ".$value.'<br>';}
//$dirs = {C:, xampp, htdocs, pizza2, util}
array_pop($dirs); // remove last element
//$dirs = {C:, xampp, htdocs, pizza2}

//implode converts an array to a string
//combine all array elemnts into a string seperated by /
$project_root = implode('/',$dirs) . '/';
//C:/xampp/htdocs/pizza2/
//echo "project root: ".$project_root.'<br>';
//set_include_path will tell the server to search this directory for the file
//when you use include.
set_include_path($project_root);
// We also need $app_path for the project
// app_path is the part of $project_root past $doc_root
$app_path = substr($project_root, strlen($doc_root));
//we only need $app_path to be /pizza2/ because in href = "$app_path.somefile",
//since app_path's leading character is a /, the server will
//append /pizza2/somefile to the end of the basepath which is
// localhost or c:/xampp/htdocs
 //echo '<br>in main.php, project root = ' . $project_root;
// for debugging when you don't have access to the PHP config or log
//this means errors will be printed to the screen
//E_ALL and E_STRICT are predefined consstants
//E_ALL: All errors and warnings, as supported, except of level E_STRICT prior to PHP 5.4.0.

//E_STRICT: Enable to have PHP suggest changes to your code which will ensure the best interoperability and forward compatibility of your code.
//The pipe means remove this next thing, so all but the strictly defined
//so basically error reporting determines which errors to report,
//ini_set syays to display them, thats' the 1, it's like "on"
error_reporting(E_ALL | E_STRICT);
//ini_set updates the configuration of the php.ini file
ini_set('display_errors', '1');
ini_set('log_errors', 1);
// the following file needs to exist, be accessible to apache
// and writable (on Linux: chmod 777 php-errors.log,
// Windows defaults to writable)
// Use an absolute file path to create just one log for the web app
//tells were to log the errors
ini_set('error_log', $project_root . 'php-errors.log');
//this is the error message that will be logged automatically at the start of each program
error_log('=====Starting request: ' . $_SERVER['REQUEST_URI']);
// Start session
//rn this method doesnt' do much becuase we don't go on to set any session variables
if(!isset($_SESSION))
    {
        session_start();
    } 
//echo phpinfo();
?>
