# Verfacto Magento plugin

Verfacto plugin for Magento 2.3.7 - 2.4.4 versions

## Installation Guide
#### For Magento 2.X Verfacto Extensions

To Install Magento 2.X Extension by Verfacto there are two possible solutions:

- Extension installation via GitHub
- Extension installation via ZIP upload

## 1. Installing via GitHub

1. Connect to the root directory of your Magento installation with SSH

2. Create the folders called app/code/Verfacto/ in the root directory (using command *mkdir*)

3. Move into created folder

4. Run command git clone <URL> with dot at the end e.g. `git clone git@github.com:Verfacto/verfacto-magento-plugin.git .` to copy plugin inside created folder

5. Run the following commands, in the root magento directory:
    * php bin/magento setup:upgrade
    * php bin/magento setup:di:compile
    * php bin/magento setup:static-content:deploy
    * php bin/magento cache:clean

## 2. Extension installation via ZIP upload

1. Unpack the extension ZIP file on your computer

2. Connect to your website source directory with FTP/SFTP/SSH client (we recommend clients: FileZilla, WinSCP)

3. Then, create the folders called app/code/Verfacto/ in the root directory of your Magento installation

4. Upload all the files and folders in app/code/Verfacto/

5. Connect to the root directory of your Magento installation with SSH

6. Run the following commands, in the root magento folder:
   * php bin/magento setup:upgrade
   * php bin/magento setup:di:compile
   * php bin/magento setup:static-content:deploy
   * php bin/magento cache:clean

## 3. Uninstall Plugin

1. Connect to the root directory of your Magento installation with SSH

2. Run the following commands, in the root magento directory:
    * php bin/magento module:disable Verfacto_Magento
    * php bin/magento setup:upgrade
    * php bin/magento setup:di:compile
    * php bin/magento setup:static-content:deploy
    * php bin/magento cache:clean
