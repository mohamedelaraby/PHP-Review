<?php 
    //Message vars



    // Check for submit event
    if(filter_has_var(INPUT_POST, 'submit')){

        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        // Check Required Fields
        if(!empty($name) && !empty($email) && !empty($message)){
            //  we passed

        }else{
            //  we failed
        }
    
    }






?>

 <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <fieldset>
    <!---[ Name Field ]--->
        <div class="form-group">
            <label for="user-name">Name</label>
            <input type="text" name="name" class="form-control" ilHelp" placeholder="Type you name">
        </div>


        <!---[ Email Field ]--->
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>

         <!---[ Message Field ]--->
        <div class="form-group">
            <label for="text-message">Message</label>
            <textarea name="message" class="form-control" cols='5' rows="10"></textarea>
        </div>
    
    <button type="submit"  name='submit' class="btn btn-primary" value="submit">Submit</button>
 </fieldset>
</form>