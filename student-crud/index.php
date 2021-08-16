<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wellcome</title>
</head>
<body>
    <div class="container">
        <div class="data">
            <h1>Information</h1>
            <form action="#" method="POST">
                <input type="text" name="name" placeholder="name"> <br>
                <input type="text" name="surname" placeholder="surname"> <br>
                <input type="text" name="username" placeholder="username"> <br>
                <input type="email" name="email" placeholder="email"> <br>
                <input type="password" name="password" placeholder="password"> <br>
                <input type="submit" class="create" value="Create">
            </form>
        </div>
        <div class="table-container">
            <table class="styled-table">
                <h1>Students on the center</h1>
                <thead>
                    <tr>
                        <th scope="col"> Name </th>
                        <th scope="col"> Surname </th>
                        <th scope="col"> Username </th>
                        <th scope="col"> Email </th>
                        <th scope="col"> Password </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Efrain</td>
                        <td>Palacios</td>
                        <td>efpalaciosmo</td>
                        <td>efpalaciosmo@unal.edu.co</td>
                        <td>pass</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>