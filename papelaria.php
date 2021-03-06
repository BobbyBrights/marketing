<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Document">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- As meta tags acima devem vir em primeiro lugar dentro do "head" qualquer
        outro conteúdo deve vir após essas tags -->
        <title>Document</title>
        <!-- Conteúdo CSS do Bootstrap -->
        <?php include 'css.php';?>

      </head>
      <body>
       <!-- Menu) -->
       <?php include 'menu.php';?>
       
       <div class="section">
         <div class="container">
          <div class="row">
           <div class="col-md-12">
            <div class="panel-group" id="accordion">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                      Cartão de Visitas</a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body"><div class="col-md-4">
                      <img src="image/papelaria/cartoes/cartao-1_Frente.svg" class="img-responsive">
                    </div>
                    <div class="col-md-4">
                      <img src="image/papelaria/cartoes/cartao-2_Verso.svg" class="img-responsive">
                    </div>
                    <div class="col-md-4">
                      <ul class="list-group">
                       <li class="list-group-item">Tamanho: 9,1 x 5,38cm</li>
                       <li class="list-group-item">Cor: 4x4</li>
                       <li class="list-group-item">Papel: 300g couchê.</li>
                       <li class="list-group-item">Acabamento: laminação fosca.</li>
                       <li class="list-group-item"><a href="image/papelaria/cartoes/cartao-masutti.pdf" i class="fa fa-download fa-2x" aria-hidden="true"></i></a></li>
                     </ul>
                   </div>
                 </div>
               </div>
             </div>
             <div class="panel panel-primary">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    Envelopes</a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body"><div class="col-md-4">
                    <img src="image/papelaria/envelopes/Envelope-20x28cm-02.svgz" class="img-responsive">
                  </div>
                  <div class="col-md-4"><br>
                    <ul class="list-group">
                      <li class="list-group-item">Tamanho: 20 x 28cm</li>
                      <li class="list-group-item">Cor: 4x0</li>
                      <li class="list-group-item">Papel: Sulfite 120g.</li>
                      <li class="list-group-item">Acabamento: Sem verniz, corte, vinco e cola.</li>
                      <li class="list-group-item"><a href="image/papelaria/envelopes/envelope-20x28cm.pdf" i class="fa fa-download fa-2x" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                  <div class="col-md-4"><br>
                   <ul class="list-group">
                    <li class="list-group-item">Tamanho: 26x36cm</li>
                    <li class="list-group-item">Cor: 4x0</li>
                    <li class="list-group-item">Papel: Sulfite 120g.</li>
                    <li class="list-group-item">Acabamento: Sem verniz, corte, vinco e cola.</li>
                    <li class="list-group-item"><a href="image/papelaria/envelopes/envelope-26x36cm.pdf" i class="fa fa-download fa-2x" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
<?php include 'js.php';?>
</body>
</html>