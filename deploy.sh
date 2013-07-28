cp baseframe-packed.css dashboard/dashboard.php redditparse.php index.php input.php insert.php delete.php deletetodo.php bootstrap.css /var/www/intel/
cp -R reddit-api-client /var/www/intel/
if [ $? -eq 0 ]
then echo "Deployed Succesfully";
fi

