<?php

return array(

  /*
  |--------------------------------------------------------------------------
  | IMPORTANT: Move this file over to the 'app/config' folder
  |--------------------------------------------------------------------------
  */

  /*
  |--------------------------------------------------------------------------
  | The author
  |--------------------------------------------------------------------------
  |
  | This is used for filling out the author meta tag.
  | Just write how you would like to be named here.
  |
  */

  'author' => 'Your name here',


  /*
  |--------------------------------------------------------------------------
  | CSS Main file
  |--------------------------------------------------------------------------
  |
  | Path to your main css file here.
  | You SHOULD be concatenating and minifying your css files.
  | Or at least using sass?
  | 
  | If not, you will need to go to the 'head.blade.php' file and add the css
  | files you're using manually. But you should really be only using one file.
  | 
  */
  'css' => 'css/style.css',


  /*
  |--------------------------------------------------------------------------
  | jQuery
  |--------------------------------------------------------------------------
  |
  | jQuery configuration here:
  |
  |   Choose the version of jQuery you want to work with.
  |   You should always provide a fallback in case something 
  |   doesn't work with the remote server.
  |
  | Modelo has some defaults for you :)
  |
  | You don't have to use jQuery, though.
  | Simply set 'jquery_on' to false if you don't care about jQuery.
  |
  */

  'jquery_on'       => false,
  'jquery_version'  => '1.9.1',
  'jquery_fallback' => 'path/to/jquery-fallback/here',


  /*
  |--------------------------------------------------------------------------
  | Javascript files
  |--------------------------------------------------------------------------
  |
  | Define the path to your other javascript files here.
  |
  | Add them as if you were starting from the root of your site.
  | You can also add external sources.
  |
  | Here is an example:
  |
  |   'scripts' => array(
  |     'js/script.js',
  |     'http://some/external/source/script.js'
  |   ),
  |
  */
  
  'scripts' => array(

  ),


  /*
  |--------------------------------------------------------------------------
  | Google Analytics
  |--------------------------------------------------------------------------
  |
  | Set your google analytics site ID here.
  |
  | This is an asynchronous google analytics snippet, as found
  | on HTML5 Boilerplate.
  |
  | Read more about it here:
  | mathiasbynens.be/notes/async-analytics-snippet
  | 
  */

  'analytics_on' => false,
  'analytics_id' => 'UA-XXXXX-X',
);