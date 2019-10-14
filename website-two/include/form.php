<?php 
/*
[  @Author ] :-  Muhammad alaraby
[  @Date   ] :-  10/14/2019
[  @Info   ] :-  Login form
*/
?>

<!-- ------------------------------------------------------ -->
<?php 
    //Check for Submit
    if(filter_has_var(INPUT_POST, 'submit')){
        echo 'YOu are in';
    } else {
        echo 'out';
    }
?>


<div class="row">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <fieldset>
    <legend>Splexa</legend>

     <!-- Name -->
     <div class="form-group">
      <label for="username">Your Name</label>
      <input type="email" name="name" class="form-control" id="username"  placeholder="Type your name">
      <small id="usernameHelp" class="form-text text-muted">Type any Name!</small>
    </div>

    <!-- Email -->
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter email">
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

<br> 