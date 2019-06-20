<?php 
include('../assets/php/connection_pdo.php');
include('navbar.php');
if(!isset($_SESSION['userid'])){
    echo "<script>
    alert('Please Login');
    document.location.href='login.php';
    </script>";
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Borrow</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/ui/jquery-ui-git.js"></script>
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/jquery-ui-git.css">
    <style type="text/css">
        body{
            display: block;
            overflow-x: hidden;
            background: #5a7391;
        }
        .list-group-item{
            background:#5a7391;
            border:none;
        }
        img
        {
            position: relative;
            left:100px;
            width:270px;
            height:250px;
            float:left;
            border:1px solid black;
        }
        .product{
            position: relative;
            left:120px;
        }
       
        @media only screen and (max-width: 700px){
            .product h1{
                font-size: 40px;
                left:0px;
                padding-left:25px; 
            }
            .product p{
                font-size: 20px;
            }
            img{
                width:300px;
                height:200px;
            }
            
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            filter_data();
            function filter_data(){
                $('.filter_data').html('<div id="loading" style=""></div>' );
                var action = 'fetch_data';
                var minimum_price = $('#hidden_minimum_price').val();
                var maximum_price = $('#hidden_maximum_price').val();
                var quality = get_filter('quality');
                var item = get_filter('item');
                $.ajax({
                    url:"../assets/php/fetch_data.php",
                    method:"POST",
                    data:{action:action,minimum_price:minimum_price,maximum_price:maximum_price, quality:quality, item:item },
                    success:function(data){
                        $('.filter_data').html(data);
                    }
                });
            }
            function get_filter(class_name){
                var filter = [];
                $('.'+class_name+':checked').each(function(){
                    filter.push($(this).val());
                });
                return filter;
            }
            $('.common_selector').click(function(){
                filter_data();
            });
            $('#price_range').slider({
                range:true,
                min:0,
                max:800,
                values:[0,800],
                step:100,
                stop:function(event, ui){
                    $('#price_show').html(ui.values[0]+'-'+ui.values[1]);
                    $('#hidden_minimum_price').val(ui.values[0]);
                    $('#hidden_maximum_price').val(ui.values[1]);
                    filter_data();
                }
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <br><br>
                <div class="list-group">
                    <h3>Price</h3>
                    <input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="800" />
                    <h5 id="price_show">0-800</h5>
                    <div id="price_range"></div>
                </div>

                <br><br>

                <div class="list-group">
                    <h3>Item</h3>
                    <div style="height: 90px;overflow-y: auto;overflow-x: hidden;">
                        <?php
                            $qry = "select distinct(item) from drafter";
                            $statement= $connect->prepare($qry);
                            $statement->execute();
                            $result = $statement->fetchAll();
                            foreach ($result as $row) {
                                ?>
                                    <div class="list-group-item checkbox">
                                        <label><h5><input type="checkbox" class="common_selector item" value="<?php echo $row['item'] ?>"><?php echo $row['item'] ?></h5></label>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                    <h3>Quality/Condition</h3>
                    <div style="height: 180px;overflow-y: auto;overflow-x: hidden;">
                        <?php
                            $qry = "select distinct(quality) from drafter";
                            $statement= $connect->prepare($qry);
                            $statement->execute();
                            $result = $statement->fetchAll();
                            foreach ($result as $row) {
                                ?>
                                    <div class="list-group-item checkbox">
                                        <label><h5><input type="checkbox" class="common_selector quality" value="<?php echo $row['quality'] ?>"><?php echo $row['quality'] ?></h5></label>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-9">
                <br>
                <div class="row filter_data">
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>