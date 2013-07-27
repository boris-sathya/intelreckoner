cp baseframe-packed.css dashboard/dashboard.php index.php input.html insert.php delete.php deletetodo.php bootstrap.css /var/www/intel/
if [ $? -eq 0 ]
then echo "Deployed Succesfully";
fi

