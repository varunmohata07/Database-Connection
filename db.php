<?php

	include 'connection.php';

	$res=mysqli_query($conn,"select * from varun");
	print "<html>
<style>
      table {
        width: 100%;
        border-collapse: collapse;
      }
      table,
      th,
      td {
        border: 1px solid black;
      }
      thead {
        color: #ffffff;
      }
      th {
        text-align: center;
        height: 50px;
        background: yellow;
      }
      tbody tr:nth-child(odd) {
        background: #ffffff;
      }
      tbody tr:nth-child(even) {
        background: #f4f4f4;
      }
      td {
      	height: 50px;
      }
    </style>
	<body><br/>";
	print "<h1> Candidate Infomation </h1>";
	echo "<table border='1'>";

		echo "<th>Email</th>";
		echo "<th>firstName</th>";
		echo "<th>lastName</th>";
		echo "<th>Address</th>";
		
	while($column=mysqli_fetch_array($res))
	{
	
		echo "<tr><td>";
		echo $column['Email'];
		echo "<td>";
		echo $column['firstName'];
		echo "<td>";
		echo $column['lastName'];
		echo "<td>";
		echo $column['Address'];
		
		echo "</tr>";
		echo "</td>";
	} 
	echo "</table></body></html>";
?>