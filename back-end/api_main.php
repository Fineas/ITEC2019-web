<?php

	header('Access-Control-Allow-Origin: *');

	session_start();

	require "./vendor/autoload.php";

	$client = new MongoDB\Client;

	$main_db = $client -> main_itec;

	$accounts = $main_db -> accounts;

	$products = $main_db -> products;

	$query = "";

	$data = "";

	$split_data_pattern = "//";

	if(isset($_GET['q'])) $query = $_GET['q'];

	if(isset($_GET['d'])) $data = explode($split_data_pattern, $_GET['d']);



	function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



	function base64ToImage($base64_string, $output_file) {
	    $file = fopen($output_file, "wb");

	    $data = explode(',', $base64_string);

	    fwrite($file, base64_decode($data[1]));
	    fclose($file);

	    return $output_file;
}


	if($query == "yBuMKjnrVEeKN5Hf78zr")//register query
	{
		$account_type = $data[0];
		$email = $data[1];
		$firstname = $data[2];
		$lastname = $data[3];
		$phone_number = $data[4];
		$address = $data[5];
		$specific_type = $data[6];
		$password = $data[7];

		$password = hash('sha256', $password);

		//email_check
		$qry = $accounts -> findOne([
			'email' => $email 
		]);

		if(!isset($qry['_id']))
		{

			//echo "1";

			$specific_type_in_database = "account_type";
			if($account_type == "1") $specific_type_in_database = "selling_buyer_type";
			$accounts -> insertOne([
				'email' => $email,
				'firstname' => $firstname,
				'lastname' => $lastname,
				'phone_number' => $phone_number,
				'address' => $address,
				$specific_type_in_database => $specific_type,
				'account_status' => '0',
				'password' => $password,
				'auth_token' => '0'
			]);

		}
		else
		{
			echo "0";
		}


	}
	if($query == "dQZ9ryLPwLZJTyHOoKhK")//login query
	{
		$email = $data[0];
		$password = hash('sha256', $data[1]);

		$qry = $accounts -> findOne([
			'email' => $email 
		]);

		if(isset($qry['_id']))
		{
			if($qry['password'] == $password)
			{

				$auth_token = generateRandomString(30);

				$accounts->updateOne(
				    [ 'email' => $email ],
				    [ '$set' => [ 'auth_token' => $auth_token ]]
				);

				echo $auth_token;

			}
			else
			{
				echo "1";
			}
		}
		else
		{
			echo "0";
		}

		
	}
	if($query == "wE3f3iF31Ji1eBe91rh9")//create new product
	{
		$product_category = $data[0];
		$product_title = $data[1];
		$product_quantity = $data[2];
		$product_price = $data[3];
		$product_images = $data[4];
		$product_owner = $data[5];
		$product_description = $data[6];

		$qry = $accounts -> findOne([
			'auth_token' => $product_owner
		]);

		if(isset($qry['_id']))
		{
			if(isset($qry['selling_buyer_type']))
			{
				$images_in_base64_array = explode(";", $product_images);
				$images_to_database_array = "";
				for ($i=0; $i < sizeof($images_in_base64_array); $i++) { 
					$new_image_name = generateRandomString(30).".jpg";
					base64ToImage($images_in_base64_array[$i],$new_image_name);
					$images_to_database_array .= $new_image_name.";" ;
				}
				$images_to_database_array = substr($images_to_database_array, 0, -1);
				$products -> insertOne([
					'posted_by' => $qry['email'],
					'product_category' => $product_category,
					'product_title' => $product_title,
					'product_quantity' => $product_quantity,
					'product_price' => $product_price,
					'product_images' => $images_to_database_array,
					'product_description' => $product_description,
					'product_target_market' => $qry['selling_buyer_type']
				]);
			}

		}


	}
	if($query == "EUYaObPjxWXwC7fbjERn")//display account type and the account type value
	{
		$auth_token = $data[0];
		$qry = $accounts = findOne([
			'auth_token' => $auth_token
		]);
		if(isset($qry['_id']))
		{
			if(isset($qry['account_type'])) echo "buyer"."//".$qry['account_type'];
			if(isset($qry['selling_buyer_type'])) echo "seller"."//".$qry['selling_buyer_type'];
		}
	}
	if($query == "pNq6TQ5oERPqUgyiu8o4")//search query
	{
		$category = $data[0];
		$product_target_market = $data[1];
		$skip = $data[2];
		$limit = $data[3];
		if($product_target_market == "-1")
		{
			//
		}
		else
		{
			//
		}
	}

	/*$accounts -> insertOne([
		'username' => 'test1',
		'firstname' => 'popescu',
		'lastname' => 'andrei',
		'account_type' => '0'
	]);*/



	

?>