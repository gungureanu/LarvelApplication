# features/functional/welcome.feature
Feature: Log in to web application
    In order to protect sensitive data
    As a system administrator
    I want the system to accept only authorized users
Scenario: Basic login into the user's area
        Given I visit the URL of the web application
        When I log in
        Then I should see the text "Welcome, {my_username}"
		
		
 