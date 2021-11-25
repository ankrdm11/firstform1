<!DOCTYPE html>
<html >
<head>
    <title></title>
    <?php include 'links.php'; ?>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <div class="main-div">
        <h1>List of Registration</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead> 
                    <tr>
                        <th>id</th>
                        <th>user</th>
                        <th>Rname</th>
                        <th>number</th>
                        <th>email</th>
                        <th>age</th>
                        <th>lang</th>
                        <th>gender</th>
                        <th>images</th>
                        <th>password</th>
                        <th>confirm</th>
                        <th colspan="2">operation</th><br>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
include ('connect1.php');

$selectquery = " select * from registration ";

$query = mysqli_query($conn,$selectquery);

$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){

    ?>
                    <tr>
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['user']; ?></td>
                        <td><?php echo $res['Rname']; ?></td>
                        <td><?php echo $res['number']; ?></td>
                        <td><span class="email-style"><?php echo $res['email']; ?></span></td>
                        <td><?php echo $res['age']; ?></td>
                        <td><?php echo $res['lang']; ?></td>
                        <td><?php echo $res['gender']; ?></td>
                        <td><?php echo $res['images']; ?></td>
                        <td><?php echo $res['password ']; ?></td>
                        <td><?php echo $res['confirm']; ?></td>
                        <td><i class="fa fa-edit" aria-hidden="true"></i></td>
                        <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                    </tr>    
               
                    <?php
                      }
?>
                    
                    </tbody>
</table>
</div>
</div>
    </div>
</body>
</html>

