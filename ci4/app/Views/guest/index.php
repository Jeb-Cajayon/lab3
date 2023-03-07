<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <h2> <?= esc($guest_item['name']) ?> </h3>
            <p><?= esc($guest_item['website']) ?> 
            <p> <?= esc($guest_item['email']) ?>
            <p> <?= esc($guest_item['comment']) ?>

    <?php endforeach ?>

<?php else: ?>

    <h3>No guest</h3>

    <p>Unable to find any guest for you.</p>

<?php endif ?>
<br><a href="http://localhost/lab3/ci4/public/Main">Go Back to Main page</a><br>
<a href="http://apcwebprog.csf.ph/~jgcajayon/lab3/ci4/public/guest/create">Go Back to create page</a><br>