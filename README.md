[![Build Status](https://travis-ci.org/AfriCC/php-valid-email.svg?branch=master)](https://travis-ci.org/AfriCC/php-valid-email)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/AfriCC/php-valid-email/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/AfriCC/php-valid-email/?branch=master)
[![Coverage Status](https://coveralls.io/repos/github/AfriCC/php-valid-email/badge.svg?branch=master)](https://coveralls.io/github/AfriCC/php-valid-email?branch=master)
[![Latest Stable Version](https://poser.pugx.org/africc/valid-email/v/stable.svg)](https://packagist.org/packages/africc/valid-email)
[![Packagist](https://img.shields.io/packagist/dt/africc/valid-email.svg)](https://packagist.org/packages/africc/valid-email)
[![Latest Unstable Version](https://poser.pugx.org/africc/valid-email/v/unstable.svg)](https://packagist.org/packages/africc/valid-email)
[![License](https://poser.pugx.org/africc/valid-email/license.svg)](https://packagist.org/packages/africc/valid-email)

# africc/valid-email

A simple email validator in PHP.

## Install

```bash
$ composer require africc/valid-email
```

## Usage

```php
<?php

require 'vendor/autoload.php';

if (AfriCC\Valid\email('test@afri.cc')) {
    echo 'valid!';
}
```

## License

Licensed under the MIT License. See the [LICENSE file](LICENSE) for details.

## Author Information

[AfriCC](https://afri.cc)
