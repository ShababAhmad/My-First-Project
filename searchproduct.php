<?php
     include("/config/database.php");
    
           $output='';
			$records=array();
			$qur=$con->prepare("SELECT *FROM product where pname LIKE '%".$_POST['sear']."%' ");
         $run=   $qur->execute();

			$records=$qur->fetchAll(PDO::FETCH_ASSOC);
			//var_dump($records);
           echo "<table>";


				foreach($records as $record)
          		{
					//$image=$record["path"];

					echo "<tr>";



					echo "<td>";
                               echo $record["pname"];;

                             echo "</td>" ;
                             echo "&nbsp;&nbsp;&nbsp;";
							echo "<td>";
					             echo $record["price"];

						   echo "</td>";



				   echo "</tr>";

		   

			  }


            echo "<table>"
?>