<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param   array   $parameters     context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^Foo$/
     */
    public function foo()
    {
        // Pass
    }

    /**
     * @When /^Bar$/
     */
    public function bar()
    {
        return [];
        // Pass
    }

    /**
     * @Then /^Say "([^"]*)"$/
     */
    public function say($argument1)
    {
        // Pass
    }
}
