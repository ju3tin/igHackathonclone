<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=d9khs3rbk6k3oa host=ec2-54-243-235-107.compute-1.amazonaws.com port=5432 user=rwgfegeelsfsbj password=YBmo4PRIfHH199CTKsYXGZOgu7 sslmode=require";
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
    echo "Database connection error."
    exit;
}
 
$result = pg_query($db, "SELECT statement goes here");
?>

