@extends('layouts.base_dashbord')
@section('content')
    <style>

        .image {
            width: 15px;
            height: 15px;
        }

        .i1 {
            background: green;
        }

        tr:nth-child(odd) {
            background: #eee;
        }

        tr:nth-child(even) {
            background: #ddd;
        }

        tr:first-child {
            background: #cba;
            color: #6c757d;
        }

        tr + tr:hover {
            background: #bbb;
            color: white;
        }

        tr + tr td:hover, tr + tr th:hover {
            background: #777;
        }

        h2 {
            text-align: center;
        }

        .main-content {
            margin: auto;
        }

        table {
            font-size: 15px;
            text-align: center;
        }


    </style>

    <div class="container">
        <div class="col-10 main-content p-4">
            <h2>Liste des patients</h2>
            <table class="table">
                <!-- thead-->
                <tr>
                    <th scope="col">NOM</th>
                    <th cope="col">PRÉNOM</th>
                    <th cope="col">MAIL</th>
                    <th cope="col">CONTACT</th>
                    <th cope="col">CONSULTER</th>
                    <th cope="col">EDITER</th>
                    <th cope="col">SUPPRIMER</th>
                </tr>

                <!--thead -->
                <!-- tbody-->
                <tr>
                    <td>AZANLEKOR</td>
                    <td>Ayele Esmeralda</td>
                    <td>esmeralda@gmail.com</td>
                    <td>12121212</td>
                    <td><a href="/show_patient"><img class="image i1" src="{{asset('images/plus.png')}}" alt=""></a>
                    </td>
                    <td><a href="/create_patient"><img class="image" src="{{asset('images/pen.png')}}" alt=""></a></td>
                    <td><a href="#"><img class="image" src="{{asset('images/trash.png')}}" alt=""></a></td>
                </tr>
                <tr>
                    <td>AFANGBOME</td>
                    <td>Dominique</td>
                    <td>mail1afangbonedom@gmail.com</td>
                    <td>88888888</td>
                    <td><a href="/show_patient"><img class="image i1" src="{{asset('images/plus.png')}}" alt=""></a>
                    </td>
                    <td><a href="/create_patient"><img class="image" src="{{asset('images/pen.png')}}" alt=""></a></td>
                    <td><a href="#"><img class="image" src="{{asset('images/trash.png')}}" alt=""></a></td>
                </tr>
                <tr>
                    <td>AKAKPO</td>
                    <td>Bernard</td>
                    <td>bernard@gmail.com</td>
                    <td>11111111</td>
                    <td><a href="/show_patient"><img class="image i1" src="{{asset('images/plus.png')}}" alt=""></a>
                    </td>
                    <td><a href="/create_patient"><img class="image" src="{{asset('images/pen.png')}}" alt=""></a></td>
                    <td><a href="#"><img class="image" src="{{asset('images/trash.png')}}" alt=""></a></td>
                </tr>
                <!--tbody -->

            </table>

        </div>
    </div>

@endsection
