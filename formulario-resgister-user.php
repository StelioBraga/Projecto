<?php require_once("header.php") ?>
<div class="ui container very padded segment active" style="padding-bottom: 20px; ">
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
