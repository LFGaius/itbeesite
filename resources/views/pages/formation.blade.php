<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagestyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/pageventestyle.css')}}">
</head>
<body  id="page-top">
    <nav class="navbar navbar-expand-md" id="mainNav">
        <a class="navbar-brand js-scroll-trigger" href="/"><img  src="assets/logo.png" class="logo" alt="enterprise image"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="nv-toggler"><i class="fas fa-stream"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav d-flex justify-content-end">
                <li class="nav-item d-flex flex-column justify-content-center">   
                    <a class="nav-link js-scroll-trigger d-flex flex-column justify-content-center" href="/#aboutus">A Propos De Nous</a>
                </li>
                <li class="nav-item d-flex flex-column justify-content-center">
                    <a class="nav-link js-scroll-trigger  d-flex flex-column justify-content-center" href="/#services">Nos Services</a>
                </li>
                <li class="nav-item d-flex flex-column justify-content-center">
                    <a class="nav-link js-scroll-trigger  d-flex flex-column justify-content-center" href="/#assistance">Assistance</a>
                </li>
                <li class="nav-item d-flex flex-column justify-content-center">
                    <a class="nav-link js-scroll-trigger  d-flex flex-column justify-content-center" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="d-flex flex-fill justify-content-around flex-wrap">
        <div class="info-zone flex-fill d-flex flex-column justify-content-start">
            <div class="image-block" style="background-color: rgba(10, 10, 10, 1);
                                            background-image: url('assets/formation-img.jpg');
                                            background-size:100% 65vh;
                                            color: #f9f9f9;">
                <div class="image d-flex flex-column justify-content-center text-center">
                    FORMATION
                </div>
            </div>
            
            <div class="text p-3">
                Acquérez des connaissances pour une bonne insertion professionnelle! 
            </div>
        </div>
        <div class="form-zone flex-fill d-flex flex-column justify-content-start px-3">
            <div class="title">Faites une demande de formation en remplissant ce formulaire !</div>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <form class="form-block" action="/senddemandeformation" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="completename">Nom Complet</label>
                    <input class="form-control" id="completename" name="completename" placeholder="Entrez votre nom complet" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input  class="form-control" id="email" name="email" placeholder="Addresse Email" >
                </div>
                
                <div class="d-flex justify-content-around flex-wrap-reverse">
                    <div class="form-group flex-fill mr-2">
                        <label for="gender">Sexe</label>
                        <select class="form-control" id="gender" name="gender">
                            <option>Masculin</option>
                            <option>Féminin</option>
                        </select>
                    </div>
                    <div class="form-group flex-fill mr-2">
                        <label for="category">Votre Catégorie</label>
                        <select class="form-control" id="category" name="category">
                            <option>Particulier</option>
                            <option>Entreprise</option>
                        </select>
                    </div>
                    <div class="form-group flex-fill mr-2">
                        <label for="phone">Téléphone</label>
                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Numéro de téléphone" >
                    </div>
                </div>

                <div class="form-group flex-fill mr-2">
                    <label for="gender">Type De Formation</label>
                    <select class="form-control" id="trainingtype" name="trainingtype">
                        <option>Connaître sa vocation</option>
                        <option>Comment créer une entreprise</option>
                        <option>Secrétariat Bureautique</option>
                        <option>Secrétariat Comptable</option>
                        <option>Secrétariat de Direction</option>
                        <option>Infographie et multimédia</option>
                        <option>Maintenance Informatique</option>
                        <option>Communication et marketing</option>
                        <option>Développement web</option>
                        <option>Gestion des ressources humaines</option>
                        <option>Management des projets et leadership</option>
                    </select>
                </div>
                
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" name="message" rows="3" ></textarea>
                </div>
                <div>
                    <button type="submit" class="btn mb-4">Envoyer la demande</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="d-flex flex-column justify-content-center" id="contact">
        <div class="d-flex justify-content-around flex-wrap">
            <div class="d-flex flex-column justify-content-around text-center">
                <div class="title">CONTACT</div>
                <div class="d-flex justify-content-start contact-item flex-wrap">
                    <div class="logo-item"><i class="fab fa-facebook"></i></div><div class="text-item d-flex flex-column justify-content-center">facebook.com</div>
                </div>
                <div class="d-flex justify-content-start contact-item flex-wrap">
                    <div class="logo-item"><i class="fab fa-whatsapp"></i></div><div class="text-item d-flex flex-column justify-content-center">+237982323656</div>
                </div>
                <div class="d-flex justify-content-start contact-item flex-wrap">
                    <div class="logo-item"><i class="fas fa-mobile-alt"></i></div><div class="text-item d-flex flex-column justify-content-center">+237982323656/+237982323656</div>
                </div>
                <div class="d-flex justify-content-start contact-item flex-wrap">
                    <div class="logo-item"><i class="fas fa-envelope"></i></div><div class="text-item d-flex flex-column justify-content-center">jjfsd@fsdf.fr</div>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-center m-5 copyright">
                <div>@copyright 2020</div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
</body>
</html>