<?php

require "_shared/db_connection.php";

$user_id = $_GET['user_id'];

if(isset($user_id) && !empty($user_id) && is_numeric($user_id)) {

    $sql = "DELETE FROM users WHERE id = $user_id";

    if(mysqli_query($conn, $sql)){
        $message = "Record deleted successfully";
    } else {
        $message = "Error deleting record: " . mysqli_error($conn);
        
    }
    
} else {
    $message = "Invalid user ID";
}

?>

<?php require "_shared/header.php"; ?>


<main>
    <section class="py-5" style="min-height: 80vh; background: #f4f6f9;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <h1><?php echo $message; ?></h1>
                            <a href="list_users.php" class="btn btn-primary mt-3">Back to User List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require "_shared/footer.php"; ?>