<?php

@session_start();
include_once "../../link.php";

include '../../Controller/AuthController/auth.php';

if(isset($_POST['buyAirtime'])){

    $amount=$_POST['amount'];
    $network= $_POST['network'];
    $phoneno=$_POST['phoneno'];
    $date = date("ymdhs");
    $Ref = "ref-"." ".$network.''.$date;

    // $chkUser= $user->userDetails($to);
    // if($chkUser->rowCount() < 1){
    //     echo "
    //                 <script>
    //                 alert('username Does Not Exit');
    //                 window.location.href='dashboard';
    //                 </script>
    //     ";

    //     return;
    // }

    $chkBal = $user->confirmBalance($username);
    $ii=$chkBal->fetch(PDO::FETCH_ASSOC);
    $walletBalance = $ii['balance'];

    if($walletBalance < $amount)
    {
         echo "
                    <script>
                    alert('Insuffience Fund');
                    window.location.href='dashboard';
                    </script>
        ";
        return;
    }


    if($walletBalance >= $amount )
    {
        $Debit = $user->debitWallet($username, $amount);
        $Cred = $user->buycard($username,$phoneno,$network,$amount,$Ref);
        $insertTrans = $user->createTrans($Ref, $username, 'Airtime Purchased',$amount,$network);
        
        echo "
                    <script>
                    alert('You have Successfully Purchased .$network. ');
                    window.location.href='dashboard';
                    </script>
        ";


    }


}
?>