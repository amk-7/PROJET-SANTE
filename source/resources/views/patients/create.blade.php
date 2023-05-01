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
        /*height: 500px;*/
        width:calc(100%);
       max-width:600px;
       margin:auto;
    }
    .contener form{
        display:grid;
        margin:auto;
        /*background:blue;*/
        text-align: center;
       margin-top:7%;
       margin-bottom:15%;
       padding:50px;
       border-radius:15px;
      cursor: pointer;
    }
    form input{
        margin-bottom: 20px;
        width: 300px;
        height: 30px;
        border-radius:15px;
        text-align: center;
        font-size:14px;
        border:0px;
        outline:none;
        border:1px solid #212529;
        
    }
    
    form label{
        font-size:15px;
        color:#212529;
    }
    .select{
        display:flex;
        justify-content: space-between;
        margin:10px 100px 10px 100px;
        align-items: center;
        
    }
    
    .bt{
        margin:40px 100px 10px 100px;
        color:#212529;
        font-size:14px;
        transition:0.6s;
        width: 200px;
        margin-left:150px;
        background:#007bff;
        border:0;
        cursor: pointer;
    }
    .bt:active{
        transform:scale(0.7);
    }
    .bt:hover{
        color:white;
        background:black;
        font-weight:bold;
    }
    .caption{
        margin-bottom:50px;
        /*background:green;*/
        padding:12px;
        font-size:18px;
        font-weight:bold;
        /*border-radius:15px;*/
        color:#212529;
        font-style:italic;
       
        
    }
   
    
</style>
<div class="contener">
    <form action="" method="post">
        <legende class="caption">CRÉER LE COMPTE D'UN PATIENT!</legende>
        <div>
                <label for="last_name">Nom</label><br>
                <input type="text" name="last_name" id="last_name"><br>

                <label for="first_name">Prenom</label><br>
                <input type="text" name="first_name" id="first_name"><br>

                <label for="email">E-mail</label><br>
                <input type="email" name="email" id="email"><br>

                <label for="password">Mot de passe</label><br>
                <input type="password" name="password" id="password"><br>

                <label for="contact">Contact</label><br>
                <input type="tel" name="contact" id="contact"><br>
                <div class="select">
                    <label for="active">Activé</label>
                    <select name="active" id="active"><br>
                        <option value="1">True</option>
                        <option value="0" default>False</option>
                    </select>
                </div>
        </div>
        <input class="bt" type="submit" value="Créer le compte">
    </form>
</div>


@endsection