blazecoin-php
=============

A basic PHP library for interacting with blazecoind - http://api.blazeco.in

I plan to expand upon the end points of the API.  Right now accounts and movement of coins is working.

*Notes:* You can follow along (and suggest... please do) which API endpoints I work on next.  Head to the [issues area](https://github.com/wpstudio/blazecoin-php/issues) to contribute or to see what upcoming endpoints will be added to this api.


## Requirements

Requires **blazecoind** to already be installed and running on your local server or reachable by your server.

Get blazecoin source from: https://github.com/wpstudio/blazecoin


## Usage:

Example use, see examples.php for more

```
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
print( $address );

// check balance
print( "name: " . $blaze->get_balance( 'name' ) );

// send money externally (withdraw)
$blaze->send( 'name', 'BU6tjT9keTxpKBixzwujsX9w9AKL6J6LJe', 100 );

```


