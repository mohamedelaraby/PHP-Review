<?php 

// Check for posted data
// echo (!filter_has_var(INPUT_POST,'data')) ? 
// 'NO DATA' . '<br>' 
// : 'DATAFOUND' . '<br>'; 


// if (filter_has_var(INPUT_POST,"data")) {

//     $email = $_POST['data'];

//     // Remove illegal chars
//     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//     echo $email . '<br>';

//     if(filter_var($email,FILTER_VALIDATE_EMAIL)){
//             echo 'Email is valid';
//         } else {
//             echo 'Email is not valid';
//         }
// } 


// Check for number validation
$var = 1232454;
// if(filter_var($var, FILTER_VALIDATE_INT)){
//     echo $var . ' is a number'. '<br>';
// } else {
//     echo $var  . 'is NOT number' . ' <br>';
// }




$var = '<scritp>alert(1)</scritp>';

//echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
//var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

// $filter = array(
//     'data' => FILTER_VALIDATE_EMAIL,
//     'data2' => array (
//         'filter' => FILTER_VALIDATE_INT,
//         'options' => array(
//             'min_range' => 1,
//             'max_range' => 100
//         )));

//         print_r(filter_input_array(INPUT_POST,$filter));




$detials = array(
 'name' => 'brad',
 'age' => '135',
 'email' => 'braddfgdfgdfgdf.com'
);

$filters = array(
    'name' => array(
        'filter' => FILTER_CALLBACK,
        'options' => 'ucwords'
    ),
    'age' =>  array(
        'filter' => FILTER_VALIDATE_INT,
        'options' => array(
            'min_range' => 1,
            'max_range' => 120 
        )),
    'email' => FILTER_VALIDATE_EMAIL,
    );


print_r(filter_var_array($detials, $filters));






?>





<form class="form-group" method="POST"  action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="data"><br>
<input type="text" name="data2"><br>
<button type="submit">Submit</button>
</form>