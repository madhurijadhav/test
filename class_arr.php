<?php

class customer {

public $customers = array(array(
														"name" => "Json",
														"age" => "30",
														"company" => "combisoft",
														"address" => array (
																									"street" => array (
																																				"street1" => "M.G Road",
																																				"locality" => "college road",
																																		 ),
																										"city" => "Nashik",
																										"pincode" => 422009,
																									),
			  										"designation" => "Project Manager"
													),
										array(
														"name" => "Julie's",
														"age" => "21",
														"company" => "combisoft",
														"address" => array (
																									"street" => array (
																																				"street1" => "G.K Road",
																																				"locality" => "school road",
																																		 ),
																										"city" => "Pune",
																										"pincode" => 432009,
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