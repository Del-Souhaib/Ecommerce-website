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
        <div  class="col-6" style="color: #8b8888">
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

        </div>
    </form>
</div>


<x-parts.footer/>
<script>


</script>
</body>
</html>

