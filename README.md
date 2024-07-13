# Google OAuth2 Modern Authentication and GMail API

Youtube video: [https://www.youtube.com/watch?v=ZzJJP4tCDec](https://www.youtube.com/watch?v=ZzJJP4tCDec)

Clone this repo

```sh
composer install
```

Goto [https://console.cloud.google.com/](https://console.cloud.google.com/)

Create a credential and consent screen in Google Cloud Console (See [https://github.com/toggenation/gmail-email-send](https://github.com/toggenation/gmail-email-send) for better instructions on doing this)

When adding use local redirect URI `http://localhost/getcode`

Download the client_secret*.json file

Add client_secret to `quickstart.php`

```php

    $client->setAuthConfig('client_secret_430939513598-le4pida7h6467kvvr552ebhmjiurj5cr.apps.googleusercontent.com.json');

```

Modify the From and To email addresses in the sample email

The format of the email should be https://www.rfc-editor.org/rfc/rfc2822

```php
     $email = <<<HERE
    From: James McDonald <toggen.yt@gmail.com
    To: Rodney Dangles <toggen.yt@gmail.com>
    Subject: Test from quickstart


    Body here
    HERE;
```

Run quickstart script

```sh
php quickstart.php
```

There will be a URL in the terminal click on it and open the Google Consent screen in your browser. Accept the Consent screen as the Google user you want to send email as.

After accepting the consent screen you will be redirected back to `http://localhost/getcode` 

Copy the code from the location bar  http://localhost/getcode?code=[codehere]&scope= and paste at the `Enter verification code:` prompt

The script should continue and return a list of labels and send an email

Quickstart script taken from [https://github.com/googleworkspace/php-samples/blob/main/gmail/quickstart/quickstart.php](https://github.com/googleworkspace/php-samples/blob/main/gmail/quickstart/quickstart.php)

