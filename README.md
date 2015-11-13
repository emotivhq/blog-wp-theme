#GiftStarter Blog

Theme for GiftStarter's blogs.

##Theme Name: giftstarter
- Author: Emotiv Labs, Inc. 
- Author URI: http://giftstarter.com/about/
- Description: Our thoughts on group gifting, social, commerce, and building an amazing company culture.
- Version: 1.0.0
- License: MIT 2014 Emotiv Labs Inc.
- Text Domain: blog.giftstarter.com
- Domain Path: /

GiftStarter uses Underscores http://underscores.me/, (C) 2012-2014 Automattic, Inc.

##Setting the Blog Title & Tagline
Set the name of the blog (i.e. social, open, etc.) and the tagline by going to Appearance > Customize in the WP admin sidebar. Make sure to capitalize the title (the css will make it lowercase for presentation, but will show up title case in the tab or when shared.)

##Security measures
-Change wp_ prefix in database
  -Change wp-config.php file
  -Change prefix in PhpMyAdmin file
  -Change the database prefixes from wp_ to new_prefix_usermeta and new_prefix_options
-Hide meta name='generator'
  -in your functions.php file put this line <?php remove_action('wp_head', 'wp_generator'); ?>
-Remove remote editing option
  - <?php add_filter('xmlrpc_enabled', '__return_false');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    ?>
  - close the access to xmlrpc.php through .htaccess
    <Files xmlrpc.php>
      order allow,deny
      deny from all
    </Files>
-Close the access to wp-config.php through .htaccess
    <Files wp-config.php>
      order allow,deny
      deny from all
    </Files>
-Hide admin panel. Easiest way - install Lockdown WP Admin plugin
- Change WP Content default folder to custom one. Again, the easiest way to do that - installation of Change WP Content plugin
- Hide attachment pages from users (can be dangerous to leave it open - spam) install Attachment Pages Redirect plugin
  Optional:
- Intstall EWWW image optimizer for image compression
- Intstall Yoast SEO for seo optimization
- WP Super Cache for content caching

More documentation to come, promise!


