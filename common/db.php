<?php

/**
 * Configuration file for: Database Connection
 * This is the place where your database login constants are saved
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 */


/** database host, usually it's "127.0.0.1" or "localhost", some servers also need port info, like "127.0.0.1:8080" */
define("DB_H", "127.0.0.1");

/** name of the database. please note: database and database table are not the same thing! */
define("DB_N", "mtruty_labs");

/** user for your database. the user needs to have rights for SELECT, UPDATE, DELETE and INSERT.
/** By the way, it's bad style to use "root", but for development it will work */
define("DB_U", "mtruty_labsadmin");

/** The password of the above user */
define("DB_P", "JMJpray4MDT$$");


$db_connection = mysqli_connect(DB_H, DB_U, DB_P, DB_N);
mysqli_close($db_connection);
