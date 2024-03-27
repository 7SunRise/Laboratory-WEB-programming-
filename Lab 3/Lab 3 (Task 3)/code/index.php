<!doctype html>
<head>
    <title>Обьявление</title>
</head>
<body>
    <form action="createNew.php" method="post">
        <label for="email">Email:</label>
        <input type="text" name="email" required>

        <label for="category">Категория:</label>
        <select name="category" required>
            <?php
            $directories = scandir("./categories");
            for ($i = 2; $i < count($directories); $i++) { ?>
                <option value=<?php echo $directories[$i];?>><?php echo $directories[$i]?></option>
            <?php } ?>
        </select>
        <label for="title">Заголовок:</label>
        <input type="text" name="title" required>
        <label for="description">Описание:</label>
        <textarea rows="7" name="description"></textarea>
        <input type="submit" value="Сохранить:">
    </form>
    <table>
        <thead>
            <th>Категория </th>
            <th>Email </th>
            <th>Заголовок </th>
            <th>Описание</th>
        </thead>
        <tbody>
            <?php for ($i = 2; $i < count($directories); $i++) {
                $subDirectories = scandir("./categories/{$directories[$i]}");
                for ($j = 2; $j < count($subDirectories); $j++) {
                    $files = scandir("./categories/{$directories[$i]}/{$subDirectories[$j]}");
                    for ($k = 2; $k < count($files); $k++) {
                        $content = file_get_contents("./categories/{$directories[$i]}/{$subDirectories[$j]}/{$files[$k]}"); ?>
                        <tr>
                            <td><?php echo $directories[$i]; ?></td>
                            <td><?php echo $subDirectories[$j]; ?></td>
                            <td><?php echo substr($files[$k], 0, strlen($files[$k]) - 4); ?></td>
                            <td><?php echo $content; ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</body>