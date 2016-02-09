## Laravel PHP Login Application 

## Installing Behat-Laravel-Extension

As always, we need to pull in some dependencies through Composer.

composer require behat/behat behat/mink behat/mink-extension laracasts/behat-laravel-extension --dev
This will give us access to Behat, Mink, and, of course, the Laravel extension.

1. Setting up Composer

run command 

 The installation of the package manager is quite simple. The command below is executed in my work directory /home/ervin/workspace and this is where the composer.phar will live.

curl -sS https://getcomposer.org/installer | php

This will download the latest Composer package and you can use it right away by calling php composer.phar. To avoid typing the whole command over and over again, create an alias. Naturally, the paths in your case will be different depending on your setup.

which php # shows us where the bin direcotry of PHP is
/home/ervin/.phpbrew/php/php-5.6.4/bin/php
Next, create the file /home/ervin/.phpbrew/php/php-5.6.4/bin/composer containing the following code.

#!/usr/bin/env bash

"/home/ervin/.phpbrew/php/php-5.6.4/bin/php" "/home/ervin/workspace/composer.phar" $@
The last step is to make the file executable and test out our alias.

$ chmod +x /home/ervin/.phpbrew/php/php-5.6.4/bin/composer
$ composer --version
Composer version 1.0-dev


## Setting up Laravel Login

1. Downlaod zip package 
2. Copy lv_login directory into web server
3. run migrate command to setup database, remember don't forget to change database configuration file.
4. Seed the database

Now, Application ready to run

## For testing in Cucumber here we use behat..

1. Insatllation of Behat using composer.

 

2. Create the Behat.yml Configuration File
Next, within your project root, create a behat.yml file, and add:

default:
    extensions:
        Laracasts\Behat:
            # env_path: .env.behat
        Behat\MinkExtension:
            default_session: laravel
            laravel: ~
 
 
 
 3. create .feature file in /features/functionaldirectory
 
 Put ...
 
 # features/functional/welcome.feature
Feature: Log in to web application
    In order to protect sensitive data
    As a system administrator
    I want the system to accept only authorized users
Scenario: Basic login into the user's area
        Given I visit the URL of the web application
        When I log in
        Then I should see the text "Welcome, {my_username}"
		
		
4. Create  contaxt file "LaravelFeatureContext.php" in featurer/bootstrap

1. Define the contexrt difinistion
2. run command - vendor\bin\behat --dry-run --append-snippets
3. Next -  vendor\bin\behat in cmd



