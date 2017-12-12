<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <title>Contato | DESPACITO!</title>
        <link rel="shortcut icon" HREF="img/icon.png">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style2.css" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><strong>DESPACITO!</strong></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="colecaoInverno.html">Coleção Inverno</a></li>
                                <li><a href="colecaoVerao.html">Coleção Verão</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Coleção Inverno</li>
                                <li><a href="colecaoInverno.html">Jaquetas</a></li>
                                <li><a href="colecaoInverno.html">Calças</a></li>
                                <li><a href="colecaoInverno.html">Moletons</a></li>
                            </ul>
                        </li>
                        <li><a href="sobreNos.html">Sobre nós</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="O que você está procurando?" style="width:250px;">
                            <div class="input-group-btn">
                                <button class="btn btn-default form-control" type="submit" style="border-bottom-right-radius: 5px; border-top-right-radius: 5px;">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div><!--/.nav-collapse -->
            </div>
        </nav>



        <div class="container-fluid fotro" id="contato">
            <p style="font-size: 50px; font-family: century gothic; color: white;text-shadow: 0px 0px 10px #000000; width: 50%; margin-left: 3%;">CONTATO</p>
        </div>


        <div class="container">	
            <section id="contact">
                <div class="section-content">
                    <h1 class="labelDetalhes">Nos conte seus comentários ou sugestões</h1>
                </div>
                <div class="contact-section">
                    <div class="container">
                        <form>
                            <div class="col-md-6 form-line">
                                <div class="form-group">
                                    <label for="exampleInputUsername">Nome</label>
                                    <input type="text" class="form-control" name="nome" placeholder=" Digite seu nome">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">E-mail</label>
                                    <input type="email" class="form-control" name="email" placeholder=" Digite seu e-mail">
                                </div>	
                                <div class="form-group">
                                    <label for="telephone">Telefone</label>
                                    <input type="tel" class="form-control" name="telefone" placeholder=" Digite seu telefone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for ="description">Mensagem</label>
                                    <textarea  class="form-control" name="mensagem" placeholder="Digite sua mensagem"></textarea>
                                </div>
                                <div>

                                    <button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Enviar</button>
                                </div>
                            </div>
                        </form>
                        <div class="col-md-12">
                            <hr />
                            <h3 class="labelDetalhes">Mensagens recentes</h3>
                        <?php if($lista_contato) { ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Telefone</th>
                                    <th>Mensagem</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lista_contato as $contato): ?>
                                    <tr>
                                        <td><?php echo $contato['nome']; ?></td>
                                        <td><?php echo $contato['email']; ?></td>
                                        <td><?php echo $contato['telefone']; ?></td>
                                        <td><?php echo $contato['mensagem']; ?></td>
                                    </tr>
                                <?php endforeach ?>	

                            </tbody>                            
                        </table>
                        <?php } else { ?>
                        <p>Não há nenhuma mensagem recente.</p>
                        <?php }  ?>                            
                        </div>
                    </div>
            </section>
        </div>

         <div class="container">
         <div class="col-md-12" id="divCopyright">
               <div class="col-md-3 imgDespacitoCopy"></div>
               <div class="col-md-2 mapSite">
                       <ul>
                               <a href="index.html" style="text-decoration: none; color: gray;"><li>HOME</li>
                               <a href="colecaoVerao.html" style="text-decoration: none; color: gray;"><li>COLEÇÃO VERÃO</li>
                               <a href="colecaoInverno.html" style="text-decoration: none; color: gray;"><li>COLEÇÃO INVERNO</li>
                               <a href="sobreNos.html" style="text-decoration: none; color: gray;"><li>SOBRE NÓS</li>
                               <a href="contato.php" style="text-decoration: none; color: gray;"><li>CONTATO</li>
                       </ul>
               </div>
               <div class="col-md-12 pCopyrightDiv">	
                       <p style="text-align: center; font-size: 14px; font-family: calibri; margin-top: 15px;">&copy; 2017 Despacito! &mdash; Todos os direitos reservados. by Felipe Reblin e Sabrina Daniela Diehl</p>
               </div>
               
         </div>
       </div>
         
        






        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>