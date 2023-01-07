<table class="table table-bordered table-hover">
<thead>
<tr>
<th>Id</th>
<th>Username</th>
<th>Email</th>
<th>User_role</th>

</tr>
</thead>
<tbody>
<?php                    
$query = "SELECT * FROM admin";
$select_posts = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_posts)) {
$id = $row['id'];
$username = $row['username'];
$email = $row['email'];
$user_role = $row['user_role'];
echo "<tr>";
echo "<td>$id</td>";
echo "<td>$username</td>";
echo "<td>$email</td>";
echo "<td>$user_role</td>";

echo "</tr>";

}


?>


</tbody>
</table>





