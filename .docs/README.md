# Model

View-model and model tools for Nette Framework.

## Content

- [Setup](#setup)
- [Collections](#collections)
- [Values](#values)

## Setup

```bash
composer require contributte/model
```

## Collections

### LazyCollection

Initializes data only when required.

```php
use Contributte\Model\ViewModel\Collections\LazyCollection;

$items = LazyCollection::fromCallback(callback $datasource);

foreach($items as $item) { // Datasource callback is called on first access

}
```

## Values

### Email

```php
use Contributte\Model\Values\Email;

$email = new Email('foo@example.com'); // Validate email format
$value = $email->get(); // Get value
$equal = $email->equal(new Email('foo@example.com')); // Compare values of objects
```
