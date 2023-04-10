<?php

require_once('function.php');

$array =
 [
    'name' => 'viola',
    'phone' => '0128483629',
    'address' => 'smoha',
    'email' => 'violageorge@gmail.com'
];

$xmlDocument = new DOMDocument();
$xmlDocument->load("employee.xml");
createEmployee($array, $xmlDocument);
$xmlDocument->save("employee.xml");


$employees = $xmlDocument->getElementsByTagName('employee');
$arrOfEmployees = [];
foreach ($employees as $employee)
{
    $arrOfEmployees[] = $employee;
}
var_dump(displayEmployee($arrOfEmployees[0]));
