<?php
    session_start();
    $name = $_GET['name'];
    $name1=$name.'%';
    echo $name1;
    require_once '../../models/employeeModel.php';
    $results=showallempbyname($name1);
    $rows=mysqli_num_rows($results);{
        if($rows>0){
            echo "<tr>
                <th>ID</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Date of Birth</th>
                <th>Designation</th>
                <th>Branch</th>
                <th>Salary</th>
                <th></th>
                <th></th>
            </tr>";
             echo "<table border='1'>";
            while($row = mysqli_fetch_assoc($results)){
                echo "<tr><td>". $row['id']."</td><td>". $row['name']."</td><td>". $row['fathername']."</td><td>". $row['mothername']."</td><td>". $row['dob']."</td><td>". $row['designation']."</td><td>". $row['branch']."</td><td>". $row['salary']."</td><td><a href='updateinformationedit.php?id={$row['id']}"."'>edit</a></td><td><a href='updateinformation.php?id={$row['id']}"."'>delete</a></td></tr>";
            }
            echo "</tabel>";
        }
        else{
            echo "No emoloyee added yet...";
        }
    }
?>