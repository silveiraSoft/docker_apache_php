<?php
include_once(__DIR__."/../superior.php");
?>
<div style="height:10px"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <!-- Botão para acionar modal -->
      <button type="button" id="btnNovo" class="btn btn-success" data-toggle="modal" data-target="#modalDesenvolvedor">Novo</button>
    </div>
  </div>
</div>
<div style="height:10px"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive">
        <table id="tabelaDesenvolvedores" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Sexo</th>
                  <th>Idade</th>
                  <th>Hobby</th>
                  <th>Data Nascimento</th>
                  <th>Ações</th>
              </tr>
          </thead>
          <tbody> 
          </tbody>
          <tfoot>
              <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Sexo</th>
                  <th>Idade</th>
                  <th>Hobby</th>
                  <th>Data Nascimento</th>
                  <th>Ações</th>
              </tr>
          </tfoot>
        </table>
      </div>  
    </div>
  </div>         
</div>
<!-- Modal -->
<div class="modal fade" id="modalDesenvolvedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="desenvolvedorModalLabel">Novo Desenvolvedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formDesenvolvedor">
        <div class="modal-body">
            <div class="form-group">
              <label for="nome" >Nome</label>
              <input type="text" maxlength="255" required class="form-control" id="developer_nome" data-error="Por favor, informe o nome.">
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="sexo">Sexo</label>
                <select class="form-control" required id="developer_sexo">
                  <option selected value="M">M</option>
                  <option value="F">F</option>
                </select>
              </div>  
              <div class="form-group col-md-3">  
                <label for="idade">Idade</label>
                <input type="number" required min=10 max=75 value="10" class="form-control" id="developer_idade">
              </div>
              <div class="form-group col-md-5">
                <label for="dataNacimento">Data Nascimento</label>
                <input type="date" id="developer_dataNascimento" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label for="hobby">Hobby</label>
              <span class="caracteres">250</span> Restantes <br>
              <textarea class="form-control" id="developer_hobby" rows="3" maxlength="250">  
              </textarea required>
            </div>     
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" id="btnSalvar" class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
include_once(__DIR__."/../inferior.php");