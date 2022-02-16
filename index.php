<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>BI - DWH</title>
</head>
<body class="bg-dark text-light">
    <div class="container">
        <br><br>
        <hr class="bg-light">
        <h3 class="" style="text-align : center;">BI - DATA WHEREHOUSE SIMULATOR</h3>
        <hr class="bg-light">
        <br>


        <div class="row">
            <div class="col-md-3">
                
            </div>

            <div class="col-md-6">
                <form>
                    <label for="nom">Entrer votre nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Entrer votre nom">

                    <label for="sexe">Choisir le sexe</label>
                    <select id="sexe" name="sexe" class="form-control">
                        <option>homme</option>
                        <option>femme</option>
                        <option>h</option>
                        <option>f</option>
                        <option>1</option>
                        <option>0</option>
                    </select>

                    <br>
                    
                    <input class="btn btn-success" value="Enregistrer" type="button" name="submit" id="submit">
                </form>

            </div>

            <div class="col-md-3">
                
            </div>
        </div>
    </div>
    
    <div class="container"><hr class="bg-light"></div>
    

    <!-- ######################### -->

    <!-- header  -->
    <?php 
    // include("menu.php");
    include("database/database.php");

    if(isset($_GET["delete"]))
    {
        $id = $_GET["delete"];
        $del = $mysqli->prepare('DELETE FROM sex WHERE id = ?');
        $del->execute(array($id));

        ?>
         <script>
        setTimeout(function()
        {
            window.location.reload();
        }, 2000);
        </script>
        <?php

        // header("Location: header.php");
    } 

    if(isset($_GET["delete2"]))
    {
        $id = $_GET["delete2"];
        $del = $mysqli->prepare('DELETE FROM datawh WHERE id = ?');
        $del->execute(array($id));

        ?>
         <script>
        setTimeout(function()
        {
            window.location.reload();
        }, 2000);
        </script>
        <?php

        // header("Location: header.php");
    } 
    ?>
    <br>

    <!-- nav  -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Ma Base de Données</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th>Nom</th>
                                    <th>Sexe</th>
                                    <!-- <th>Situation</th>
                                    <th>Mail</th> -->
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-light text-dark">
                                <?php
                                    
                                    $publi = $mysqli->prepare('SELECT * FROM sex');
                                    $publi->execute(array());

                                    while($data = $publi->fetch())
                                    {
                                ?>
                                <tr>
                                    <td><?php echo $data['nom']; ?></td>
                                    <td><?php echo $data['sexe']; ?></td>
                                    
                                    <td>
                                    <!-- <a href="update.php?update=<?php echo $data["id"];?>" class="btn btn-success" style="font-size: 13px;">Update</a> -->
                                    <a href="index.php?delete=<?php echo $data["id"];?>" class="btn btn-danger del" style="font-size: 13px;">Delete</a>
                                </tr>
                                <?php 
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Ma Base Data Where House</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th>Nom</th>
                                    <th>Sexe</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-light text-dark">
                                <?php
                                    
                                    $publi = $mysqli->prepare('SELECT * FROM datawh');
                                    $publi->execute(array());

                                    while($data = $publi->fetch())
                                    {
                                ?>
                                <tr>
                                    <td><?php echo $data['nom']; ?></td>
                                    <td><?php echo $data['sexe']; ?></td>
                                    
                                    <td>
                                    <!-- <a href="update.php?update=<?php echo $data["id"];?>" class="btn btn-success" style="font-size: 13px;">Update</a> -->
                                    <a href="index.php?delete2=<?php echo $data["id"];?>" class="btn btn-danger del" style="font-size: 13px;">Delete</a>
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

    <br>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>