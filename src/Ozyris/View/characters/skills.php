<h3>Aptitudes</h3>
<ul style="list-style: none; padding: 0;">
    <?php foreach ($this->aSkills as $name => $description) { ?>
    <li class="details"><?= '<h5>' . $name . '</h5>' . $description;?></li>
    <?php } ?>
</ul>

