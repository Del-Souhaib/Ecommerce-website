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
    <form method="post" action="{{url('/inscrirecheck')}}" class="row" style="border-bottom:  solid 1px #d5d3d3">
        @csrf
        <div class="col-12">
            <p class="mt-2" style="color: #204f8c;font-size: 22px;font-weight: 600">CRÉER UN COMPTE</p>
        </div>
        <div class="col-12" style="color: #8b8888">
            <div class="row  align-items-center mt-3">
                <div class="col-4 col-sm-4 col-md-2  mt-3">
                    <label for="name" style="font-weight: 600">Nom</label>
                </div>
                <div class="col-8 col-sm-8 col-md-4 mt-3">
                    <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control" required style="border-radius: 0">
                </div>
                <div class="col-4 col-sm-4 col-md-2 mt-3">
                    <label for="lastname" style="font-weight: 600">Prenom</label>
                </div>
                <div class="col-8 col-sm-8 col-md-4 mt-3">
                    <input type="text" name="lastname" value="{{old('lastname')}}" id="lastname" class="form-control" required
                           style="border-radius: 0">
                </div>
                <div class="col-4 col-sm-4 col-md-2 mt-3">
                    <label for="email" style="font-weight: 600">Email</label>
                </div>
                <div class="col-8 col-sm-8 col-md-4 mt-3">
                    <input type="email" name="email" value="{{old('email')}}" id="name" required class="form-control" style="border-radius: 0">
                </div>
                <div class="col-4 col-sm-4 col-md-2 mt-3">
                    <label for="telephone" style="font-weight: 600">Telephone</label>
                </div>
                <div class="col-8 col-sm-8 col-md-4 mt-3">
                    <input type="tel" name="telephone" value="{{old('telephone')}}" id="telephone" required class="form-control"
                           style="border-radius: 0">
                </div>
            </div>
            <div class="row align-items-center mt-3">
                <div class="col-4 col-sm-4 col-md-2 mt-3">
                    <label for="password" style="font-weight: 600">Mot de passe</label>
                </div>
                <div class="col-8 col-sm-8 col-md-4 mt-3">
                    <input type="password" name="password" id="password" required class="form-control"
                           style="border-radius: 0">
                </div>
                <div class="col-4 col-sm-4 col-md-2 mt-3">
                    <label for="password2" style="font-weight: 600">Récrire Mot de passe</label>
                </div>
                <div class="col-8 col-sm-8 col-md-4 mt-3">
                    <input type="password" name="password2" id="password2" required class="form-control"
                           style="border-radius: 0">
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-2"></div>
                <div class="col-8 mt-3">
                   <span> Vous avez déjà un compte ?
                    <a href="" style="color: #8b8888;text-decoration: none;font-size: 15px">Connectez-vous !</a>
                   </span>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-2"></div>
                <div class="col-8 mt-3">
                    <button class="btn text-light " style="border-radius:0;background-color: #204f8c!important; ">
                        Enregistrer
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

        </div>
    </form>
</div>


<x-parts.footer/>
<script>


</script>
</body>
</html>

