# Modelo - Blade template for Laravel 4

Modelo is a set of views that serve as a site's **very basic template**.  
It gathers best practices from around the web (see [h5pb](http://html5boilerplate.com) or Zurb's [Foundation](http://foundation.zurb.com)) in order to provide a **robust starting template for most sites**.


## Quick overview
Modelo consists of four basic files:

* master.blade.php
* head.blade.php
* body.blade.php
* tail.blade.php

### master.blade.php
The *master.blade.php* file is pretty simple.  
It **opens and closes** the page by adding the `html`, `head` and `body` tags.  
It also includes the other three files (*head.blade.php*, *body.blade.php* and *tail.blade.php*).

### head.blade.php
Like its name points out, this is the `<head>` of your site.  
Here we add basic metadata and include *css stylesheets* and *javascript* files.

### body.blade.php
We just include the content here. Pretty straightforward. This is the place to get creative.

### tail.blade.php
We add most of our *javascript files* here for better website performance as well as a tracking id for *Google Analytics*.


## Install
In your application's root directory, open up the *composer.json* file and add the package to the `require` section so it looks like this:

```php
"require": {
       "laravel/framework": "4.0.*",
       "koalabs/modelo": "1.*"
},
```

Open the command line, and in the root ot our application, run the Composer update like this:

```
php composer.phar update
```

Now let's add the Modelo Service Provider. Open the *app/config/app.php* file and in the `providers` array, add the following line:

```php
'Koalabs\Modelo\ModeloServiceProvider'
```

### Configuration
Find the configuration file at `'vendor/koalabs/modelo/src/config/modelo.php'` and move it to the `'app/config'` folder.

## Usage
You can use *Modelo* as the template for any of your views.  
Just add this line at the beginning of the file:

```php
@extends('modelo::master')
```

The actual content of your page goes into a **content** tag:

```html
@section('content')
  <!-- Yout content here -->
@stop
```

### Example
Let's say you want to make an 'about' page.  
Just do as follows:

```php
@extends('modelo::master')
@section('title') About Us @stop
@section('description') Some description for the meta tag here @stop

@section('content')
  <!-- The content goes here -->
@stop
```

Those are the basics.
But you can do a lot more by leveraging the helper tags modelo has and the using the configuration file.

### List of tags

#### The body

* `@section('content')` for the actual page content
That's it...

#### The head section

You can make a completely new `<head>` for a specific page if you want to.  
Use:`@section('head')`

Inside the head we have other tags:

* `@section('title')` for adding a meta title.
* `@section('description')` for adding a meta description
* `@section('meta')`for adding custom meta data (like, for example. hiding a page)
* `@section('styles')` for adding a new set of css styles to the page
* `@section('page_styles')`if you want to use the same css style you use throughout the site but want to also include a new one.


#### The tail section

* `@section('tail')` for a totally different tail section.
* `@section('page_scripts')` for adding scripts that are specific to the page.

### Configuration
In the *config/modelo.php* file you have these options:

* Define the author of the site
* Define the path to where your main css file is. Because you **are compressing your files and serving only one**, right?
* Turn jquery *on* or *off*.
* Choose the jquery version.
* Choose the scripts you will serve to all pages
* Turn Google Analytics *on* or *off*
