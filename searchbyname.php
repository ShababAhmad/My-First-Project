<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
</head>
<body>
	<form action="searchbyname.php" method="post" id="fr"  " name="form">
					<table id="tb_form">
						<h1>Search Product</h1>
						<tr>
							<td><label for="name"  class="txt">Search :</label></td>
							<td><input type="text" class="box" id="name" name="pname" placeholder="Search by Name" /></td><span id="n1"></span>
						</tr>
						
						</br>
						<tr>
							<td colspan="2"><input type="submit" Value="Submit" name="submit" id="btn_submit" /></td>
						</tr>
						
				</form>
		</div>
		
		
	

	</body>
	
</html>


<?php
	
	
        include("/config/database.php");
	$records = array();
	try
	{
		
		if(isset($_POST['submit']))
		{

		$name=$_POST['pname'];
		$statement=$con->prepare("SELECT * FROM `product` WHERE pname='$name' ");
				
				

				$statement->bindParam(":pname",$name);
				
				$result=$statement->execute();
				
				 $records = $statement->fetchAll(PDO::FETCH_BOTH);
			
			if($result)
			{

			}
			else
			{
				
			}
			
				
		}
				
		

				
	}

	catch(PDOEXCEPTION $ex)
	{
		echo "Error ->".$ex->getMessage();
	}
	

?>

<!doctype html>
<html>
	<head>
	</head>
	<body>
		<table
			<thead>
				<tr>
					
					<th>
						ID
					</th>
					<th>
						Owner Name
					</th>
					<th>
						Product Name
					</th>
					<th>
						Price
					</th>
					<th>
						Description
					</th>
					<th>
						Path
					</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach($records as $record){
				?>
						<tr>
							
							<td>
								<?php echo $record['id']; ?>
							</td>
							<td>
								<?php echo $record['oname']; ?>
							</td>
							<td>
								<?php echo $record['pname']; ?>
							</td>
							<td>
								<?php echo $record['price']; ?>
							</td>
							<td>
								<?php echo $record['description']; ?>
							</td>
							<td>
								<img src="<?php echo $record['path']; ?>" class="img-fluid" alt="Responsive image">
							</td>
							
						</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</body>
	
</html>
