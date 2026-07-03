<?php

class Application 
{
    public function run()
    {
        //iniciar a aplicação
        switch ($_SERVER['REQUEST_METHOD']){
            case 'GET':
                $this->showRegister();
                break;

            case 'POST':
                $this->handleRegister();
                break;

            default:
                http_response_code(405);
                break;
        }

    }

    public function handleRegister()
    {
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if (empty($username) || empty($email) || empty($password)) {
            http_response_code(400);
            echo "Todos os campos são obrigatórios.";
            return;
        }
    }
    
    public function showRegister()
    {
        //exibir o formulário de registro
        echo '<form method="POST">';
        echo '<input type="text" name="username" placeholder="Username" required>';
        echo '<input type="email" name="email" placeholder="Email" required>';
        echo '<input type="password" name="password" placeholder="Password" required>';
        echo '<button type="submit">Register</button>';
        echo '</form>';
    }

}