<?php
$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data
// validate the variables ======================================================
// if any of these variables don't exist, add an error to our $errors array
if (empty($_POST['name']))
    $errors['name'] = 'Поле Ваши ФИО обязательно';
if (empty($_POST['town']))
    $errors['town'] = 'Поле Ваш город обязательно';
if (empty($_POST['phone']))
    $errors['phone'] = 'Поле Ваш телефон обязательно';

// $selected = $_POST['town']

// return a response ===========================================================
// if there are any errors in our errors array, return a success boolean of false
if ( ! empty($errors)) {
    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
} else {
    // if there are no errors process our form, then return a message
    // DO ALL YOUR FORM PROCESSING HERE
    $method = $_SERVER['REQUEST_METHOD'];
      $c = true;
      if ( $method === 'POST' ) {

        switch($_POST['town']){
        case 'kiev':
            $project_name = "lavanda.net.ua";
            $admin_email  = "delivery@lavanda.net.ua, salon.parkavenue@lavanda.net.ua";
            $form_subject = "ВЫЗОВ КУРЬЕРА > КИЕВ";
        break;
        case 'zaporozhe':
            $project_name = "lavanda.net.ua";
            $admin_email  = "delivery@lavanda.net.ua, salon.lobanovskogo@lavanda.net.ua";
            $form_subject = "ВЫЗОВ КУРЬЕРА > ЗАПОРОЖЬЕ";
        break;
        case 'energodar':
            $project_name = "lavanda.net.ua";
            $admin_email  = "delivery@lavanda.net.ua, salon.energodar@lavanda.net.ua";
            $form_subject = "ВЫЗОВ КУРЬЕРА > ЭНЕРГОДАР";
        break;

    }

      	foreach ( $_POST as $key => $value ) {
      		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
      			$mess .= "
      			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
      			<td style='padding: 10px; border: #e9e9e9 1px solid; text-transform: capitalize'><b>$key</b></td>
      			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
      		</tr>
      		";
      	     }
        }
      }
    // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)
    $mess = "<table style='width: 100%;'>$mess</table>";

    function adopt($text) {
    	return '=?UTF-8?B?'.base64_encode($text).'?=';
    }

    $headers = "MIME-Version: 1.0" . PHP_EOL .
    "Content-Type: text/html; charset=utf-8" . PHP_EOL .
    'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
    'Reply-To: '.$admin_email.'' . PHP_EOL;

    mail($admin_email, adopt($form_subject), $mess, $headers );
    // show a message of success and provide a true success variable
    $data['success'] = true;
    $data['message'] = 'Ожидайте звонок в ближайшее время!';
}

// return all our data to an AJAX call
echo json_encode($data);

?>