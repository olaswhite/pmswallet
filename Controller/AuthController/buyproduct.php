<?php 
@session_start();
include_once "../../link.php";

include '../../Controller/AuthController/auth.php';

if(isset($_POST['Buy'])){

    $pid= $_POST['pid'];
    $pusername= $_POST['pusername'];
    $pname= $_POST['pname'];
    $prate= $_POST['prate'];
    $amount= $_POST['amount'];
    $date = date("ymdhs");
    $ref = "ref-".$date;
    $nozzle=$_POST['nozzle'];
    
    $getBal = $user->confirmBalance($username);
    if($getBal->rowCount() > 0){

        $get = $getBal->fetch(PDO::FETCH_ASSOC);
       
        if($get['balance'] >= $amount)
        {
            
           $debit= $user->debitWallet($username, $amount);
        $insertTrans = $user->createTrans($ref, $username, 'Purchase',$amount,$pusername);
        $insertPending = $pending->PendingReg($pid,$nozzle,$ref,$username,$pusername,$pname,$prate,$amount,1,0);
            // $insertPending = $pending->PendingReg($pid, $nozzle, $Ref, $username, $pusername, $amount, 1, 0);

            if($insertTrans && $insertPending && $debit){
                echo "
                    <script>
                    alert('Product Purchased Registered Successfully');
                    window.location.href='../../View/users/pms_wallet';
                    </script>
        ";

            } 
        }
        else
        {
            echo "
                    <script>
                    alert('Sorry, Insufficient Fund');
                    window.location.href='pms_wallet';
                    </script>
        ";  
        }
        

    }
    else
    {
      echo "
                    <script>
                    alert('Sorry, Insufficient Fund');
                    window.location.href='pms_wallet';
                    </script>
        ";  
    }


            
}


?>
