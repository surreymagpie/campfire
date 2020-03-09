# campfire

A WordPress theme for UK scout groups based on the 2018 brand guidelines

## Development

Contributions are greatly encouraged. The theme has been setup to take advantage of GulpJS and BrowserSync. If you have a local development installation of WordPress and NodeJS installed, you can get set up to work on this theme as follows (assumed starting from WordPress root directory):

```bash
    cd wp-content/themes
    git clone https://github.com/surreymagpie/campfire.git
    cd campfire
    npm install
    cp example.settings.js settings.js
```

Edit the newly created `settings.js` file to point the BrowserSync server to your local domain, be that `http://localhost` or a custom URL. BrowserSync will start its proxy server on `http://localhost:3000` but it can also be accessed using the `192.168.x.x:3000` address given in the terminal output. This is especially useful as it allows testing on other devices, such as phones and tablets.

Optionally, you can add the following line to your WordPress `wp-config.php` file to prevent browser caching CSS and JS assets:

```php
    define( 'DEV_MODE', true );
```

The following commands are available:

- `gulp` - compile assets, start BrowserSync server and reload on changes
- `gulp serve` - start BrowserSync server only
- `gulp styles` - recompile CSS only
