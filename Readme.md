# Wp Theme : MouadSimple

this is a simple premium theme 

## Description 

this theme has a lot of features

## Documentation

<b>MouadSimple</b> contains two menus
 the name of menu used is "Navigation Bar"

```php
function mouad_register_costum_menu()
{
	register_nav_menus(
		array(
			'bt4-menu' => 'Navigation Bar',
			'footer-menu' => 'Footer Menu'
		)
	);
}
```

### Navbar Bootstrap

for working bt4 menu should include this class

```php
require 'class/bootstrap-navwalker.php';
```

### posts not found

if havn 't posts in your blog this message
"Sorry, no posts were found" will be display
if you want change it , do it in index.php
inside the code 

```html
<?php else: ?>
	<?php echo wpautop('Sorry, no posts were found') ?>
<?php endif; ?>
```



