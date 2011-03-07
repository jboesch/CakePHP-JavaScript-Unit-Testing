<?
class TestJsSuiteShell extends Shell
{

    /**
     * From the cake/console directory, running ./cake testjssuite
     * will run the tests at the command line and output the results in
     * JUnit XML format.
     */
    public function main()
    {

        $path = WWW_ROOT . 'tests';
        $test_file = 'index';

        // If we pass an argument, it's that we're specifying a specific test file.
        // ./cake testjssuite user -> would test the user.html spec file.
        if(isset($this->args[0]))
        {
            $test_file = str_replace('.html', '', $this->args[0]);
        }

        $c = 'cd ' . $path . ' && java -jar lib/js.jar -opt -1 lib/envjs.bootstrap.js ' . $test_file . '.html';

        system($c);

    }

}
