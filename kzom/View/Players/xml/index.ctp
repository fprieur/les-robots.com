<players>
    <?php
    $xml = Xml::build($players);
    echo $xml->saveXML();
    ?>
</players>