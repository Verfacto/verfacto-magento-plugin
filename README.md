# Verfacto Magento plugin

Verfacto plugin for Magento 2

## Installation Guide
#### For Magento 2.X Verfacto Extensions

To Install Magento 2 Extension by Verfacto select a solution:

- Extension installation via GitLab
- Extension installation via ZIP upload

## 1. Installing via GitHub

1. Connect to your Magento directory with SSH.

2. Create the folders called app/code/Verfacto/, in the root magento folder

3. Move into created folder

4. Run command git clone <URL> with dot at the end to copy plugin inside created folder

5. Run the following commands, in the root magento folder:
    * php bin/magento setup:upgrade
    * php bin/magento setup:di:compile
    * php bin/magento setup:static-content:deploy
    * php bin/magento cache:clean

## 2. Extension installation via ZIP upload

1. Unpack the extension ZIP file on your computer.

2. Connect to your website source folder with FTP/SFTP/SSH client (we recommend clients: FileZilla, WinSCP)

3. Then, create the folders called app/code/Verfacto/, in the root magento folder

4. Upload all the files and folders in app/code/Verfacto/

5. Connect to your Magento directory with SSH.

6. Run the following commands, in the root magento folder:
   * php bin/magento setup:upgrade
   * php bin/magento setup:di:compile
   * php bin/magento setup:static-content:deploy
   * php bin/magento cache:clean

## 3. Uninstall Plugin

1. Run the following commands, in the root magento folder:
    * php bin/magento module:disable Verfacto_Magento
    * php bin/magento setup:upgrade
    * php bin/magento setup:di:compile
    * php bin/magento setup:static-content:deploy
    * php bin/magento cache:clean
