A webapplication to keep track of gathered intelligence/information in one place

# Getting Started

Clone the repository

```
git clone git@github.com:boris-sathya/intelreckoner.git
git submodule update --init
```
# Deploy the Application

Import intel.sql

```
mkdir /var/www/intel/
cp dbc.php /var/www/intel/
sh deploy.sh
```
