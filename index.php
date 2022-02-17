<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 

// We are going to use session variables so we need to enable sessions
session_start();


function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}


// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    // echo '<h2>$_COOKIE</h2>';
    // var_dump($_COOKIE);
    // echo '<h2>$_SESSION</h2>';
    // var_dump($_SESSION);
}

whatIsHappening();
// TODO: provide some products (you may overwrite the example)
$products = [
    ['name' => 'Banter with Sara', 'price' => 20000],
    ['name' => 'Banter with Jian', 'price' => 0.99],
    ['name' => 'Banter with Michelle', 'price' => 20.5],
    ['name' => 'Banter with Jordy', 'price' => 12.99],
    ['name' => 'Banter with Benjamin', 'price' => 13.05],
    

];

$totalValue = 0;

function validate()
{
    // This function will send a list of invalid fields back
    return [];
}

function handleForm()
{
    // TODO: form related tasks (step 1)

    // Validation (step 2)
    $invalidFields = validate();
    if (!empty($invalidFields)) {
        // TODO: handle errors
    } else {
        // TODO: handle successful submission
    }
}

// TODO: replace this if by an actual check
$formSubmitted = false;
if ($formSubmitted) {
    handleForm();
}

require 'form-view.php';