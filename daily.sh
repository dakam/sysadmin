#!/bin/bash

DATES=$(date +%Y-%m-%d-%T)

DIR=/home/ubuntu/backups

mkdir -p "${$DIR}/${DATES}"

mysql -uroot -pdamiano -e "show databases" > /home/ubuntu/dbs

while read database

do


mysqldump  -uroot -pdamiano   $database   | gzip > $DIR/$database.gz




done  < /home/ubuntu/dbs


