
<!doctype html>
<html lang="pt-br">
<h1> Boa tarde </h1>
<h1> Boa noite </h1>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Estação4</title>

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">ESTAÇÃO4</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Produtos<span class="sr-only">(current)</span></a>
        </li>
      </ul>  
    </div>
  </nav>
  </head>
  <body>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
       <form id="product_form" method="POST">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">CADASTRO DE PRODUTO</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="resetForm();">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                  <label for="product_name">NOME DO PRODUTO</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" title="Insira um nome para o produto" required>
                </div>
                <div class="form-group">
                  <label for="product_description">DESCRIÇÃO DO PRODUTO</label>
                  <textarea type="text" class="form-control" id="product_description" name="product_description" title="Insira uma descrição para o produto" required> </textarea>
                </div>
                <div class="form-group">
                  <label for="product_price">PREÇO DO PRODUTO</label>
                  <input type="number" class="form-control" id="product_price" name="product_price" title="Insira um preço para o produto" required>
                </div>
                <input id="update_product_id" type="hidden" name="update_product_id">
              </div>
              <div class="modal-footer">
                <button type="" style="display: none;" id="reset_form_btn" class="btn btn-primary" onclick="resetForm();" >
                    VOLTAR</button>
              <input type="submit" id="product_register_submit" class="btn btn-primary" value="CADASTRAR PRODUTO">
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="flex-center div-table-product">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="td_name">NOME <input  type="text" class="form-control" id="product_search1" placeholder="Buscar nome" title="Insira um nome para buscar"></th>
            <th class="td_description">DESCRIÇÃO <input  type="text" class="form-control" id="product_search2" placeholder="Buscar descrição" title="Insira uma descrição para buscar"></th>
            <th class="td_price">VALOR <input  type="number" class="form-control" id="product_search3" placeholder="Buscar preço" title="Insira um preço para buscar"></th>
            <th class= "td_update" colspan="2">
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                CADASTRAR PRODUTO
              </button>
            </th>            
          </tr>
        </thead>

      <tbody id="product_table"></tbody>
    </table>
  </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/ajax.js"></script>
    <script type="text/javascript">
      refreshTable();
    </script>


  </body>
</html>