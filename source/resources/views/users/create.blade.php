@extends('layouts.base')
@section('content')
<section class="contact-section">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2 class="text-center fs-2">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    <!--form class="form-contact contact_form mb-80" action="" method="post">
        <div class="d-flex flex-column m-auto align-items-center">
            @include('components.form_components.field', [ 'label' => 'Nom' ])
            @include('components.form_components.field', [ 'label' => 'Prénom' ])
            @include('components.form_components.field', [ 'label' => 'Mot de passe' ])
            @include('components.form_components.field', [ 'label' => 'Confirmer' ])
            @include('components.form_components.field', [ 'label' => 'Contact' ])
            @include('components.form_components.field', [ 'label' => 'E-mail' ])


            @yield('child_content')
           <div class="col-2 mt-5 w-50 ">
               <button class="button bg-primary p-10 w-100 " type="submit">Enregistrer</button>
           </div>
        </div>
    </form-->
@stop
