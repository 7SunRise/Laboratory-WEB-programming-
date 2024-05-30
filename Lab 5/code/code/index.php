<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Work with databases:</title>
    </head>
    <body>
        <div id="announcement">
            <h1>Enter your announcement here</h1>
            <form method="post" action="createNew.php">
                <label for="email">Email:</label>
                <input type="email" name="email"><br>

                <label for="category">Category:</label>
                <select name="category">
                    <option value="FirstCategory">FirstCategory</option>
                    <option value="SecondCategory">SecondCategory</option>
                    <option value="ThirdCategory">ThirdCategory</option>
                </select><br>

                <label for="title">Title:</label>
                <input type="text" name="title"><br>

                <label for="description">Content:</label>
                <textarea id="description" name="description" rows="20" cols="50"></textarea><br>

                <input type="submit" name="submit" value="submit">
            </form>
        </div>
        <div id="table">
            <h3>Uploaded announcements:</h3>
            <table>
                <thead>
                    <th>Category</th>
                    <th>Email</th>
                    <th>Title</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    <?php

                $mysqli = new mysqli("localhost","root","helloworld", "web");
                if ($result = $mysqli->query("SELECT * FROM ad ORDER BY created DESC")) {
                    while ($row = $result->fetch_array()) {
                        echo "<td></td>{$row['category']}</td><td>{$row['email']}</td><td>{$row['title']}</td><td>{$row['description']}</td></tr>"; }
                    $result->close(); }
                $mysqli->close();

                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>