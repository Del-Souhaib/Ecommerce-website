<!
<html>
<head>

    <x-parts.files/>
    <title>Home</title>
    <style>
        * {
            font-family: 'Noto Sans', sans-serif;
        }
    </style>

</head>
<body>
<header>
    <x-parts.header/>
</header>
<div class="container mt-2">
    <div class="row" style="border-bottom:  solid 1px #d5d3d3">
        <div class="col-12">
            <p class="mt-2" style="color: #204f8c;font-size: 22px;font-weight: 600">CONNECTEZ-VOUS À VOTRE COMPTE</p>
        </div>
        <form method="post" action="{{url('/connexioncheck')}}" class="col-6" style="color: #8b8888">
            @csrf
            <div class="row  align-items-center mt-3">
                <div class="col-12 mb-5">
                    <p style="font-size: 21px">Vous possédez déjà un compte</p>
                </div>
                <div class="col-4">
                    <label for="email" style="font-weight: 600">Email</label>
                </div>
                <div class="col-8">
                    <input type="email" name="email" id="name" class="form-control" style="border-radius: 0">
                </div>
            </div>
            <div class="row align-items-center mt-3">
                <div class="col-4">
                    <label for="password" style="font-weight: 600">Mot de passe</label>
                </div>
                <div class="col-8">
                    <input type="password" name="password" id="password" class="form-control" style="border-radius: 0">
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-8 mt-3">
                    <a href="" style="color: #8b8888;text-decoration: none;font-size: 15px">Mot de passe oublié?</a>
                </div>
                <div class="col-4"></div>
                <div class="col-8 mt-3">
                    <button class="btn text-light " style="border-radius:0;background-color: #204f8c!important; ">
                        Connexion
                    </button>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-4">

                </div>
                <div class="col-8" style="font-size: 15px">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                        @endforeach
                    @endif
                </div>
            </div>

        </form>
        <div class="col-6 ps-5" style="border-left: solid 1px #d5d3d3">
            <div class="row  align-items-center mt-3" style="color: #8b8888">
                <div class="col-12 mb-5">
                    <p style="font-size: 21px;margin-bottom: 60px">Vous n'avez pas encore de compte</p>
                    <p class="mb-4">Créez votre compte dès aujourd'hui et bénéficiez des avantages suivants :</p>
                    <ul class="ps-3">
                        <li>Passage de commande rapide et facile</li>
                        <li>Adresses de livraison et de facturation différentes</li>
                    </ul>
                    <a href="{{url("/inscrire ")}}" class="btn text-light mt-2" style="text-decoration:none;border-radius:0;background-color: #204f8c!important; ">
                        Créer un compte
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<x-parts.footer/>
<script>


</script>
</body>
</html>

