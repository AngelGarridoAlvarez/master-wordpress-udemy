# master-wordpress-udemy


**wp-config.php**
* Establece nombres de usuarios y passwords


## THE LOOP & THE POST

Son funciones que se aplican tanto a post, como a páginas y conenido en general

**The loop**
* combinacion de condcional + loop
* Reune u prepara los post o el contenido de la página
* Pude reunir un conjunto de post

**The post**
* A specific funtion inside "the loop"
* No solo es una funcion para post, es para contenido en general, aunque se la conoce como the post

```php
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
```

**Template tags**
Special functions that allow us to easily get information and content from wordpress

Examples:
* site_url()
* get_header
* get_footer()
* get_the_title())
* get_the_content()

**Conditional tags**
*  Wordpress functions that return true when certain conditionas are met
* is_front_page()
* is_home()