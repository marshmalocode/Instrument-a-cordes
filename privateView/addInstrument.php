<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <title>Ajout</title>
</head>

<body style="overflow-x: hidden;">
    <?php
                  require_once "../publicView/src/error.php";

#var_dump($_POST);
#var_dump($_FILES);
    ?>
 <div class="vh-100 vw-100 d-flex row m-0 p-0"> 
        <?php
            include_once "../privateView/src/menuPrivate.php";
        ?>  
  <div class="h-75 w-75 d-flex justify-content-center align-items-center flex-column m-0 p-0 align-self-center mb-5 ">
      <h1 class="mb-5">Ajouter un article</h1>
        <form action="" class="article row g-3 h-75 w-100 " id="formAddInstrument" method="POST"  name="formAddArticle" enctype="multipart/form-data" >
            <div class="row">
                <div class="form-group form-control col">
                    <label for="titre" class="w-25">Titre :</label>
                    <input type="text" class="w-100" aria-describedby="" name="titre">
                    
                </div>
            
            
                <div class="form-group form-control col ">
                    <label for="category">Catégorie :</label>
                    <select name="category" class=" w-100 form-select" id="category" value="" >
                    <option ></option>
                        <?php
                        if(isset($category)):
                            foreach($category as $item):

                        ?>
                        <option value="<?=$item->idCategory?>"> <?=$item->nameCategory?></option>
                        <?php
                            endforeach;
                        endif;
                        

                        ?>
                       
                    </select>
                </div>
                

                
                <div class="form-group col form-check">
                    
                        <input type="checkbox" class="btn-check w-25 m-auto " id="btn-check-2-outlined" name="btn-check-2-outlined" value="1">
                        <label class="btn btn-outline-secondary w-50 m-auto" for="btn-check-2-outlined">Visible</label><br>
                
                    
                </div> 
            </div>           
            <div class="row">
                <div class="form-group form-control col">
                    <label for="intro" class="w-25">Intro :</label>
                    <textarea type="text" class=" w-100" aria-describedby="" name="intro" rows="3"></textarea>
                </div>
            
                <div class="form-group form-control col">
                    <label for="description" class="w-25">Description :</label>
                    <textarea type="text" class=" w-100" aria-describedby="" name="description" rows="3"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group form-control col">
                    <label for="history" class="w-25">Histoire :</label>
                    <textarea type="text" class=" w-100" aria-describedby="" name="history" rows="3"></textarea>
                </div>
        
                <div class="form-group form-control col">
                    <label for="technics" class="w-25">Technique :</label>
                    <textarea type="text" class=" w-100" aria-describedby="" name="technics" rows="3"></textarea>
                </div>
        
            </div>



            <p>
            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePicture" aria-expanded="false" aria-controls="collapsePicture">
                Ajouter une image
            </button>

            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSound" aria-expanded="false" aria-controls="collapseSound">
                Ajouter un audio
            </button>

            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMusician" aria-expanded="false" aria-controls="collapseMusician">
                Ajouter un musicien
            </button>
            </p>

            <div style="" class="p-0">  
                <div class="collapse collapse-vertical m-0 p-0" id="collapsePicture">
                    <div class="card card-body" style="width: 100%;">      
                        <div class="row">    
                            <div class="form-group form-control col">
                                <label for="titleImage" class="w-25">Titre de l'image:</label>
                                <input type="text" class="w-100" aria-describedby="" name="titleImage"></input>
                            </div>
                            <div class="custom-file col">
                                <label class="custom-file-label w-50" for="addPicture">Image :</label>
                                <input type="file" class="custom-file-input" id="addPicture" lang="fr" name="addPicture" >
                                                
                            </div>
                    
                        </div>
                        <div class="row">

                        <div class="form-group">
                            <label for="dateTake">Date de prise :</label>
                            <input type="date" class="form-control" id="dateTake" name="dateTake">
                        </div>
                        
                        <div class="form-group form-control col ">
                            <select name="orientation" class=" w-100 form-select h-100"  value="" >
                                <option selected>Orientation de la photo :</option>
                                <option value="l">Paysage</option>
                                <option value="p">Portrait</option>
                                
                            </select>


                        </div>


                        </div>
                        <div class="row">
                            <div class="form-group form-control col">
                                <label for="descriptionImage w-25" class="">Description :</label>
                                <textarea type="text" class="w-100" aria-describedby="" name="descriptionImage" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="p-0">  
                <div class="collapse collapse-vertical m-0 p-0" id="collapseMusician">
                    <div class="card card-body" style="width: 100%;"> 
                        <div class="row">
                            <div class="form-group form-control col">
                                <label for="firstnameMusician" class="w-25">Prénom du musicien :</label>
                                <input type="text" class="w-100" aria-describedby="" name="firstnameMusician"></input>
                            </div>
                
                            <div class="form-group form-control col">
                                <label for="lastnameMusician" class="w-25">Nom du musicien :</label>
                                <input type="text" class="w-100" aria-describedby="" name="lastnameMusician"></input>
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group">
                                <label for="dateBorn">Date de naissance</label>
                                <input type="date" class="form-control" id="dateBorn" name="bornDate" >
                            </div>


                            <div class="form-group">
                                <label for="dateDeath">Date de décès</label>
                                <input type="date" class="form-control" id="dateDeath" name="deathDate" >
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group form-control col">
                                <label for="bioMusician" class="w-25">Biographie :</label>
                                <textarea type="text" class="w-100" aria-describedby="" name="bioMusician"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="p-0">  
                <div class="collapse collapse-vertical m-0 p-0" id="collapseSound">
                    <div class="card card-body" style="width: 100%;"> 
                        <div class="row">

                            <div class="form-group form-control col">
                                <label for="titleSound" class="">Titre de l'audio :</label>
                                <input type="text" class="w-100" aria-describedby="" name="titleSound"></input>
                            </div>

                            <div class="form-group form-control col">
                                <label for="titleSound" class="">Description de l'audio :</label>
                                <textarea type="text" class="w-100" aria-describedby="" name="descriptionSound"></textarea>
                            </div>
                        </div>
                        <div class="row">


                            <div class="custom-file  col">
                                <label class="custom-file-label" for="addSound">Ajouter un audio :</label>
                                <input type="file" class="custom-file-input w-100" id="addSound" lang="fr" name="sound">
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                <input class="btn btn-secondary  w-25 mx-auto" type="submit" value="Envoyer" name="addInstrument"></input>
                <input class="btn btn-danger w-25 mx-auto" type="reset" value="Reset">
            
                
        


        </form>
 
    </div>
</div>
<table class="table table-striped mt-5">


        <tr>

            <th width="15%">Image</th>
            <th width="10%">Titre</th>
            <th width="55%">Contenu</th>
            <th width="20%">Date</th>

        </tr>
        <?php
        if (isset($instruments)) :
            foreach ($instruments as $item) :

        ?>
                <tr>

                    <td>
                        <?php if (isset($item->pictureMini)) : ?>
                            <img src="<?= $item->pictureMini ?>" width="100%" alt="">
                        <?php endif; ?>
                    </td>
                    <td>
                        <h2><?= $item->title ?></h2>
                    </td>
                    <td>
                        <p><?= truncate($item->shortdescription) ?>...</p>
                    </td>
                    <td>
                        <a href="?idInstrumentUpdate=<?= $item->idInstrument ?>" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>Modifier</a>
                        <a class="btn btn-outline-danger" onclick="void(0);let a=confirm('Voulez-vous vraiment supprimer<?= $item->title ?>'); if(a){ document.location = '?idInstrumentDelete=<?= $item->idInstrument ?>'; };" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>Supprimer</a>

                    </td>
                </tr>
            <?php
            endforeach;
        else :
            ?>
            <tr>
                <h1 id="messageErreurPrivateAdmin">Un problème est survenu, veuillez recommencer</h1>
            </tr>

        <?php
        endif;
        ?>
    </table>
<script src="js/script.js"></script>
</body>

</html>