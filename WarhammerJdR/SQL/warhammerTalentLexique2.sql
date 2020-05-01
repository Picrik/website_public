CREATE TABLE `wh_lexique` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom VARCHAR(50),
  descourte VARCHAR(255),
  deslongue VARCHAR(600)
)

INSERT INTO wh_lexique ( 
  nom, 
  deslongue,
  descourte
)
VALUES
(
  'Invocation (Savoir divin)',
  'Maxi : 1.
  Vous êtes béni par l\'un des dieux, et pouvez donc effectuer l\'un des Miracles de votre culte. De plus, vous pouvez acheter des Miracles supplémentaires pour 100PX par Miracle que vous connaissez actuellement. Donc, si vous connaissez déjà 3 Miracles, votre prochain Miracle vous coûtera 300PX. Dans des conditions normale, vous ne pouvez pas apprendre plus d\'un Talent Invocation (Savoir divin). De plus, vous ne pouvez pas apprendre les Talents Magie mineure ou Magie des Aracnes quand vous possédez le Talent Invocation. Vous pouvez désapprendre ce Talent pour 100PX, mais vous perdrez tous vos Miracles si vous le faites, et vous encourrez l\'etrême défaveur de votre Dieu, dont les effets sont déterminés par le MJ.',
  ''
),

(
  'Lecture rapide',
  'Maxi : Bonus d\'Intelligence
  Tests :  Recherche et Langue si la vitesse de lecture est importante.
  Vous lisez les livres à une cadence effrenée. Vous pouvez inverser un Test de Recherche raté si cela permet de le réussir. Si la vitese à laquelle vous lisez est importante pendant un combat, un Test de Langue réussi vous permet de lire et de bien comprendre un nombre de page par Round égal à votre DR plus votre niveau de Lecture rapide (minimum 1, même si vous avez raté le Test)',
  ' '
),

(
  'Lire sur les lèvres ',
  'Maxi : Bonus d\'Initiative.
  Tests : Tests de Perception pour tout ce qui concerne ce Talent.
  Vous pouvez comprendre ce que les gens disent en fixant simplement leurs lèvres; vous n\'avez pas besoin d\'entendre ce qu\'ils disent. si vous disposez d\'un point de vue dégagé sur le bas du visage du locuteur, vous pouvez tenter un Test de Perception pour comprendre ce qu\'il dit.',
  ' '
),

(
  'Loup de mer',
  'Maxi : Bonus d\'Agilité.
  Tests : Voile (tout vaisseaux en état de naviguer).
  Vous êtes un marin expérimenté, et vous êtes parfaitement habitué à la vie en mer. Vous pouvez ignorer tous les modificateurs négatifs aux Tests en mer résultant de conditions météorologiques défavorables, du roulis des bateaux, et situations similaires. De plus, vous comptez comme deuc marins pour le nomber minimum de membres d\'équipage necessaire pour piloter un navire de haute mer.',
  ' '
),

(
  'Mage de guerre',
  'Maxi : 1.
  Vous êtes entrainé à faire appel à la magie au milieu du combat. A votre Tour, vous pouvez lancer gratuitement un Sort avec un Niveau d\'Incantation de 5 ou moins, sans utiliser votre Action. Cependant, si vous le faites, vous ne pouvez lancer aucun autre Sort ce Tour.',
  ' '
),

(
  'Magie des Arcanes (Domaine)',
  'Maxi : 1.
  Vous connaissez l\'un des huit Domaines de Magie - Bêtes, Cieux, Mort, Feu, Metal, Ombres, Lumière ou Vie -, ou prz un Savoir moins connu, comme la Magie sauvage ou la Nécromancie. Vous pouvez à présent mémoriser des Sorts du Domaine choisi. - WIP - ',
  ' '
),

(
  'Magie du Chaos (Domaine) ',
  'Maxi : Aucun.
  par accident ou à dessein, vous avez cédé une partie de votre âme à l\'un des Sombres dieux, et pouvez à présent pratiquer les infâmes magies du Chaos. Votre chef de la Ruine vous confère immédiatement l\'accès à un seul Sort du Domaine choisi (le plus souvent les Domaines de Nurgle, Slananesh ou Tzeentch) et vous agnez un Point de Corruption lorsque le Sort s\'insinue dans votre esprit, pour ne plus jamais en sortir. Lorsque vous prenez ce Talent, qui coûte à chaque fois 100PX, vous apprenez un autre Sort du Domaine choisi et gagnez un Point de Corruption. Dans des conditions normales, vous ne pouvez connaître qu\'un seul Savoir de Magie chaotique. ',
  ' '
),

(
  'Magnum Opus',
  'Maxi : aucun.
  Vous êtes un maître incontesté dans votre domaine, capable de créer des oeuvres d\'une telle complexité que les autres ne peuvent que rester cois et s\'émerveiller devant votre génie. Chaque fois que vous prenez ce Talent, vous pouvez créer une oeuvre d\'art exceptionnelle avec l\'une de vos Compétences Métier. Cette oeuvre est inégalable dans votre domaine, une pièce unique qui impressionnera toujours, vous octroyant des bonus, déterminés par le MJ, le plus souvent à vos Tests de Sociabilité envers ceux qui connaissent votre oeuvre stupéfiante. Vendre cette pièce vous rapportera au moins dix fois sa valeur normale, et parfois bien plus. ',
  ' '
),

(
  'Mains agiles',
  'Maxi : Bonus de Dexterité.
  Tests : Escamotage, Corps à corps (Bagarre) pour toucher un adversaire.
  Vous pouvez mouvoir vos mains avec une dexterité incroyable. Les passents ne bénéficient d\'aucun Test de Perception passif pour remarquer que vous utilisez la Compétence Escamotage. Au lieu de cela, ils ne peuvent s\'opposer à vos Tests d\'Escamotage que s\'ils vous suspectent activement ou recherchent vos manipulations. De plus, les tentatives pour utiliser Corps à corps (Bagarre) pour simplement toucher un adversaire gagnent un bonus de +10 x votre Niveau de Mains agiles. ',
  ' '
),

(
  'Maître artisan (Métier) ',
  'Maxi : Bonus de Dexterité.
  Tests : Métier (au choix).
  Vous possédez un vrai talent créatif. Ajoutez la Compétence Métier associé à n\'importe quelle Carrière que vous entamez. Si la Compétence Métier est déjà incluse dans votre Carrière, vous pouvez à la place acheter la Compétence pour 5PX de moins par Augmentation. ',
  ' '
),

(
  'Maître en déguisement',
  'Maxi : Bonus de Sociabilité.
  Tests : Divertissement (Comédie) lorsque vous êtes quelqu\'un d\'autre.
  Vous excellez à prendre l\'apparence et les manières des autres. Avec rien d\'autre que des changements de posture, une torsion du visage et l\'utilisation judicieuse de vêtements appropriés, vous ne vous ressemblez plus sans avoir besoin d\'utiliser de necessaire de déguisement, même en vous faisant passerpour quelqu\'un de sexe différent. ',
  ' '
),

(
  'Maîtrise des dés',
  'Maxi : Bonus d\'Intelligence.
  Tests : Pari et Escamotage quand vous jouez à un jeu de dés.
  Vous êtes un maître des jeux de dés, et tous ceux qui affirment que vous trichez ont clairement tort. Quand vous utilisez Pari ou Escamotage de façon réussie avec des dés, vous pouvez choisir soit d\'utiliser le DR obtenu, soit le chiffre des unités du dé. Donc, un lancé réussi de 06 peut être utilisé comme un DR de +6. Si vous jouez à des jeux de dés réels pour représenter celui en jeu, lancez toujours un nombre de dés supplémentaires égal à votre niveau de Maîtrise des dés et choisissez les meilleurs résulats. ',
  ' '
),

(
  'Maitrise du Combat',
  'Maxi : Bonus d\'Agilité.
  Vous avez accumulé des années d\'expérience au combat, ce qui vous permet de tenir facilement les combattants les plus faibles à distance. Pour chaque fois que vous avez ce Talent, vous comptez, comme une personne supplémentaire lors du calcul pour déterminer si l\'un des camps dépasse l\'autre en nombre. Ce Talent n\'entre en jeu que lorsque vous êtes dépassé en nombre. ',
  ' '
),

(
  'Maniement de deux armes ',
  'Maxi : Bonus d\'Agilité.
  Tests : Corps à corps ou Ramer si vous attaquez avec deux armes.
  QUans vous êtes équipé de deux armes, vous pouvez attaquer avec les deux pour votre Action. Effectuez un lancer pour toucher avec l\'arme tenue par votre main principale. Si vous touchez, déterminez les Dégâts normalement, mais rappelez-vous de conserver votre lancer de dés, car vous l\'utiliserez de nouveau. Si la première frappe est réussie, une fois résolue, l\'arme dans votre main secondaire peut ensuite viser un adversaire disponible de votre choix en utilisant le même lancer de dés que celui de la première frappe, mais inversé. Donc si vous avez obtenu 34 pour toucher avec la première arme, vous obtenez 43 pour toucher avec la seconde.Rappelez-vous de modifier ce second lancer avec la pénalité de votre mauvaise main (-20 à moins que vous ne possédiez le Talent Ambidextre). Cette seconde attaque ets opposé à un nouveau lancer de défense et les Dégâts pour cette seconde frappe sont calculés normalement. Une exception à cela : si vous obtenez un Critique pour votre première frappe. Si cela se prodiut, utilisez le lancer du tableau des Critiques pour servir de lancer à la seconde attaque. Donc si vous infligez un Critique à la tête et lancez un 56 sur le tableau des Critiques et obtenez une Blessure majeure à l\'oeil. Votre seconde attaque aurait donc une valeur de 56. Si vous choisissez d\'attaquer avec les deux armes, tous vos lancers défensifs subissent une pénalité de -10 jusqu\'au début de votre prochain Tour. Vous ne gagnez pas d\'Avantage quand vous réussissez à frapper ou à infliger une Blessure à une adversaire avec le Maniement de deux armes sauf si les deux attaques touchent.',
  ' '
),

(
  'Marinier',
  'Maxi : Bonus d\'Agilité.
  Tests : Tests de Voile pour les navires fluviaux.
  Vous êtes un navigateur expérimenté en eaux douces, habitué aux navires fluviaux. Vous pouvez ignorer toutes les pénalités à vos Tests quand vous vous trouvez à bord d\'une barque qui dérive à cause de tourbillons, de navires qui tanguent, lorsque vous êtes déséquilibré, et autres situations similaires. De plus, vous comptez comme deux bateliers pour le nombre minimum de membres d\'équipage necessaires pour diriger un navire fluvial. ',
  ' '
),

(
  'Menteur',
  'Maxi : Bonus de Sociabilité.
  Tests : Chame quand vous mentez.
  Tel Ranald le dieu de la Duperie, vous mélangez vérité et mensonges comme s\'il n\'y avait aucune différence. Quand vous utilisez Charme pour mentir, les auditeurs ne peuvent pas s\'y opposer avec leur Intuition pour décréter  s\'il y a quelque chose de douteux dans vos propos. ',
  ' '
),

(
  'Meurtrier',
  'Maxi : 1.
  Quand vous déterminez les Dégâts, utilisez le Bonus d\'Endurance de votre adversaire comme votre Bonus de Force s\'il est plus élevé; déterminez toujours ce point avant toute autre règle modifiant votre Force ou Bonus de Force. De plus, si votre cible est plus grande que vous, et que  vous, et vous obtenez un Critique, multipliez tous les Dégâts de Corps à corps que vous infligez par le nombre de catégories Taille de votre cible, supérieures à la vötre (donc, 2 catégories =x2, 3=x3, etc..); cette multiplication est calculée une fois pour tous les modificateurs appliqués. ',
  ' '
),

(
  'Nageur endurant',
  'Maxi : Bonus de Force.
  Tests : Natation.
  Vous êtes un nageur  particulièrement endurant et habitué à retenir votre souffle pendant une longue période sous l\'eau. Gagnez un bonus à votre Bonus d\'Endurance égal à votre Niveau de Nageur endurant pour calculer le temps pendant lequel vous retenez votre souffle.',
  ' '
),

(
  'Nanti ',
  'Maxi : Aucun.
  Vous êtes fabuleusement riche et rarement à court d\'argent. Qand vous Gagnez de l\'argent (y compris avec des Activités Revenus), vous gagnez +1CO par nombre de fois où vous avez pris ce Talent. ',
  ' '
),

(
  'Négociateur',
  'Maxi : Bonus de Sociabilité.
  Tests : Marchandage.
  Vous êtes un homme d\'affaires expérimenté qui sait comment conclure un marché. Quand vous utilisez la Compétence Marchandage, vous réduisez ou augmentez le prix des produits de 10% supplémentaire.
  Remarque : le MJ peut imposer une réducion inférieure des prix pour motrer qu\'un vendeur refuse de vendre à perte. ',
  ' '
),

(
  'Noctambule',
  'Maxi : Bonus d\'Endurance.
  Tests : Charme et Ragot lors de fêtes, Résistance à l\'alcool.
  Vous êtes un fêtard chevronné et vous savez comment vous amuser. Vous pouvez inverser le dé de n\'importe quel Test de Consommation d\'alcool raté si cela entraine un succès. ',
  ' '
),

(
  'Numismate',
  'Maxi : Bonus d\'Initiative.
  Tests : Evaluation pour établir la valeur des pièces.
  Vous connaissez bien les monnaies du Vieux Monde, et vous ête sun expert pour déterminer leur valeur. Vous pouvez juger de la valeur réelle d\'une pièce par votre seule expérience, sans que cela ne necessite jamais de Test. De plus, vous pouvez identifier des pièces contrefaites avec un Test simple d\'Evaluation; il n\'est jamais opposé par le DR du faussaire. ',
  ' '
),

(
  'Obstiné',
  'Maxi : Bonus de Force Mentale.
  Vous êtes la quintessence de la détermination et de la résolution. Ajoutez votre niveau d\'Obstiné au maximum de votre réserve de Détermination. ',
  ' '
),

(
  'Oeil du chasseur',
  'Maxi : Bonus d\'Initiative.
  Tests : N\'importe quel Test pour traquer ou capturer du gibier.
  Vous êtes un chasseur expérimenté et connaissez toutes les meilleurs techniques pour trouver du gibier. Quand vous voyagez à travers des régions giboyeuses, vous êtes automatiquement capable de chasser suffisamment de gibier pour vous nourrir vous et un nombre de personnes égal à votre niveau d\'Oeil du chasseur, tant que vous avez le temps et l\'équipement approprié. Vous pouvez fourir plus de nourriture encore en utilisant les règles normales de Recherche de nourriture. ',
  ' '
),

(
  'Orateur',
  'Maxi : Bonus de Sociabilité.
  Vous êtes un orateur de talent et savez comment galvaniser d\'importants groupes de personnes. Référez-vous au tableau pour voir combien de personnes vous pouvez influencer avec votre Compétence Charme quand vous parlez en public. ',
  ' '
),

(
  'Oreile absolue',
  'Maxi : Bonus d\'Initiative.
  Tests : Divertissement (Chant), Langue (Langues tonales, telles que l\'eltharin, le cathayan, le Magick).
  Vous avez l\'oreille absolue, capable de reproduire parfaitement les notes et de les identifier sans jamais avoir besoin d\'effectuer de Test. De plus, ajoutez Divertissement (Chant) à n\'importe quelle Carrière que vous entamez; si la Compétence est déjà dans votre Carrière, vous pouvez à la place acheter la Compétence pour 5PX de moins par Augmentation. ',
  ' '
),

(
  'Orientation',
  'Maxi : Bonus d\'Initiative.
  Tests : Navigation.
  Vous avez un sens instinctif de l\'orientation. Vous savez automatiquement où se trouvent le nord en regardant les étoiles, les arbers ou n\'importe quels autres signes familiers. ',
  ' '
),

(
  'Pansement de fortune ',
  'Maxi : Bonus d\'Intelligence.
  Tests : Guérison pendant les Rounds de combat.
  Vous êtes habitué à traiter rapidement les blessures. Si vous avez raté un Test de Guérison quand vous utilisez des Bandages, vous pouvez inverser le résultat si cela entraîne un succès; cependant si vous le faites, vous ne pouvez pas obtenir plus de +1DR, car vous vous concentrez sur la vitesse plutôt que sur la prcision. ',
  ' '
),

(
  'Pas de côté ',
  'Maxi : Bonus d\'Agilité.
  Tests : Tests d\'Esquive pour activer ce Talent.
  Vous êtes doué pour être là où les armes ennemies ne se trouvent pas. Si vous utilisez Esquive pour vous défendre contre une attaque et gagnez le Test opposé, vous pouvez vous déplacer jusqu\'à deux mètres alors que vous plongez. Cela peut vous déplacer au-dela de l\'allonge de votre adversaire, ce qui signifie que vous n\'êtes plus Engagé. Aucun de vos adversaires ne gagnera d\'Attaque gratuite quand vous faites ce Pas de côté. ',
  ' '
),

(
  'Pêcheur ',
  'Maxi : Bonus d\'Initiative.
  Tests : Tout Test concernant la pêche.
  Vous êtes un pêcheur très habile et connaissez les meilleurs façons d\'attraper du poisson. En supposant qu\'une étendue d\'eau suffisamment grande soit disponible, vous êtes automatiquement considéré comme capable de pêcher suffisamment de poisson pour vous nourrir vous et un nombre de personnes égal à votre niveau de Pêcheur, en partant du principe que vous choisissez de passer au moisn une heure ou deux avec une ligne et des appâts. Vous pouvez fournir plus de poisson en utilisant les règles normales pour la Recherche de nourriture. ',
  ' '
),

(
  'Perception de la magie',
  'Maxi : Bonus d\'Initiative.
  Tests : Tests d\'Intuition pour détecter les Sorciers.
  Vous êtes capable de sentir les Vents de la Magie chez les autres. Vous pouvez tenter un Test d\'Intuition Accessible (+20) chaque fois que vous rencontrez un lanceur de Sorts. Sur un succès, vous sentez que la cible est un sorcier. De plus, si vous obtenez un Succès Stupéfiant (+6), vous pouvez aussi déterminer la Spécialisation de Focalisation la plus élevée de la cible. ',
  ' '
),

(
  'Persévérant ',
  'Maxi : Bonus d\'Endurance.
  Tests : Tests de Résistance pour supporter les difficultés.
  Vous n\'abandonnez jamais, même si les tâches paraissent impossibles. Vous pouvez doubler le temps que les Tests de Résistance réussis vous accordent pour supporter une difficulté; cela inclut endurer une chevauchée prolongée, une exposition, des rituels et autres problèmes similaires. ',
  ' '
),

(
  'Petit ',
  'Maxi : 1.
  Vous êtes bien plus petit que la plupart des gens dans le Vieux Monde. ',
  ' '
),

(
  'Pharmacologie',
  'Maxi : Bonus d\'Intelligence.
  Tests : Métier (Apothicaire).
  Vous êtes hautement qualifié en pharmacie, à même de fabriquer des pilules, des baumes, des onguents, des huiles, des crêmes, etc... Vous pouvez inverser n\'importe quel Test de Métier (Apothicaire) raté si cela permet d\'obtenir un succès. ',
  ' '
),

(
  'Pied marin',
  'Maxi : Bonus d\'Endurance.
  Tests : Tous ceux utilisés pour résister au mal de mer.
  Vous êtes habitué aux roulis des océans, et il est très improbable qe vous ayez le mal de mer, même dans les pires des tempêtes. dans des conditions normales en mer, vous n\'avez jamais besoin de Test pour savoir si avez le mal de mer. Dans d\'autres cas (tels qu\'une tempête ou un mal de mer causé par la magie), vous pouvez ignorer toutes les pénalités des Tests pour éviter ces nausées. ',
  ' '
),

(
  'Piolte',
  'Maxi : Bonus d\'Initiative.
  Tests : Tests de Ramer ou de Voile pendant que vous naviguez sur les eaux peu sûres.
  Vous êtes doué pour diriger des vaisseaux à travers les eaux dangereuses. Si vous ratez un Test pour y passer, vous pouvez inverser le résultat si cela entraîne un succès; cependant, si vous le faites vous ne pouvez pas obtenir plus de +1DR, car vous repérez le danger imminent au dernier moment. ',
  ' '
),

(
  'Porte-bouclier',
  'Maxi : Bonus de Force.
  Tests : n\'importe quel Test Pour vous défendre avec un bouclier.
  Vous êtes habile dans le maniement de votre bouclier pour manoeuvrer en combat afin de pouvoir tirer le meilleur parti d\'une situation désespérée. Quand vous utilisez un Bouclier pour vous défendre, vous gagnez un nombre d\'Avantages égal au nombre de Niveaux que vous possédez en Porte-bouclier si vous perdez le Test opposé. ',
  ' '
),

(
  'Présence imposante ',
  'Maxi : Bonus de Force.
  Tests : Commandement.
  Votre présence emplit les autres de crainte et d\'admiration. Votre aura d\'autorité est telle que ceux possédant un Statut inférieur ne peuvent pas résister à vos Tests de Commandement avec leur Force Mentale. Evidemment, les ennemis ne sont toujours pas plus enclins à vous respecter ou à vous obéir, mais le commun des mortels se dresse rarement contre vous. ',
  ' '
),

(
  'Prévoyant',
  'Maxi : Bonus d\'Initiative.
  Vous êtes habitué à anticiper les besoins des autres comme les vôtres. Un nombre de fois par séance égal à votre niveau de Prévoyant, vous pouvez sortir de votre sac à dos (ou similaire) l\'équipement nécessaire à la situation actuelle, tat que son Encombrement est de 0, qu\'il est crédibleque vous l\'ayez acheté récemment, et qu\'il ne soit pas trop invraisemblable. Cela peut être n\'importe quoi, de la flasque d\'alcool pour fortifier un camarade blessé au sifflet bon marché, absolument necessaire pour un saltimbanque de passage. Chaque fois que vous le faites, vous devrez déduire le coût de l\'objet sorti de votre sac pour compenser l\'argent dépensé plus tôt. ',
  ' '
),

(
  'Rat d\'égout',
  'Maxi : Bonus d\'Agilité.
  Tests : Tests de Discrétion dans les souterrains.
  Vous êtes à l\'aise dans les tunnels, les égouts et tout autre environnement souterrain. Quand vous y utilisez Discrétion, ceux qui croisent votre chemin n\'obtiennent pas de Tests de Perception passifs pour vous détecter; ils ne peuvent vous remarquer que s\'ils sont spécifiquement à l\'affût ou à la recherche de personnes cachées. ',
  ' '
),

(
  'Rechagement rapide',
  'Maxi : Bonus de Dexterité.
  Vous pouvez recharger les armes à distance avec facilité. Vous ajoutez un DR égal à votre niveau de Rechagement rapide à n\'importe quel Test pour recharger une arme à distance. ',
  ' '
),

(
  'Résistance (Menace)',
  'Maxi : Bonus d\'Endurance.
  Tests : Tous ceux pour résister à la Menace associé.
  Votre forte constitution vous permet de survivre plsu facilement à une menace spécifique. Vous pouvez réussir automatiquement le premier Test pour résister à la menace spécifiée, telle que Magie, Poison, Maladie, Mutation, à caque séance de jeu. Si le DR requis est important, utilisez votre Bonus d\'Endurance comme DR pour le Test. ',
  ' '
),

(
  'Résistance à la Magie',
  'Maxi : Bonus d\'Endurance.
  Vous êtes très résistant à la magie. Le DR de tout Sort vous affectant est réduit de 2. Le DR d\'un Sort est uniquement modifié par le plus haut score du Talent Résistance à la Magie dans la zone de sa cible. De plus, vous ne pourrez jamais apprendre les Talents Béni, Magie des Arcanes, magie mineure, Sorcier!. ',
  ' '
),

(
  'Riposte',
  'Maxi : Bonus d\'Agilité.
  Tests : Corps à corps quand vous vous défendez.
  La meilleures défense c\'est l\'attaque, donc vous répondez à une attaque par une contre-attaque rapide comme l\'éclair. Si votre arme possède l\'Atout Rapide, vous pouvez infliger des Dégâts quand vous êtes attaqué, comme si c\'était votre Action. Vous pouvez Riposter à une nombre d\'attaques par Round égal à votre Niveau de Riposte. ',
  ' '
),

(
  'Robuste',
  'Maxi : Bonus d\'Endurance.
  Vous êtes un dur à cuire et vous encaissez les Dégâts. Vous réduisez tous les Dégâts subis de 1 par nombre de fois où vous avez pris le Talent Robuste, même si les Dégâts ne peuvent normalement pas être réduits. Mais vous subissez toujours un minimum de 1 Blessure de n\'importe quelle source de Dégâts. ',
  ' '
),

(
  'Sans peur (Ennemi)',
  'Maxi : Bonus de Force Mentale.
  Tests : Calme pour vous opposer à l\'Intimidation, la Peur et la Terreur de votre Ennemi.
  Vous êtes suffisamment courageux ou fou pour que la peur de certains ennemis ne soit qu\'un lointain souvenir. Avec un seul Test de Calme Accessible (+20%), vous pouvez ingnorer les effets d\'Intimidation, de Peur ou de Terreur de l\'ennemi spécifié quand vous le rencontrez. Les ennemis courants comprennent les hommme-bêtes, les peaux-vertes, les hors-la-loi, les vampires, les gardes et les sorciers sauvages. ',
  ' '
),

(
  'Saut carpé',
  'Maxi : Tests d\'Athlétisme concernant ce Talent.
  Il est difficile de vous mettre à terre. Vous pouvez effectuer un Test d\'Athlétisme Intermédiaire (+0) pour atterrir immédiatement sur vos pieds chaque fois que vous gagnez un Etat à Terre. Ce Test d\'Athlétisme est souvent modifié par la Force du coup qui vous renverse : pour chaque tranche de +10 en Force que possède le coup au-delà de votre Endurance, vous subissez une pénalité de -10 au Test d\'Athlétisme, et vice versa. ',
  ' '
),

(
  'Savant (Savoir)',
  'Maxi : Bonus d\'Intelligence.
  Tests : Savoir (Savoir choisi).
  Vous êtes exceptionnellement instruit, et vous possédez un niveau important  de connaissances avancées dans un domaine d\'études. Vous connaissez automatiquement un nombre d\'informations correctes égal à votre Niveau de Savant (Savoir), au sujet d\'une question pertinente sans avoir besoin de Test de Compétence Savoir. Les Tests, comme toujours, vous fourniront plsu d\'informations, déterminées par le MJ. ',
  ' '
),

(
  'Savoir-vivre (Groupe Social)',
  'Maxi : Bonus de Sociabilité.
  Tests : Charme et Ragots (Groupe Social).
  Vous pouvez vous intégrer socialement au groupe choisi, tant que vous vous habillez et vous comportez de façon approprié. Voici des exemples de groupes sociaux pour ce Talent : Criminels, Cultistes, Guildes, Nobles, Erudits, Serviteurs et Soldats. si vous ne possédez pas le Talent, ceux qui le possèdent remarquent votre gêne dans un environnement non familier. Cela concerne principalement l\'interprétation de Personnage, mais peut conférer un bonus aux Tests de Sociabilité à la discrétion du MJ. ',
  ' '
),

(
  'Seconde vue',
  'Maxi : Bonus d\'Initiative.
  Tests : n\'importe quel Test pour détecter les Vents de Magie.
  Vous pouvez percevoir les Vents changeants de la Magie, qui soufflent depuis les Portes du Chaos jusqu\'aux pôles du monde. ',
  ' '
),

(
  'Seigneur de guerre',
  'Maxi : Bonus de Sociabilité.
  Test : Tests de Commandement pendant la guerre.
  Votre regard sévère et vos mots exaltants incitent vos soldtats à se battre jusqu\'au bout. Tous les subalternes capables de vous voir peuvent ajouter votre Niveau de Seigneur de guerre au DR d\'un Test de Force Mentale par Round. Ce bonus n\'est pas cumulatif. ',
  ' '
),

(
  'Sixième sens',
  'Maxi : Bonus d\'Initiative.
  Tests : Test d\'Intuition impliquant votre Sixième sens.
  Vous avez une impression étrange quand vous êtes en danger, et pouvez réagir en conséquence. Le MJ peut vous prévenir que vous êtes observé, ou que vous êtes en danger; cela arrivera normalement après un Test d\'Intuition secret en votre nom. De plus, vous pouvezignorer la Surprise si vous réussissez un Tests d\'Intuition. ',
  ' '
),

(
  'Sorcier !',
  'Maxi : Bonus d\'Intelligence.
  Vous êtes un lanceur de Sorts autodidacte qui a compris peu à peu comment utiliser la magie, par tâtonnements. Ajoutez Langue (Magick) à n\importe quelle Carrière que vous entamez; si elle est déjà comprise dans votre Carrière, vous pouvez, à la place, acheter la Compétence pour 5PX de moins par Augmentation. De plus vous pouvez dépenser un Point de Résilience pour lancer (et mémoriser) un Sort provenant de n\'importe quel Domaine de Magie, pour 0PX. Pour pouvez le faire un nombre de fois égal à votre Niveau dans ce Talent. ',
  ' '
),

(
  'Souplesse féline',
  'Maxi : Bonus d\'Agilité.
  Tests : Athlétisme quand vous tombez.
  Vous êtes agile comme un chat, et capable de tomber de plus grandes hateurs que les autres sans vous blesser. Chaque fois que vous tombez, effectuez un Test d\'Athlétisme. Sur une succès, réduisez la distance de chute de 1 mètre, +1 mètre supplémentaire par +1 DR obtenu, pour calculer les Dégâts. ',
  ' '
),

(
  'Sprinter',
  'Maxi : Bonus de Force.
  Tests : Tests d\'Athlétisme pour Courir.
  Vous êtes un coureur très rapide. Votre Attribut de Mouvement compte comme plus élevé de 1 lorsque vous Courez. ',
  ' '
),

(
  'Studieux',
  'Maxi : Bonus d\'Intelligence.
  Test : Recherche.
  Vous êtes un vrai rat de bibliothèque. Quand vous utilisez Recherche, vous pouvez inverser le dé de n\'importe quel Test raté si cela entraîne un succès. ',
  ' '
),

(
  'Suborneur',
  'Maxi : Bonus de Sociabilité.
  Tests : Subornation.
  Vous êtes un corrupteur hautement qualifié, Le Mj peut réduire le coût de base de n\'importe quel pot-de-vin requis de 10% par niveau que vous possédez en Suborneur, jusqu\'à un minimum de 10% du montant d\'origine. ',
  ' '
),

(
  'Tireur d\'élite',
  'Maxi : 1.
  Vous pouvez effectuer des tirs ciblés d\'une précision chirurgicale. Vous ignorez les modificateurs de Difficulté des Tests de Projectiles dus à la taille de votre cible. ',
  ' '
),

(
  'Tireur de précision',
  'Maxi : 1.
  Vous gagnez un bonus permanent de +5 à votre Capacité de Tir de départ (ne compte pas comem une Augmentation). ',
  ' '
),

(
  'Tireur embusqué',
  'Maxi : 4.
  Tests : Portée (Longue - Extrême).
  La distance n\'est pas un obstacle pour vos Compétences de tir, et vous êtes expert dans l\'art de repérer des cibles ausii bien éloignées qu\'à proximité. vous ne subissez  aucune pénalité lors d\'un tir à Longue distance, et la moitier des pénalités à Portée extrême. ',
  ' '
),

(
  'Tir mortel',
  'Maxi : 1.
  Vous touchez toujours votre adversaire juste entre les deux yeux... ou à l\'endroit que vous aviez l\'intention d\'atteindre. Au lieu d\'inverser le dé pour déterminer quelle Localisation est touchée avec votre arme à distance, vous pouvez la choisir. ',
  ' '
),

(
  'Tir précis',
  'Maxi : Bonus de Capacité de Tir.
  Vous êtes un tireur exceptionnel et savez où atteindre un ennemi pour lui causer un maximum de Dégâts. Vous infligez +1 Dégât supplémentaire avec toutes les armes à distance. ',
  ' '
),

(
  'Tir rapide',
  'Maxi : Bonus d\'Agilité.
  Tests : Projectiles quand vous effectuez un Tir rapide.
  Si vous avez une arme à distance chargée, vous pouvez faire feu en dehors de l\'ordre d\'Initiative normal avant que tout autre combattant ne réagisse dans le Round suivant. Si l\'arme est capable de tirs multiples, vous pouvez faire feu autant de fois que votre Niveau de Tir rapide. Vous effectuez un lancer pour toucher en utilisant les modificateurs normaux. Utiliser Tir rapide nécessite à la fois votre Action et votre Mouvement pour votre tour à venir, qui compteront comem ayant été dépensés pendant le prochain tour. Si deux Personnages ou plus utilisent Tir rapide, celui qui a pris ce Talent le plus de fois tire en premier. En cas d\'égalité, ils font feu simultanément et devraient être gérés en même temps. ',
  ' '
),

(
  'Tir sûr',
  'Maxi : Bonus d\'Initiative.
  Vous savez comment trouver les points faibles de l\'armure d\'une cible. Quand vous la touchez, vous pouvez ignorer un nombre de PA égal à votre Niveau de Tir sûr. ',
  ' '
),

(
  'Tour des souvenirs',
  'Maxi : Bonus d\'Intelligence.
  Une technique de mémorisation initiée par le Culte de Verena, réputée pour les pratiques elfiques enseignées par les Maîtres du savoir de Hoeth, Tour des souvenirs vous permet de vous rappeler parfaitement une série d\'événements en les mémorisant dans une tour imaginaire. Vous pouvez vous souvenir d\'une série d\'événements pendant un temps égal à votre Intelligence sans beosin d\'effectuer de Test. Pour chaque tranche de 10 éléments supplémentaires que vous tentez de mémorser, vous devez effectuer un Test d\'Intelligence dont la Difficulté augmente pour vous en souvenir correctement, en partant de Très facile (+60) pour 10+, Facile (+40) pour 20+, Accessible (+20) pour 30+n etc... Au-delà de son utilité évidente pour le Pari, car ce Talent ajoute un bonus de +20 à +60, selon l\'utilité de la mémorisation lors du jeu en cours, le MJ peut, si necessaire, appliquer des Bonus aux autres Tests. Chaque fois que vous prenez ce Talent, vous pouvez vous rappeler une série supplémentaire d\'événements, sans avoir à en oublier une précédement mémorisée. ',
  ' '
),

(
  'Trappeur',
  'Maxi : Bonus d\'Initiative.
  Tests : Tests de Perception pour repérer les pièges, Piégeage.
  Vous êtes doué pour repérer et utiliser des pièges. vous pouvez effectuer un Test de Perception pour en rpérer automatiquement, sans avoir à prévenir le MJ de votre intention; le MJ peut préférer effectuer ces Tests sècretement, à votre place. ',
  ' '
),

(
  'Travailleur qualifié (Métier)',
  'Maxi : Bonus de Dexterité.
  Tests : tous les Tests étendus appropriés de Métier.
  Votre maîtrise d\'un Métier spécifique est exceptionnelle. Vous ôtez le niveau de votre Talent Travailleur qualifié du DR exigé pour tout Test étendu utilisant votre Compétence (Métier). ',
  ' '
),

(
  'Très fort',
  'Maxi : 1.
  Vous gagnez un bonus permanent de +5 à votre Caractéristique Force de départ (ne compte pas comme des Augmentations) ',
  ' '
),

(
  'Tricheur',
  'Maxi : Bonus d\'Intelligence.
  Tests : Pari et Escamotage quand vous jouez à un jeu de cartes.
  Vous êtes doué pour jouer et gagner aux cartes, bien que vos méthodes puissent impliquer un peu de triche. Quand vous utilisez Pari ou Escamotage avec succès en jouant aux cartes, vous pouvez choisir, soit d\'utiliser le DR obtenu, soit le chiffre des unités de votre dé. Donc, un succès de 28 peut être utilisé comme un DR de +8. SI vous jouez avec un jeu de cartes réel pour représenter ce qui se passe en jeu, vous pouvez recevoir un nombre supplémentaire de cartes par distribution égal à votre niveau de Tricheur, puis en défausser pour revenir à la taille de main appropriée avant chaque tour de jeu. ',
  ' '
),

(
  'Véloce',
  'Maxi : 1.
  Vous gagnez +1 à votre Attribut de Mouvement.',
  ' '
),

(
  'Vigilance',
  'Maxi : Bonus d\'Initiative.
  Tests : Perception pendant les combats au Corps à corps.
  Vous avez l\'habitude d\'analyser le champs de bataille pour prendre des décisions rapides, éclairées par les vagues changeantes du conflit. Vous pouvez effectuer un Test de Perception Intermédiaire (+0) pour ingnorer la Surprise, modifié normalement par la situation. ',
  ' '
),

(
  'Visions sacrées',
  'Maxi : Bonus d\'Initiative.
  Tests : Tests d\'Intuition quand vous vous trouvez sur un sol sacré.
  Vous discernez clairement les grandes oeuvres des dieux tout autour de vous. Vous savez automatiquement quand vous entrez sur un sol sacré, et pouvez effectuer un Test d\'Intuition pour recevoir des visions (souvent obscures et interprétées via le paradigme de votre culte ou de votre système individuel de croyance) concernant le localité si des événements importants ont eu lieu ici par le passé. ',
  ' '
),

(
  'Vivacité',
  'Maxi : 1.
  Vous gagnez un bonus permanent de +5 à votre Caractéristique Initiative de départ (ne compte pas comme des Augmentations) ',
  ' '
),

(
  'Volonté de fer',
  'Maxi : Bonus de Force Mentale.
  Tests : Tests de Calme pour s\'opposer à Intimidation.
  Vous êtes indomptable, et vous ne vous inclinez jamais volontairement devant autrui. L\'utilisation de la Compétence Intimidation ne provoque pas la Peur chez vous et ne vous empêchera pas de vous opposer à un interlocuteur intimidant. ',
  ' '
),

(
  'Voyageur aguerri',
  'Maxi : Bonus d\'Intelligence.
  Tests : n\'importe quel Test concernant les particularités locales.
  Vous êtes une âme curieuse qui a voyagé partout, et a appris toutes sortes d\'informations locales. Ajoutez Savoir (Région) à n\'importe quelle Carrière que vous entamez. Si elle est déjà incluse dans la Carrière, vous pouvez acheter la Compétence deux fois -avec une Spécialisation différente chaque fois, telle qu\'Altdorf, Vorberglang ou Ubersreik - pour 5PX de moins par Augmentation ',
  ' '
)