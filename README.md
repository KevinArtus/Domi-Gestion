Stanhome
========
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/83ddaf3a-66d6-48a9-924d-c2933ff43a27/big.png)](https://insight.sensiolabs.com/projects/83ddaf3a-66d6-48a9-924d-c2933ff43a27) |

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
