<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Design Patterns - Fase 01</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="container">
    <h1>Formulário Básico - Dinâmico</h1>
<?php
    use \EJS\Classes\Elemento;

    $form = new Elemento('form');
    $form->set_Propriedades('method', 'post');
    $form->set_Propriedades('action', '');
    $form->set_Propriedades('role', 'form');

    $label = new Elemento('label', "Email");
    $label->set_Propriedades('for', 'inputEmail');
    $label->set_Propriedades('class', 'col-sm2 control-label');
    $label->set_Propriedades('placeholder', 'Email');

    $input = new Elemento('input');
    $input->set_Propriedades('type', 'email');
    $input->set_Propriedades('name', 'email');
    $input->set_Propriedades('placeholder', 'Email aqui');
    $input->set_Propriedades('class','form-control');
    $input->set_Propriedades('id','inputEmail');

    $senha = new Elemento('label', "Senha");
    $senha->set_Propriedades('for', 'inputSenha');
    $senha->set_Propriedades('name', 'senha');
    $senha->set_Propriedades('class', 'col-sm2 control-label');
    $senha->set_Propriedades('placeholder', 'Senha');

    $inputSenha = new Elemento('input');
    $inputSenha->set_Propriedades('type', 'password');
    $inputSenha->set_Propriedades('placeholder', 'Senha aqui');
    $inputSenha->set_Propriedades('class','form-control');
    $inputSenha->set_Propriedades('id','inputSenha');

    $button = new Elemento('input');
    $button->set_Propriedades('type', 'submit');
    $button->set_Propriedades('value', 'Enviar');
    $button->set_Propriedades('name', 'Enviar');

    $label_area = new Elemento('label', "Mensagem");
    $label->set_Propriedades('for', 'inputMsg');
    $label->set_Propriedades('class', 'col-sm2 control-label');
    $label->set_Propriedades('placeholder', 'Mensagem');

    $textarea = new Elemento('textarea');
    $textarea->set_Propriedades('placeholder', 'Mensagem');
    $textarea->set_Propriedades('name', 'inputMsg');

    $br = new Elemento('br');

    $form->addElementoFilho($label);
    $form->addElementoFilho($input);
    $form->addElementoFilho($senha);
    $form->addElementoFilho($inputSenha);
    $form->addElementoFilho($label_area);
    $form->addElementoFilho($textarea);
    $form->addElementoFilho($br);
    $form->addElementoFilho($button);

    $form->render();

    if(isset($_POST)):
        echo '<h3>Dados enviados pelo formulário</h3>';
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
    endif;
?>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
