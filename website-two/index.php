
<?php include 'server-info.php'; ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> System Server Ingredients - A client $ Server sides information about current system</title>
    <link rel="styesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>

  </head>
  <body>
    <div class="container">
      <h1>Server & File Info</h1>
      <?php if($server): ?>
        <ul class="list-group">
          <?php foreach ($server as $info => $value): ?>
            <li class="list-group-item">
              <strong><?php echo $info; ?> :</strong>
              <?php echo $value;  ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif;?>


      <!---[Client side info]--->
      <h1>Client & File Info</h1>
      <?php if($server) : ?>
        <ul class="list-group">
            <?php foreach($client as $info => $value) :?>
            <li class="list-group-item">
              <Strong><em><?php echo $info; ?> :</em></Strong>
                <?php echo $value; ?>
            </li>
            <?php endforeach; ?>
        </ul>
      <?php  endif;?>
    </div>
  </body>
  </html>
