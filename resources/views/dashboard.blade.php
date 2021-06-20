<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        .list .list-item {
            box-shadow: 0px -1px 24px 0px rgba(32,79,140,0.75);
            -webkit-box-shadow: 0px -1px 24px 0px rgba(32,79,140,0.75);
            -moz-box-shadow: 0px -1px 24px 0px rgba(32,79,140,0.75);

        }
        .list  a {
            text-decoration: none;
        }
        .list .list-item:hover{
            border-bottom: solid 2px #204f8c;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container-fluid ">
                <div class="row p-6 list">
                    <a href="{{url('admin/profile')}}" class="list-item col-sm-6 col-md-4 col-lg-3 mt-3 d-flex justify-content-center align-items-center pt-3 pb-3 bg-white border-b border-gray-200">
                        <img src="{{asset('media/icons/user.svg')}}" class="" style="height: 45px" >
                        <p class="mb-0 text-center ms-4" style="font-size: 20px;color: #204f8c">Profile</p>
                    </a>
                    <a href="{{url('admin/clients')}}" class="list-item col-sm-6 col-md-4 col-lg-3 mt-3 d-flex justify-content-center align-items-center pt-3 pb-3 bg-white border-b border-gray-200">
                        <img src="{{asset('media/icons/users.svg')}}" class="" style="height: 45px" >
                        <p class="mb-0 text-center ms-4" style="font-size: 20px;color: #204f8c">Clients</p>
                    </a>
                    <a href="{{url('admin/messages')}}" class="list-item col-sm-6 col-md-4 col-lg-3 mt-3 d-flex justify-content-center align-items-center pt-3 pb-3 bg-white border-b border-gray-200">
                        <img src="{{asset('media/icons/message.svg')}}" class="" style="height: 45px" >
                        <p class="mb-0 text-center ms-4" style="font-size: 20px;color: #204f8c">Messages</p>
                    </a>
                    <a href="{{url('admin/companies')}}" class="list-item col-sm-6 col-md-4 col-lg-3 mt-3 d-flex justify-content-center align-items-center pt-3 pb-3 bg-white border-b border-gray-200">
                        <img src="{{asset('media/icons/company.svg')}}" class="" style="height: 45px" >
                        <p class="mb-0 text-center ms-4" style="font-size: 20px;color: #204f8c">Companie</p>
                    </a>
                    <a href="{{url('admin/products')}}" class="list-item col-sm-6 col-md-4 col-lg-3 mt-3 d-flex justify-content-center align-items-center pt-3 pb-3 bg-white border-b border-gray-200">
                        <img src="{{asset('media/icons/box.svg')}}" class="" style="height: 45px" >
                        <p class="mb-0 text-center ms-4" style="font-size: 20px;color: #204f8c">Produits</p>
                    </a>
                    <a href="{{url('admin/bestproducts')}}" class="list-item col-sm-6 col-md-4 col-lg-3 mt-3 d-flex justify-content-center align-items-center pt-3 pb-3 bg-white border-b border-gray-200">
                        <img src="{{asset('media/icons/best.svg')}}" class="" style="height: 45px" >
                        <p class="mb-0 text-center ms-4" style="font-size: 20px;color: #204f8c">Meilleures produits</p>
                    </a>
                    <a href="{{url('admin/commades')}}" class="list-item col-sm-6 col-md-4 col-lg-3 mt-3 d-flex justify-content-center align-items-center pt-3 pb-3 bg-white border-b border-gray-200">
                        <img src="{{asset('media/icons/list.svg')}}" class="" style="height: 45px" >
                        <p class="mb-0 text-center ms-4" style="font-size: 20px;color: #204f8c">Commandes</p>
                    </a>

                    <a href="{{url('admin/categories')}}" class="list-item col-sm-6 col-md-4 col-lg-3 mt-3 d-flex justify-content-center align-items-center pt-3 pb-3 bg-white border-b border-gray-200">
                        <img src="{{asset('media/icons/category.svg')}}" class="" style="height: 45px" >
                        <p class="mb-0 text-center ms-4" style="font-size: 20px;color: #204f8c">Catégories</p>
                    </a>
                    <a href="{{url('admin/souscategories')}}" class="list-item col-sm-6 col-md-4 col-lg-3 mt-3 d-flex justify-content-center align-items-center pt-3 pb-3 bg-white border-b border-gray-200">
                        <img src="{{asset('media/icons/subcategory.svg')}}" class="" style="height: 45px" >
                        <p class="mb-0 text-center ms-4" style="font-size: 20px;color: #204f8c">Sous Catégories</p>
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
