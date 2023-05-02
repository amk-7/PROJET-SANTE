@extends('layouts.base')
@section('content')
<!-- 

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
            /*width:calc(100%);*/
            /*max-width:600px;*/
            margin:auto;
        }
        .contener form{
            border:1px solid teal;
        width: 500px;
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
        margin:10px 500px 10px 500px;
        align-items: center;
        
    }
    
    .bt{
        margin:40px 500px 10px 500px;
        color:#212529;
        font-size:14px;
        transition:0.6s;
        width: 200px;
        margin-left:500px;
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
    /**resposivité */
    @media screen and (max-width=2210px) {
        .contener{
            background:yellow;
        }
        .select{
            margin:10px 500px 10px 500px;
        }
    }
    
    
</style>
-->

<style>
    *{
        box-sizing:border-box;
        margin: 0;
        padding: 0;
    }
    .contener{
        border:1px solid blue;
        width: 30rem;
        margin: auto;
        margin-top: 2rem;
        padding: 20px;
        margin-bottom: 1rem;
    }
    form{

    }
    form .group{
        display:grid;
    }
    form .group input{
        padding: 6px;
        border-radius:10px;
        text-align: center;
    }
</style>
<div class="contener">
    <legende class="caption">CRÉER LE COMPTE D'UN PATIENT!</legende>
    <form action="" method="post">
        <div class="group">
            <label for="last_name">Nom</label>
            <input type="text" name="last_name" id="last_name">
        </div>
        <div class="group">
            <label for="first_name">Prenom</label>
            <input type="text" name="first_name" id="first_name">
        </div>
        <div class="group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="group">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="group">
            <label for="contact">Contact</label>
            <input type="tel" name="contact" id="contact">

        </div>
        <div class="group">
            <label for="active">Activé</label>
            <select name="active" id="active">
                <option value="1">True</option>
                <option value="0" default>False</option>
            </select>
        </div>
        
        <div class="groupe">
            <input class="bt" type="submit" value="Créer le compte">
            
        </div>

    </form>
</div>


@endsection