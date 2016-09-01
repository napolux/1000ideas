<?php

// This is a batch jobs for markdown files generation

$ideas = getIdeas();

// Changing readme file...
$readmeContent = file_get_contents(__DIR__ . "/../" . "README.md");
$readmeFile = fopen(__DIR__ . "/../" . "README.md", "w+");

$ideaLists = [];

foreach($ideas as $idea) {

    // Read idea.json and validate its structure
    $data = file_get_contents($idea . "/idea.json");
    $ideaJSON = json_decode($data, true);

    $fp = fopen($idea . "/README.md", "w+");

    // Title
    fwrite($fp, "# " . $ideaJSON["title"] . "\n\n");
    fwrite($fp, $ideaJSON["description"] . "\n\n");

    fwrite($fp, "### PROs" . "\n\n");

    foreach($ideaJSON["pros"] as $pro) {
        fwrite($fp, "* " . $pro . "\n");
    }

    fwrite($fp, "\n### CONs" . "\n\n");

    foreach($ideaJSON["cons"] as $con) {
        fwrite($fp, "* " . $con . "\n");
    }

    fwrite($fp, "\n### Notice" . "\n\n");

    fwrite($fp, $ideaJSON["notice"] . "\n");

    fclose($fp);

    $path = explode("/", $idea);

    $ideaLists[] = "[" . $ideaJSON["title"] . "](ideas/" . $path[count($path) - 1] . "/README.md" .")";
}

$readmeContent = replace_content_inside_delimiters("<!--- IDEALIST_START -->\n","<!--- IDEALIST_END -->\n", "\n* " . implode("\n* ", $ideaLists) . "\n\n" , $readmeContent);
fwrite($readmeFile, $readmeContent);
fclose($readmeFile);

function getIdeas() {
    $folder = __DIR__ . "/../ideas/";

    $iter = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($folder, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST,
        RecursiveIteratorIterator::CATCH_GET_CHILD
    );

    $ideas = [];

    foreach ($iter as $path => $dir) {
        if ($dir->isDir()) {
            $ideas[] = $path;
        }
    }

    return $ideas;
}

function replace_content_inside_delimiters($start, $end, $new, $source) {
    return preg_replace('#('.preg_quote($start).')(.*?)('.preg_quote($end).')#si', '$1'.$new.'$3', $source);
}