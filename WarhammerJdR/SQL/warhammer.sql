CREATE TABLE `wh_lexique` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom VARCHAR(50),
  descourte VARCHAR(255),
  deslongue VARCHAR(600)
)

INSERT INTO wh_lexique (
  id, 
  nom, 
  deslongue, 
  descourte
)
VALUES
(
	3,
  'Acrobaties équestres',
	'Maxi : Bonus d\'Agilité.
  Tests : Tests d\'Esquive à cheval, Chevaucher (Cheval).
	Vous êtes capable de prouesses incroyables à cheval. Vous pouvez utiliser n\'importe laquelle de vos Compétences Représentation et Esquive non modifiée, quand vous êtes à cheval. De plus, quand vous êtes en selle, vous pouvez effectuer votre Mouvement au début du round au lieu de votre Tour.',
  ''
),

(
  4,
  'Affable',
  'Maxi : 1.
  Vous gagnez un bonus permanent de +5 à votre Caractéristique Sociabilité de départ (qui ne compte pas comme des Augmentations',
  '+5 permanent à la Caractéristique Sociabilité'
),

(
  5,
  'Affinité avec les animaux',
  'Maxi : Bonus de Force Mentale.
  Tests : Emprise sur les animaux.
  Les animaux sauvages se sentent en confiance en votre présence et ont tendance à vous suivre. Toutes les créatures avec le Trait Bestial non entrainées à être belliqueuses seront automatiquement calmes en votre présence, à moins qu\'elles n\'aient une raison de ne pas l\'être, comme la douleur, une attaque, une yper agressivité ou un jeune à proximité',
  ''
),

(
  6,
  'Ambidextre',
  'Maxi : 2.
  Vous pouvez utiliser votre main non directrive bien mieux que la plupart des gens, grâce à votre entraînement ou à un talent inné. Vous subissez seulement une pénalité de -10 aux Tests reposant uniquement sur votre main secondaire au lieu de -20. Si vous possédez deux fois ce talent, vous ne subissez aucune pénamité',
  ' '
),

(
  7,
  'Âme pure',
  'Maxi : Bonus de Force Mentale.
  Votre âme est pure, très résistante aux déprédation du Chaos. Vous pouvez gagner un nombre de Points de Corruption supplémentaire égal à votre niveau d\'Âme pure avant d\'avoir à effectuer un Test pour savoir si vous êtes corrompu.',
  ''
),

(
  8,
  'Artilleur',
  'Maxi : Bonus de Dexterité.
  Vous pouvez recharger avec facilité les armes à Poudre noire. Ajoutez un DR égal à votre niveau d\'Artilleur à n\'import quel Test étendu pour recharger une arme à Poudre noire.',
  ''
),

(
  9,
  'Artiste',
  'Maxi : Bonus de Dexterité.
  Tests : Art (au choix).
  Vous possédez un talent naturel pour l\'art, et vous pouvez produire des dessins précis avec peu de temps et le support approprié. cette capacité offre plusieurs usages dans le jeu, allant de la création d\'avis de recherche à l\'illustration de journaux spécialisés, et présente des avantages scpécifiques déterminés par le MJ. Ajoutez également Art (au choix) à n\'importe quelle Carrière que vous entamez; si c\'est déjà inclus dans la Carrière, vous pouvez à la place acheter la Compétence pour 5PX de moins par Augmentation',
  ''
),

(
  10,
  'Assaut Féroce',
  'Maxi : Bonus d\'Agilité.
  Tests : Corps à corps quand vous effectuez des attaques supplémentaires.
  Vos coups se succèdent rapidement et pleuvent sur votre adversaire avec la fureur d\'Ulric. Une fois par round, si vous toucez un adversaire en combat rapproché, vous pouvez immédiatement dépenser un Avantage ou votre Mouvement pour effectuer une attaque supplémentaire (en supposant qu\'il vous reste votre Mouvement)',
  ' '
),

(
  11,
  'Attirant',
  'Maxi : Bonus de Sociabilité.
  Tests : Test de Charme pour influencer ceux qui vous trouvent attirant.
  Que ce soit votre regard perçant, votre corps musclé, ou peut-être l\'éclat de vos dents parfaites, vous savez comment utiliser au mieux ce que les Dieux vous ont offert. Quand vous réussissez à utiliser Charme pour influencer ceux qui vous trouvent Attirant vous pouvez choisir d\'utiliser soit le DR de votre lancer, soit le nombre des unités otneues sur votre dé. Donc, une réusite de 63 peut être utilisée comme un DR de +3',
  ' '
),

(
  12,
  'Baratiner',
  'WORK IN PROGRESS ',
  ' '
),

(
  13,
  'Battement',
  'Maxi : Bonus de CC
  Tests :  Corps à corps pour effectuer une manoeuvre de Battement.
  Vous êtes entrainé à effectuer des frappes précises controlées sur l\'arme de voter adversaire, créant une ouverture pour une attaque ou empechant simplement une attaque de vous atteindre. Pour votre Action, vous pouvez choisir Battement avant de lancer les dés. Effectuez un Test de Corps à Corps (Escrime); sur un succès, votre adversaire perd -1 Avantage et -1 de plus par DR que vous avez obtenu. Ce Test n\'est pas opposé. Ce Talent est inutile si votre adversaire ne porte pas d\'arme, ou est d\'une Taille supérieure à la vôtre.',
  ' '
),

(
  14,
  'Béni (Savoir divin)',
  'Maxi / 1.
  Vous êtes protégé par l\'un des dieux et vous povez intensifié le pouvoir de simples Prières. Vous povez à présent utiliser les Bénédictions de votre divinité. Dans dddes conditions normales, vous ne pouvez connaître qu\'un seul Savoir divin pour le Talent Béni.',
  ' '
),

(
  15,
  'Bon marcheur (Terrain)',
  'Maxi : Bonus d\'Agilité.
  Test :  Tests d\'Athlétisme pour traverser le Terrain.
  Vous êtes expérimenté dans la traversée de terrain difficiles. Vous ignorez toutes les pénalités de Mouvement lorsque vous traversez un terrain spécifique. Les spécialisation courantes incluent : Littoral, Déserts, Marécages, Rocailaux, Toundra, Régions boisées.',
  ' '
),

(
  16,
  'Bonnes jambes ',
  'Maxi : Bonus de Force.
  Vous avez des jambes solides capables de vous portez sur de grandes distances quand vous sautez. Ajoutez votre niveau de Bonus jambes à votre DR à tous les Tests d\'Athlétisme impliquant Saut. ',
  ' '
),

(
  17,
  'Bricoleur',
  'Maxi :  Bonus de Dexterité.
  Tests : Tests de Métier pour réparer des objets cassés.
  Vous êtes uen sorte de touche-à-tout, capable de réparer presque n\'importe quoi. Vous considérez toutes les Compétences Métier non magiques comme étant de Base lorsque vous réparez des objets cassés.',
  ' '
),

(
  18,
  'Brouet',
  'Maxi : Bonus d\'Endurance.
  Tests : Tests de Résistance pour résister à la faim.
  Vous avez l\'habitude de vous débrouillez avec peu, et savez comment survivre aux périodes de vache maiger. Vous pouvez subsister avec la moitié de la nourriture nécessaire sans pénalité négatives ( vous empêchant d\'avoir réellement faim), et vous avez seulement besoin d\'effectuer un Test concernant la faim tous les 3 jours et pas 2.',
  ' '
),

(
  19,
  'Caïd',
  'Maxi : 1.
  Vous avez réussi à conserver une apparence respectable malgré vos méfaits. Vous pouvez ignorer le Statut perdu à cause du Talent Criminel.',
  ' '
),

(
  20,
  'Cavalier émérite',
  'Maxi : Bonus d\'Agilité
  Tests : Chevaucher (Cheval) pendant les combats.
  Vous êtes à l\'aise en selle même dans les situations les plus difficiles, et savez comment tirer le meilleur de votre monture pendant les conflits. En supposant que vous possédez la Compétence Chevaucher, vous pouvez directement demander à votre monture d\'effectuer une Action, pas seulement un Mouvement, sans Test de Chevaucher.',
  ' '
),

(
  21,
  'Chanceux',
  'Maxi :  Bonus de Sociabilité.
  On prétend que lorsque vous êtes né, Randal a souri. Voter maximum de Points de Chance est à présent égal à votre nombre actuel de Points de Destin, plus le nombre de fois que vous avez pris Chanceux.',
  ' '
),

(
  22,
  'Charge berserk',
  'Maxi : Bonus de Force.
  Tests : Corps à Corps sur un Round lorsque vous effectuez une Charge berserk.
  Vous vous précipitez sur vos ennemis avec une témérité sans bornes, utilisant la force de votre charge pour ajouter un poids à vos frappes. Lorsque vous effectuez une Charge berserk, vous infligez +1 Dégât par niveau dans ce Talent à toutes les attaques de Corps à Corps.',
  ' '
),

(
  23,
  'Chat de gouttière',
  'Maxi : Bonus d\'Initiative.
  Test : Discrétion (Urbaine).
   Vous ëtes à l\'aise dans les ruelles sombres. Quand vous utilisez Discrétion (Urbaine), vous pouvez inverser le lancer de n\'importe quel Test raté si cela entraîne un succès.',
  ' '
),

(
  24,
  'Chirurgie',
  'Maxi : Bonus d\'Intelligence.
  Tests : Tests de Guérison en dehors des rounds de combat; par exemple, quand vous avez le temps de le faire correctement. Vous êtes un chirurgien, capable d\'ouvrir et de refermr les chairs pour soigner. Vous pouvez traiter n\'importe quelle Blessure Critique necessitant Chirurgie. Vous pouvez aussi pratiquer une Chirurgie pour résoudre des problèmes internes avec un Test étendu du Guérison Intermédiaire (+0) dont le DR cible est déterminé par le MJ ( en général 5-10) en fonction de la difficulté de la procédure en cours. Cela cause 1d10 Blessures  et 1 Etat Hémoragique, ce qui signifie que la Chirurgie a de fortes chances de tuer le patient si le praticien n\'est pas rigoureux. Après la Chirurgie, le patient doit réussir un Test de Résistance Accessible (+20) ou gagner une Infection Mineure.',
  ' '
),

(
  25,
  'Claquer le fouet',
  'Maxi : Bonus de Dexterité.
  Tests : Tests de Conduite d\'attelage ou de Chevaucher quand vous Fuyez ou lors d\'une course.
  Vous savez comment tirer le meilleur parti de vos animaux. Lorsque \'un des animaux que vous controllez Fuit ou Court, il gagne +1 en Mouvement si vous utilisez un fouet.',
  ' '
),

(
  26,
  'Coeur vaillant',
  'Maxi :  Bonus de Force Mentale.
  Tests : Tests de Calme pour retirer les Etats Brisé.
  Peu importe à quel point les choses vont mal, vous persévérez malgré tout. Vous pouvez tenter un Test de Calme pour retirer un Etat Brisé à la fin de chacun de vos Tours ainsi qu\'à la fin du round.',
  ' '
),

(
  27,
  'Combat déloyal',
  'Maxi : Bonus de CC',
  'Tests : Corps à Corps (Bagarre).
  Vous avez appris tous les coups bas du comat à mains nues. Vous pouvez choisir d\'infliger +1 Dégât supplémentaire pour chaque niveau de Combat déloyal, pour tous les coups réussis avec Corps à Corps (Bagarre).
  Remarque :  utiliser ce Talent sera considéré ciomme une tricherie dans tout combat officiel.',
  ' '
  )

(
  28,
  'Combat instinctif',
  'Maxi : Bonus d\'Initiative
  Vous réagissez aussi vite que l\'éclaire. Votre Initiative est plus élevée de 10 pour déterminer l\'Initiative de Combat.',
  ' '
),

(
  29,
  'Combattant au contact',
  'Maxi : Bonus de Dexterité.
  Tests : Corps à corps quand vous combattez au contact ou que vous allez au contact.
  Vous êtes entrainé à vous placer très près d\'un adversaire. Vous ne subissez aucune pénalité pour vous battre contre un adversaire avec une arme plus longue que la vôtre. De plus, si vous utilisez les règles optionnelles de Combat au contact, gagnez un bonus de +10 pour toucher votre adversaire.',
  ' '
),

(
  30,
  'Combattant en espace clos',
  'Maxi : Bonus d\'Agilité.
  Tests : Esquive dans les environnements clos.
  Vous avez appris à tirer le meilleur parti des combats en espace clos. Vous ignorez les pénalités de Corps à corps causées par les espaces confinés, commes les tunnels, les ligne de front, les petites fosses de combat et endroits similaires, et vous pouvez utiliser la Compétence Esquive, même si c\'est normalement impossible à cause du manque d\'espace.',
  ' '
),

(
  31,
  'Concocter',
  'Maxi : Bonus d\'Intelligence.
  Tests : Savoirs (Apothicaire).
  Vous êtes doué pour la fabrication de potions, de philtres et des décoctions. Vous pouvez effectuer gratuitement un Activité Artisanat pour utiliser savoir (Apothicaire) sans voir besoin d\'Atelier. Les autres Activités Artisanat suivent les règles normales.',
  ' '
),

(
  32,
  'Contorsioniste',
  'Maxi : Bonus d\'Agilité.
  Tests : Représentation et Agilité quand vous vous aidez de Contorsioniste.
  Vous pouvez plier votre corps en une myriade de positions apparemement anormales. Cela vous permet de vous glisser dans des espaces improbables et de manipuler votre corps de façon incroyable, vous offrant des Avantages accordés par le MJ, avec éventuellement un Test d\'Agilité réussi.',
  ' '
),

(
  33,
  'Contrôle de la Frénésie',
  'Maxi : Bonus de Force Mentale.
  Tests :  Test de Corps à corps quand vous êtes en Frénésie.
  Vous êtes davantage en mesure de contrôler votre Frénésie en combat. vous pouvez y mettre fin avec un Test de Calme réussi à la fin du round.',
  ' '
),

(
  34,
  'Coopératif',
  'Maxi : Bonus de Sociabilité.
  Tests : Tests sociaux pour influencer un supérieur.
  Vous savez ce qu\'il faut dire et à quel moment pour avoir le plus d\'impact sur vos supérieurs. Quand vous utilisez avec succès une Compétence sociale pour influencer ceux qui possèdent un plus haut Statut, vous pouvez choisir d\'utiliser soir le DR, soit le chiffre des Unités du dé. Donc un succès de 46 peut être utilisé comme un DR de +6.',
  ' '
),

(
  35,
  'Costaud',
  'Maxi :  Bonus de Force.
  Tests : Tests de Force quand vous soulevez.
  Vous êtes musclés et habitué à porter des charges lourdes. Augmentez les Points d\'Ecombrement d\'un nombre égal à votre niveau de Costaud x2.',
  ' '
),

(
  36,
  'Coude-à-coude',
  'Maxi : Bonus de CC.
  Tests : Corps à corps quand vous vous trouvez à côté d\'un allié avec Coude-à-coude.
  Vous avez été formé à combattre côte à côte avec d\'autres soldats. Si un ennemi vous fait perdre des Avantages alors qu\'il se tient à côté d\'un allié actif possédant le Talent Coude-à-coude, vous pouvez conserver 1 Avantage perdi pour chaque fois que vous avez pris le Talent Coude-à-coude.',
  ' '
),

(
  37,
  'Coup puissant',
  'Maxi : Bonus de Force.
  Vous savez comment frapper fort ! Vous infligez votre niveau de Coup puissant en Dégâts supplémentaires avec des armes de Corps à corps.',
  ' '
),

(
  38,
  'Criminel',
  'Maxi : Aucun. WORK IN PROGRESS
  ',
  ' '
),

(
  39,
  'Désarmer',
  'Maxi : Bonus d\'Initiative.
  Tests : Tests de Corps à corps concernant ce Talent.
  Vous êtes capable de désarmer un adversaire d\'un coup de poignet judicieux ou grâce à une frappe bien ciblée à la main. Pour une Action, vous pouvez tenter un Test opposé Corps à Corps/ Corps à corps. Sur un succès, votre adversaire perd une arme. Ce Talent ets inutile si votre adversaire n\'a pas d\'arme ou s\'il est d\'une Taille supérieure à la vôtre.',
  ' '
),

(
  40,
  'Destinée',
  'Maxi : 1.
  A l\'âge de 10 ans, un Prêtre de Mort aussi appelé Augure, vous a prisà part pour prédire votre mort lors d\'un rituel de pasasge à l\'âge adulte, lourd d\'encens, appelé la Destinée. En accord avec votre MJ, proposez une Destinée appropriée. Si votre Personnage meurtd\'une façon y correspondant, votre prochain Personnage gagnera un bonus égal à la moitiié du total de PX accumulé par votre Personnage mort pendant la partie.',
  ' '
),

(
  41,
  'Détection d\'artefact',
  'Maxi : Bonus d\'Initiative.
  Tests : Tests d\'Intuition opur détecter des artefacts magiques.
  Vous êtes capable de déceler quand la magie réside dans un artefact. Vous pouvez tenter un Test d\'Intuition pour n\'importe quel artefact magique touché. Sur un succès, vous sentez que l\'objet est magique; de plus, chaque DR apprend également une règle spéciale spécifique concernant l\'objet, s\'il en possède. En principe, vous ne pouvez tenter ce Test qu\'une seule fois par artefact.',
  ' '
),

(
  42,
  'Déterminé',
  'Maxi : Bonus de Force.
  Vous lancez des attaques avec une détermination acharnée. ajoutez votre niveau de Talent Déterminé à votre Bonus de Force quand vous Chargez.',
  ' '
),

(
  43,
  'Diction instinctive',
  'Maxi : Bonus d\'Initiative.
  Tests : Langue (Magick) quand vous faites une Incantation.
  Vous comprenez instinctivement la langue Magick et êtes capable d\'articuler rapidement les phrases les plus complexes sans erreur. Vous ne subissez pas d\'Incantation Imparfaite si vous obtenez un double à un Test de Langue (Magick)',
  ' '
),

(
  44,
  'Discret',
  'Maxi : Bonus d\'Agilité.
  Tests : n\'importe quel Test implicant Filature.
  Vous êtes doué pour suivre les ges sans vous faire remarquer. Vous pouvez utiliser les règles de Filature sans effectuer de Test combiné. Au lieu de celaa, vous effectuez simplement un Test de Perception ou de Discrétion, en fonction au plus élévé.',
  ' '
),

(
  45,
  'Distraire',
  'Maxi : Bonus d\'Agilité.
  Tests : Athlétisme pour Distraire.
  Vous êtes formé à effectuer des mouvements simples pour distraire ou surprendre votre adversaire, détournant les regards de votre véritable intention? Vous pouvez utiliser vote Mouvement pour Distraire. ceci se résoud par un Test opposé d\'Athlétisme/Calme. sur un succès, votre adversairene gane pas d\'Avantage jusqu\'à la fin du prochain round.',
  ' '
),

(
  46,
  'Doigts de fée.'
  'Maxi : 1.
  Vous gagnez un bonus permanent de +5 à votre Dexterité de départ (ne compte pas comme des Augmentations).',
  ' '
),

(
  47,
  'Doué en calcul',
  'Maxi : Bonus d\'Intelligence.
  Tests : Evaluation, Pari.
  Vous avez un don pour calculer et trouvez facilement la solution de la plupart des problèmes mathématiques. Vous pouvez utiliser une simple calculatrice pour simuler le fait que votre PJ est capable de compter mentalement.',
  ' '
),

(
  48,
  'Dur à cuire',
  'Maxi : Bonus d\'Endurance.
  Vous gagnez autant de Points de Blessure supplémentaires que votre Bonus d\'Endurance. Si ce dernier augmente, le nombre de Points de Blessure conféré par Dur à cuire augmente également.',
  ' '
),

(
  49,
  'Effraction',
  'Maxi : Bonus de Force.
  Tests : Corps à corps quand vous forcez ou brisez des objets inanimés.
  Vous êtes expert pour défoncer rapidement les portes et effectuer les effractions. Vous pouvez ajouter +1 Dégât pour chaque niveau dans ce Talent quand vous déterminez les Dégâts infligés à des objets inanimés, tels que des fenêtres, des coffres, des portes et objets similaires.',
  ' '
),

(
  50,
  'Effrayant',
  'Maxi : Bonus de Force.
  Toute personne saine d\'esprit réfléchità deux fois avant de vous approcherr. Si vous le souhaitez, vous avez un indice de peur de 1. Ajoutez +1 à cet indice par nombre de fois supplémentaire que vous avez pris ce Talent.',
  ' '
),

(
  51,
  'Endurci',
  'Maxi :  Bonus d\'Endurance.
  Il en faut beaucoup pour vous achever. Vous pouvez ignorer le Point de Blessure perdu à cause d\'un Etat Hémoragique supplémentaire.',
  ' '
),

(
  52,
  'Ergoteur',
  'Maxi : Bonus de Sociabilité.
  Tests : Tests de Charme quand vous argumentez ou débattez.
  Vous êtes habitué à faire valoir vos opignons et à les imposer. Si vous réussissez un Test de Charme pour débattre avec un adversaire, vous pouvez choisir soir d\'utiliser le DR de votre lancer, soit le chiffre des unités obtenu sur votre dé. Donc, un lancer réussi de 24 peut être utiliseé comme un DR de +4.',
  ' '
),

(
  53,
  'Escroquer',
  'Maxi : Bonus d\'Intelligence.
  Tests : Intelligence (Escroquerie).
  Vous êtes doué pour détourner l\'argent de vos employeurs sans vous faire prendre. Chaque fois que vous Gagnez de l\'argent (pendant le jeu ou en effectuant un Activité Revenus), vous pouvez tenter un Test opposé d\'Intelligence avec votre employeur (en partant du principe que vous en avez un). Si vous gagnez, vous détournez 2d10 + DR sous de bronze, 1d10 + DR pistoles d\'argent, ou 1 + DR couronnes d\'or (en fonction de la taille de la transaction en question, déterminée par le MJ) sans vous faire prendre. Si votre employeur gagne de +6 DR, vous gagnez votre argent, mais votre Escroquerie est repérée; ce qui arrive ensuite est laissé à l\'appréciation du MJ. Tout autre résultat signifie que vous avez échoué à escroquer de l\'argent.',
  ' '
),

(
  54,
  'Exaltant',
  'Maxi : Bonus de Sociabilité.
  Tests : Commandement pendant la guerre.
  Vos appels exaltants peuvent renverser le cours d\'une bataille. Référez-vous au tableau pour voir combien de personnes vous pouvez à présent influencer avec votre Compétence Commandement lors d\'une guerre.',
  ' '
),

(
  55,
  'Faire la manche',
  'Maxi : Bonus de Sociabilité.
  Tests : Charme (Mendicité).
  Vous êtes un mendiant expérimenté, capable de faire mettre la main à la poche mêem aux individus les plus cyniques. Vous pouvez effectuer un Test de Charme toutes les demis-heures quand vous Mendiez, et non toutes le sheurs.',
  ' '
),

(
  56,
  'Feinte',
  'Maxi : Bonus de CC.
  Tests : Corps à corps (Escrime) pour les Feintes.
  Vous avez appris comment faire de fausses attaques en combat rapproché pour duper votre adversaire. Vous pouvez à présent faire une Feinte pour votre Action contre tout adversaire utilisant un arme. cela est résolu avec un Test opposé Corps à corps (Escrime)/Corps à corps. Si vous gagnez et que vous attaquez le même adversaire avant la fin du prochain Round, cette prochaine attaque ne peut être opposé par votre adversaire.',
  ' '
),

(
  57,
  'Ferveur ardente',
  'Maxi : Bonus de Sociabilité.
  Tests : Charme quand vous parlez pour défendre votre cause, votre situation ou votre religion, vos mots vibrent de passion et d\'ardente ferveur. Vous pouvez doubler votre Sociabilité pour calculer le niombre de personnes que vous influencez avec votre Talent Orateur quand vous défendez votre cause',
  ' '
),

(
  58,
  'Flagellant',
  'Maxi : Bonus d\'Endurance.
  Tests : Tout Test pour résisteraux Puissances de la Ruine.
  Quand vous avez voué votre douleur au service de votre Dieu. Chaque jour, vous devez passer une demi-heure à prier en continuant à vous infliger un nombre de Blessures égal à votre Niveau de Flagellant. Après cela, si vous possédez le Talent Frénésie, vous pouvez entrer en Frénésie immédiatement sans effectuer de Test. Le Talent Frénésie est ajouté à la liste des Talents de n\'importe quelle de vos Carrière. Si vous ne réussissez pas à vous flageller un jour donné, ou si vous permettez à votre chair meurtrie de guerir, vous ne pouvez dépenser aucune Résilience et aucune Détermination jusqu\'à une nouvelle flagellation',
  ' '
),

(
  59,
  'Flairer les ennuis ',
  'Maxi : Bonus d\'Initiative.
  Tests : N\'importe quel Test pour repérer les Perturbateurs.
  Vous avez l\'habitude de vous retrouver dans de meuvaises sitations, et de préférence à vous en sortir. Vous pouvez tenter un Test d\'Intuition pour repérer ceux qui cherchent à créer des problèmes ou à vous faire du mal, même si cela ne devrait normalement pas vous accorder de Test (à cause de Talents ou d\'un Sort par exemple). Ce Test sera probablement opposé si d\'autres sont dissimulés, et le MJ peut préférer effectuer ce Test en votre nom pour que vous ne connaissiez pas le résultat en cas d\'échec. Si les perturbateurs repérés engagent le combat, vous pouvez ignorer n\'importe quel Etat Surpris qu\'ils auraient en principe infligé. ',
  ' '
),

(
  60,
  'Frappe assommante',
  'Maxi : Bonus de CC.
  Tests : Tests de Corps à corps^lorsque vous effectuez une Frappe assommante.
  Vous savez où frapper un adversaire pour le faire tomber rapidement. Vous ignorez la pénalité due à la désignation d\'une Localisation pour frapper à la Tête quand vous utilisez une arme de Corps à corps avec l\'Atout Assommante. De plus vous considérez toutes les armes improvisées comme ayant l\'Atout Assommante.',
  ' '
),

(
  61,
  'Frappe blessante',
  'Maxi : Bonus d\'Initiative.
  Vous êtes un expert pour frapper vos ennemis aux endroits les plus vulnérables. Vous infligez votre niveau de Frappe blessante en Blessures supplémentaire^s quand vous causez une Blessure Critique.',
  ' '
),

(
  62,
  'Frappe précise',
  'Maxi : Bonus d\'Initiative.
  Vous êtes doué pour frapper votre ennemi exactement là où vous le voulez, que ce soit à Distance ou au Corps à corps. Vous pouvez modifier votre résultat de la Localisation jusqu\'à +/-10 par nombre de fois où vous avez pris ce Talent. Donc si vous avez pris deux fois ce Talent et obtenez la Localisation 34, Bras droit, vous pouvez le modifier en 14, Bras gauche, ou en 54, Corps.',
  ' '
),

(
  63,
  'Frappe réactive',
  'Maxi : Bonus d\'Initiative.
  Tests : Tests d\'Initiative pour tout ce qui concerne ce Talent.
  Vos réactions rapides vous ont permis de faire tomber de nombreux ennemis avant même qu\'ils aient eu le temps de dégainer. Quand vous avez Chargé, vous pouvez tenter un Test d\'Initiative Intermédiaire (+0) pour gagner immédiatement une Attaque gratuite en dehors de la séquence de tours normale. cette attaque est résolue  avec n\'importe quelle arme que vous tenez dans votre main principale. Vous pouvez effectuer autant de Frappes réactives pendant un round que vous possédez de Niveaux dans ce Talent, mais pouvez seulement attaquer chaque individu Chargé une seule fois.',
  ' '
),

(
  64,
  'Frénésie ',
  'Maxi : 1.
  Vous pouvez entrer en Frénésie.',
  ' '
),

(
  65,
  'Fuite !',
  'Maxi : Bonus d\'Agilité.
  Tests : Athlétisme quand vous Fuyez.
  Quand votre vie ets en jeu, vous êtes capable de courir à une vitesse impressionnante. Votre Attribut de Mouvement compte comme s\'il était augmenté de 1 quand vous fuyez.',
  ' '
),

(
  66,
  'Grand orateur',
  'Maxi : Bonus de Sociabilité.
  Vous êtes doué poru enflammer les foules. Vous gagnez un Bonus de DR égal à vos niveaux de Grand orateur à n\'importe quel Test de Charme quand vous parlez en public devant une foule. ',
  ' '
),

(
  67,
  'Grimpeur',
  'Maxi : Bonus de Force.
  Tests : Escalade.
  Vous êtes un exceptionnel grimpeur. Vous pouvez tenter de grimper même sur des surfaces paraissant trop lisses, telles que les fortifications à pic, des plateformes glacées, des murs enduits de plâtre, etc. et vous ignorez toutes les pénalités aux tests d\'Escalade résultant de la difficulté de la surface escaladée.',
  ' '
),

(
  68,
  'Guerrier né',
  'Maxi : 1.
  Vous gagnez un bonus permanent de +5 à votre Caractéristique CC de départ (ne compte pas dans les Augmentations)',
  ' '
),

(
  69,
  'Guide fluvial',
  'Maxi : Bonus d\'Initiative.
  Tests : N\'importe quel Test de Savoir concernant les questions fluviales.
  Vous connaissez toutes les astuces pour naviguer sur les rivières dangereuses. Vous n\'avez pas besoin de Test pour traverser les étendues d\'eau perfides jusqu\'à ce que la Difficulté soit de -10 ou moins - vous réussissez automatiquement tous les Tests plus faciles. De plus, si vous possédez la Compétence Savoir (Région) approprié, vous n\'avez jamais besoin d\'effectuer de Test pour naviguer sur les eaux dangereuses - car on considère que vous connaissez à emprunter.',
  ' '
),

(
  70,
  'Haine sacrée',
  'Maxi :  Bonus de Sociabilité.
  Vos prières exhalent la haine que vous éprouvez pour vos ennemis blasphématoires. Vous infligez +1 Dégâts avec des Miracles pour chaque niveau dans ce Talent.',
  ' '
),

(
  71,
  'Haine (Groupe)',
  'Maxi : Bonus de Force Mentale.
  Tests : Force Mentale (Groupe à combattre).
  Vous êtes consumé par la haine  pour quelque chose dans le Vieux Monde. Chaque fois que vous prenez ce Talent, vous développez une certaine haine envers un nouveau groupe. Voici quelques exemples de groupe que vous pouvez haïr : hommme-bêtes, peaux-vertes, monstres, hors-la-loi, sigmarites, morts-vivants, Sorciers sauvages.',
  ' '
),

(
  72,
  'Harmonisation aethyrique',
  'Maxi : Bonus d\'Initiative.
  Test : Focalisation (au choix).
  Votre expérience, Talent ou entraînement vous permet de manipuler de façon plus sûre les Vents de la Magie. Vous ne subissez pas d\'Incantation Imparfaite si vous obtenez un double à un Test de Focalisation.',
  ' '
),

(
  73,
  'Identité Secrète',
  'Maxi : Bonus d\'Intelligence,
  Tests : Tests de Divertissement (Comédie) pour appuyer vos identités secrètes.
  Vous entretenez une identité secrète qui vous permet de paraître plus riche, ou peut-être plus pauvre, que vous ne l\'êtes actuellement. Avec l\'accord du MJ, choisissez une Carrière. Tant que vous êtes habillé de façon approprié, vous pouvez utiliser le Statut Social de la Carrière d\'emprunt choisie plutôt que celui de la vötre, pour modifier les Tests de Sociabilité. Vous pouvez même ignorer le Talent Criminel. Cependant, conserver cette identité nécessitera des Tests de Divertissement (Comédie) quand vous rencontrez ceux qui pourraient déceler votre supercherie. Vous pouvez créer une nouvelle Identité secrète pour chaque niveau que vous possédez dans ce Talent.',
  ' '
),

(
  74,
  'Imitation',
  'Maxi : Bonus d\'Initiative.
  Tests : Tests de Divertissement (Comédie) où les accents sont importants.
  Vous avez une bonne oreille pour les accents et dialectes et pour les reproduire avec exactitude. Vous pouvez copier n\'importe quel accent auquel vous êtes exposé pendant au moins une journée grâce à un Test d\'Initiative; ce Test peut être tenté une fois par jour. une fois réussi, vous pouvez toujours imiter l\'accent, et les autochtones croiront que vous êtes l\'un des leurs.',
  ' '
),

(
  75,
  'Imperturbable',
  'Maxi : 1.
  Vous gagnez un bonus permanent de +5 à votre Caractéristique FM de départ (ne compte pas comme des Augmentations).',
  ' '
),

(
  76,
  'Impitoyable',
  'Maxi : Bonus d\'Agilité.
  Quand votre esprit est rivé sur une cible, personne ne peut vous empêcher de l\'atteindre. Si vous utilisez des Avantages quand vous vous Désengagez, vous pouvez garder un nombre d\'Avantages égal à votre Niveau d\'Impitoyable. De plus, vous pouvez utiliser des Avantages pour vous Désengager même si vous avez mmoisn d\'Avantages que vos adversaires.',
  ' '
),

(
  77,
  'Inébranlable',
  'Maxi : Bonus de Force Mentale.
  Tests : Tests de Calme poru résister à la panique de la Poudre noire.
  Vous êtes un vétéran blasé qui a survécu à plus d\'une rafale de tirs d\'armes à Poudre noire. Vous avez besoin d\'effectuer un Test de Calme pour résister à un Etat Brisé, uniquement si vous êtes blessé avec succès par une arme à Poudre noire, et pas juste touché.',
  ' '
),

(
  78,
  'Infatigable',
  'Maxi : Bonus de Force.
  Tests : Ramer et Natation.
  Vous avez l\'échine solide, rompue au dur labeur. Vous pouvez ajouter vos Niveaux d\'Infatigable à votre DR dans tous les Tests opposés de Force et vous pouvez porter un nombre de Points supplémentaires d\'Encombrement équivalent à votre Niveau d\'Infatigable.',
  ' '
),

(
  79,
  'Insignifiant',
  'Maxi : Bonus de Sociabilité.
  Tests : Discrétion quand vous êtes à la vue de tous.
  Les grands et puissants ne prêtent pas attention à votre présence, sachant que vous n\'êtes pas digne d\'être remarqué. En supposant que vous êtes correctement vêtu et pas dans une position incongrue, les personnes d\'un Echelon de Statut plus haut vous ignorent, à moins que votre présence ne soit déplacée, ce qui peut rendre très facile l\'écoute de conversations que vous n\'êtes peut-être pas censé entendre. de plus les Personnages d\'un Echelon de Statut plus élevé que vous ne gagnent pas d\'Avantages lorsqu\'ils vous battent en combat, car il n\'y a aucun mérite à battre un si pauvre hère.',
  ' '
),

(
  80,
  'Intrigant',
  'Maxi : Bonus d\'Intelligence.
  Tests : Tests d\'Intelligence pour tout ce qui concerne ce Talent.
  Vous êtes un maïtre en politique et vous dénichez les conspirations partout où elles se cachent. Une fois par session, vous pouvez poser une question au MJ concernant un situation politique ou une organisation sociale complexe; le MJ effectuera un Test d\'Intelligence secret et vous fournira certaines observations sur la situation en se basant sur votre DR. ',
  ' '
),
