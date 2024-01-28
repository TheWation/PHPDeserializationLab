# Insecure Deserialization Lab (PHP)

This lab demonstrates a simple example of insecure deserialization in PHP. Insecure deserialization is a vulnerability that can lead to remote code execution when an application deserializes untrusted data.

## Lab Setup

### Requirements

- PHP installed on your server
- A web server (e.g., Apache, Nginx) to host the PHP files
- A browser to interact with the lab

### Installation

1. Clone this repository to your web server:

```bash
git clone https://github.com/TheWation/PHPDeserializationLab
```

2. Navigate to the project directory:
```bash
cd PHPDeserializationLab
```

3. Start your web server.
```php
php -S localhost:8000
```

## Lab Description

The lab consists of two PHP files:

- `index.php`: This file contains a simple PHP class Book with public properties (name and qty). The index.php file attempts to deserialize user-supplied data from the $_GET['book'] parameter and prints the book's name.

- `TaskScheduler.php`: This file defines a TaskScheduler class with a __destruct method. The __destruct method calls system($this->task), allowing for command execution when the TaskScheduler object is destructed.

### Disclaimer

This lab is for educational purposes only. Do not run this code on a production server. Understand the risks associated with insecure deserialization and always follow secure coding practices.