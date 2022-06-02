## Installation

You can install the package via composer:

```bash
composer require moussazoungrana/event-manager
```

## Usage

```php 
<?php 

 require __DIR__.'/../vendor/autoload.php';

 \moz\EventManager\Emitter::getInstance()->on('first.event', function (){
     echo "first event \n";
 });
 
 \moz\EventManager\Emitter::getInstance()->emit('first.event');
 
 #first event
 
 
 ###########################
 
 \moz\EventManager\Emitter::getInstance()->on('second.event', function ($t){
     echo "second event here \n";
     echo $t;
 });
 
 \moz\EventManager\Emitter::getInstance()->emit('second.event', 'I am argument');
  #second event here 
  #I am argument
 
 
 
 
```
 
