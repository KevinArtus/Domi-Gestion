Stanhome
========
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/3ae1ff92-01d9-4281-9614-f0a11535965f/big.png)](https://insight.sensiolabs.com/projects/3ae1ff92-01d9-4281-9614-f0a11535965f) |

Application permettant de gérer l'activité d'une conseillère pour des réunions à domicile.

Gestion des réunions, du carnet de contact client.
Informations détaillées sur l'avancement de l'activité.
Visualisation du nombre de réunions effectuées par une hôtesse.


/!\ L'application n'est pas en ligne. Il est nécessaire de l'installer en local afin de pouvoir la tester.


**Fixtures :**

L'application est livrée avec une base de données de test. Afin de charger les informations dans la
base de données, il est nécessaire de charger les fixtures existantes.

    php bin/console doctrine:fixtures:load

**Les logins :**

- username : test 
- password : test

**Liste des bundles tiers utilisés :**
- FOSUserBundle
- JMSSerializerBundle
