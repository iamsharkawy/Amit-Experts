<?php include_once("./includes/nav.php"); ?>

<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
}
?>

<?php
$myButtonText = "hamada";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <script>
    function get_accept(input)
    {
        alert(input);
    }
    function changeText(el)
    {
        el.innerHTML = '<?php echo $myButtonText;?>';
    }
  </script>

    
</head>
<body>
  
  <div class="container">
      <div class="col-md-4 my-3">
        <div class="card">
          <img src="" class="card-img-top img-fluid" style="height:200px">
          <div class="card-body">
            <h1>  Car1</h1>
            <h5 class="card-title">car</h5>
            <p class="card-text"> </p>
            <button onclick="changeText(this); get_accept('<?php echo $myButtonText;?>'); this.disabled='disabled';">Reserve</button>
            
          </div>
        </div>
      </div>
  </div>



  <script src="script.js"></script>
</body>
</html>



<?php include_once("./includes/footer.php"); ?>


