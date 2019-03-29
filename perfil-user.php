<?php require_once ("painel-header-usuario.php")?>
<!-- Fazer upload de um arquivo por parte do usuario -->
<div class="ui bottom attached tab segment" data-tab="second">
 
    <form class="ui form curso">
        <div class="field">
            <label>Nome do Curso</label>
            <input type="text" name="course-name" placeholder="Nome do Curso">
        </div>
        <div class="field">
            <label>Identificador do Curso</label>
            <input type="text" name="id-curso" placeholder="Ex: CAG, EIT">
        </div>
        <div class="field">
            <label>Foto do curso</label>
            <input type="file" name="image-curse" accept="image/*">
        </div>
        <button class="ui primary button ui labeled icon button"><i class="save icon"></i> Gravar </button>
    </form>
   
</div>


<!--  registar ususario -->
<div class="ui bottom  very padded  tab segment" data-tab="first">
 

  
  <form class="ui  form" >
    
    <div class="two fields">
      <div class="field">
        <label>Nome</label>
        <input type="text" placeholder="Nome Completo">
      </div>
      <div class="field">
        <label>Usuario</label>
        <input type="text" placeholder="Usuario">
      </div>
    </div>
    <div class=" field">
        <label>Email</label>
        <input type="text" name="email" placeholder="Exemplo@umum.com">
      </div>
      <div class="two fields">
          <div class="field">
            <label>Senha</label>
            <input type="text" placeholder="Senha">
          </div>
          <div class="field">
            <label>Confirmar</label>
            <input type="text" placeholder="Confirmar">
          </div>
        </div>
        <div class="ui message">
            <div class="header">
              Nota Importante!!!
            </div>
            <p>Utilize 5 ou mais carateres numa mistura de letras, números e símbolos.</p>
          </div>
    <button class="ui button" type="submit">Submit</button>
  </form>



</div>








    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="Semantic-UI-CSS-master/semantic.min.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
<?php require_once ("painel-footer-usuario.php"); ?>

