<html>
<head>
<title>Ahabandro Expert System</title>
<link href="https://fonts.googleapis.com/css?family=Cormorant+Infant|Duru+Sans|Imprima|Maitree|Quattrocento+Sans|Quicksand|Revalia" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="bootsrap/css/bootsrap.min.css">

</head>
<body>

<?php
include"header.php";
?>

<form action="strokediagnosis.php" method="post">
 <div class = "container">
  
      <div class = "row">
        <div class = "col-xs-6 col-xs-offset-3">
          <form>
           <div class = "form-group">
              <input name = "diseasetxt" type = "text" id = "title" class = "form-control" placeholder = "Enter your disease symptoms" required="">
           </div><!---end form-group-->

            <div class = "form-group">
              <input type = "submit" id = "submit" class = "btn btn-primary col-xs-offset-3 col-xs-6 col-sm-6 col-sm-offset-3" value = "Search">
            </div><!--end form-group-->
          </form>
         
        </div><!--end col-xs-8-->
     </div><!--end row-->
     </form>
     <figcaption>Copyright &copy; 2018. Designed by <a target="_blank href="https://github.com/TrinaryCompanyLimited">Trinary Company Limited</a></figcaption>
	 </body>
	 </html>

