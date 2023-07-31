<?php

namespace gusstub\gus\console;

class BaseConsole
{
    public function run()
    {
        try {
            $class = $this->getStub();
            file_put_contents("src/Actions/Foo.php", $class);
            echo "### Action example built ###\n\n";
        } catch (\Exception $e) {
            print_r(json_encode([
                'error' => $e->getMessage()
            ]));echo "\n\n";
        }
    }

    public function getStub()
    {
        return file_get_contents("src/Stubs/Foo.php.stub");
    }
}
