<?php
//login_form_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class HoursForm extends WebTestCase {

	  function testCorrectData() {
		$this->get(VIRTUAL_PATH . '/login.php');
		$this->assertResponse(200);

        $this->setField("hours", "2");
		$this->setField("rate", "50");
		$this->clickSubmit("Login");

		$this->assertResponse(200);
		$this->assertText("You input 2 hours at a rate of $2 and your pay is $100");
	}
	

}