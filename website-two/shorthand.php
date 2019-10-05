<?php 
 $logIn = false;
 $arr = [1,2,3,3,3,3,4,4];

// //echo ($logIn) ? 'YOu are in' : 'you are out';

// $isRegistered = ($logIn == true) ? 'you are in' : 'YOU ar not in';

// echo $isRegistered;

// Nested shorthands

// $age = 5;
// $score = 15;

// echo 'YOur score is: '. 
// ($score > 10 ?
//  ($age > 10 ? 'average' : 'Exceptional') 
//  :
//  ($age > 10 ?  'Horrible' : ' Averge'));
?>



<div>
    <?php if($logIn) { ?>
        <h1>Welcome <em>Admin</em></h1>
    <?php } else { ?>
        <h1>Welcome guest</h1>
    <?php } ?>
</div>


<div>
<?php if($logIn) : ?>
    <h1>Welcome <em>Admin</em></h1>
<?php else : ?>
    <h1>Welcome guest</h1>
<?php endif;?>
</div>

<div>
<?php foreach($arr as $value) : ?>
    <?php echo $value . '<br>'; ?>
<?php endforeach; ?>
</div>



