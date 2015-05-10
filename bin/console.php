<?php

include_once __DIR__ . '/../vendor/autoload.php';

class BBConsole extends \Joomla\Application\AbstractCliApplication
{

    /**
     * Method to run the application routines.  Most likely you will want to instantiate a controller
     * and execute it, or perform some sort of task directly.
     *
     * @return  void
     *
     * @since   1.0
     */
    protected function doExecute()
    {
        // 試不出來
        //$option = $this->input->get('options');
        //$this->out("123");

        // php bin/console.php arg1 arg2 arg3 ...
        foreach ($this->input->args as $arg)
        {
            $this->out($arg);
        }

        // Ask user question
        //$name = $this->out('Who are you?')->in();
        //$this->out('Hello ' . $name . '!');

    }
}

$app = new BBConsole;

$app->execute();
