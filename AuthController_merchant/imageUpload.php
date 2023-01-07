
<?php 
@session_start();
include_once '../link.php';

 
//Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
        $target_dir = "../upload/";
        $userid= $_POST['UserID'];
        
       
        $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
        $pix = $userid.'.'.$imageFileType;
        $target_file = $target_dir . basename($pix);
        

$getpix =$partner->partnerDetails($username);
$rw = $getpix->fetch(PDO::FETCH_ASSOC);
$oldpix = $rw['pix'];



// // Check if file already exists
if (file_exists("../upload/".$oldpix)) {
    
    unlink("../upload/".$oldpix);
}


// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    
                echo "
                    <script>
                    alert('Sorry, Image too large');
                    window.location.href='../merchant_view/merchants/dashboard';
                    </script>
        ";
               
    die();
   // $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
 echo "
                <script>
                alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
                window.location.href='../merchant_view/merchants/dashboard';
                </script>
";
   // $uploadOk = 0;
 die();
}
// Check if $uploadOk is set to 0 by an error

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {


        $sql =$partner->partnerPixUpdate($userid, $pix);
    if($sql){
       
    
   
        echo "
                <script>
                alert('Successfully Updated...');
                window.location.href='../merchant_view/merchants/dashboard';
                </script>
";
                
}
    
    } else {
          echo "
                <script>
                alert('sorry, there was an error uploading your file...');
                window.location.href='../merchant_view/merchants/dashboard';
                </script>

              ";
        //echo "Sorry, there was an error uploading your file.";
    }

}

