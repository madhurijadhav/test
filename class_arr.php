<?php

class customer {

public $customers = array(array(
														"name" => "abc",
														"age" => "30",
														"company" => "xyz",
														"address" => array (
																									"street" => array (
																																				"street1" => "Road1",
																																				"locality" => "Road2",
																																		 ),
																										"city" => "Nsk",
																										"pincode" => 422222,
																									),
			  										"designation" => "Project Manager"
													),
										array(
														"name" => "jkl",
														"age" => "21",
														"company" => "xyz",
														"address" => array (
																									"street" => array (
																																				"street1" => "K Road",
																																				"locality" => "Road2",
																																		 ),
																										"city" => "Pune",
																										"pincode" => 444444,
																									),
			  										"designation" => "Developer",
													),
										);
										
										function getUser($key)
										{
												$test = $this->customers[$key];
												return $test;
												
												//$user = return 1;
										}// end of function
} //end of class

$customer = new Customer();
//echo "User = ".$customer->getUser(0);
$detail = $customer->getUser(1); 
print_r($detail);
?>