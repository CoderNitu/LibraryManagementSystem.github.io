<?php 
require('dbconn.php');


?>
<html>

<head>
		<title>Library Management System</title>
		
		<style>
		
		
.container {
	width:100%;
	margin:auto;
}
		
.table {
    width: 100%;
    margin-bottom: 20px;
}	

.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
}

@media print{
#print {
display:none;
}
}

#print {
	width: 90px;
    height: 30px;
    font-size: 18px;
    background: white;
    border-radius: 4px;
	margin-left:28px;
	cursor:hand;
    position:relative;
    left: 810px;
    top: -60px;
    border-radius: 5px;
} 
		
		</style>
		
<script>
function printPage() {
    window.print();
}
</script>
		
</head>


<body>
	<div class = "container">
		<div id = "header">
		<br/>
				<img src = "iie.png" style = " margin-top:-17px; float:left; margin-left:115px; margin-bottom:-6px; width:100px; height:100px;">
                <br/>
				<center><h5 style = "font-style:Calibri; margin-top:-14px;"></h5>Library Management System</center>
				<center><h5 style = "font-style:Calibri; margin-top:-14px; "></h5> Indian Institute Of Entreprenrutship</center>
			<button type="submit" id="print" onclick="printPage()">Print</button>	
			<center><p style = "margin-left:30px; margin-top:50px; font-size:14pt; font-weight:bold;">Book List&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></center>
     
<?php
							$result= mysqli_query($conn,"select * from LMS.book") or die (mysqli_error());
?>
						<table class="table table-striped">
						  <thead>
								<tr>
								<tr>
									<th>Book Id</th>
									<th>Book Title</th>
									<th>Author</th>
									<th>Availability</th>
									<th>Status</th>
									


								</tr>
								</tr>
						  </thead>   
						  <tbody>
<?php
							while ($row= mysqli_fetch_array ($result) ){
							$id=$row['BookId'];
							 
?>
							<tr>
								<td	style="text-align:center;"><?php echo $row['BookId']; ?></td>
								<td	style="text-align:center;"><?php echo $row['Title']; ?></td>
								<td	style="text-align:center;"><?php echo $row['Author']; ?></td>
								<td	style="text-align:center;"><?php echo $row['Availability']; ?></td>
								<td	style="text-align:center;"><?php echo $row['status']; ?></td>
							
								 
							</tr>
							
							<?php 
							}					
							?>
						  </tbody> 
					  </table> 

<br />
<br />


			</div>
	
	
	
	

	</div>
</body>


</html>