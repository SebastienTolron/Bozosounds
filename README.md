Bozosounds website 
========================

Développement du site Web Bozosounds. Utilisation de symfony2



## Commandes importantes 

	
	php app/console router:debug    : Permet de checker les routes
	php app/console assets:install web/ --symlink   : Regenere les assets
		* Veuillez enlever le **--symlink** si vous utilisez un système de fichiers n'acceptant pas les liens symboliques
	
	
## Initialiser le panneau d'admin

* Exécuter la commande : `php composer.phar update`
* Générer les entités d'administration : `php app/console doctrine:schema:update --force`
* Allez à l'URL : `<racine>/web/app_dev.php/admin/dashboard`

### Problème de intl sous Windows

* Aller dans `C:\wamp\bin\php\php5<version>`
* Décommenter la ligne `extension=php_intl.dll`
