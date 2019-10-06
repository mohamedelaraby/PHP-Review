<?php 

// substr()
#Return portion of string
$hello = 'hello world';


$longText = "Lorem ipsum dolor sit, 
            amet consectetur adipisicing elit.
            Assumenda animi beatae, maxime dolor error
            adipisci enim iste! Est quae nostrum iusto,
            maiores ipsa, obcaecati molestiae officia
            temporibus assumenda vel facere.";


$output = substr($hello,1,3);
//strpos :- Find the position of specific characte in string
$output = strpos($hello, 'd', 7);
$output = strrpos($hello, 'l');
$output = trim($hello);
//var_dump($output);
$output = strtoupper($hello);
$output = strtolower($hello);
$output = ucwords($hello);
$output = str_replace('world','Everyone', $hello);


$output = is_string($hello);
$output = gzcompress($longText);
$output = gzuncompress($output);



echo $output;

?>