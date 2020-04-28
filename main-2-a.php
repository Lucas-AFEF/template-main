<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Template Main</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale-1.0, maximum-scale-1.0"/>
       <meta http-equiv="X-UA-Conpatible" content="IE-Edge"/>
        <meta name="author" content="Lucas de Almeida Freitas"/>
        <meta name="description" content="descrição"/>
        <meta name="keywors" content="palavras chave"/>
        
        <link href="css/estilo-main-2.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- Font-awesome-4.7.0 -->
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700&display=swap" rel="stylesheet">
        
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/menu-mobile.js" type="text/javascript"></script>
        <script src="js/ScrollTop.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <div class="container" id="home">
                <div class="logo">
                   <a href="#">Switch</a>
                </div><!-- logo -->
                <nav class="menu-desktop">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#servicos">Serviços</a></li>
                        <li><a href="#trabalhos">Trabalhos</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </nav><!-- menu-desktop -->
                <nav class="menu-mobile">
                    <h2 class="fa fa-bars"></h2>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#servicos">Serviços</a></li>
                        <li><a href="#trabalhos">"trabalhosstemunho</a></li>
                        <li><a href="#contato">Contatc</a></li>
                    </ul>
                </nav><!-- menu-mobile -->
                <div class="clear"></div><!-- clear -->
            </div><!-- container -->
        </header>
        <section class="banner position-top-section">
            <div class="container">
                    <h2>Art is Eternal Happiness</h2>
                    <button class="call-action">WORK WHIT US</button><!-- call-action -->
            </div><!-- container -->
        </section><!-- banner -->
        
        <section class="services">
            <div class="container">
                <div class="title-box">
                    <h2>Serviços</h2>
                    <div class="traced"></div><!--traced-->
                    <p>Oque nós fazemos</p>
                </div><!-- title-box -->
                
                <div class="services-single">
                    <div class="img-services-single">
                        <img src="img/fotografia.png"/>
                    </div><!-- img-services-single -->
                    <div class="services-description">
                        <h2>Lorem Ipsun</h2>
                        <p>
                            It is a long established fact that a reader will be distracted 
                            by the readable content of a page when looking at its layout. 
                            The point of using Lorem Ipsum is that it has a more-or-less 
                            normal distribution of letters.
                        </p>
                    </div><!-- services-description -->
                    <input type="submit" value="Saiba mais!"/>
                </div><!-- services-single -->
                
                <div class="services-single">
                    <div class="img-services-single">
                        <img src="img/Velocimetro.png"/>
                    </div><!-- img-services-single -->
                    <div class="services-description">
                        <h2>Lorem Ipsun</h2>
                        <p>
                            It is a long established fact that a reader will be distracted 
                            by the readable content of a page when looking at its layout. 
                            The point of using Lorem Ipsum is that it has a more-or-less 
                            normal distribution of letters.
                        </p>
                    </div><!-- services-description -->
                    <input type="submit" value="Saiba mais!"/>
                </div><!-- services-single -->
                
                <div class="services-single">
                    <div class="img-services-single">
                        <img src="img/maleta.png"/>
                        
                    </div><!-- img-services-single -->
                    <div class="services-description">
                        <h2>Lorem Ipsun</h2>
                        <p>
                            It is a long established fact that a reader will be distracted 
                            by the readable content of a page when looking at its layout. 
                            The point of using Lorem Ipsum is that it has a more-or-less 
                            normal distribution of letters.
                        </p>
                    </div><!-- services-description -->
                    <input type="submit" value="Saiba mais!"/>
                </div><!-- services-single -->
                
                <div class="clear"></div><!-- clear -->
            </div><!-- container -->
        </section><!-- services -->
           
        <section class="works-done position-top-section">
            <div class="container">
                <div class="title-box">
                    <h2>Trabalhos feitos</h2>
                    <div class="traced"></div><!--traced-->
                    <p>Veja alguns de nossos trabalhos.</p>
                </div><!-- title-box -->
                <nav class="galeria-list-group">
                    <ul>
                        <li><a href="#">Photography</a></li>
                        <li><a href="#">Designer</a></li>
                        <li><a href="#">Print</a></li>
                    </ul>
                </nav><!-- galeria-list-group -->
                
                <?php 
                    for($cont = 0; $cont<10; $cont++){
                ?>
                    <div class="works-done-single">
                        <div class="img-works-done-single">
                            <img src="img/programing.png"/>
                        </div><!-- img-works-done-single -->
                    </div><!-- works-done- -->
                 <?php } ?>
            </div><!-- container -->
        </section><!-- works-done = trabalhos-feitos -->
        
        <section class="testemonial">
            <div class="container">
                 <div class="title-box">
                    <h2>Testimoniaus</h2>
                    <div class="traced"></div><!--traced-->
                    <p>Veja alguns testemunhos dos nossos principias clientes.</p>
                </div><!-- title-box -->
                    <div class="arrow-left"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></div><!-- arrow-left -->
                    <div class="text-testmonial">
                        <p>
                            “Awalnya saya tidak menderita penyakit apapun,
                            namun setelah saya tidak berobat ke klinik tongfang, saya dinyatakan
                            tidak menderita penyakit apapun!”
                        </p>
                        <div class="avatar">
                            <div class="avatar-circle"><img src="img/avatar-img.png"/></div><!-- avatar-circle -->
                            <p>Lucas de Almeida</p>
                            <span>CEO of Meme Inc.</span>
                        </div><!-- avatar -->
                    </div><!-- text-testmonial -->
                    <div class="arrow-rigt"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div><!-- arrow-right -->
                    <div class="container"></div>
            </div><!-- container -->
        </section><!-- testemonial -->
        
        <section class="our-happy-client">
            <div class="container">
                <div class="title-box">
                    <h2>Nosso clientes felizes</h2>
                    <div class="traced"></div><!--traced-->
                    <p>Nosssa satisfação e fazer nossos clientes felizes.</p>
                </div><!-- title-box -->
                
                <div class="client-single">
                    <div class="img-client">
                        <img src="img/800px-Googlelogo.png"/>
                    </div><!-- img-client -->
                </div><!-- client-single -->
                <div class="client-single">
                    <div class="img-client">
                        <img src="img/800px-Googlelogo.png"/>
                    </div><!-- img-client -->
                </div><!-- client-single -->
                <div class="client-single">
                    <div class="img-client">
                        <img src="img/800px-Googlelogo.png"/>
                    </div><!-- img-client -->
                </div><!-- client-single -->
                <div class="client-single">
                    <div class="img-client">
                        <img src="img/800px-Googlelogo.png"/>
                    </div><!-- img-client -->
                </div><!-- client-single -->
                <div class="client-single">
                    <div class="img-client">
                        <img src="img/800px-Googlelogo.png"/>
                    </div><!-- img-client -->
                </div><!-- client-single -->
                <div class="client-single">
                    <div class="img-client">
                        <img src="img/800px-Googlelogo.png"/>
                    </div><!-- img-client -->
                </div><!-- client-single -->
                <div class="client-single">
                    <div class="img-client">
                        <img src="img/800px-Googlelogo.png"/>
                    </div><!-- img-client -->
                </div><!-- client-single -->
                <div class="client-single">
                    <div class="img-client">
                        <img src="img/800px-Googlelogo.png"/>
                    </div><!-- img-client -->
                </div><!-- client-single -->
                
            </div><!-- container -->
        </section><!-- our-happy-client -->
        
        <section class="team">
            <div class="container">
                <div class="title-box">
                    <h2>Nosso time</h2>
                    <div class="traced"></div><!--traced-->
                    <p>Conheça os profissionais que compõe a nossa empresa.</p>
                </div><!-- title-box -->
                
                <div class="team-box-single">
                    <div class="team-avatar">
                        <img src="img/team-avatar/Zlatan.png"/>
                    </div><!-- team-avatar -->
                    <div class="line-team"></div><!-- line-team -->
                    <div class="name-team">Zlatan Ibra</div><!-- name-team -->
                    <div class="social-team">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </div><!-- social-team -->
                </div><!-- team-box-single -->
                
                <div class="team-box-single">
                    <div class="team-avatar">
                        <img src="img/team-avatar/Zlatan.png"/>
                    </div><!-- team-avatar -->
                    <div class="line-team"></div><!-- line-team -->
                    <div class="name-team">Zlatan Ibra</div><!-- name-team -->
                    <div class="social-team">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </div><!-- social-team -->
                </div><!-- team-box-single -->
                
                <div class="team-box-single">
                    <div class="team-avatar">
                        <img src="img/team-avatar/Zlatan.png"/>
                    </div><!-- team-avatar -->
                    <div class="line-team"></div><!-- line-team -->
                    <div class="name-team">Zlatan Ibra</div><!-- name-team -->
                    <div class="social-team">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </div><!-- social-team -->
                </div><!-- team-box-single -->
                
                <div class="team-box-single">
                    <div class="team-avatar">
                        <img src="img/team-avatar/Zlatan.png"/>
                    </div><!-- team-avatar -->
                    <div class="line-team"></div><!-- line-team -->
                    <div class="name-team">Zlatan Ibra</div><!-- name-team -->
                    <div class="social-team">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </div><!-- social-team -->
                </div><!-- team-box-single -->
                
                <div class="team-box-single">
                    <div class="team-avatar">
                        <img src="img/team-avatar/Zlatan.png"/>
                    </div><!-- team-avatar -->
                    <div class="line-team"></div><!-- line-team -->
                    <div class="name-team">Zlatan Ibra</div><!-- name-team -->
                    <div class="social-team">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </div><!-- social-team -->
                </div><!-- team-box-single -->
                <div class="clear"></div><!-- cleae -->
            </div><!-- container -->
        </section><!-- team -->
        
        <section class="call-action">
            <div class="container">
                <button><a href="#">Trabalhe Conosco</a></button>
            </div><!-- container -->
        </section><!-- call-direction -->
        
        <section class="above-the-fold">
            <div class="container">
                <div class="w33">
                    <div class="title-box">
                        <h2>Sobre Nós</h2>
                        <div class="traced"></div><!--traced-->
                    </div><!-- title-box --> 
                    <p>
                        This is Photoshop's version  of Lorem Ipsum. Proin gravida 
                        nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis 
                        bibendum auctor, nisi elit consequat ipsum, nec sagittis sem 
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a 
                        sit amet mauris. Morbi accumsan ipsum velit. Ut aliquam massa 
                        nisl quis neque. Suspendisse in orci enim.Aenean sollicitudin, 
                        lorem quis bibendum auctor, nisi elit consequat ipsum, nec 
                        sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                        cursus.
                    </p>
                </div><!-- w33 -->
                
                <div class="w33">
                    <div class="title-box">
                        <h2>Recent Post</h2>
                        <div class="traced"></div><!--traced-->    
                    </div><!-- title-box --> 
                    <div class="recent-post-wrapper">
                        <div class="recent-post-single">
                            <img src="img/Recent_Post/Rounded Rectangle 12.png"/>
                            <div class="recent-post-description">
                                <p>Lorem Ipsum Dolor Sit Amet.</p>
                                <button><a href="#">Magazine</a></button>
                            </div><!-- recent-post-description -->
                        </div><!-- recent-post-single -->
                    </div><!-- recent-post-wrapper -->
                    <div class="recent-post-wrapper">
                        <div class="recent-post-single">
                            <img src="img/Recent_Post/Rounded Rectangle 12.png"/>
                            <div class="recent-post-description">
                                <p>Lorem Ipsum Dolor Sit Amet.</p>
                                <button><a href="#">Magazine</a></button>
                            </div><!-- recent-post-description -->
                        </div><!-- recent-post-single -->
                    </div><!-- recent-post-wrapper -->
                    <div class="recent-post-wrapper">
                        <div class="recent-post-single">
                            <img src="img/Recent_Post/Rounded Rectangle 12.png"/>
                            <div class="recent-post-description">
                                <p>Lorem Ipsum Dolor Sit Amet.</p>
                                <button><a href="#">Magazine</a></button>
                            </div><!-- recent-post-description -->
                        </div><!-- recent-post-single -->
                    </div><!-- recent-post-wrapper -->
                    <div class="recent-post-wrapper">
                        <div class="recent-post-single">
                            <img src="img/Recent_Post/Rounded Rectangle 12.png"/>
                            <div class="recent-post-description">
                                <p>Lorem Ipsum Dolor Sit Amet.</p>
                                <button><a href="#">Magazine</a></button>
                            </div><!-- recent-post-description -->
                        </div><!-- recent-post-single -->
                    </div><!-- recent-post-wrapper -->
                    <div class="recent-post-wrapper">
                        <div class="recent-post-single">
                            <img src="img/Recent_Post/Rounded Rectangle 12.png"/>
                            <div class="recent-post-description">
                                <p>Lorem Ipsum Dolor Sit Amet.</p>
                                <button><a href="#">Magazine</a></button>
                            </div><!-- recent-post-description -->
                        </div><!-- recent-post-single -->
                    </div><!-- recent-post-wrapper -->
                </div><!-- w33 -->
                
                
                <div class="w33">
                    <div class="title-box">
                        <h2>Contactus</h2>
                        <div class="traced"></div><!--traced-->
                    </div><!-- title-box --> 
                    <div class="contactus-andress">
                        <p>10044 West 23th Street, Suite 721</br>
                            New York NY 10010</br>
                            Email: Username@email.com</br>
                            Phone: +1 (0) 123 4567 890</br>
                            Fax: +1 (0) 321 4567 890
                        </p>
                        <form>
                            <input type="text" name="name" placeholder="Seu nome..."/>
                            <input type="email" name="email" placeholder="Seu E-mail"/>
                            <textarea placeholder="Sua mensagem"></textarea>
                            <input type="submit" value="Enviar!"/>
                        </form>
                    </div><!-- contactus-andress -->
                </div><!-- w33 -->
                <div class="clear"></div><!-- clear -->
            </div><!-- container -->
        </section><!-- above-the-fold -->
        <section class="apoiadores">
            <div class="container">
                <div class="w25">
                    <img src="img/Apoiadores/300px-BBC.png"/>
                </div><!-- w25 -->
                <div class="w25">
                    <img src="img/Apoiadores/300px-BBC.png"/>
                </div><!-- w25 -->
                <div class="w25">
                    <img src="img/Apoiadores/300px-BBC.png"/>
                </div><!-- w25 -->
                <div class="w25">
                    <img src="img/Apoiadores/300px-BBC.png"/>
                </div><!-- w25 -->
                <div class="clear"></div><!-- clear -->
            </div><!-- container -->
        </section><!-- apoiadores -->
        <footer>
            <div class="container">
                <p class="author">Lucas de Almeida Freitas</p>
                <p class="autoria">Todos os direitos reservados</p>
                <div class="clear"></div><!-- clear -->
            </div><!-- container -->
        </footer>
    </body>
</html>