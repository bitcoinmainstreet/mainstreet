<?php $links = ['login', 'register', 'logout']?>
<ul>
 <?php foreach($links as $link): ?>
 <li><a href="/auth/<?=$link?>"><?=$link?></li>
 <?php endforeach ?>
</ul>
