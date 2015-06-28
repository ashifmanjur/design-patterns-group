<?php
/**
 * @package    
 * @author     Saeed<saeed.sas@gmail.com>
 * @copyright  
 * @license
 * @version    @package_version@
 */

/*
 * Dbfactory classes
 */
interface DbFactory
{
    public function getConfig();

    public function getConnection();
}

class MongoFactory implements DbFactory
{
    public function getConfig()
    {
        return "Configurations for mongodb connection";
    }

    public function getConnection()
    {
        return "Connection made to mongodb";
    }
}

class CouchBaseFactory implements DbFactory
{
    public function getConfig()
    {
        return "Configurations for couchbase connection";
    }

    public function getConnection()
    {
        return "Connection made to couchbase";
    }
}

/*
 *   Initialization
 */

writeln('BEGIN TESTING ABSTRACT FACTORY PATTERN');
writeln('');

writeln('testing MongoFactory');
$dbFactoryInstance = new MongoFactory();
testConcreteFactory($dbFactoryInstance);
writeln('');

writeln('testing CouchbaseFactory');
$dbFactoryInstance = new CouchBaseFactory;
testConcreteFactory($dbFactoryInstance);

writeln("END TESTING ABSTRACT FACTORY PATTERN");
writeln('');

function testConcreteFactory($dbFactoryInstance)
{
    writeln($dbFactoryInstance->getConfig());
    writeln($dbFactoryInstance->getConnection());
}

function writeln($line_in) {
    echo $line_in."<br/>";
}


