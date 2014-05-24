<?php

## Simple command-line script to show examples

require "./Blaze.php";

$config = array(
    'user' => 'blazecoinrpc',
    'pass' => '--password--',
    'host' => '127.0.0.1',
    'port' => '55413' );

// create client conncetion
$blaze = new Blaze( $config );


// create a new address
$address = $blaze->get_address( 'name' );
print( "Address: $address \n" );

// list accounts in wallet
print_r( $blaze->list_accounts() );

// get balance in wallet
print( "name: " . $blaze->get_balance( 'name' ) );

// move money from accounts in wallet
// moves from 'name2' to account 'name'
$blaze->move( 'name2', 'name', 10000 );

// send money externally (withdraw)
// send from account to external address
$blaze->send( 'name', 'BU6tjT9keTxpKBixzwujsX9w9AKL6J6LJe', 100 );

