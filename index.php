<?php
include "connection.php";
$connection = new Connection;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dependent Dropdown</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center main-wraper">
        <div class="col-md-12">
            <form action="">
                <div class="row">
                
                <div class="col">

                    <label for="division" class="d-block">Division</label>
                    <select id="division" class="form-select" aria-label="Default select example">
                    <option selected disabled value="">select division</option>
                    <?php
                        $result = $connection->getAll("SELECT DISTINCT division FROM unions",null);
                        print_r($result);
                        foreach($result as $res){
                            $division = $res['division'];
                            ?>
                            <option value="<?php echo $division?>"><?php echo $division ?></option>
                            
                            <?php
                        }
                        
                        ?>
                </select>
            </div>

                <div class="col">
                    
                    <label class="d-block" for="district">District</label>
                    <select id="district" class="form-select" aria-label="Default select example">
                        <option selected disabled value="">select district</option>                            
                    </select>
                </div>
                
                <div class="col">
                    <label class="d-block" for="upazila">Upazila</label>
                    <select id="upazila" class="form-select" aria-label="Default select example">
                        <option selected disabled value="">select upazila</option>                            
                    </select>
                </div>
                
                <div class="col">
                    <label class="d-block" for="union">Union</label>
                    <select id="union" class="form-select" aria-label="Default select example">
                        <option selected disabled value="">select union</option>                            
                    </select>
                </div>
                <div class="col d-flex justify-content-left ">
                    <button type="button" class="btn btn-secondary btn-block">Search</button>
                </div>
            </div>
            </form>
        </div>
    </div>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>