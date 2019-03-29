<?php require_once ("painel-header-usuario.php")?>
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


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="Semantic-UI-CSS-master/semantic.min.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
<?php require_once ("painel-footer-usuario.php"); ?>