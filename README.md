# Google OAuth2 Modern Authentication and GMail API

Youtube video: [https://www.youtube.com/watch?v=ZzJJP4tCDec](https://www.youtube.com/watch?v=ZzJJP4tCDec)

Clone this repo

```sh
composer install
```

Goto [https://console.cloud.google.com/](https://console.cloud.google.com/)

Create a credential and consent screen in Google Cloud Console ([https://github.com/toggenation/gmail-email-send](https://github.com/toggenation/gmail-email-send) for better instructions on doing this)

When adding use local redirect URI `http://localhost/getcode`

Download the client_secret*.json file

Add client_secret to `quickstart.php`

```php

    $client->setAuthConfig('client_secret_430939513598-le4pida7h6467kvvr552ebhmjiurj5cr.apps.googleusercontent.com.json');

```

Run quickstart script

```sh
php quickstart.php
```

Quickstart script taken from [https://github.com/googleworkspace/php-samples/blob/main/gmail/quickstart/quickstart.php](https://github.com/googleworkspace/php-samples/blob/main/gmail/quickstart/quickstart.php)

