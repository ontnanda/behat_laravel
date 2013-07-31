Feature: HomePageFeature 
In order to see information of dealfish 
As a user I go to dealfish
I should see 10 most recent posts 

Scenario:
    Given I want to buy a second hand car 
    When I open dealfish
    And I move to "car" section
    Then I should see 10 most recent posts about car
