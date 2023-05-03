## Pour résumé :

*DOC DATE DE 2016:03:28 19:13:24+02:00*

<pre>
fetch_array retourne une ligne de résultats MySQL sous la forme d'un tableau dôté de clés nominatives et aussi numériques.
fetch_row retourne une ligne de résultats MySQL sous la forme d'un tableau dôté de clés numériques.
fetch_assoc retourne une ligne de résultats MySQL sous la forme d'un tableau dôté de clés nominatives. Cette solution est souvent préconisée.
fetch_object retourne une ligne de résultats MySQL sous la forme d'un objet avec comme attributs les champs de la table sur laquelle la requête a été
effectuée.
La classe Mysqli :
mysqli — La classe mysqli
mysqli::$affected_rows — Retourne le nombre de lignes affectées par la dernière opération MySQL
mysqli::autocommit — Active ou désactive le mode auto-commit
mysqli::begin_transaction — Démarre une transaction
mysqli::change_user — Change l'utilisateur de la connexion spécifiée
mysqli::character_set_name — Retourne le jeu de caractères courant pour la connexion
mysqli::$client_info — Récupère les informations du client MySQL
mysqli::$client_version — Retourne la version du client MySQL sous la forme d'une chaîne de caractères
mysqli::close — Ferme une connexion
mysqli::commit — Valide la transaction courante
mysqli::$connect_errno — Retourne le code d'erreur de la connexion MySQL
mysqli::$connect_error — Retourne le message d'erreur de connexion MySQL
mysqli::__construct — Ouvre une connexion à un serveur MySQL
mysqli::debug — Effectue des actions de déboguage
mysqli::dump_debug_info — Écrit les informations de déboguage dans les logs
mysqli::$errno — Retourne le dernier code d'erreur produit
mysqli::$error_list — Retourne une liste d'erreurs depuis la dernière commande exécutée
mysqli::$error — Retourne une chaîne décrivant la dernière erreur
mysqli::$field_count — Retourne le nombre de colonnes pour la dernière requête
mysqli::get_charset — Retourne un objet représentant le jeu de caractères
mysqli::get_client_info — Récupère des informations sur le client MySQL
mysqli_get_client_stats — Retourne des statistiques sur le client, par processus
mysqli_get_client_version — Retourne la version du client MySQL sous forme d'un entier
mysqli::get_connection_stats — Retourne des statistiques sur la connexion
mysqli::$host_info — Retourne une chaîne contenant le type de connexion utilisée
mysqli::$protocol_version — Retourne la version du protocole MySQL utilisé
mysqli::$server_info — Retourne la version du serveur MySQL
mysqli::$server_version — Retourne un entier représentant la version du serveur MySQL
mysqli::get_warnings — Lit le résultat de SHOW WARNINGS
mysqli::$info — Retourne des informations à propos de la dernière requête exécutée
mysqli::init — Initialise MySQLi et retourne une ressource à utiliser avec mysqli_real_connect()
mysqli::$insert_id — Retourne l'identifiant automatiquement généré par la dernière requête
mysqli::kill — Demande au serveur de terminer un thread MySQL
mysqli::more_results — Vérifie s'il y a d'autres jeux de résultats MySQL disponibles
mysqli::multi_query — Exécute une requête MySQL multiple
mysqli::next_result — Prépare le prochain résultat d'une requête multiple
mysqli::options — Définit les options
mysqli::ping — Ping la connexion au serveur et reconnecte si elle n'existe plus
mysqli::poll — Vérifie l'état de la connexion
mysqli::prepare — Prépare une requête SQL pour l'exécution
mysqli::query — Exécute une requête sur la base de données
mysqli::real_connect — Ouvre une connexion à un serveur MySQL
mysqli::real_escape_string — Protège les caractères spéciaux d'une chaîne pour l'utiliser dans une requête SQL, en prenant en compte le jeu de caractères
115
116
courant de la connexion
mysqli::real_query — Exécute une requête SQL
mysqli::reap_async_query — Lit un résultat pour une requête asynchrone
mysqli::refresh — Rafraîchit
mysqli::release_savepoint — Supprime le point de sauvegarde nommé du jeu des points de sauvegarde de la transaction courante
mysqli::rollback — Annule la transaction courante
mysqli::rpl_query_type — Retourne le type de requête RPL
mysqli::savepoint — Définit un point de sauvegarde nommé de la transaction
mysqli::select_db — Sélectionne une base de données par défaut pour les requêtes
mysqli::send_query — Envoie la requête et retourne
mysqli::set_charset — Définit le jeu de caractères par défaut du client
mysqli::set_local_infile_default — Rétablit le gestionnaire par défaut pour la commande LOAD LOCAL INFILE
mysqli::set_local_infile_handler — Définit une fonction de rappel pour la commande LOAD DATA LOCAL INFILE
mysqli::$sqlstate — Retourne l'erreur SQLSTATE de la dernière opération MySQL
mysqli::ssl_set — Utilisée pour établir une connexion sécurisée avec SSL
mysqli::stat — Obtient le statut courant du système
mysqli::stmt_init — Initialise une commande MySQL
mysqli::store_result — Transfère un jeu de résultats à partir de la dernière requête
mysqli::$thread_id — Retourne l'identifiant du thread pour la connexion courante
mysqli::thread_safe — Indique si le support des threads est activé ou pas
mysqli::use_result — Initialise la récupération d'un jeu de résultats
mysqli::$warning_count — Retourne le nombre d'avertissements générés par la dernière requête
La classe Mysqli_result :
mysqli_result — La classe mysqli_result
mysqli_result::$current_field — Récupère la position courante d'un champ dans un pointeur de résultat
mysqli_result::data_seek — Déplace le pointeur interne de résultat
mysqli_result::fetch_all — Lit toutes les lignes de résultats dans un tableau
mysqli_result::fetch_array — Retourne une ligne de résultat sous la forme d'un tableau associatif, d'un tableau indexé, ou les deux
mysqli_result::fetch_assoc — Récupère une ligne de résultat sous forme de tableau associatif
mysqli_result::fetch_field_direct — Récupère les métadonnées d'un champ unique
mysqli_result::fetch_field — Retourne le prochain champs dans le jeu de résultats
mysqli_result::fetch_fields — Retourne un tableau d'objets représentant les champs dans le résultat
mysqli_result::fetch_object — Retourne la ligne courante d'un jeu de résultat sous forme d'objet
mysqli_result::fetch_row — Récupère une ligne de résultat sous forme de tableau indexé
mysqli_result::$field_count — Récupère le nombre de champs dans un résultat
mysqli_result::field_seek — Déplace le pointeur de résultat sur le champ spécifié
mysqli_result::free — Libère la mémoire associée à un résultat
mysqli_result::$lengths — Retourne la longueur des colonnes de la ligne courante du jeu de résultats
mysqli_result::$num_rows — Retourne le nombre de lignes dans un résultat

</pre>
