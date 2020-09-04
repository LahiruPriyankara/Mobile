<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="MobiPrj/bootstrap/css/bootstrap.min.css">
</head>
<body>

 <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px;color: blue">Enter your details</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="#" method="post" class="form-horizontal">
                                    
                              <div style="margin-bottom: 25px" class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="username" id="login-username"  class="form-control"  value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" name="Password" id="login-password"  class="form-control"  placeholder="password">
                                    </div>
                                    
                                <div style="margin-top:10px" class="form-group">
                                  

                                    <div class="col-sm-12 controls">
                                           
                                       <input type="submit" name="submit" value="Login" class="btn btn-success">
                                       <input type="reset" name="reset" value="Clear" class="btn btn-primary">


                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            <span style="color: red">MOBITEL </span><span style="color: blue">ENGINEERING DIVISION (BORELLA)</span>
                                        </a>
                                        </div>
                                    </div>
                                </div>   



<!--  UserName:  <input type="text" name="username"/></br></br></br>
   Password:  <input type="password" name="Password"></br></br></br>    
   <input type="submit" name="submit" value="SUBMIT">
   <input type="reset" name="reset" value="CLEAR"> -->

                            </form>     



                        </div>                     
                    </div>  
        </div>
        
    </div> 

    
    
</body>
</html>





<?php
if(isset($_POST["submit"]))  {
       $connect = mysqli_connect("localhost", "root", "", "mobitel"); 

       $UserName = $_POST['username'];
       $password = $_POST['Password'];

     
      $query = "SELECT * FROM `log` WHERE username ='$UserName' AND Password='$password';"; 
      $run = mysqli_query($connect, $query);
      //echo "Result : ".mysqli_num_rows($run);

      if(mysqli_num_rows($run)>0){
            header("Location:MobiPrj/index.php");
              echo "Logging Sucessfull";
      }else{
              echo "Logging Failed";
      }

}

?>