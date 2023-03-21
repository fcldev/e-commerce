alter categorie<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        body{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Jost', sans-serif;
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        }
        .main{
            width: 1050px;
            height: 700px;
            background: red;
            overflow: hidden;
            background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
            border-radius: 10px;
            box-shadow: 5px 20px 50px #000;
        }
        label{
            /* color:white; */
        }
    </style>
</head>
<body>


<div class="main container-fluid contact-form py-5 my-5">
            
            <form class="p-5 rounded bg-white " method="post" action="/Ecommerce/index.php/confirmAlterCategorie?categorie_name=<?php echo $categorie1['categorie_name']; ?>" enctype="multipart/form-data">
                <h3 class="mb-5">Add categorie</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="form-label col-4">Categorie name</label>
                            <input type="text" name="categorie_name" class="form-control col-8" placeholder="Categorie name" value="<?php echo $categorie1['categorie_name']; ?>" />
                        </div>
                    </div>
                    <div class="col-12 mt-5 ">
                            <button class="btn mx-auto" type="submit">Submit</button>
                    </div>
                    
                </div>
            </form>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</body>
</html>