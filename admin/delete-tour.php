<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MIS - BOOKING | Xóa Tour</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
            // 1.
            include('./config.php');


            // 2. 
            $id_tour = $_GET['id'];

            // 3. 
            $sql = "
                      DELETE 
                      FROM `tbl_tour` 
                      WHERE `tbl_tour`.`id_tour` = '".$id_tour."'
            ";

            // 4. 
            $noi_dung = mysqli_query($ket_noi, $sql);

            // 5.
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã xóa tour thành công');
                </script>
            ";

            echo "
                <script type='text/javascript'>
                    window.location.href='tour.php';
                </script>
            ";
        ;?>
    </body>
</html>
