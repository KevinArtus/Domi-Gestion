Stanhome
========

| Sensio insight | [![SensioLabsInsight](https://insight.sensiolabs.com/projects/3ae1ff92-01d9-4281-9614-f0a11535965f/big.png)](https://insight.sensiolabs.com/projects/3ae1ff92-01d9-4281-9614-f0a11535965f) |

Projet de fin de première année du Master DNR2I de la faculté de Caen Basse-Normandie.

Application permettant de gérer l'activité d'une conseillère pour des réunions à domicile.
Gestion des réunions, du carnet de contact client.
Informations détaillées sur l'avancement de l'activité.

Installer ElastisSearch sur votre machine :
https://www.elastic.co/products/elasticsearch

Lancez un serveur elasticsearch (il faut que la BDD soit créée et des clients ajoutés) :
1/ déplacez-vous dans le dossier /elasticsearch-1.5.2/bin/
2/ lancer le fichier elasticsearch.bat
3/ utilisez cette commande : php app/console fos:elastica:populate

Votre serveur est maintenant lancé, vous pouvez utilisez le champ de recherche de l'application pour rechercher un client.


**Liste des bundles tiers utilisés :**
- FOSUserBundle
- FOSElasticaBundle
- JMSSerializerBundle
- KnpPaginatorBundle
