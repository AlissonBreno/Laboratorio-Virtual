<div id="modal_analise" class="modal fade" role="dialog" data-backdrop="static"  style="display: none">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div id="analise" class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Analisar Exercício</strong></h4>
          </div>
          <div class="modal-body">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Descrição do Exercício
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <h2 class="text-center" id="titulo_exercicio"></h2>
                    <p id="descricao_exercicio"></p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default" id="respostas">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      Respostas
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12">
                        <label> Resposta Correta:</label>
                        <p id="resposta_correta"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label> Opção 1:</label>
                        <p id="Op1"></p>

                        <label> Opção 2:</label>
                        <p id="Op2"></p>

                        <label> Opção 3:</label>
                        <p id="Op3"></p>
                      </div>
                      <div class="col-md-6">
                        <label> Opção 4:</label>
                        <p id="Op4"></p>

                        <label> Opção 5:</label>
                        <p id="Op5"></p>

                        <label> Opção 6:</label>
                        <p id="Op6"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div style="display: flex;">
              <form action="<?=base_url()?>Exercicios/ativar_exercicio" name="form_ativar" method="post">
                <div class="col-md-4">
                  <button class="btn btn-success btn-lg">Ativar</button>
                  <input type="hidden" class="id" name="id" />
                </div>
              </form>
              <form action="<?=base_url()?>Exercicios/reanalisar_exercicio" name="form_ativar" method="post">
                <div class="col-md-4">
                  <button class="btn btn-warning btn-lg">Revisar</button>
                  <input type="hidden" class="id" name="id" />
                </div>
              </form>
              <form action="<?=base_url()?>Exercicios/inativar_exercicio" name="form_ativar" method="post">
                <div class="col-md-4">
                  <button class="btn btn-danger btn-lg">Inativar</button>
                  <input type="hidden" class="id" name="id" />
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" title="Voltar"><span class="glyphicon glyphicon-arrow-left"></span></button>
              <!--
              <a style="justify-content: left" id="btn_modal" onclick="confirma_inativacao()" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span></a>
            -->
          </div>
      </div>
    </div>
</div>
<div id="modal_cadastro" class="modal fade" role="dialog" data-backdrop="static"  style="display: none">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div id="analise" class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Cadastro de Exercícios</strong></h4>
          </div>
          <div class="modal-body">
            <h3>Escolha um tipo de exercício para prosseguir.</h3>
            <div style="display: flex;">
              <form action="<?=base_url()?>Exercicios/cadastrar" name="form_ativar" method="post">
                <div class="col-md-6">
                  <button class="btn btn-default btn-lg">Múltipla Escolha</button>
                  <input type="hidden" name="flag" value="0" />
                </div>
              </form>
              <form action="<?=base_url()?>Exercicios/cadastrar" name="form_ativar" method="post">
                <div class="col-md-6">
                  <button class="btn btn-default btn-lg">Dissertativa</button>
                  <input type="hidden" name="flag" value="1" />
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" title="Voltar"><span class="glyphicon glyphicon-arrow-left"></span></button>
              <!--
              <a style="justify-content: left" id="btn_modal" onclick="confirma_inativacao()" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span></a>
            -->
          </div>
      </div>
    </div>
</div>