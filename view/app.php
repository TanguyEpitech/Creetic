<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display&family=Pacifico&family=Space+Mono&display=swap" rel="stylesheet">
    <title>App</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light Larger shadow">
        <div class="container-fluid mx-3">
            <a class="navbar-brand" href="#">

                <div class="container d-flex gap-5 justify-content-center">
                    <div class="col-4 align-self-center ">

                        <img src="../assets/logo.png" alt="" width="90" height="90">
                    </div>
                    <div class="col-6  align-self-center ">
                        <h3 class="text-danger fst-italic " style="font-family: 'Pacifico', cursive;">Creetic</h3>
                        <h8 class="text-muted">L'appli qui vous fait monter la pression</h8>


                    </div>
                </div>

            </a>

            <div class="text-rigth ">
                <a href="?p=logout" class="btn btn-danger">Déconnexion</a>
            </div>
        </div>
    </nav>
    <div id="retour"></div>





    <div class="text-danger fst-italic text-center my-4" style="    width: 88%;
    z-index: 99;
  
    margin-left: auto;
    margin-right: 42px;">

        <div class="" style="margin-left: 300px;">
            <form id="ajouterloisir" style="border:none; border-radius:13px " class="card shadow p-4">
                <div class="d-flex">

                    <input type="text" name="name" id="name" class="form-control px-3 mx-2 "
                        id="exampleFormControlInput1" placeholder="Votre Prénom">
                    <input type="text" name="name" id="surname" class="form-control px-2 mx-2"
                        id="exampleFormControlInput1" placeholder="Votre nom" value="j">
                    <select class="px-2 mx-2" name="loisir" id="select">
                        <option value="handball">handball</option>
                        <option value="soccer,foot">soccer,foot</option>
                        <option value="tennis">tennis</option>
                        <option value="ping-pong">ping-pong</option>
                        <option value="soccer">soccer</option>
                        <option value="foot">foot</option>
                        <option value="rugby">rugby</option>
                        <option value="volley">volley</option>
                        <option value="badbinton">badbinton</option>
                        <option value="course à pied">course à pied</option>
                        <option value="boxe">boxe</option>
                        <option value="marathon">marathon</option>
                        <option value="natation">natation</option>
                    </select>
                    <button class=" btn btn-danger mx-2" id="btn1"> Recherche </button>

                </div>
            </form>
            <div class=" " style=" margin: auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    align-content: center;
    justify-content: center;
    align-items: center;
    border: none;
    border-radius: 13px;" id="result">

                <div><ion-icon id="arrow2" onclick="left()" name="chevron-back-outline">

                </div>

                <div class="card shadow" style="min-width: unset;     max-width: 355px;
    width: 355px;" id="contener1">


                    <!-- js element -->
                </div>
                <div><ion-icon id="arrow1" onclick="left()" name="chevron-back-outline"> </ion-icon>

                </div>




            </div>


        </div>
    </div>


    <style>
#info{
    flex-wrap: nowrap;
    justify-content: center;
    align-content: center;
}
    
    
        #name {margin-right: 5px;}
#city {margin-right: auto;
    max-width: 50%;}

.rounded{
    height: 273px !important;
    width: 339px !important;
    margin-top: -273px !important;
    margin-bottom: 11px !important;
}

    .border-p {
        padding: 10px 10px;
        border-bottom: 2px solid black;
        transition: 1px all;
    }

    #slider {
        display: flex;
        flex-wrap: nowrap;
        justify-content: center;
        align-content: center;
        align-items: center;
        flex-direction: column !important;
    }

    .slide {
        padding: 10px 10px;

        width: 150px;
        font-family: 'Pacifico', cursive;
    }



    .item_slider {
        height: 350px;
        margin-top: 25vh;
    }

    #arrow1 {
        cursor: pointer;
        font-size: 37px;
        margin-left: auto;
        transform: rotate(180deg);
    }

#prenom {
    margin-right: 10px;
}

#gender{margin-right: 10px;}

    #arrow2 {
        cursor: pointer;
        font-size: 37px;
        margin-left: auto;
    }
    </style>

    <div style="top: 0;
    margin-top: 117px !important; position:absolute; cursor:pointer; width:25%; height: 100%; margin-right:auto; background:#b5222275; padding:25px;box-shadow: 1px 1px 1px #00000078; margin-top: -108px;
" class=" d-flex h-100">
        <div class=" " id="slider">
            <p class="border-p slide  fst-italic">Ajouter loisir</p>
            <p class=" slide  fst-italic">Recherche </p>
            <p class=" slide fst-italic">Wall</p>
        </div>
    </div>



    <!-- caroussel -->

    <!-- recherche user -->


    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script type="text/javascript">
    var btn1 = document.getElementById("btn1");
    var req = "req";
    var contener1 = $("#contener1");

    window.onload = function(e) {
        e.preventDefault();
        var name = document.getElementById("name").value;
        var surname = document.getElementById("surname").value;
        var select = document.getElementById("select").value;
        $.ajax({
            url: '../controller_folder/appController.php',
            type: 'POST',
            data: {
                name: name,
                surname: surname,
                select: select,
                req: req
            },
            success: function(response) {



                $("#contener1").html(response);

                var content = document.querySelector("#contener1")

                var item = content.childNodes;
                var item1 = document.getElementsByClassName("item_slider");

                let img1 = document.getElementsByClassName("image");

                for (let i = 1; i <= item1.length; i++) {
                    img1[i].style.display = "none";
                    item[i].style.display = "none";

                }




            }
        });




    };



    i = 0;

    function right() {
        var item1 = document.getElementsByClassName("item_slider");
        var img = document.getElementsByClassName("image");

        item1[0].style.display = "none";
        img[0].style.display = "none";

        if (i == item1.length) {
            i = 0;

        }


        i = i + 1;
        item1[i].style.display = "block";
        item1[i - 1].style.display = "none";
        img[i].style.display = "block";
        img[i - 1].style.display = "none";

    }

    function left() {

        var img = document.getElementsByClassName("image");
        var item1 = document.getElementsByClassName("item_slider");

        if (i == 0) {
            i = item1.length;
            item1[0].style.display = "none";
            img[0].style.display = "none";

        }
        i = i - 1;

        item1[i].style.display = "block";
        item1[i + 1].style.display = "none";
        img[i].style.display = "block";
        img[i + 1].style.display = "none";


    }
    </script>




    <!-- <script type="text/javascript">
var message = document.querySelector(".message");
message.style.display = "block";

function getToto() {
    var request = new XMLHttpRequest();
    request.open("POST", "controller_folder/login_controller.php", true);
    request.onreadystatechange = function(response , status) {
        
        if (this.readyState == 4) {
            if (this.status == 200) {
                message.innerHTML = " login en cours";
                
            } else {
                message.innerHTML = " Un problème est survenu";
                
            }
            
        } else {
            message.innerHTML = " Votre email est déjà utilisé";
        }
    }
    request.send();
} -->


</body>

</html>