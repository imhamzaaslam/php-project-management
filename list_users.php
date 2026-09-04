<?php require "_shared/header.php"; ?>
<?php require "_shared/db_connection.php"; 

//run query to get all users from database
$sql = "SELECT users.id, users.city, users.name, roles.title as role , avatar
FROM users 
join roles ON users.role_id = roles.id

";

$result = mysqli_query($conn, $sql);

$sqlCountUsers = "select count(*) as total_users from users";
$totalUsers = mysqli_query($conn, $sqlCountUsers);

?>




<main>
    <section class="py-5 bg-light" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold">List Users <small>(Total Users: <?php echo mysqli_fetch_assoc($totalUsers)['total_users']; ?>)</small></h1>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Users ID</th>
                                <th>Users Name</th>
                                <th>City</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td>
                                        <?php if (!empty($row['avatar'])) { ?>
                                            <img src="uploads/<?php echo htmlspecialchars($row['avatar']); ?>" alt="Avatar" style="width: 50px; height: 50px; border-radius: 50%;">
                                        <?php } else { ?>
                                            
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['city']; ?></td>
                                    <td><?php echo $row['role']; ?></td>
                                    <td>
                                        <a href="add_user_form.php?user_id=<?php echo $row['id']; ?>"  class="btn btn-primary">Edit</a>
                                        <a onclick="return confirm('Are you sure you want to delete this user?')" href="delete_user_page.php?user_id=<?php echo $row['id']; ?>"  class="btn btn-danger">Delete</a>
                                        
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    
                </div>

            </div>
        </div>
    </section>


</main>

<?php require "_shared/footer.php"; ?>