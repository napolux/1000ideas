<?php
namespace HELLO\Tests;

require __DIR__ . '/../vendor/autoload.php';

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class Ideas extends \PHPUnit_Framework_TestCase
{
    protected $client;
    protected $ideas;

    public function setUp()
    {
        $folder = __DIR__ . "/../ideas/";

        $iter = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($folder, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::SELF_FIRST,
            RecursiveIteratorIterator::CATCH_GET_CHILD
        );

        $this->ideas = [];

        foreach ($iter as $path => $dir) {
            if ($dir->isDir()) {
                $this->ideas[] = $path;
            }
        }
    }

    public function testIdeas() {
        foreach ($this->ideas as $idea) {
            // Check if there are the two files inside the folder
            $this->assertTrue(file_exists($idea . "/idea.json"), "idea.json doesn't exist");
            $this->assertTrue(file_exists($idea . "/README.md"), "idea.md doesn't exist");

            // Read idea.json and validate its structure
            $data = file_get_contents($idea . "/idea.json");
            $ideaJSON = json_decode($data, true);

            // Is it a valid JSON?
            $this->assertNotNull($ideaJSON, "The idea.json file is not a valid JSON");

            // Check word counts for title & description
            $this->assertTrue(str_word_count($ideaJSON["title"]) <= 15, "Title should be at not more than 15 words long");
            $this->assertNotEmpty(str_word_count($ideaJSON["title"]), "Title should not be empty");
            $this->assertTrue(str_word_count($ideaJSON["description"]) >= 30, "Description should be at least 30 words long");

            // Check PROs and CONs
            $this->assertTrue(count($ideaJSON["pros"]) >= 5,"PROs should be made of at least 5 elements");
            $this->assertTrue(count($ideaJSON["cons"]) >= 5,"CONs should be made of at least 5 elements");

            foreach($ideaJSON["pros"] as $pro) {
                $this->assertNotEmpty($pro, "A pro can't be empty");
            }

            foreach($ideaJSON["cons"] as $con) {
                $this->assertNotEmpty($con, "A con can't be empty");
            }

            // Check notice
            $this->assertEquals($ideaJSON["notice"], "Check https://github.com/napolux/1000ideas for license and FAQ", "Notice is missing or incomplete");

        }
    }
}
