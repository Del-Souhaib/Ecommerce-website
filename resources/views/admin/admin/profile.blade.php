<x-app-layout>
    <x-slot name="header">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="font-semibold text-xl mb-0 text-gray leading-tight align-items-center"
                style="font-weight:600;color: #204f8c">
                {{ __('Profile') }}
            </h2>
        </div>
    </x-slot>
    <style>

    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container-fluid ">
                <div class="row">
                    @if(session()->get('statut')=='updated')
                        <p class="alert  " style="background-color: #204f8c;border-radius: 0">
                            Votre compte a ete mise à jour
                        </p>
                    @endif
                    <div class="col-12">
                        <p style="color: #204f8c;font-size: 20px;font-weight: 550">Compte information</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteconfirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{url('admin/deletecompanies')}}" class="modal-content" style="border-radius: 0">
                @csrf
                <div class="modal-header border-bottom-0" >
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <input type="hidden" name="modalcompanyid" id="modalcompanyid" value="">
                    <img src="{{asset('media/icons/warning.svg')}}" style="height: 40px">
                    <span class="ms-2 text-center">êtes-vous sûr de vouloir supprimer cette companie</span>
                </div>
                <div class="modal-footer border-top-0">
                    <button  class="btn btn-danger text-light pe-3 ps-3" style="border-radius: 0;">
                        Supprimer
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function (){
            $('.delete').click(function (){
                $('#modalcompanyid').val($(this).attr('companyid'))
                $('#deleteconfirmation').modal('show')
            })
        })
    </script>
</x-app-layout>
