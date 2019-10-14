<?php
/*
[  @Author ] :-  Muhammad alaraby
[  @Date   ] :-  10/14/2019
[  @Info   ] :-  Login form
*/
?>


<?php
  // Message Var
  $msg = '';
  $msgClass='';

    //Check for Submit
    if(filter_has_var(INPUT_POST, 'submit')){

        //Get form Data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['usermessage'];

        //Check Required Fields
        if(!empty($email) && !empty($name) && !empty($message)){

          // Check Email
          isValidEmail($email);

        } else {
          //Failed
          $msg = 'Please Fill in all fields';
          $msgClass = 'alert-danger';
        }

    } else {

    }

    //Form Validation
      //email Validation
    function isValidEmail($email){
        if(is_array($email) || is_numeric($email) || is_bool($email) || is_float($email) || is_file($email) || is_dir($email) || is_int($email)){
         return false;
       } else {
         $email= trim(strtolower($email));
         if(filter_var($email, FILTER_VALIDATE_EMAIL)!== false){
            return $email;
         } else {
             $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
             return (preg_match($pattern, $email) === 1) ? $email : false;
         }
     }
    }

?>


<div class="row">
<div class="col-6">
<?php if($msg != '') : ?>
 <div class="alert <?php echo $msgClass; ?>">
   <?php echo $msg; ?>
 </div>
<?php endif; ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <fieldset>
    <legend>Splexa</legend>

     <!-- Name -->
     <div class="form-group">
      <label for="username">Your Name</label>
      <input type="text" name="name" class="form-control" id="username"  placeholder="Type your name">
      <small id="usernameHelp" class="form-text text-muted">Type any Name!</small>
    </div>

    <!-- Email -->
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1"   placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">It should be unique!</small>
    </div>

    <!-- Password -->
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>

   <!-- Message -->
    <div class="form-group">
      <label for="message">Messsage</label>
      <textarea class="form-control" name="usermessage" id="message" rows="5" placeholder="What`s in your mind?"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-info">Submit</button>
  </fieldset>
</form>
</div>
</div>

<br>
