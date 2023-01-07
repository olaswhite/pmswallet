<?php
@session_start();

include_once '../../link.php';
include_once '../../Controller/AuthController/auth.php';
if(isset($_POST['Buy'])){

    $pid= $_POST['pid'];
    $nozzle = $_POST['nozzle'];
    $pusername= $_POST['pusername'];
    $pname= $_POST['pname'];
    $prate= $_POST['prate'];
    $amount= $_POST['amount'];
    $date = date("ymdhs");
    $Ref = "ref-".$date;
    $nozzle= $_POST['nozzle'];
    
    $getBal = $user->confirmBalance($username);
    if($getBal->rowCount() > 0){

        $get = $getBal->fetch(PDO::FETCH_ASSOC);
        if($get['balance'] >= $amount)
        {

           $debit= $user->debitWallet($username, $amount);
        $insertTrans = $user->createTrans($Ref, $username, 'Purchase',$amount);
            $insertPending = $pending->PendingReg($pid,$nozzle, $Ref, $username, $pusername, $amount, 1, 0);

            if($insertTrans && $insertPending && $debit){
                echo "
                    <script>
                    alert('Product Purchased Registered Successfully');
                    window.location.href='../userdetails/dashboard';
                    </script>
        ";

            } 
        }
        else
        {
            echo "
                    <script>
                    alert('Sorry, Insufficient Fund');
                    window.location.href='../userdetails/dashboard';
                    </script>
        ";  
        }
        

    }
    else
    {
      echo "
                    <script>
                    alert('Sorry, Insufficient Fund');
                    window.location.href='pms';
                    </script>
        ";  
    }


            
}
?>