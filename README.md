# Google OAuth2 Modern Authentication and GMail API

Clone this repo

```sh
composer install
```

Goto https://console.cloud.google.com/

Create a credential and consent screen. In Google Cloud Console.

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

