<?php
include("../include/default.php");
?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php include("../common/navbar.php"); ?>

<?php include("../common/sidebar.php"); ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">WorkinTech - HandsOn</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard/index.php">Home</a></li>
              <li class="breadcrumb-item active">Veiculos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card card-primary">
          <!-- .card-header -->
          <div class="card-header">
            <h3 class="card-title"><i class="fa-solid fa-house"></i> Editar Veiculos</h3>
          </div>


          <?php
          /*echo password_hash(17543387, PASSWORD_DEFAULT);
          echo "<HR>";
          '" . $dados['email'] . "'
          */
          $timezone = new DateTimeZone('America/Sao_Paulo');
          $data_agora = new DateTime('now', $timezone);
          $data_agora = $data_agora->format('Y-m-d H:i:s');

          $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
          var_dump($dados);

          if(!empty($dados['editar'])) {
            $query_imovel = "INSERT INTO real_estates (id, user_id, title, slug, type, transaction_type, fase, created_at, updated_at)
                              VALUES ('', :user_id, :titulo, :slug, :tipoImovel, :finalidade, :fase, :data_agora, :data_agora2)";
            $result_imovel = $conn->prepare($query_imovel);
            $result_imovel->bindParam(':user_id', $_SESSION['id'], PDO::PARAM_STR);
            $result_imovel->bindParam(':titulo', $dados['titulo'], PDO::PARAM_STR);
            $result_imovel->bindParam(':slug', $dados['slug'], PDO::PARAM_STR);
            $result_imovel->bindParam(':tipoImovel', $dados['tipoImovel'], PDO::PARAM_STR);
            $result_imovel->bindParam(':finalidade', $dados['finalidade'], PDO::PARAM_INT);
            $result_imovel->bindParam(':fase', $dados['fase'], PDO::PARAM_INT);
            $result_imovel->bindParam(':data_agora', $data_agora, PDO::PARAM_STR);
            $result_imovel->bindParam(':data_agora2', $data_agora, PDO::PARAM_STR);
            
            if ($result_imovel->execute()) {
              $_SESSION['msg'] = "<p style='color: #32c330;text-align: center;font-weight: bold;'>Imóvel cadastrado com Sucesso!</p>";
              header("Location: ../veiuclos/list.php");
        
            } else {
              $_SESSION['msg'] = "<p style='color: #ff0000;text-align: center;font-weight: bold;'>ERRO: Tente Novamente!</p>"; 
            }

          } else {

          }
          ?>

          <!-- form start -->

          <form method="POST" action="" class="form-post" >

            <div class="card-body">
            <div class="card-header mt-4 bg-secondary">
                <i class="fas fa-info mr-3"></i> Informações Básicas
            </div>
            <div class="row">

                <div class="form-group col-md-8">
                    <label for="titulo">Título:</label>
                    <input 
                        type="text" 
                        class="form-control " 
                        id="titulo" 
                        name="titulo"
                        placeholder="Digite o título desse imóvel"
                        maxlength="100"
                        value=""
                    >
                </div>

                <div class="form-group col-md-6">
                    <label for="slug">slug <span class="text-sm">(será a URL deste imóvel, Utilize '-' pra separar cada palavra)</span> :</label>
                    <input 
                        type="text" 
                        name="slug"
                        class="form-control " 
                        id="slug"
                        placeholder="Exemplo: imóvel-maringa-8-quartos"
                        minlength="5"
                        maxlength="100"
                        value=""
                    >
                    <span class="text-sm text-warning">Não utilize acento(s) e espaços</span>
                </div>

                <div class="form-group col-md-4">
                    <label for="userType">Status: </label>
                    <select class="form-control " id="userType" name="imovelPublicado" >
                        <option value="naoPublicado"  selected >Não Publicado</option>
                        <option value="publicado" >Publicado</option>
                    </select>
                </div>

                <div class="form-group mt-4 col-md-4">
                    <label for="reason">Finalidade:</label>
                    <select name="finalidade" id="reason" class="form-control ">
                        <option value="0"  selected >Residencial</option>
                        <option value="1" >Comercial</option>
                        <option value="2" >Industrial</option>
                    </select>
                </div>

                <div class="form-group mt-4 col-md-4">
                    <label for="estateType">Tipo de imóvel:</label>
                    <select name="tipoImovel" id="estateType" class="form-control ">
                        <option value="apartamento" >Apartamento</option>
                        <option value="casa" >Casa</option>
                        <option value="chacara" >Chácara</option>
                        <option value="terreno"  selected >Terreno</option>
                        <option value="kitnet" >Kitnet</option>
                        <option value="flat" >Flat</option>
                        <option value="lancamento" >Lançamento</option>
                        <option value="empreendimento" >Empreendimento</option>
                        <option value="comercial" >Comercial</option>
                        <option value="industrial" >Industrial</option>
                    </select>
                </div>

                <div class="for-group mt-4 col-md-2">
                    <label for="">Fase</label>
                    <select name="fase" id="faseRealEstate" class="form-control ">
                        <option value="0" >Pronto</option>
                        <option value="1" >Em construção</option>
                    </select>
                </div>

                <div class="card-header mt-5 col-md-12 bg-primary">
                        <h3 class=""><i class="fas fa-dollar-sign mr-3"></i> Preço</h5>
                    </div>

                    <div class="col-md-12 row">

                        <div class="form-group mt-4 col-md-2">
                            <label for="precoVenda">Preço de Venda:</label>
                            <input 
                                type="text" 
                                class="form-control " 
                                placeholder="R$"
                                value="449.000,00" 
                                id="precoVenda"
                                name="precoVenda"
                            >
                        </div>

                        <div class="form-group mt-4 col-md-2">
                            <label for="precoIPTU">IPTU Anual:</label>
                            <input 
                                type="text" 
                                class="form-control "
                                placeholder="R$"
                                value="0,00" 
                                id="precoIPTU"
                                name="precoIPTU"
                            >
                        </div>

                        <div class="for-group mt-4 col-md-2">
                            <details>
                                <summary>Como preencher?</summary>
                                <section>
                                    <div>Exemplos de como preencher:</div>
                                    <div>1,00</div>
                                    <div>10,00</div>
                                    <div>100,00</div>
                                    <div>1.000,00</div>
                                    <div>1.000,00</div>
                                    <div>100.000,00</div>
                                    <div>1.000.000,00</div>
                                </section>
                            </details>
                        </div>

                    </div>

                    <div class="form-group mt-4 col-md-4">
                        <label for="ocupado">Ocupação:</label>
                        <select name="ocupacao" id="ocupado" class="form-control ">
                            <option value="0"  selected >Desocupado</option>
                            <option value="1" >Ocupado</option>
                        </select>
                    </div>

                    <div class="form-group mt-4 col-md-4">
                        <label for="permuta">Aceita Permuta?</label>
                        <select name="permuta" id="permuta" class="form-control " >
                            <option value="0"  selected >Sim</option>
                            <option value="1" >Não</option>
                        </select>
                    </div>

                    <div class="form-group mt-4 col-md-4">
                        <label for="financiamento">Aceita Financiamento?</label>
                        <select name="financiamento" id="financiamento" class="form-control " >
                            <option value="0"  selected >Sim</option>
                            <option value="1" >Não</option>
                        </select>
                    </div>

                    <div class="card-header mt-4 col-md-12 bg-primary">
                        <h3 class=""><i class="fas fa-map-marker-alt mr-3"></i> Endereço</h5>
                    </div>

                    <div class="form-group mt-4 col-md-2">
                        <label for="cep">CEP:</label>
                        <input 
                            type="text" 
                            class="form-control " 
                            value="87955000" 
                            id="cep"
                            name="cep"
                            minlength="8"
                            maxlength="8"
                        >
                    </div>

                    <div class="form-group mt-4 col-md-12">
                        <label for="logradouro">Logradouro:</label>
                        <input 
                            type="text" 
                            class="form-control " 
                            value="São Pedro do Paraná" 
                            id="logradouro"
                            name="logradouro"
                        >
                    </div>

                    <div class="form-group mt-4 col-md-2">
                        <label for="numeroImovel">Número:</label>
                        <input 
                            type="text" 
                            class="form-control " 
                            value="" 
                            id="numeroImovel"
                            name="numeroImovel"
                        >
                    </div>

                    <div class="form-group mt-4 col-md-6">
                        <label for="bairro">Bairro:</label>
                        <input 
                            type="text" 
                            class="form-control " 
                            value="Rodovia PR 691 Estrada Beira-Rio Gleba 20" 
                            id="bairro"
                            name="bairro"
                        >
                    </div>

                    <div class="form-group mt-4 col-md-4">
                        <label for="complemento">Complemento:</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            value="Condominio Eldorado do Rio Paraná" 
                            id="complemento"
                            name="complemento"
                        >
                    </div>

                    <div class="form-group mt-4 col-md-4">
                        <label for="estado">Estado:</label>
                        <input 
                            type="text" 
                            class="form-control " 
                            value="Paraná" 
                            id="estado"
                            name="estado"
                        >
                    </div>

                    <div class="form-group mt-4 col-md-4">
                        <label for="cidade">Cidade:</label>
                        <input 
                            type="text" 
                            class="form-control " 
                            value="São Pedro do Paraná" 
                            id="cidade"
                            name="cidade"
                            
                        >
                    </div>

                    <div class="form-group mt-4 col-md-12">
                        <label for="googleMaps">Link para o Google Maps: </label>
                        <details>
                            <summary></i> Como preencher?</summary>
                            <p>No google maps, clique em compartilhar, em seguida, clique em incorporar um mapa e por último, clique em "copiar HTML" e cole no campo abaixo.</p>
                        </details>
                        <input 
                            type="text" 
                            class="form-control " 
                            value="&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14716.411473655024!2d-53.2318255!3d-22.7615634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd4d5d092c6f9a3a7!2sCondominio%20Eldorado%20do%20Rio%20Paran%C3%A1%20(Oficial)!5e0!3m2!1spt-BR!2sbr!4v1644343597005!5m2!1spt-BR!2sbr&quot;    style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;&gt;&lt;/iframe&gt;" 
                            id="googleMaps"
                            name="googleMaps"
                        >
                    </div>

                    <div class="form-group mt-4 col-md-12">
                        <label for="youtube">Link para o vídeo do Youtube:</label>
                        <details>
                            <summary></i> Como preencher?</summary>
                            <p>No Youtube, clique em compartilhar, em seguida, clique em incorporar, por último, clique em "copiar" e cole no campo abaixo.</p>
                        </details>
                        <input 
                            type="text" 
                            class="form-control " 
                            value="&lt;iframe src=&quot;https://www.youtube.com/embed/aClKivNOr3o&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;" 
                            id="youtube"
                            name="youtube"
                        >
                    </div>

                    <div class="form-group mt-4 col-md-12">
                        <label >Scripts de google, facebook e etc...</label>
                        <textarea class="form-control" name="analytics">&lt;script type=&quot;text/javascript&quot;&gt;(function(n,r,l,d){try{var h=r.head||r.getElementsByTagName(&quot;head&quot;)[0],s=r.createElement(&quot;script&quot;);s.defer=true;s.setAttribute(&quot;type&quot;,&quot;text/javascript&quot;);s.setAttribute(&quot;src&quot;,l);n.neuroleadId=d;h.appendChild(s);}catch(e){}})(window,document,&quot;https://cdn.leadster.com.br/neurolead/neurolead.min.js&quot;, 70210);&lt;/script&gt;</textarea>
                    </div>

                    <div class="card-header mt-4 col-md-12 bg-primary">
                        <h3 class=""><i class="fas fa-home mr-3"></i> Detalhes do Imóvel</h5>
                    </div>

                    <div class="form-group mt-4 col-md-4">
                        <label for="condominiumName">Qual o Condomínio?</label>
                        <input 
                            type="text" 
                            class="form-control " 
                            value="Condomínio Eldorado" 
                            id="condominiumName"
                            name="nomeCondominio"
                        >
                    </div>

                    <div class="row col-md-12">

                        <div class="form-group mt-4 col-md-2">
                            <label for="condominiumPrice">Valor Condomínio:</label>
                            <input 
                                type="text" 
                                class="form-control " 
                                value="0,00" 
                                id="condominiumPrice"
                                name="precoCondominio"
                            >
                        </div>

                        <div class="form-group mt-4 col-md-2">
                            <label for="estateBlock">Qual o bloco?</label>
                            <input 
                                type="text" 
                                class="form-control " 
                                value="Quadra 04" 
                                id="estateBlock"
                                name="blocoImovel"
                            >
                        </div>

                    </div>

                    <div class="row col-md-12">

                        <div class="form-group mt-4 col-md-6">
                            <label for="roomsDescription">Descrição dos cômodos:</label>
                            <textarea 
                                type="text" 
                                class="form-control "
                                id="roomsDescription"
                                name="comodosDescricao"
                                placeholder="Faça uma breve descrição dos cômodos"
                            ></textarea>
                        </div>

                    </div>

                    <div class="form-group col-md-12">
                        <label for="realEstateStatus">Seu Imóvel está:</label>
                        <select name="estadoImovel" id="realEstateStatus" class="form-control ">
                            <option value="0"  selected >Vazio</option>
                            <option value="1" >Semimobiliado(com armários embutidos)</option>
                            <option value="2" >Mobiliado</option>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="realEstateLeisure">Qual o lazer do condomínio?</label>
                        <textarea 
                            type="text" 
                            class="form-control " 
                            id="realEstateLeisure" 
                            name="lazer"
                            placeholder="Exemplo: O Imóvel ofrerece Piscina, churraqueira... "
                        ></textarea>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="condominiumInfra">Qual a infraestrutura do seu condomínio?</label>
                        <textarea 
                            type="text" 
                            class="form-control " 
                            id="condominiumInfra" 
                            name="infraestrutura"
                            placeholder="Exemplo: Painel Fotovoltaíco, Guarita Com Segurança, Tomada para Carro Elétrico"
                        ></textarea>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="summernote">Descrição:</label>
                        <textarea 
                            type="text" 
                            class="form-control " 
                            id="summernote" 
                            name="descricao"
                            placeholder="Digite uma descrição mais aprofundada para este Imóvel"
                        >&lt;p&gt;Terreno em&amp;nbsp;Condomínio Eldorado do Rio Paraná&amp;nbsp;- Medindo 801 m² de área total.&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Alto potencial de valorização&lt;/li&gt;&lt;li&gt;O condomínio com excelente estrutura de lazer&lt;/li&gt;&lt;li&gt;Reconhecido pelo seu magnífico paisagismo&lt;/li&gt;&lt;li&gt;Construções de Alto Padrão e de muito bom gosto&lt;/li&gt;&lt;li&gt;Serviço de trator para as embarcações&lt;/li&gt;&lt;li&gt;Diversos benefícios como poço artesiano, trapiche para até 10 lanchas, rampa náutica, portaria com serviço de rádio dentre outros...&lt;/li&gt;&lt;/ul&gt;</textarea>
                    </div>

                </div>

            </div>

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
             <button type="submit" value="editar" name="editar" class="btn btn-success">Salvar</button>
         </div>
        </form>
    </div>
        <!-- Main row -->

        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- 
              LADO ESQUERDO
              CONTEÚDO VAI AQUI
            -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
            <!-- 
              LADO DIREITO
              CONTEÚDO VAI AQUI
            -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php  include("../common/footer.php"); ?>
