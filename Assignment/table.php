<?php

echo "<table>
			<tr>
				<td><a href='Landing.html' target='_self'>Home</a></td>
				<td><a href='about.html' target='_self'>About</a></td>
				<td><a href='register.html' target='_self'>Register</a></td>
				<td><a href='alumni.html' target='_self'>Alumni</a></td>
				<td><a href='staff.html' target='_self'>Staff</a></td>
				<td><a href='contacts.html' target='_self'>Contacts</a></td>
			</tr>
		</table>";

        
        
        
        
        
        



$connection = mysqli_connect("localhost", "root", "", "alumni");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * FROM alumni_info";
$result = $connection->query($sql);

echo "<table border='1px'>
    <tr>
        <th>First name</th>
        <th>Year of enrolment</th><th>Year of graduation</th>
        <th>Current occupation</th>
        <th>Headmaster(mistress) at Enrolment</th>
        <th>Headmaster(mistress) at Graduation</th>
        <th>Famous teacher</th>
        <th>Summary of results</th>
        <th>Email</th>
        <th>Address</th>
        <th>Mobile number</th>
    </tr>";
				
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo 
			"<tr>
				<td> {$row['aname']} </td><td> {$row['yoe']} </td>
				<td> {$row['yog']} </td><td> {$row['occupation']} </td>
				<td> {$row['pae']} </td><td> {$row['pag']} </td>
				<td> {$row['ftib']} </td><td> {$row['results']} </td>
				<td> {$row['email']} </td><td> {$row['address']} </td>
                <td> {$row['contacts']} </td>
			</tr>";
		}
		echo "	</table>"; 
	} else {
		echo ("0 result");
	}

?>
