

<?php 

//Form variables
// $userName = htmlentities($_REQUEST['name']);
// $email = htmlentities($_REQUEST['email']);

// // Form content validation
// if(isset($userName) && isset($email)){
//     echo $_SERVER['QUERY_STRING'] . "<br>";
//    echo $userName . ' <br>' . $email . '<br>' . '<br>';
// } else {
//     echo 'Type something';
// }

echo $_SERVER['QUERY_STRING'];
?>


<div class="row">
    <form method="POST" action="index.php">
    <div class="form-group">
        <label for="username">User name</label><br>
        <input type="text"
                class="form-control"
                id="username"
                name="name"
                aria-describedby="Username"
                placeholder="Type user name"
             >
        <br>
    </div>
    <br>
    <div class="form-group">
        <label for="email">Email address</label><br>
        <input type="email"
                name="email"
                class="form-control" 
                id="exampleInputEmail1" 
                aria-describedby="emailHelp" 
                placeholder="Enter email" 
                > 
        <br>
    </div>
    
    <br>
    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
    </form>
</div>
<br> 