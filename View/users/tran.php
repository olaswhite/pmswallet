<?php

@session_start();
include_once "../../link.php";

include '../../Controller/AuthController/auth.php';

if(isset($_POST['transfer'])){

    $amount=$_POST['amount'];
    $to= $_POST['to'];
    $date = date("ymdhs");
    $Ref = "ref-".$date;

    $chkUser= $user->userDetails($to);
    if($chkUser->rowCount() < 1){
        echo "
                    <script>
                    alert('username Does Not Exit');
                    window.location.href='dashboard';
                    </script>
        ";

        return;
    }

    $chkBal = $user->confirmBalance($username);
    $ii=$chkBal->fetch(PDO::FETCH_ASSOC);
    $pbalance = $ii['balance'];

    if($pbalance < $amount)
    {
         echo "
                    <script>
                    alert('Insuffience Fund');
                    window.location.href='dashboard';
                    </script>
        ";
        return;
    }


    if($chkUser->rowCount() > 0 && $pbalance >= $amount )
    {
        $Debit = $user->debitWallet($username, $amount);
        $Credit = $user->creditWallet($to, $amount,$username);
        $insertTrans = $user->createTrans($Ref, $username, 'Transfer',$amount,$to);
        if($insertTrans){
            $insertTrans = $user->createTrans($Ref, $to, 'Recieved',$amount,$username);
         
        }

        echo "
                    <script>
                    alert('Successfully Transfered');
                    window.location.href='dashboard';
                    </script>
        ";


    }


}
?>