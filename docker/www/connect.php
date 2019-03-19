<?php
    date_default_timezone_set('UTC');

    require 'vendor/autoload.php';


    use Aws\S3\S3Client;

    $host = "db";
    $username = "root";
    $password = "root";
    $db = "gestion_produits";

    $link = mysqli_connect($host,$username,$password,$db) or die ("Erreur de connexion à la base de données.");
    mysqli_set_charset($link,"utf8");


    $MINIO_ACCESS_KEY = getenv(MINIO_ACCESS_KEY);
    $MINIO_SECRET_KEY = getenv(MINIO_SECRET_KEY);

    $sharedConfig = [
        'version' => 'latest',
        'region'  => 'eu-west-3',
        'endpoint' => 'http://172.28.1.3:9000',
        'use_path_style_endpoint' => true,
        'credentials' => [
            'key'    => $MINIO_ACCESS_KEY,
            'secret' => $MINIO_SECRET_KEY,
        ],
    ];

    $sdk = new Aws\Sdk($sharedConfig);

    $s3Client = $sdk->createS3();

    $bucket = "uploads";

    $bucketPolicy = '{
        "Version": "2012-10-17",
        "Statement": [{
            "Action": [
                "s3:GetObject"
            ],
            "Effect": "Allow",
            "Principal": {
                "AWS": [
                    "*"
                ]
            },
            "Resource": [
                "arn:aws:s3:::'.$bucket.'/*"
            ]
        }]
    }';

    if (!$s3Client->doesBucketExist($bucket)) {
        $s3Client->createBucket([
            'Bucket' => $bucket
        ]);
        $s3Client->waitUntil('BucketExists', array('Bucket' => $bucket));
        $s3Client->putBucketPolicy([
            'Bucket' => $bucket,
            'Policy' => sprintf($bucketPolicy, $bucket, $bucket),
        ]);
    }
?>