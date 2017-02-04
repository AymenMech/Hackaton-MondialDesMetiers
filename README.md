Tag ton métier
=====
Application de vote destinée au Mondial des métiers de Lyon.  
  
Deploiement :  
1) Cloner repositor   
2) Verifier que les fuseaux horaires sont actifs dans le php.ini (et l'url rewriting ?)  
3) composer install  
4) doctrine:database:create  
5) doctrine:schema:update    
    En cas de problème "AppKernel ligne 19", relancer composer install, FOSUser ne s'est pas installé correctement.  
6) Importer base de données  
7) assets:install --symlink  
8) Mettre droit serveur sur app/cache et app/log  