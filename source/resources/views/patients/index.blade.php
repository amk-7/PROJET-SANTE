@extends('layouts.base')
@section('content')    <div class="block block-rounded">
        <div class="block-header">
            <div id="export-btn">
                <a href="" class="btn btn-outline-primary">
                    <i class="fa fa-2x fa-file-export"></i> Exporter
                </a>
            </div>
            <a href="" class="btn btn-outline-primary">
                <i class="fas fa-plus"></i> Ajout
            </a>
        </div>
        <div class="block-content block-content-full">
            <div class="pdf-preview">
                
            </div>
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination" id="export-table">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">Id</th>
                        <th class="d-none d-sm-table-cell text-center" >Nom</th>
                        <th class="d-none d-sm-table-cell text-center" >Prénom</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Contact</th>
                        <th class="d-none d-sm-table-cell text-center" >Pays</th>
                        <th class="d-none d-sm-table-cell text-center" >Ville</th>
                        <th style="width: 15%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td class="text-center font-size-sm"> </td>
                        <td class="text-center font-size-sm text-uppercase">  </td>
                        <td class="d-none d-sm-table-cell text-center text-capitalize"> </td>
                        <td class="text-center d-none d-sm-table-cell font-size-sm"> </td>
                        <td class="text-center d-none d-sm-table-cell font-size-sm"> </td>
                        <td class="text-center d-none d-sm-table-cell font-size-sm"> </td>
                        <td class="text-center"> 
                           
                            <form action="" method="GET">
                                <button type="submit" class="btn btn-sm btn-warning">
                                    <span><i class="far fa-edit fa-lg"></i></span>
                                </button> 
                            </form>                                      
                            <form action="" method="POST">
                             
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <span><i class="fa fa-fw fa-times mr-1"></i></span>
                                </button> 
                            </form>                                 
                        </td> 
                    </tr>
               
                        <div class="my-auto">
                            <h3 class="text-center">Aucun client.</h3>
                        </div>
                 
    
                </tbody>
            </table>
        </div>
    </div>
@stop



