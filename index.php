
<!DOCTYPE html>

<?php 

   // CONECTANDO COM O BANCO DE DADOS
    $dbname = "usabilidade"; // nome do banco de dados
	$dbhost = "127.0.0.1"; // local onde está o banco de dados
	$dbuser = "root"; // nome do usuário do bando de dados
    $dbpass = ""; // senha do usuário do bando de dados

	$pdo = new PDO("mysql:dbname=".$dbname.";host:".$dbhost."", "".$dbuser."", $dbpass);
	
	//$pdo = new PDO("mysql:host=192.168.0.10; dbname=erp_database", "db_admin", "Abcd1234");

	$email= $_REQUEST["email"];
    unset($_POST["btn"]);
		
	// INSERINDO DADOS NO BANCO DE DADOS
	$pdo->query("INSERT INTO `contato`(email) VALUES ('$email')"); 

	echo(" Inscricao realizada com sucesso!");
	// mysqli_close();
	
?> 


<html lang="pt">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Usahabilidade Canvas</title>
    
        <link rel="icon" type="image/x-icon" href="./images/SloganU.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!"><img class="slogan" src="./images/SloganU.png"/></a>
                <a href="https://www.facebook.com/ocanvasdeusabilidade/" target="_blank"><img class="facebook" src="./images/facebookSlogan.png"  title ="Facebook_Slogan"/></a>
                <a href="https://www.instagram.com/ocanvasdeusabilidade/" target="_blank"><img class="instagram" src="./images/igSlogan.png"  title ="Instagram_Slogan"/></a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Planeje a Avaliação de Usabilidade da solução em uma única tela!</h1>
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form onsubmit="funcaoEmailSalvo()" action="index.php" method= "POST" class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                              <div class="form-group">

                                <label for="exampleInputEmail1" class="subscribe"> Inscreva-se</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"name="email" placeholder="Digite seu email">
                                <button class="btn btn-primary" id ="btn-layout"type="submit" name="btn"> Enviar </button>

                
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
       <p></p>
        </section>
        <!-- Usability Descriptions-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(./images/ImagemCanvas.png)"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h1 >O que é o Canvas de Usabilidade?<h1><br/>
                        <p class="TextUsability"> Usabilidade é um atributo de qualidade de software relacionado à facilidade de se utilizá-lo e esse atributo é relevante para vários tipos de sistemas. Para verificar se o produto ou serviço pretendido atende aos atributos de usabilidade exigidos em relação aos usuários esperados, é feita uma avaliação de usabilidade. A avaliação de usabilidade é um nome genérico para um grupo de métodos baseados na avaliação e inspeção ou exame relacionado com aspectos de usabilidade da interface com o usuário. Existem várias alternativas para se realizar a avaliação da usabilidade de uma solução. OCAU (O canvas de Avaliação de Usabilidade) é um artefato desenvolvido com a intenção de facilitar o planejamento da avaliação de usabilidade possuindo 8 dimensões:</p>
                    
                    </div>

                </div>

                <div class="Questions">
                    <ul class="align_list">

                    <li><h1 class="clickH1"><u> Faça o download do documento clicando</u> </h1></li>
                     <li class="hand"><img class="imagemMao"src="./images/imagemMao.png" alt=""></li>
                     <li class="clickhere"><button type="button" class="Download" > Aqui!</button></li><br/>
                

                    </ul>
                    <p></p>

                <h1 class="estudoCasos"> Estudos de Casos</h1><br/>
                <p></p>
                <button class="olx"> OLX </button> <button class="autoPass"> AutoPass</button>
                </div>
                <p></p>
                <hr/>
                <!-- Usability Questions-->
                <div class="p">
                    <h1 class="quest">Como usar o Canvas de Usabilidade?</h1><br/>
                    <p> 1. Defina a Solução<br/>
                        O que será avaliado?</p>
                    <p> 2. Defina os Requisitos<br/>
                        Qual requisito ou funcionalidade será avaliado?</p>
                    <p> 3. Defina os Usuários<br/>
                        Quem são os participantes da avaliação?</p>
                    <p> 4. Defina a(s) Tarefas<br/>
                        Quais tarefas os participantes irão realizar?</p>
                    <p> 5. Defina o Contexto<br/>
                        Em quais contextos estão inseridos?</p>
                    <p> 6. Defina a(s) Alternativas<br/>
                        Quais alternativas serão utilizadas?</p>
                    <p> 7. Defina os Critérios<br/>
                        Quais são os critérios utilizados?</p>
                    <p> 8. Defina as Métricas<br/>
                        Quais são as métricas utilizados?</p>
                </div>
               
                </div>
            </div>
        </section>
        
        <!-- Call to Action-->
        <section  class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Vamos começar?!</h2>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form onsubmit ="funcaoEmailSalvo()" action="index.php" method= "POST" class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                        <div class="form-group">

                         <label for="exampleInputEmail1" class="subscribe"> Inscreva-se</label>
                         <input  type="email" class="form-control" id="exampleInputEmail1"name="email" placeholder="Digite seu email">
                         <button  id="btn-layout"class="btn btn-primary" type="submit" name="btn"> Enviar </button>


                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">Sobre nós</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contato</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Termos de uso</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Política de Privacidade</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Usahabilidade Canvas 2022. Todos os direitos reservados.</p>
                    </div>
                
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="responsivo.js"></script>
    </body>
</html>
