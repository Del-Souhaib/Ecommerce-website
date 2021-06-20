<x-app-layout>
    <x-slot name="header">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="font-semibold text-xl mb-0 text-gray leading-tight align-items-center"
                style="font-weight:600;color: #204f8c">
                {{ __('Mise a jour Companie') }}
            </h2>
            <a href="{{url('/admin/companies')}}" class="btn ps-5 pe-5 text-light"
               style="background-color: #204f8c;border-radius: 0">
                Retour
            </a>
        </div>
    </x-slot>
    <style>

    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="post" action="{{'/admin/modifycompanies'}}" enctype="multipart/form-data" class="container-fluid ">
                @csrf
                <div class="row align-items-center">
                    <input type="hidden" name="comapnyid" value="{{$company->id}}">
                    <div class="col-4 col-sm-4 col-md-2 mt-3">
                        <x-label for="name" :value="__('Nom')"/>
                    </div>
                    <div class="col-8 col-md-4 mt-3">
                        <x-input id="name" value="{{$company->name}}" class="block mt-1 w-full" type="text" name="name"
                                 required autofocus/>
                    </div>
                    <div class="col-4 col-sm-4 col-md-2 mt-3">
                        <x-label for="logo" :value="__('Logo')"/>
                    </div>
                    <div class="col-8 col-md-4 mt-3 ">
                        <img src="{{asset('storage/companies/'.$company->logo)}}" style="height: 50px">
                        <x-input id="logo" class="block mt-1 w-full form-control" type="file" name="logo" :value="old('logo')"
                                 required autofocus/>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-4">
                        <x-button class="ml-3 ms-0" style="background-color: #204f8c ;border-radius: 0">
                            {{ __('Enregistrer') }}
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
