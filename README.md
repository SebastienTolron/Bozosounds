Bozosounds website 
========================

D�veloppement du site Web Bozosounds. Utilisation de symfony2



## Commandes importantes 

	
	php app/console router:debug    : Permet de checker les routes
	php app/console assets:install web/ --symlink   : Regenere les assets
		* Veuillez enlever le **--symlink** si vous utilisez un syst�me de fichiers n'acceptant pas les liens symboliques
	
	
## Initialiser le panneau d'admin

* Ex�cuter la commande : `php composer.phar update`
* G�n�rer les entit�s d'administration : `php app/console doctrine:schema:update --force`
* Allez � l'URL : `<racine>/web/app_dev.php/admin/dashboard`

### Probl�me de intl sous Windows

* Aller dans `C:\wamp\bin\php\php5<version>`
* D�commenter la ligne `extension=php_intl.dll`
