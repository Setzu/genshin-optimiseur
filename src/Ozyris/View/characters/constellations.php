<h3>Constellations</h3>
<ul style="list-style: none; padding: 0;">
    <?php foreach ($this->aConstellations as $name => $description) { ?>
    <li class="details"><?= '<h5>' . $name . '</h5>' . $description; ?></li>
    <?php } ?>
</ul>

