<?php
include __DIR__ . '/assets/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/assets/head.php" ?>

<body>
    <?php include __DIR__ . "/assets/header.php" ?>

    <main id="app_main">
        <div class="container">
            <div id="form_card" class="card shadow col-3 mt-4 m-auto">
                <div class="card-body">
                    <form action="index.php" method="get">

                        <div class="input-group mb-3">
                            <div class="input-group-text"> <label for="length">length Password</label> </div>
                            <input type="number" name="length" id="length" class="form-control d-flex " placeholder="">
                        </div>
                        <!-- /.input-group #length -->
                        <!-- /.input-group #avoid_ripetition -->

                        <div class="fw-bold text-center mb-1">Character Type </div>
                        <div class="input-group mb-1">
                            <div class="input-group-text"> <input class="form-check-input mt-0" type="checkbox" name="char_type_box[]" value="symbols" checked> </div>
                            <label for="symbols" class="form-control">Symbols</label>
                        </div>
                        <!-- /.input-group #symbols -->
                        <div class="input-group mb-1">
                            <div class="input-group-text"> <input class="form-check-input mt-0" type="checkbox" name="char_type_box[]" value="numbers" checked> </div>
                            <label for="numbers" class="form-control">Numbers</label>
                        </div>
                        <!-- /.input-group numbers -->
                        <div class="input-group mb-1">
                            <div class="input-group-text"> <input class="form-check-input mt-0" type="checkbox" name="char_type_box[]" value="down_case" checked> </div>
                            <label for="down_case" class="form-control">Lower_case</label>
                        </div>
                        <!-- /.input-group #down_case -->
                        <div class="input-group mb-3">
                            <div class="input-group-text"> <input class="form-check-input mt-0" type="checkbox" name="char_type_box[]" value="upper_case" checked> </div>
                            <label for="upper_case" class="form-control">Upper_case </label>
                        </div>
                        <!-- /.input-group #upper_case -->



                        <button type="submit" class="btn btn-primary d-block m-auto">Generate</button>
                    </form>
                </div>
                <!-- /#card-body -->
            </div>
            <!-- /#form_card -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /#app_main -->
</body>

</html>
