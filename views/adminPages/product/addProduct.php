<!DOCTYPE html>
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
            
            <form class="p-5 rounded bg-white " method="post" action="/Ecommerce/index.php/confirmAddProduct" enctype="multipart/form-data">
                <h3 class="mb-5">Add product</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="form-label col-4">Name</label>
                            <input type="text" name="name" class="form-control col-8" placeholder="Name" value="" />
                        </div>
                        <div class="form-group row">
                            <label for="" class="form-label col-4">Description</label>
                            <input type="text" name="description" class="form-control col-8" placeholder="Description" value="" />
                        </div>
                        <div class="form-group row">
                            <label for="" class="form-label col-4">Tags</label>
                            <input type="text" name="tags" class="form-control col-8" placeholder="Tags" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="form-label col-4">Price</label>
                            <input type="number" name="price" class="form-control col-8" placeholder="Price" value="" />
                        </div>
                        <div class="form-group row">
                            <label for="" class="form-label col-4">Video link</label>
                            <input type="text" name="video" class="form-control col-8" placeholder="video link" value="" />
                        </div>
                        <div class="form-group row">
                            <label for="" class="form-label col-4">Quantity</label>
                            <input type="number" name="quantity" class="form-control col-8" placeholder="Quantity" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="form-label col-4">Visibility</label>
                            <select class="form-control col-8" name="visibility" id="">
                                    <option value="1">visible</option>
                                    <option value="0">hidden</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="" class="form-label col-4">Date arrivale</label>
                            <input type="date" name="date_arrivale" class="form-control col-8" placeholder="Date arrivale" value="" />
                        </div>
                        <div class="form-group row">
                            <label for="" class="form-label col-4">Sizes available</label>
                            <input type="text" name="sizes_available" class="form-control col-8" placeholder="Sizes available" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="form-label col-4">Discount %</label>
                            <input type="number" min="0" max="99" name="discount" class="form-control col-8" placeholder="Discount" value="" />
                        </div>
                        <div class="form-group row">
                            <label for="" class="form-label col-4">Categorie name</label>
                            <input type="text" name="categorie_name" class="form-control col-8" placeholder="Categorie name" value="" />
                        </div>
                        <div class="form-group row">
                            <label for="" class="form-label col-4">General picture</label>
                            <input type="file" name="general_image" class="form-control col-8" placeholder="Generale picture" value="" />
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