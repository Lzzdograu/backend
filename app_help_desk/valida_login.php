
<?php

// echo "Bem vindo, usuario logado com sucesso";

// echo "<pre>";
// print_r($_GET);
// echo"</pre>"

// echo "<pre>";
// print_r($_POSTA);
// echo "</pre>";
// echo"<hr>";

// echo "E-mail: ";
// echo $_POST['email'];
// echo "<br>";
// echo $_POST['senha'];

session_start();

&usuario_autenticado = false;

$usuario_cadastrado = [
    ['email' => 'senai.br',
    'senha' => 12345
    ]
];

foreach($usuario_cadastrado as $user){
    if($user['email'] == $_post['email'] && $user ['senha'] == $_post['senha']){
        &usuario_autenticado = true;
    }
}

if ($usuario_autenticado = true;){
    $_SESSION['autenticado'] = 'sim';
    echo "Usuario autenticado com sucesso";
}else{
    $_SESSION['autenticado'] = 'NÂO';
    // echo"usuario ou senha incorretos";
    header('Location: index.php?login=erro');
}
    
    
    
?> 

