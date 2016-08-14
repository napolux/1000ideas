<?php

// This is a batch jobs for markdown files generation

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
}

/*
Elit Elit Ipsum Dolor Inceptos Parturient Elit Ipsum Dolor Inceptos Parturient Elit Ipsum Dolor Inceptos Parturient Elit Ipsum Dolor Inceptos Parturient Elit Ipsum Dolor Inceptos Parturient Elit Ipsum Dolor Inceptos Parturient

### PROs

* Elit Ipsum Dolor Inceptos Parturient
* Elit Ipsum Dolor Inceptos Parturient
* Elit Ipsum Dolor Inceptos Parturient
* Elit Ipsum Dolor Inceptos Parturient
* Elit Ipsum Dolor Inceptos Parturient

### CONs

* Elit Ipsum Dolor Inceptos Parturient
* Elit Ipsum Dolor Inceptos Parturient
* Elit Ipsum Dolor Inceptos Parturient
* Elit Ipsum Dolor Inceptos Parturient
* Elit Ipsum Dolor Inceptos Parturient

### Notice

Check https://github.com/napolux/1000ideas for license and FAQ
 */