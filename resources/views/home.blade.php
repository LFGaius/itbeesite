<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name','ItBee')}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
</head>
<body  id="page-top">
    <header class="content flex-column d-flex justify-content-lg-center justify-content-md-center justify-content-sm-around flex-wrap">
        
            <div class="d-flex justify-content-around flex-wrap">
                    <div class="d-flex flex-column justify-content-center">
                        <div><img  src="assets/logo-header.png" alt="enterprise image"></div>
                    </div>
                    <div class="slogan d-flex flex-column justify-content-center">
                        Leaders, ensemble écrivons notre histoire !
                    </div>
            </div>
    </header>
    <nav class="navbar navbar-expand-md" id="mainNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img  src="assets/logo.png" class="logo" alt="enterprise image"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="nv-toggler"><i class="fas fa-stream"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav d-flex justify-content-end">
                <li class="nav-item d-flex flex-column justify-content-center">   
                    <a class="nav-link js-scroll-trigger d-flex flex-column justify-content-center" href="#aboutus">A Propos De Nous</a>
                </li>
                <li class="nav-item d-flex flex-column justify-content-center">
                    <a class="nav-link js-scroll-trigger  d-flex flex-column justify-content-center" href="#services">Nos Services</a>
                </li>
                <li class="nav-item d-flex flex-column justify-content-center">
                    <a class="nav-link js-scroll-trigger  d-flex flex-column justify-content-center" href="#assistance">Assistance</a>
                </li>
                <li class="nav-item d-flex flex-column justify-content-center">
                    <a class="nav-link js-scroll-trigger  d-flex flex-column justify-content-center" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="aboutus" id="aboutus">
        <div class="d-flex justify-content-around flex-wrap">
            <div class="img-container flex-fill d-flex flex-column justify-content-center">
                <img  src="assets/aboutus-img.jpg" alt="enterprise image" class="aboutus-image">
            </div>
            <div class="aboutus-text flex-fill d-flex flex-column justify-content-center px-3">
                <p>
                ITBEE Coorporation est un Espace 
                collaboratif qui valorise le co-working, 
                le développement des idées, 
                des projets, es capacités, des 
                compétences ; et la valorisation des 
                TIC dans tous les domaines d’activités 
                connexes ou pas à l’informatique !<br/>
                <span class="font-weight-bold">Notre Mission</span> : « Guérir l’ignorance » <br/>
                <span class="font-weight-bold">Objectifs</span> :
                Former des leaders qui transforment le monde ;
                Développer les capacités et compétences ;
                Promouvoir la culture entrepreneuriale ;
                Transformer les idées en entreprise ;
                Valoriser les Technologies de l’information et de la communication.

                </p>
            </div>
        </div>
    </div>

    
    

    <div id="services">
        <div class="d-flex justify-content-end">
            <aside class="separator d-flex flex-column justify-content-center">Services</aside>
        </div>
        <div class="d-flex flex-column justify-content-around">
            <div class="d-flex justify-content-around flex-wrap">
                
                <div class="services-items">
                    <a href="/formation">
                        <div class="d-flex flex-column justify-content-center item ">
                            <div class="text-center service-image-zone">
                                <img src="assets/formation-img.jpg" alt="activity image">
                            </div>
                            <div class=" py-3 text d-flex flex-column justify-content-center ">
                                <div class="text-center font-weight-bold label">FORMATION</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="services-items">
                    <a href="/coaching">
                        <div class="d-flex flex-column justify-content-center item ">
                            <div class="text-center service-image-zone">
                                <img src="assets/coaching-img.jpg" alt="activity image">
                            </div>
                            <div class=" py-3 text d-flex flex-column justify-content-center ">
                                <div class="text-center font-weight-bold label">COACHING</div>
                            </div>
                        </div>
                    </a>
                </div>
            
                <div class="services-items">
                    <a href="/consulting">
                        <div class="d-flex flex-column justify-content-center item ">
                            <div class="text-center service-image-zone">
                                <img src="assets/consulting-img.jpg" alt="activity image">
                            </div>
                            <div class=" py-3 text d-flex flex-column justify-content-center ">
                                <div class="text-center font-weight-bold label">CONSULTING INFORMATIQUE ET GESTION</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-flex  justify-content-around flex-wrap">
                <div class="services-items">
                    <a href="/ventemateriel">
                        <div class="d-flex flex-column justify-content-center item ">
                            <div class="text-center service-image-zone">
                                <img src="assets/infograph-mutimedia-img.jpg" alt="activity image">
                            </div>
                            <div class=" py-3 text d-flex flex-column justify-content-center ">
                                <div class="text-center font-weight-bold label">VENTE DU MATERIEL INFORMATIQUE</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="services-items">
                    <a href="/maintinfo">
                        <div class="d-flex flex-column justify-content-center item ">
                            <div class="text-center service-image-zone">
                                <img src="assets/maintenance-info-img.jpg" alt="activity image">
                            </div>
                            <div class=" py-3 text d-flex flex-column justify-content-center ">
                                <div class="text-center font-weight-bold label">MAINTENANCE INFORMATIQUE</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="services-items">
                    <a href="/secretbureau">
                        <div class="d-flex flex-column justify-content-center item ">
                            <div class="text-center service-image-zone">
                                <img src="assets/secret-bureaut-img.jpg" alt="activity image">
                            </div>
                            <div class=" py-3 text d-flex flex-column justify-content-center ">
                                <div class="text-center font-weight-bold label">SECRETARIAT ET BUREAUTIQUE</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
    </div>

    

    <div class="assistance" id="assistance">
        <div class="d-flex justify-content-start">
            <aside  class="separator d-flex flex-column justify-content-center">Assistance</aside>
        </div>
        <div class="d-flex  justify-content-around flex-wrap-reverse">
            <div class="assistance-text  d-flex flex-column justify-content-around px-2">
                <div class="d-flex justify-content-center ">
                    <div class="title text-center">POUR PARTICULIERS</div>
                </div>
                <p class="text-center">
                    Nous vous accompagnons personnellement
                    avec un programme personalisé en fonction
                    de votre disponibilité, votre personnalité, 
                    votre environement et bien d’autres facteurs
                    vous caractérisant ; Tout ceci dans le but de
                    vous permettre de vous mirrer au programme
                    et maximiser ainsi dans l’amélioration de vos
                    capacités pour repousser vos limites !
                </p>
            </div>
            <div class="flex-fill assistance-container-image  d-flex flex-column justify-content-center">
                <img  src="assets/assistance-particulier-img.jpg" alt="enterprise image" class="assistance-image">
            </div>
        </div>
        <div class="d-flex  justify-content-around flex-wrap">
            <div class="flex-fill assistance-container-image  d-flex flex-column justify-content-center">
                <img  src="assets/assistance-entreprise-img.jpg" alt="enterprise image" class="assistance-image">
            </div>
            <div class="assistance-text  d-flex flex-column justify-content-around px-2">
                <div class="d-flex justify-content-center ">
                    <div class="title text-center">POUR ENTREPRISES</div>
                </div>
                <p class="text-center">
                    Nous accompagnons votre entreprise en
                    fournissant des programmes de bonnes
                    qualités adaptés aux objectifs , à la taille 
                    et à toute autre particularité de cette 
                    dernière afin d’accroître sa productivité
                    et son éfficacité !
                </p>
            </div>
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
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/scrolling-nav.js')}}"></script>
</body>
</html>
