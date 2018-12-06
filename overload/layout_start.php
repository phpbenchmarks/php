<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <title>Small overload benchmark</title>
    </head>
    <body>
        <?php
        // -------------------------------------------------------------------------------------------------------------
        // Create 50 blocks and fill them all
        // -------------------------------------------------------------------------------------------------------------

        require __DIR__ . '/../overload/blocks.php';
        ?>
        <div class="row">
            <div class="col-md-12">
                <h1>Create 50 blocks and fill them all</h1>
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Function call</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i <= 50; $i++) { ?>
                            <tr>
                                <td>#<?php echo $i ?></td>
                                <td><?php call_user_func('overloadBlock' . $i, $i) ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
