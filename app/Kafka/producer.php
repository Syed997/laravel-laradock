<?php

$conf = new \RdKafka\Conf();

$conf->set('bootstrap.servers', 'pkc-41p56.asia-south1.gcp.confluent.cloud:9092');
$conf->set('security.protocol', 'SASL_SSL');
$conf->set('sasl.mechanism', 'PLAIN');
$conf->set('sasl.username', 'L5GVN6PIZEZL55FM');
$conf->set('sasl.password', 'A077549RjBGY5Jg8w4sXbeYRGrJiSsuazrPxnpCJlj19IWujQjJ2tMufipQjkFry');

$producer = new \RdKafka\Producer($conf);

while (true) {
    $message = readline("Write a message: ");

    $topic = $producer->newTopic('my-topic');
    $topic->produce(RD_KAFKA_PARTITION_UA, 0, $message);
    $producer->flush(1000);
}
