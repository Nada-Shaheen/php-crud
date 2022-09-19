<a href="insert.php">add category</a>
<?php 
include_once 'categories.php';

$cat =new categories();

$connect = $cat->connect();

$resault = $cat->get_All($connect);

echo "<table border='2'> <tr> <td>ID</td> <td>name</td> <td>Action</td></tr>";  

while($row=mysqli_fetch_assoc($result)){
echo "<tr><td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>
<a href='show.php?id=".$row['id']."'>show</a>
<a href='edit.php?id=".$row['id']."'>Edit</a>
<a href='delete.php?id=".$row['id']."'>Delete</a>
</td>";
echo "</tr>";
}
echo "</table>";


?>