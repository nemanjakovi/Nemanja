<?php include_once "submit.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="ftco-section img bg-hero" style="background-image: url(images/bg_1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"><a ; href="index.php"><button type="button" class="btn btn-outline-primary">New Address</button></a></a> </h2>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="wrapper">
                        <div class="row no-gutters justify-content-between">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-dark">
                                            <thead>
                                                <tr>
                                                    <th scope="col">From</th>
                                                    <th scope="col">To</th>
                                                    <th scope="col">Value</th>
                                                    <th scope="col">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $each_entery = $show["result"];
                                                foreach ($each_entery as $data) {
                                                    $date =  date('m/d/Y H:i:s', $data["timeStamp"]);
                                                ?>
                                                    <td scope="row"><?= $data["from"]; ?></td>
                                                    <td><?= $data["to"]; ?></td>
                                                    <td><?php echo $data["value"];
                                                        ?></td>
                                                    <td><?= $date ?></td>

                                                    </tr>
                                                <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
</body>

</html>