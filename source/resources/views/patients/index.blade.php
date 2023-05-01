@extends('layouts.base')
@section('content')
<style>
 *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        list-style-type: none;
        text-decoration:none;
    }
    .contener{
       width:calc(100%);
       max-width:600px;
       margin:auto;
       height: 500px;
       margin-top:5%; 
    }
    .image{
        width: 15px;
        height: 15px;
    }
    .i1{
        background:green;
    }
    table{
        text-align: center;
        /*margin:auto;*/
        padding:50px;
        font-size:20px;
        font-family:Arial ;
        padding: 6px 12px;
        border-collapse: separate;
        border-spacing: 2px;
        /*margin-top:10%;*/
        position:absolute;
        left: 15%;
        width: 60rem;
    }
   
    /** */
    tr:nth-child(odd){
    background: #eee;
    }
    tr:nth-child(even){
        background: #ddd;
    }
    tr:first-child{
        background:#cba;
        color: #6c757d;
    }
    tr + tr:hover{
    background: #bbb;
    color: white;
    }

    tr + tr td:hover, tr+tr th:hover{
        background: #777;
    }
   
   
    
   
</style>

<div class="contener">
    <table>
        
        
                <tr>
                    <th>NOM</th>
                    <th>PRÉNOM</th>
                    <th>MAIL</th>
                    <th>CONTACT</th>
                    <th>CONSULTER</th>
                    <th>EDITER</th>
                    <th>SUPPRIMER</th>
                </tr>
        
       
            <tr>
                <td>AZANLEKOR</td>
                <td>Ayele Esmeralda</td>
                <td>esmeralda@gmail.com</td>
                <td>12121212</td>
                <td><a href="/show"><img class="image i1" src="{{asset('images/plus.png')}}" alt=""></a></td>
                <td><a href="/create"><img class="image" src="{{asset('images/pen.png')}}" alt=""></a></td>
                <td><a href="#"><img class="image" src="{{asset('images/trash.png')}}" alt=""></a></td>
            </tr>

            <tr>
                <td>AKAKPO</td>
                <td>Bernard</td>
                <td>bernard@gmail.com</td>
                <td>11111111</td>
                <td><a href="/show"><img class="image i1" src="{{asset('images/plus.png')}}" alt=""></a></td>
                <td><a href="/create"><img class="image" src="{{asset('images/pen.png')}}" alt=""></a></td>
                <td><a href="#"><img class="image" src="{{asset('images/trash.png')}}" alt=""></a></td>
            </tr>

            <tr>
                <td>AFANGBOME</td>
                <td>Dominique</td>
                <td>mail1afangbonedom@gmail.com</td>
                <td>88888888</td>
                <td><a href="/show"><img class="image i1" src="{{asset('images/plus.png')}}" alt=""></a></td>
                <td><a href="/create"><img class="image" src="{{asset('images/pen.png')}}" alt=""></a></td>
                <td><a href="#"><img class="image" src="{{asset('images/trash.png')}}" alt=""></a></td>
            </tr>
        
    </table>
</div>


@endsection