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
        <link rel="stylesheet" href="/view/style.css">
    <title>register</title>
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

            <div class="text-right ">

                <a href="?p=login" class="btn btn-danger ">Login</a>
            </div>
        </div>
    </nav>





    <div style="background-image: linear-gradient(rgba(00, 0, 0, 0.4), rgba(00, 0, 0, 0.4)), url(assets/bg_inscription.jpg); background-position:center;background-size:cover; height:100vh;">


        <div style="width :400px; height: 100%;  margin-top: -53px; margin-bottom: 50px; margin-right :auto; background:#b5222275; padding:25px;box-shadow: 1px 1px 1px #00000078;"
            class=" d-flex h-100">


            <div class="col align-self-center">

                <p class="text-white"  style="font-family: 'Pacifico', cursive;">Register</p>

                <form id="form" method="POST">
                    <p id="retour"></p>

                    <input type="email" name="email" id="email" class="form-control px-2" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                    <br>
                    <input type="password" name="password" id="password" class="form-control px-2"
                        id="exampleFormControlInput1" placeholder="Votre Mot de passe">
                    <br>
                    <input type="text" name="surname" id="surname" class="form-control px-2"
                        id="exampleFormControlInput1" placeholder="Votre nom">
                    <br>

                    <input type="text" name="name" id="name" class="form-control px-2" id="exampleFormControlInput1"
                        placeholder="Votre prénom">

                    <br>
                    <input type="date" name="birth" id="birth" class="form-control px-2" id="exampleFormControlInput1"
                        placeholder="date of birth">
                    <br>
                    <input type="text" name="city" id="city" class="form-control px-2" id="exampleFormControlInput1"
                        placeholder="Votre ville">
                    <br>
                    <select name="gender" id="gender" class="form-control px-2" id="exampleFormControlInput1" id="">
                        <option value="">Selection</option>
                        <option value="homme">Homme</option>
                        <option value="girl">Femme</option>
                        <option value="trans">Trans</option>
                    </select>
                    <br><br>
                    <br>
                    <div class="row">
                        <div class="col">

                            <a style="margin-right: 30px !important;" href="?p=login">Déja inscris ?</a>
                        </div>

                        <div class="col">
                            <button id="submit" class="btn btn-danger text-right">S'inscrire</button>
                        </div>
                    </div>

            </form>
            </div>

        </div>
    </div>


    <div class="position-absolute top-50 start-50 translate-middle text-danger fst-italic text-center "
        style="z-index: 99; font-family: 'Pacifico', cursive;">
        <h1 class>Bienvenue sur Creetic </h1>
        <div class="text-center">
            <p class="text-white" style="font-size: 25px;">Création du compte !
            </p>

            <i class="bi bi-heart-fill text-white fs-4"></i>
        </div>
    </div>

<style>
   input::placeholder {
color: white !important;
    }
    input { color: white !important;
        background: #b5222275 !important;
    }
    select {
        color: white !important;
        background: #b5222275 !important;
    }
a{
    color: pink !important;
}
    option::selection{
        background: pink !important;
color:  pink !important;
    }
</style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
    $("#submit").click(function(e) {
        e.preventDefault();
        let email = document.querySelector("#email").value;
        let password = document.querySelector("#password").value;
        let surname = document.querySelector("#surname").value;
        let city = document.querySelector("#city").value;
        let birth = document.querySelector("#birth").value;
        let name = document.querySelector("#name").value;
        let gender = document.querySelector("#gender").value;

            console.log(gender)
        $.ajax({
            url: '../controller_folder/register_controller.php',
            type: 'POST',
            data: {
                email: email,
                password: password,
                surname: surname,
                city: city,
                birth: birth,
                gender: gender,
                name: name,
            },
            success: function(response) {

                if (response == "connecté") {
                    window.location.href = "?p=app";

                    console.log("sucess");
                } else {
                    $("#retour").html(response).addClass("text-danger bg-dark text-center shadow-lg rounded p-2");
        

                    let form = $("input");
                    let select = $("select");
                    console.log(form);

                    for (let index = 0; index < form.length; index++) {
                        if (form[index].value == "") {

                            form[index].style.borderColor = 'red';
                        } else {
                            form[index].style.borderColor = 'white';
                        }
                    }
                }
            },

            error: function(response, textStatus) {
                console.log(response);
            }

        });



    });
    </script>
</body>

</html>