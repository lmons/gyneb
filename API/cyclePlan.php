<?php
$post =file_get_contents('php://input');
$cc=json_decode($post);
$id_account=$_GET['id_account'];
$url = "http://scrm.thnln.com/service/v4_1/rest.php";
$url2 = "http://scrm.thnln.com/custom/service/v4_1_custom/rest.php";
$username = "tawfiq.kihal.tabuk@gmail.com";
$password = "password";
//function to make cURL request
function call($method, $parameters, $url)
{
    ob_start();
    $curl_request = curl_init();

    curl_setopt($curl_request, CURLOPT_URL, $url);
    curl_setopt($curl_request, CURLOPT_POST, 1);
    curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    curl_setopt($curl_request, CURLOPT_HEADER, 1);
    curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);

    $jsonEncodedData = json_encode($parameters);

    $post = array(
        "method" => $method,
        "input_type" => "JSON",
        "response_type" => "JSON",
        "rest_data" => $jsonEncodedData
    );

    curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);
    $result = curl_exec($curl_request);
    curl_close($curl_request);

    $result = explode("\r\n\r\n", $result, 2);
    $response = json_decode($result[1]);
    ob_end_flush();

    return $response;
}

//login ---------------------------------------------
$login_parameters = array(
    "user_auth" => array(
        "user_name" => $username,
        "password" => md5($password),
        "version" => "1"
    ),
    "application_name" => "RestTest",
    "name_value_list" => array(),
);

$login_result = call("login", $login_parameters, $url);

$get_module_fields_parameters = array(
    //Session id
    'session' => $login_result->id,
    'module_name' => 'Thin_CyclePlans',
    'query' => 'thin_cycleplans.active=1',

    //The SQL ORDER BY clause without the phrase "order by".
    'order_by' => "",

    //The record offset from which to start.
    'offset' => '0',
    //'select_fields' => array(),

    'max_results' => '',

    //To exclude deleted records
    'deleted' => '0',
    //The list of fields to be returned in the results


);
$get_module_fields_result=call("get_entry_list",$get_module_fields_parameters, $url);

print_r(json_encode($get_module_fields_result));

