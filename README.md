## Tiny Http Client

### Installation

```bash
composer require mcmatters/ticl
```

### Usage

```php
<?php

declare(strict_types = 1);

require 'vendor/autoload.php';

$client = new \McMatters\Ticl\Client();

try {
    $response = $client->get('http://example.com/api/user?token=test');
    $user = $response->json();
} catch (Throwable $e) {
    $error = json_decode($e->getMessage(), true);
}
```

### Note

If you want something more customizable, then please use [Guzzle](https://github.com/guzzle/guzzle)
