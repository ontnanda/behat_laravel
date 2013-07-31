<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

class HomePageFeatureContext extends BaseContext {
    public function __construct() { }
    /**
    * @Given /^I want to buy a second hand car$/
    **/
    public function iWantToBuyASecondHandCar(){
      throw new PendingException();
    }


    /**
    * @When /^I open dealfish$/
    **/
    public function iOpenDealfish()
    {
      throw new PendingException();
    }

    /**
    * @Given /^I move to "([^"]*)" section$/
    **/
    public function iMoveToSection($targer_section)
    {
      throw new PendingException();
    }

    /**
     * @Then /^I should see (\d+) most recent posts about car$/
     **/
    public function iShouldSeeMostRecentPostsAboutCar($number_of_posts)
    {
      throw new PendingException();
    }    
}
