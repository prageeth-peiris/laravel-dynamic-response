
## Installation

You can install the package via composer:

```bash
composer require prageeth-peiris/laravel-dynamic-response
```

## Usage

```php

in your controller use LaravelDynamicResponseFacade

class myController extends Controller{


  public function all(){
  
  $builderObject = Post::where('author','test')->select('*');
   
   return  LaravelDynamicResponseFacade::send($builderObject);
  
  }


}

```
And in the request you must specify responseFormat query parameter <br>
example : http://test.local?responseFormat=table

Supported Formats : 

- table
- csv

### Testing

```bash
composer test
```

### Dependencies

- PHP 8.1
- Laravel 8
- https://spatie.be/docs/laravel-data/v1/introduction

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email glpspeiris@gmail.com instead of using the issue tracker.

## Credits

-   [Prageeth Peiris](https://github.com/prageeth-peiris)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
