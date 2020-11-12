#!/bin/bash

# This script is executed when the app is deployed using digitalocean tool
pwd=$(pwd)
ln -s $pwd/public/index.php $pwd/index.php
mv $pwd/public/.htaccess $pwd

