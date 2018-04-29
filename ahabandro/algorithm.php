<?php
include"connect.php";
       $symbilic=0;
        $diastolic=0;
        $code = "";
        $systolicmin = 0;
        $systolicmax = 0;
        $diastolicmin = 0;
   
        $classification=0;
        

if(isset($_POST['symblic']))
{
    $symbilic = $_POST['symblic'];
}

if(isset($_POST['diastolic']))
{
    $diastolic = $_POST['diastolic'];
}

//if(isset($_POST['min']))
//{
    //$min = $_POST['min'];
//}

//if(isset($_POST['cigar']))
//{
    $cigar = 0;
//}

//if(isset($_POST['height']))
//{
   // $height ="+2"; 
//}

 //$weight = ;
 $physical_activity ="+4";
 
 
 if ($cigar==0)
 {
    $consumption="no";
 }
 
 $res =mysqli_query($link,"select code,systolicmin,systolicmax,diastolicmin,diastolicmin,classification from bp") ;
     echo "<table border='2'>";
     while($row= mysqli_fetch_array($res))
     { 
        
         $code = $row["code"];
        $systolicmin = $row["systolicmin"]; 
        $systolicmax = $row["systolicmax"]; 
        $diastolicmin = $row["diastolicmin"];
        
        $classification=["classification"];
        
     }
     
     
?>