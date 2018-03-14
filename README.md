# Rewardable


## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require lifeids/rewardable
```

To get started, you'll need to publish the vendor assets and migrate:

```
php artisan vendor:publish --provider="Lifeids\Rewardable\RewardableServiceProvider" && php artisan migrate
```

## Usage

## Setup a Model

``` php
<?php


namespace App;

use Lifeids\Rewardable\HasRewardsTrait;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasRewards;

}
```

## Testing

``` bash
$ phpunit
```


## Credits

- [Brian Faust](https://github.com/lifeids)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://lifeids.com)
