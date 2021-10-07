<?php require_once 'app/Views/Partials/Beginning.php'; ?>
<h1>Your active assignments:</h1>
    <ul>
        <?php foreach ($tasks as $task)
        { ?>
            <li><?php echo (new \App\Models\Assignment($task))->getTask() ?></li>
        <?php } ?>
    </ul>

<button type="button" onclick="location.href = '/add';">Add NEW</button>

</body>
</html>