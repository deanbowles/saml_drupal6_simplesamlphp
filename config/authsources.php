<?php

$config = array(

    // This is a authentication source which handles admin authentication.
    'admin' => array(
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ),

    'drupal-userpass' => array(
     'drupalauth:External',
 
     // The filesystem path of the Drupal directory.
     'drupalroot' => '/var/www/scilld.com/public_html',
 
     // Whether to turn on debug
     'debug' => true,
 
     // the URL of the Drupal logout page
     'drupal_logout_url' => 'https://www.scilld.com/user/logout',
 
     // the URL of the Drupal login page
     'drupal_login_url' => 'https://www.scilld.com/user',
 
     // Which attributes should be retrieved from the Drupal site.
 
               'attributes' => array(
                                      array('drupaluservar'   => 'uid',  'callit' => 'ui'),
                                      array('drupaluservar' => 'init', 'callit' => 'User.UserName'),
                                      array('drupaluservar' => 'name', 'callit' => 'User.LastName'),
                                      array('drupaluservar' => 'mail', 'callit' => 'User.Email'),
                                      array('drupaluservar' => 'field_first_name',  'callit' => 'givenName'),
                                      array('drupaluservar' => 'field_last_name',   'callit' => 'sn'),
                                      array('drupaluservar' => 'field_organization','callit' => 'ou'),
                                      array('drupaluservar' => 'roles','callit' => 'User.ProfileId'),
                                   ),
    ),
);

