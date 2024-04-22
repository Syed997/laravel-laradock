<?php

$conf = new \RdKafka\Conf();

$conf->set('bootstrap.servers', 'pkc-41p56.asia-south1.gcp.confluent.cloud:9092');
$conf->set('security.protocol', 'SASL_SSL');
$conf->set('sasl.mechanism', 'PLAIN');
$conf->set('sasl.username', 'L5GVN6PIZEZL55FM');
$conf->set('sasl.password', 'A077549RjBGY5Jg8w4sXbeYRGrJiSsuazrPxnpCJlj19IWujQjJ2tMufipQjkFry');
$conf->set('group.id', 'group');
$conf->set('auto.offset.reset', 'earliest');

$consumer = new \RdKafka\KafkaConsumer($conf);

$consumer->subscribe(['sample_topic']);

while (true) {
    $message = $consumer->consume(120*1000);

    var_dump("message: ".$message->payload. ", partition: ".$message->partition) ;
    sleep(5);

}



