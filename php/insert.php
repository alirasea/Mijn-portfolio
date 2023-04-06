
<?php
include("conection.php");

       // function code($name,$email,$comment){
        if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $comment = $_POST["comment"];

        $query = "INSERT INTO comments (name, email, comment) VALUES (:name, :email, :comment)";
        $query_run = $conn->prepare($query);

        $data = [
            ':name' => $name,
            ':email' => $email,
            ':comment' => $comment,
        ];
        $query_execute = $query_run->execute($data);
    }

?>
