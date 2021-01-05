<?php


include('connection.php');
if(isset($_POST['Transact']))
{

$sname=$_POST['senderName'];
$rname=$_POST['recipientName'];
$sacc=$_POST['senderAccountNum'];
$racc=$_POST['recipientAccountNum'];
$amt=$_POST['amount'];
$msg=$_POST['msg'];



include('connection.php');
$sql= 'select * from customer where accNo ="'.$sacc.'"';
echo $con->error;
$query= mysqli_query($con,$sql);
$sql1=mysqli_fetch_array($query);
echo $con->error;
$sql= 'select * from customer where accNo="'.$racc.'"';
$query= mysqli_query($con,$sql);
$sql2=mysqli_fetch_array($query);
echo $con->error;
echo $amt;
echo $con->error;
echo $sql1['currentBalance'];
echo $con->error;
if(($amt) < 0)
{

        echo '<script type="text/javascript">';
        echo 'alert("negative value cannot be entered")';
        echo '</script>';
}
else if(($amt) > $sql1['currentBalance'])
{
        echo '<script type="text/javascript">';
        echo 'alert("Insufficient Balance")';
        echo '</script>';
}
else{

        $new= $sql1['currentBalance'] - $amt;
        echo $con->error;
        $sql= 'UPDATE customer set currentBalance= "'.$new.'" where accNo="'.$sacc.'"';
        mysqli_query($con,$sql);
        $new= $sql2['currentBalance'] + $amt;
        $sql= 'UPDATE customer set currentBalance= "'.$new.'" where accNo="'.$racc.'"';
        mysqli_query($con,$sql);


        $sql=mysqli_query($con,"insert into `transaction`(`tid`,`senderName`,`recipientName`,`senderAccountNum`,`recipientAccountNum`,`amount`,`msg`)values('','".$sname."','".$rname."','".$sacc."','".$racc."','".$amt."','".$msg."') ")or die (mysqli_error($con));

mysqli_error($con,$sql);
        if($sql)
        {

               
                header('location:success.php');

        }

        $new=0;
        $amt=0;
}






}

?>


