# kudaopen_api_php
This is a simple php library for kuda open Api


## Installation

Initialize the Project With Composer 

```bash
  composer require technolix/kudaopen_api_php
```

## Usage/Examples

#### Initialize 

```php
require "vendor/autoload";


$Kudabank = (new KudabankController)
        ->Initialize("emmanuelonyo34@gmail.com", "6PZFIceatyxJAq9T4pd2");

```

#### Fetch Available Banks

```php

// Fetch all Nigerian Banks
$Kudabank->bank_list()

```


#### Generate Virtual Account


```php

$data =  [
            "email"=> 'emmanuelonyo34@gmail.com', 
            "phoneNumber"=>"08074224016",
            "lastName"=>"Onyo", 
            "firstName"=>"Emmanuel", 
            "trackingReference"=> "12456522155421"
        ];

$Kudabank->create_virtual_account($data);

```

## PLEASE CCHECK THE EXAMPLE FILES FOR MOR INFO 


## Documentation/API reference

[Documentation](https://kudabank.gitbook.io/kudabank/)


## Buy me a coffee 

I need Employment you can contact me via +2348102937785 <emmanuelonyo34@gmail.com>
