<player>
    <?php
    $xml = Xml::build($player);
    echo $xml->saveXML();
    ?>
</player>