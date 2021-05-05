![](https://heatbadger.now.sh/github/readme/contributte/model/?deprecated=1)

<p align=center>
    <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
    <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
    <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
    Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

## Disclaimer

| :warning: | This project is no longer being maintained. Please use [contributte/utils](https://github.com/contributte/utils).
|---|---|

| Composer | [`contributte/model`](https://packagist.org/contributte/model) |
|---| --- |
| Version | ![](https://badgen.net/packagist/v/contributte/model) |
| PHP | ![](https://badgen.net/packagist/php/contributte/model) |
| License | ![](https://badgen.net/github/license/contributte/model) |

## Versions

| State       | Version | Branch   | Nette | PHP     |
|-------------|---------|----------|-------|---------|
| dev         | `^0.3`  | `master` | 3.0+  | `^7.2`  |
| stable      | `^0.2`  | `master` | 3.0+  | `^7.2`  |
| stable      | `^0.1`  | `master` | 2.4   | `>=7.1` |

## Usage

### Collections

#### LazyCollection

Initializes data only when required.

```php
use Contributte\Model\ViewModel\Collections\LazyCollection;

$items = LazyCollection::fromCallback(callback $datasource);

foreach($items as $item) { // Datasource callback is called on first access

}
```

### Values

#### Email

```php
use Contributte\Model\Values\Email;

$email = new Email('foo@example.com'); // Validate email format
$value = $email->get(); // Get value
$equal = $email->equal(new Email('foo@example.com')); // Compare values of objects
```

## Development

This package was maintain by these authors.

<a href="https://github.com/f3l1x">
  <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team.
Also thank you for being used this package.
