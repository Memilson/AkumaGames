        <?php
        if (!$connection) {
            die("Erro na conexão: " . mysqli_connect_error());
        }
        
        session_start();
        
        if (!isset($_SESSION["user_name"])) {
            header("Location: login.php");
            exit;
        }
        
        $user_name = $_SESSION["user_name"];
        $query = "SELECT * FROM usuarios WHERE nome = '$user_name'";
        $result = mysqli_query($connection, $query);
        
        if (!$result || mysqli_num_rows($result) == 0) {
            die("Perfil não encontrado.");
        }
        ?>