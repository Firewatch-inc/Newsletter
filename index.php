<?php
    require_once "start.php";

    $notes = $NoteManager->get();

    $CT->assign("notes", $notes);
    $CT->Show("index.tpl");
?>