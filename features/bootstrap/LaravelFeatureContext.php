<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Illuminate\Foundation\Testing\ApplicationTrait;

use App\User;
use PHPUnit_Framework_Assert as PHPUnit;
/**
 * Defines application features from the specific context.
 */  
class LaravelFeatureContext extends Behat\MinkExtension\Context\MinkContext implements Context, SnippetAcceptingContext
{
   
   use ApplicationTrait;
   private $login;
   private $my_username;
   protected $app;
   
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }
	
	public static function bootstrapLaravel()
    {
        $unitTesting = true;
        $testEnvironment = true;
        $app = require_once __DIR__ . '/../../../../bootstrap/start.php';
        $app->boot();
    }    /**
     * Creates the application.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication()
    {
		 throw new PendingException();
    }    /**
     * @Given I am logged in
     */
    public function iAmLoggedIn()
    {
    	 throw new PendingException();
	}

   
    /**
     * @Then I should see :arg1
     */
    public function iShouldSee($arg1)
    {
			   
    }

    /**
     * @Given Login Here
     */
    public function loginHere()
    {
		 throw new PendingException();
    }

    /**
     * @Given I visit the URL of the web application
     */
    public function iVisitTheUrlOfTheWebApplication()
    {
		$this->login = false;
    }

 
    /**
     * @Then I should see the text :arg1
     */
    public function iShouldSeeTheText($arg1)
    {
 		 $user = new User();
		 return  $user;
	}
	    
 
    /**
     * @When I log in
     */
    public function iLogIn()
    {
		 $this->login = true;
    }

    /**
     * @When I visit :arg1
     */
    public function iVisit($arg1)
    {
        Auth::loginUsingId($arg1);
    }
}
