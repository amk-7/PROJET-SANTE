@extends('layouts.base_dashboard')
@section('content')
<h4 class="fw-bold py-3 mb-4">
    Nouveau évènement
</h4>
<div class="card ">
    <div class="card-header d-flex items-center justify-content-between">
        <h5 class="">Enregister un nouveau évènement</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('events.store')  }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row col-md-12 col-12 form-group mb-3">
                @include('components.form_components.field', ['name' => 'title', 'label' => 'Titre', 'placeholder' => 'Saisir le titre' ])
                @include('components.form_components.text_field', ['name' => 'description', 'label' => 'Description', 'placeholder' => 'Saisir une description' ])
                <div class="col-md-12">
                    @include('components.form_components.field', ['name' => 'images', 'label' => 'Affiche', 'placeholder' => 'Saisir une description', 'type' => 'file', 'multiple' => '' ])
                </div>
                <div class="col-md-12 row">
                    @include('components.form_components.radio_field', ['name' => 'type', 'type' => 'radio', 'data' => ['En ligne', 'Présentiel'], 'class' => 'col-md-4' ])
                </div>
                <div class="" id="on_line" hidden>
                    <div class="col-md-12 row on_line_row">
                        @include('components.form_components.field', ['name' => 'on_line_date[]', 'label' => 'Date', 'placeholder' => 'Saisir une description', 'type' => 'date', 'class' => 'col-md-4' ])
                        @include('components.form_components.field', ['name' => 'on_line_start_time[]', 'label' => 'Début', 'placeholder' => '', 'type' => 'time', 'class' => 'col-md-2' ])
                        @include('components.form_components.field', ['name' => 'on_line_end_time[]', 'label' => 'Fin','placeholder' => '', 'type' => 'time', 'class' => 'col-md-2' ])
                        @include('components.form_components.field', ['name' => 'on_line_link[]', 'label' => 'Lien', 'placeholder' => 'Saisir le lien', 'type' => 'text', 'class' => 'col-md-4' ])
                        <div class="d-flex flex-row-reverse">
                            <input type="button" class="btn btn-danger m-2 delete_row col-md-1" value="x">
                        </div>
                    </div>
                </div>
                <div id="face_to_face" hidden>
                    <div class="col-md-12 row face_to_face_row">
                        @include('components.form_components.field', ['name' => 'date[]', 'label' => 'Date', 'placeholder' => 'Saisir une description', 'type' => 'date', 'class' => 'col-md-4' ])
                        @include('components.form_components.field', ['name' => 'start_time[]', 'label' => 'Début', 'placeholder' => '', 'type' => 'time', 'class' => 'col-md-4' ])
                        @include('components.form_components.field', ['name' => 'end_time[]', 'label' => 'Fin','placeholder' => '', 'type' => 'time', 'class' => 'col-md-4' ])
                        @include('components.form_components.field', ['name' => 'country[]', 'label' => 'Pays', 'placeholder' => 'Saisir le pays', 'type' => 'text', 'class' => 'col-md-4' ])
                        @include('components.form_components.field', ['name' => 'town[]', 'label' => 'Ville', 'placeholder' => 'Saisir la ville', 'type' => 'text', 'class' => 'col-md-4' ])
                        @include('components.form_components.field', ['name' => 'address[]', 'label' => 'Adresse', 'placeholder' => 'Saisir le quartier', 'text' => 'time', 'class' => 'col-md-4' ])
                        <div class="d-flex flex-row-reverse">
                            <input type="button" class="btn btn-danger m-2 delete_row col-md-1" value="x">
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row-reverse">
                    <input type="button" class="btn btn-primary add_row" value="+">
                </div>
            </div>
            <input type="submit" class="btn btn-primary w-100" value="Enregistrer">
        </form>
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript">

        $('#on_line')[0].hidden=true;
        $('#face_to_face')[0].hidden=true;

        $('#type_0').on('change', function (){
            $('#on_line')[0].hidden=false;
            $('#face_to_face')[0].hidden=true;
            $('.face_to_face_row').slice(1).remove();
        });

        $('#type_1').on('change', function (){
            $('#on_line')[0].hidden=true;
            $('#face_to_face')[0].hidden=false;
            $('.on_line_row').slice(1).remove();
        });
        $('.add_row').on('click', function (){
            let base_id = ".face_to_face_row";
            if (! $('#on_line')[0].hidden){
                base_id = ".on_line_row";
            }
            let old_row = $(`${base_id}`+':last');
            let empty_row = old_row.clone(true);
            empty_row.insertAfter(`${base_id}`+':last');
            //initialiser les valeurs
            //updateRowsContent(".on_line_row");
        });

        $(".delete_row").on('click', function() {
            let base_id = ".face_to_face_row";
            if (! $('#on_line')[0].hidden){
                base_id = ".on_line_row";
            }
            console.log(base_id);
            let rowCount = $(`${base_id}`).length;
            if (rowCount === 1) { // 2 car il y a toujours une ligne d'entête
                alert('Impossible de supprimer la dernière ligne.');
                return ;
            }
            $(this).closest(`${base_id}`).remove();
            //updateRowsContent();
        });

        function updateRowsContent(base_id) {
            // Obtenir toute les lignes
            var rows = $(`${base_id}`);

            // Mettre à jour les indices de chaque formulaire et ajouter les numéros
            rows.each(function(index) {
                $(this)[0].id = index;
            });
        }
    </script>
@endsection
