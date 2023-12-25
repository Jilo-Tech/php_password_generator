<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/assets/head.php" ?>

<body>
    <?php include __DIR__ . "/assets/header.php" ?>

    <main id="app_main">
        <div class="container">
            <div id="view_card" class="card shadow col-4 mt-4 m-auto">
                <div class="card-body text-center">
                    <h4>Generated Password ==></h4>
                    <h3 class="text-danger"><?= $_SESSION["password"] ?></h3>
                    <button class="btn btn-primary mt-3" onclick="copyPassword()" role="button">Copy</button>
                    <div class="text-center"><a class="btn btn-primary mt-3" href="index.php" role="button">Generate New One </a> </div>
                </div>
                <!-- /#card-body -->
            </div>
            <!-- /#view_card -->
        </div>
        <!-- /.container -->
    </main>

<script>
function copyPassword() {
    var password = "<?php echo $_SESSION['password']; ?>";
    navigator.clipboard.writeText(password);
    alert('Password copied to clipboard!');
}
</script>
    <!-- /#app_main -->
</body>

</html>
