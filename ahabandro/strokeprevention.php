<html>
<head>
<title>Ahabandro Expert System</title>
<link href="https://fonts.googleapis.com/css?family=Cormorant+Infant|Duru+Sans|Imprima|Maitree|Quattrocento+Sans|Quicksand|Revalia" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="script/script.js"></script>
<style>
p{
    font-size: 20px;
}
table{
    position: relative;
    background-color: #436aa2;
    padding: 20px;
    
}
tr{
    border-bottom: 20px solid white;
}
#text{
    font-size:23px;
    width:60px;
}
label{
    font-size:25px;
    font-family:sansans-serif,timesfantasy;
}
.container{
    margin-top:50px;
    text-align: center; 
}

</style>
</head>
<body>

<?php
include"header.php";
require"connect.php";
require"algorithm.php";
include "index1.html";
?>
<div class = "container">
    
      <div class = "row">
        <div class = "col-xs-6 col-xs-offset-3">
        <h2 class = "text-center">STROKE PREVENTION SYSTEM</h2>
          <form action="result.php" method="POST">
           <div class = "form-group">
         
           <p>Please enter your data below for today:</p>           
        
           
           <div class = "form-group">
            <table align="center">
         <tr>
         <td><label>Blood presure:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td><td><label>Systolic:</label></td> <td><input type = "text" id = "text" name="systolic" required=""/></td><td><label>&nbsp;&nbsp;mm Hg&nbsp;&nbsp;  </label></td>
         <td><label style="border-left: 5px solid white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cigarrets smoked&nbsp;&nbsp;</label></td><td></td> <td><input type="number" name="number" id="text" /></td><td><label>&nbsp;&nbsp;Pcs</label></td>
         </tr></tr>
         <tr>
         <td><label></label></td><td><label>Diastolic:</label></td> <td><input type = "text" id = "text" name="diastolic" required=""/></td><td ><label>&nbsp;&nbsp;mm Hg</label></td>
         <tr>
       <tr><td><p style="margin-bottom: 50px;"></p><hr /></td><td><p style="margin-bottom: 50px;"></p><hr /></td><td><p style="margin-bottom: 50px;"></p><hr /></td><td><p style="margin-bottom: 50px;"></p><hr /></td></tr>
         <td><label>Body Max Index:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td><td><label>Height:</label></td> <td><input type = "text" id = "text" name="height" required=""/></td><td><label>&nbsp;&nbsp;cm</label></td><td><label style="border-left: 5px solid white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Physical Activity:&nbsp;&nbsp;</label></td>
         <td> <input type="text" id="text" name="hour" required=""/></td><td><label>h</label></td> <td> <input type="text" id="text" name="min" required=""/></td><td><label>min</label></td>
         </tr>
         <tr>
         <td><label></label></td><td><label>Weight:</label></td> <td><input type = "text" id = "text" name="weight" required=""/></td><td><label>&nbsp;&nbsp;kg</label></td>
           
         </tr>
           </table>
              <input style="margin-left: 300px;"type = "submit" id = "submit" class = "btn btn-primary col-xs-offset-3 col-xs-6 col-sm-6 col-sm-offset-3" value = "Request Doctor Advice">
            <input  type = "submit" id = "submit" class = "btn btn-primary col-xs-offset-3 col-xs-6 col-sm-6 col-sm-offset-3" value = "Clear">
        
            </div><!--end form-group-->
              
                       </form>
        
            <hr />
                       
        </div><!--end col-xs-8-->
     </div><!--end row-->
     </form>
     <figcaption style="text-align:center;">Copyright &copy; 2018. Designed by <a target="_blank" href="https://github.com/TrinaryCompanyLimited">Trinary Company Limited</a></figcaption>
	 </body>
	 </html>

