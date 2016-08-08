## RichFilemanager ##

This package is to add [servocoder/RichFilemanager](https://github.com/servocoder/RichFilemanager/)  to Laravel 5.* installation.


### Installation ###

Add RichFilemanager to your composer.json file to require RichFilemanager :
```
    "cognitus/richfilemanager": "1.0.*"

```

Update Composer :
```
    composer update
```

The next required step is to add the service provider to config/app.php :
```
    Cognitus\Richfilemanager\RichfilemanagerServiceProvider::class,
```

laravel 5.0:
```
    'Cognitus\Richfilemanager\RichfilemanagerServiceProvider',
```

### Publish ###

The last required step is to publish assets in your application with :
```
    php artisan vendor:publish
```

### User model ###

For RichFilemanager php connector you must create at least this function in user model :

```
public function accessMediasAll()
{
    // return true for access to all medias
}
```

If you want some users access only to one folder add this function :

```
public function accessMediasFolder()
{
    // return true for access to one folder
}
```
A folder with user{id} name will be created in RichFilemanager/userfiles folder.

You can edit the name folders by usernames or whatever. just edit the file RichFilemanager/connectors/php/LaravelConfig.php and routes in config/RichFilemanager.php

### Example ###
show RichFilemanager

```
public function index()
{
	$url = config('richfilemanager.url'). '?langCode=' . config('app.locale');
	
	return view('foo', compact('url'));

}
```	

### Integration ###

You can now integrate RichFilemanager with any editor.

Simple example integration with CKEditor :
```
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CKEditor</title>
        <script src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"></script>
    </head>
    <body>
        <textarea name="editor"></textarea>
        <script>
            CKEDITOR.replace( 'editor', {
                filebrowserBrowseUrl: '{!! url('RichFilemanager/index.html') !!}'
            });
        </script>
    </body>
</html>
```



