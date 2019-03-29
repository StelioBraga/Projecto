<?php require_once("header.php") ?>

<<!-- div class="ui clearing segment">
    // <img src="Images/fundo.jpg">
</div> -->

<div class="ui container very padded segment active" style="padding-bottom: 20px; ">

    <form class="ui  form">

        <div class="two fields">
            <div class="field">
                <label>Nome do Ficheiro</label>
                <input type="text" placeholder="Nome Completo">
            </div>
            <div class="field">
                <label>Cusro</label>
                <input type="text" placeholder="Usuario">
            </div>
            <div class="field">
                <label>Cadeira</label>
                <input type="text" placeholder="Usuario">
            </div>
            <div class="ui bottom attached button">
                    <i class="add icon"></i>
                    Add 
                  </div>
        </div>
        <div class=" field">
            <label>Descrição</label>
            <textarea rows="2"></textarea>
        </div>
        <div class=" field">
            <label>Ficheiro</label>
            <input type="file" name="email" placeholder="Exemplo@umum.com">
        </div>

        <button class="ui button" type="submit">Submit</button>
    </form>

</div>







      <div class="ui grid">
            <div class="four wide column">
              <div class="ui vertical fluid tabular menu">
                    <a class="item active" data-tab="first">First</a>
                    <a class="item" data-tab="second">Second</a>
                    <a class="item" data-tab="third">Third</a>
                  </div>
                  <div class="ui bottom attached tab segment active" data-tab="first">
                    First
                  </div>
                  <div class="ui bottom attached tab segment" data-tab="second">
                    Second
                  </div>
                  <div class="ui bottom attached tab segment" data-tab="third">
                    Third
                  </div>
              </div>
            </div>
            
          </div>



      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="Semantic-UI-CSS-master/semantic.min.js"></script>
      <script type="text/javascript" src="js/javascript.js"></script>

