# Teste em PHP para estágio:

Web Developer Interview Test
===================

Thank you for your interest in working with us! This is a practical test that all candidates must complete before being considered for employment as a web developer.

Please fork this repository, respond to the following problems in the corresponding files, and make it available on your own GitHub account.

## Problem 1 (PHP)

Given the following input values from a form, create a method or methods to validate the input based on their requirements. Throw an exception if any data is invalid.

 - name
     - is required
     - must be first name AND last name
 - email
     - is required
     - is a valid email address
 - twitter
     - is optional
     - is a twitter handle

The input data will be in the following format:

```
$input = [
    'name' => '...',
    'email' => '...',
    'twitter' => '...'
];
```

## Problem 2 (PHP)

Given an array of `$employees` with their names and age:

```
$employees = array('Travis' => 29, 'John' => 30, 'Manny' => 24, 'Gabriel' => 20, 'Yogi' => 22);
```

Write a function to generate a JSON formatted output with the names ordered alphabetically. An example output is given:
```
[
    {
        "name": "Gabriel",
        "age": 20
    },
    ...
]
```

## Problem 3 (PHP)

Imagine you saw the following code in a project. How would you improve it?
```
$arr = array('foo', 'bar', 'baz');
$i = 0;
while($i < count($arr)) {
    echo $arr[$i];
    $i++;
}
```

## Problem 4 (MySQL)

Design a database schema for a simple order management system that describe the following entities and their relationships (create as many tables as necessary). Please use any tools you prefer, and deliver the result as a complete dump file in problem4.sql.

 - product
     - has a name
     - has a SKU
     - has a price
 - order
     - has a date
     - can have many products
     - can have multiple quantity of the same product
     - belongs to a customer
 - customer
     - has a name
     - has an email
     - can have many orders

## Problem 5 (MySQL, PHP)

Use the schema from Problem 4 and:

 - Create a query for getting the total quantity of products ordered and the total value for all orders made on the current date.
 - Please create sample data in the database to test your solution, and provide it in the problem5.sql file.
 - Create a simple php application to connect to the database and produce the same result as above, but for any arbitrary date (as if it came from a form).
