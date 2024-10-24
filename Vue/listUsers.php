<?php
require_once '../Controller/UserController.php';  

// Créer une instance de UserController
$userController = new UserController();

// Récupérer tous les utilisateurs
$users = $userController->getUser();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 20px auto;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        td a {
            padding: 8px 12px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .update-btn {
            background-color: #4CAF50;
        }
        .update-btn:hover {
            background-color: #45a049;
        }
        .delete-btn {
            background-color: #f44336;
        }
        .delete-btn:hover {
            background-color: #e53935;
        }
        @media (max-width: 768px) {
            table {
                width: 100%;
            }
            th, td {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div>
        <h1>Liste des utilisateurs</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Mot de passe</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo ($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['pwd']); ?></td>
                       <td><a style="color:#e53935" href="DeleteUser.php?id=<?php echo $user['id'];  ?>"   >DELETE   </a>
                    <a style="color:seagreen" href="UpdateUser.php?id=<?php echo $user['id'];  ?>"> Update</a></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
