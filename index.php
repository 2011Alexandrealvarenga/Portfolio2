<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Alexandre Alvarenga - PHP</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,500&display=swap" rel="stylesheet">
  <!-- whats app icon -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- fonte titulo -->
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play:wght@700&display=swap" rel="stylesheet">
  <!-- fonte paragrafo -->
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
</head>
<body>
  <section id="header"><!--MENU -->
   <nav class="navbar navbar-expand-lg navbar-dark ">
      <a class="navbar-brand" href="#" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">MENU</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">

            <a class="nav-link" href="#personal">Sobre mim<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#professional">Objetivo Profissional</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#formacao">Escolaridade</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#experience">Experiência</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#jobs">Trabalhos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#cursos">Cursos</a>
          </li>
        </ul>
      </div>
    </nav>

  </section>
  <section class="pessoal " id="personal">
      <div class="card"> 
         <input type="checkbox" name="">
           <div class="toggle"> + </div>
            <div class="imgBx">
             <img  src="me.JPG" width="100%" height="100%" alt="">
            </div>
            <div class="details">
              <h2>Alexandre Bruno F. de Alvarenga</h2>
                <ul>
                  <li> <i class="icon-mars"></i><span>  36 Anos (10/1985)</span></li>
                  <li> <i class="icon-location" aria-hidden="true"></i><span>  Itaquera - SP</span></li>
                  <li> <i class="icon-mail" aria-hidden="true"></i><span>  2011brunofernandes@gmail.com</span></li>
                  <li> <i class="icon-mail" ></i><span></span></li>
                  <li> <i class="icon-phone-outline" aria-hidden="true"></i><span>  (11) 97957-3056</span></li>
                </ul>
            </div>
      </div>

  </section>
  <section class="obj-profissional" id="professional">
    <div class="container">
      <div class="row ">
        <div class="col d-flex justify-content-center">
          <div class="objetivo-profissional2 ">
            <h2 class="pb-4">Objetivo Profissional</h2>
            <h5 >Analista Full Stack WordPress/PHP Júnior</h5>
          
             <p>Olá, meu nome é Alexandre, tenho 36 anos (10/1985), moro em São Paulo, 
            falo inglês, venho trabalhando com desenvolvimento web Fevevereiro/2020, com foco maior em back-end do Wordpress e PHP, conheço front-end tambem.
            </p> 

            <a href="https://github.com/2011Alexandrealvarenga" target="_blank"><i class="fa fa-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/alexandre-bruno-alvarenga-88959b103/" target="_blank">
              <i class="fa fa-linkedin"></i>
            </a>
            
            <a href="cv.pdf" target="_blank">
              <i class="fa fa-file"></i>
            </a>
          </div>          
        </div>       
      </div>
    </div>
  </section>
  <section class="formacao" id="formacao">
    <div class="container">
      <div class="row">
        <div class="col escolaridade">
          <h2>Escolaridade</h2>
        </div>
      </div>
      <div class="row">
        <div class="pt-2 pb-2 col-lg-4  col-md-6 content_formacao">
          <div class="card middle" style="width: 18rem;">
            
            <div class="front">
              <img src="graduation-cap.png">
              <h2>Graduação</h2>
            </div>
        
            <div class="card-body">
              <h2>Sistemas de Informação</h2>
                  <ul>
                    <li><p>Universidade - Uninove</p></li>
                    <li><p>Concluido - Dezembro/2015</p></li>
                  </ul>
            </div>
          </div>
        </div>
        <div class="pt-2 pb-2 col-lg-4  col-md-6 content_formacao">
          <div class="card middle" style="width: 18rem;">
            <div class="front">
              <img src="icons8-great-britain-100.png"/>
                <h2>Inglês</h2>
            </div>
            <div class="card-body">
              <h2>Nivel Avançado</h2>
                <ul>
                  <li><p>Estudei durante 4 anos e tenho experiência falando inglês</p></li>
                </ul>
            </div>
          </div>
        </div>
        <div class="pt-2 pb-2 col-lg-4  col-md-12">
          <div class="card middle" style="width: 18rem;">
            <div class="front">
              <img src="icons8-graduation-scroll-50.png" width="100px"  />
                <h2>Tecnológo</h2>
            </div>
        
            <div class="card-body">
              <h2>Tecnologia da Informação</h2>
                    <ul>
                      <li><p>Instituto Tecnológico Barueri</p></li>
                      <li><p>Concluido - Junho/2011</p></li>
                    </ul>
            </div>
          </div>
        </div>

      </div>
    </div><!--ESCOLARIDADE -->
  </section>
  <section class="experiencia " id="experience"><!--EXPERIENCIA -->

      <div class="col d-flex justify-content-center">
        <div class="content-box">
          <h2>Experiências Profissionais</h2>
          <ul>
            <li><span class="title">Empresa: </span><span>RGR Tecnologia da Informação LTDA</span></li>
            <li><span class="title">Função: </span><span>Analista Full Stack Wordpress/PHP</span></li>
            <li><span class="title">Periodo: </span><span>10/2020 até o momneto</span></li>
            <li><span class="title">Atividades: </span><span>Atuação com Wordpress, PHP, Criação de plugins no Wordpress, HTML, CSS 3 (Bootstrap/Sass), Javascript (Jquery), gulp (Minificação de arquivos JS/CSS/HTML), Servidor Xampp, BD MySql e Sql Server, Git, GitHub, GitLab e SEO forte atuação com correção de erros no SEMRUSH conforme demanda do marketing.</span></li>
          </ul>

          <ul>
            <li><span class="title">Empresa: </span><span>InfoBruJac Informática Ltda</span></li>
            <li><span class="title">Função: </span><span>Analista Full Stack Wordpress</span></li>
            <li><span class="title">Periodo: </span><span>02/2020 a 10/2020</span></li>
            <li><span class="title">Atividades: </span><span>Freelances de projetos utilizando as aplicações: Wordpress, PHP, Criação de plugins no Wordpress, HTML, CSS 3 (Bootstrap/Sass), Javascript (Jquery), gulp (Minificação de arquivos JS/CSS/HTML), Servidor Xampp, BD MySql e Sql Server, Git, GitHub, GitLab e SEO.</span></li>
          </ul>

          <ul>
            <li><span class="title">Empresa: </span><span>OutRange Soluções Inteligentes Ltda.</span></li>
            <li><span class="title">Função: </span><span>Analista Front-End - Estágio</span></li>
            <li><span class="title">Periodo: </span><span>02/2015 a 05/2015</span></li>
            <li><span class="title">Atividades: </span><span>Estágio em desenvolvimento Front-End, usando as ferramentas, HTML 5, CSS 3, Git, Bootstrap, Sass, JavaScript, Wordpress, e PHP. Modelava e programava em nível de estagio.</span></li>
          </ul>

          <ul>
            <li><span class="title">Trabalhei 11 anos como Analista de Suporte</span></li>            
          </ul>
        </div>
     </div>
  </section>
  <section class="trabalho" id="jobs">
    <div class="container">
      <div class="row">
        <div class="col">
        <h2>Trabalhos Realizados</h2>
          <div class="trabalhos">
            <div class="unid-trabalho">
              <a href="https://www.tokiomarine.com.br" target="_blank" >
                
                <div class="foto-trabalho">
                  <img class="img-fluid img-trabalho" src="tokiomarine.PNG">
                </div>
                <div class="desc-trabalho">
                  <h4>Tokio Marine</h4>
                  <p>Site Institucional</p>
                  <p class="p-desc">Manutenção do site usando as tecnologias:</p>
                  <ul>
                    <li>HTML</li>
                    <li>CSS 3</li>
                    <li>Bootstrap</li>
                    <li>Sass</li>
                    <li>Javascript</li>
                    <li>PHP</li>
                    <li>MySql</li>
                    <li>Wordpress</li>
                    <li>SEO</li>  
                    <li>Gulp</li>                   
                  </ul>
                </div>                
              </a>
            </div>
            <div class="unid-trabalho">
              <a href="http://boraviver.info/" target="_blank" >
                
                <div class="foto-trabalho">
                  <img class="img-fluid img-trabalho" src="boraviver.png">
                </div>
                <div class="desc-trabalho">
                  <h4>Boraviver</h4>
                  <p>Blog</p>
                  <p class="p-desc">Site todo feito por mim, usando as tecnologias:</p>
                  <ul>
                    <li>HTML</li>
                    <li>CSS 3</li>
                    <li>Bootstrap</li>
                    <li>Sass</li>
                    <li>Javascript</li>
                    <li>PHP</li>
                    <li>MySql</li>
                    <li>Wordpress</li>
                    <li>SEO</li>  
                    <li>Gulp</li>                   
                  </ul>
                </div>                
              </a>
            </div>
            <div class="unid-trabalho">
              <a href="http://elcaquito.com/" target="_blank" >
                
                <div class="foto-trabalho">
                  <img class="img-fluid img-trabalho" src="elcaquito.png">
                </div>
                <div class="desc-trabalho">
                  <h4>Elcaquito</h4>
                  <p>Cardápio de comida mexicana</p>
                  <p class="p-desc">Site todo feito por mim, usando as tecnologias:</p>
                  <ul>
                    <li>HTML</li>
                    <li>CSS 3</li>
                    <li>Bootstrap</li>
                    <li>Sass</li>
                    <li>Javascript</li>
                    <li>PHP</li>
                    <li>MySql</li>
                    <li>Wordpress</li>
                    <li>SEO</li>   
                    <li>Gulp</li>                
                  </ul>
                </div>                
              </a>
            </div>
            <div class="unid-trabalho">
              <a href="http://romadesigndeinteriores.com/" target="_blank" > 
                <div class="foto-trabalho">
                  <img class="img-fluid img-trabalho" src="roma.png">
                </div>
                <div class="desc-trabalho">
                  <h4>Roma design de interiores</h4>
                  <p>Institucional</p>
                  <p class="p-desc">Site todo feito por mim, usando as tecnologias:</p>
                  <ul>
                    <li>HTML</li>
                    <li>CSS 3</li>
                    <li>Bootstrap</li>
                    <li>Sass</li>
                    <li>Javascript</li>
                    <li>PHP</li>
                    <li>MySql</li>
                    <li>Wordpress</li>
                    <li>SEO</li>   
                    <li>Gulp</li>                
                  </ul>
                </div>                
              </a>
            </div>
            <div class="unid-trabalho">
              <a href="http://workboxesquadrias.com/" target="_blank" > 
                <div class="foto-trabalho">
                  <img class="img-fluid img-trabalho" src="workbox.PNG">
                </div>
                <div class="desc-trabalho">
                  <h4>Workbox Esquadrias</h4>
                  <p>Institucional</p>
                  <p class="p-desc">Site todo feito por mim, usando as tecnologias:</p>
                  <ul>
                    <li>HTML</li>
                    <li>CSS 3</li>
                    <li>Bootstrap</li>
                    <li>Sass</li>
                    <li>Javascript</li>
                    <li>PHP</li>
                    <li>MySql</li>
                    <li>Wordpress</li>
                    <li>SEO</li>  
                    <li>Gulp</li>                 
                  </ul>
                </div>                
              </a>
            </div>
            <div class="unid-trabalho">
              <a href="http://diverbrink.com.br" target="_blank" > 
                <div class="foto-trabalho">
                  <img class="img-fluid img-trabalho" src="diverbrink.PNG">
                </div>
                <div class="desc-trabalho">
                  <h4>Diverbrink</h4>
                  <p>Institucional</p>
                  <p class="p-desc">Site todo feito por mim, usando as tecnologias:</p>
                  <ul>
                    <li>HTML</li>
                    <li>CSS 3</li>
                    <li>Bootstrap</li>
                    <li>Sass</li>
                    <li>Javascript</li>
                    <li>PHP</li>
                    <li>MySql</li>
                    <li>Wordpress</li>
                    <li>SEO</li>   
                    <li>Gulp</li>                
                  </ul>
                </div>                
              </a>
            </div>    
            <div class="unid-trabalho">
              <a href="https://2011alexandrealvarenga.github.io/bloomin-html/" target="_blank" > 
                <div class="foto-trabalho">
                  <img class="img-fluid img-trabalho" src="booming.jpg">
                </div>
                <div class="desc-trabalho">
                  <h4>Site teste</h4>
                  <p>Institucional</p>
                  <p class="p-desc">Site todo feito por mim, usando as tecnologias:</p>
                  <ul>
                    <li>HTML</li>
                    <li>CSS 3</li>
                    <li>Bootstrap</li>
                    <li>Sass</li>
                    <li>Javascript</li>                                      
                  </ul>
                </div>                
              </a>
            </div>             
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">
          <div class="funcoes">
            <h3>Funções Aplicadas</h3>
            <ul>
              <li><b>SEO</b> Ordenação de tags titulo, palavras chave, title, tag, otimização de carregamento da pagina, atuação em SEO de acordo com o SEMRUSH </li>
              <li><b>Sites responsivos</b></li>
              <li><b>Criação de plugins</b></li>
              <li><b>Menu:</b> Dinâmico com bootstrap, Criado apartir de categoria ou páginas.</li>
              <li><b>Carousel/Banner com Bottstrap</b></li>
              <li><b>IF e Queries</b> Lista com IF, ou Queries filtrado por: Autor, Categoria, Quantidade, pulando itens.</li>
              <li><b>Paginação</b></li>
              <li><b>Posts:</b>Posts com comentarios, lista de ultimos post, por autor, por categoria</li>
              <li><b>Mapa de localização.</b></li>
              <li><b>Imagens (thumbnail Wordpress):</b> Recortada no tamanho do conteudo, diminuindo assim o tamanho da imagem usada.</li>
              <li><b>Galeria de imagens.</b></li>
              <li><b>Formulario:</b> De contato por email e coleta de emails e busca.</li>
              <li><b>WIDGETS</b></li>
              <li><b>Suporte ao thema:</b>Alteração dinâmica de titulo, imagens, rodapé, etc.</li>
              <li><b>Sites bem ranqueados no Page Speed</b> site construidos de acordo com PageSpeed, carregamento de acordo com a pagina usada otimizando assim o CSS, JS para melhor rankiamento.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
      <a href="https://api.whatsapp.com/send?phone=5511979573056&text=Olá, Gostaria de falar com o Alexandre Bruno." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
      </a>
  </section>
  <section class="cursos-2">
    <div class="container-fluid">
      <div class="col">
        <h2>Cursos</h2>
      </div>
    </div>
    <div class="container-fluid">
    
      <div class="w3-content">
        <img class="mySlides" src="certificado-git-2.jpg" >
        <img class="mySlides" src="bootstrap.jpg" style="display:none">
        <img class="mySlides" src="php8.jpg" style="display:none">
        <img class="mySlides" src="wordpress-plugin.jpg" style="display:none">
        <img class="mySlides" src="wordpress-seo.jpg" style="display:none">
        <img class="mySlides" src="wordpress.jpg" style="display:none">
        <img class="mySlides" src="php-mateus.jpg" style="display:none">

        
      </div>
      <div class="w3-row-padding ">
          <img class="demo w3-opacity w3-hover-opacity-off" src="certificado-git-2.jpg" onclick="currentDiv(1)">
          <img class="demo w3-opacity w3-hover-opacity-off" src="bootstrap.jpg" onclick="currentDiv(2)">
          <img class="demo w3-opacity w3-hover-opacity-off" src="php8.jpg" onclick="currentDiv(3)">
          <img class="demo w3-opacity w3-hover-opacity-off" src="wordpress-plugin.jpg" onclick="currentDiv(4)">
          <img class="demo w3-opacity w3-hover-opacity-off" src="wordpress-seo.jpg" onclick="currentDiv(5)">
          <img class="demo w3-opacity w3-hover-opacity-off" src="wordpress.jpg" onclick="currentDiv(6)">
          <img class="demo w3-opacity w3-hover-opacity-off" src="wordpress.jpg" onclick="currentDiv(7)">

        </div>
      
      <script>
      function currentDiv(n) {
        showDivs(slideIndex = n);
      }
      
      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-opacity-off";
      }
      </script>
    </div>
  </section>
<style>

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="jqpage.js"></script>
<script src="bootstrap.js"></script>
</body>
</html>