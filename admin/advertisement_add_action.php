<?php
session_start();
 if (!($_SESSION["loggedin"])) {
        header("Location: login.php?status=Unauthorized Access Attempt!");
    }

    if($_SESSION["loggedin"]=="F")
    {
    	   header("Location: login.php?status=Unauthorized Access Attempt!");
   
    }
include('Connect.php');

if(isset($_POST['save']))
	{
	  
			 $elementname = $_POST['elementname'];// item name
		    $hreflink = $_POST['hreflink'];// item name
			$target_dir = "../images/";
	
		 		$target_file = $target_dir . basename($_FILES["file1"]["name"]);
				$image=$_FILES['file1']['name'];
			$filelocation = $target_dir.$image;
        $temp = $_FILES['file1']['tmp_name'];
		 move_uploaded_file($temp, $filelocation);

		 
		 $query="INSERT INTO aboutus(elementname,picture,hreflink) VALUES ('$elementname','$image','$hreflink')";
			
		$result = $connection->prepare($query);
			if($result === false) {
		trigger_error('Wrong SQL: ' . $query . ' Error: ' . $connection->error, E_USER_ERROR);
	}
	
		

			if($result->execute())
			{
			?>
			  <script >;
                alert("Inserted !");  //not showing an alert box.
		       window.location.href="manageAdvertisement.php";
         </script>
			<?php

			}
	
			else
			{
			?>
			 <script >;
                alert("Error in Insertion !");  //not showing an alert box.
		       window.location.href="manageAdvertisement.php";
         </script>
		<?php	}
		}
	
	?>