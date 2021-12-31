<?php

return [
    // les clés correspondent aux ID des personnages
    // Albedo
    0 => [
        '<img src="/img/skills/S1/sword.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Escrime de favonius - Blanche</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 5 coups d\'épée.<br><strong style="color: #ffd780">Attaque 
chargée</strong><br>Consomme de l\'endurance pour déclencher deux coups d\'épée rapides.<br><strong style="color: #ffd780">Attaque 
plongeante</strong><br>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis en chemin et des DGT 
de zone à l\'impact.',
        '<img src="/img/skills/Albedo/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Génèse : Aura solaire</strong>' => '
Génère une Aura solaire, infligeant des <strong style="color: #e3b342">DGT Géo de zone</strong>.<br><strong style="color: #ffd780">Aura 
solaire</strong><br>• Un Germe éphémère est créé lorsque les ennemis se trouvant dans la zone subissent des dégats, 
infligeant des <strong style="color: #e3b342">DGT Géo de zone</strong> proportionnels à la DEF d\'Albedo.<br>• Un Germe éphémère 
peut être généré toutes les 2 s.<br>&bull;&nbsp;Lorsqu\'un personnage rejoint le centre de l\'Aura solaire, il génère un 
podium ascendant lui permettant de dominer le champ de bataille. Il ne peut exister qu\'un seul podium à la fois.<br>
&bull;&nbsp;L\'Aura solaire est considérée comme une <strong style="color: #e3b342">construction Géo</strong>.<br>
<strong style="color: #ffd780">Appui long</strong><br>Ajuste la zone où la compétence sera lancée.',
        '<img src="/img/skills/Albedo/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Transformation : Reflux Géo</strong>' => '
Albedo inflige des <strong style="color: #e3b342">DGT Géo de zone</strong> devant lui. Lorsqu\'une aura solaire générée par Albedo 
est présente sur le champ de bataille, 7 Germes fatals sont générés et infligent des <strong style="color: #e3b342">DGT Géo de zone
</strong>.<br>Les DGT d\'explosion et les DGT des Germes fatals ne génèrent pas de Germes éphémères.',
        '<img src="/img/skills/Albedo/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Menace Calcaire</strong>' => 'Les Germes éphémères générés par <strong style="color: #ffd780">Génèse : aura solaire
</strong> infligent 25% de DGT supplémentaires aux ennemis dont les PV sont inférieurs à 50%.',
        '<img src="/img/skills/Albedo/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Sagesse en bouteille</strong>' => 'L\'activation de <strong style="color: #ffd780">Transformation : Reflux Géo</strong> 
confère à tous les personnages de l\'équipe à proximité un bonus de 125 pts de maîtrise élémentaire pendant 10s.',
        '<img src="/img/skills/Albedo/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Découverte de génie</strong>' => '10% de chance d\'obtenir le double de produits lors de la synthèse de matériaux 
        d\'élévation d\'arme.'
    ],
    // Aloy
    1 => [
        '<img src="/img/skills/S1/bow.png" alt="" height="30px" width="30px"/> <strong>Tir rapide</strong>' => '<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 4 tirs consécutifs.
<br><strong style="color: #ffd780">Attaque chargée</strong> Effectue un <strong style="color: #ffd780"><strong style="color: #ffd780">tir visé</strong></strong> 
plus précis infligeant davantage de DGT. Lors de la visée, la flèche se charge en élément cryo, infligeant d\'importants 
<strong style="color: #a0e9e5">DGT Cryo</strong> quand elle est complètement chargée.<br><strong style="color: #ffd780">
Attaque plongeante :</strong><br>Tire une pluie de flèches depuis les aires et plonge au sol, infligeant des DGT de zone 
à l\'impact.',
        '<img src="/img/skills/Aloy/S2.png" alt="" height="30px" width="30px"/> <strong>Frozen Wilds</strong>' => 'Aloy lance une bombe à gel qui explose à l\'impact dans la direction ciblée, infligeant des 
<strong style="color: #a0e9e5">DGT Cryo</strong>. Après avoir explosé, la bombe à gel se divise en de nombreuses petites 
bombes glacées qui explosent au contact des ennemis ou après un court délai, infligeant des <strong style="color: #a0e9e5">
DGT Cryo</strong>. Lorsqu\'une bombe à gel ou une petite bombe glacée touche un ennemi, l\'ATQ de ce dernier est réduite 
et Aloy obtient 1 charge de bobine. Une charge de bobine peut être obtenue toutes les 0,1s max.<br><strong style="color:
#ffd780">Bobine</strong><br>• Chaque charge augmente les DGT des attaques normales d\'Aloy;<br>• Avec 4 charges de 
bobine, Aloy consomme toutes les charges de bobine pour entrer dans un état de Glace précipitée, ce qui augmente davantage  
les DGT infligés par ses attaques normales et les convertit en <strong style="color: #a0e9e5">DGT Cryo</strong>.<br>Quand 
Aloy est en état de Glace précipitée, elle ne peut pas recevoir de nouvelles charges de bobine.<br>Les effets de la bobine 
seront annulés après 30s si Aloy quitte le combat.',
        '<img src="/img/skills/Aloy/S3.png" alt="" height="30px" width="30px"/> <strong>Prophéties de l\'aube</strong>' => 'Aloy lance une batterie Cryo dans la direction ciblée, puis la fait exploser avec une
         flèche, infligeant des <strong style="color: #a0e9e5">DGT Cryo de zone.</strong>',
        '<img src="/img/skills/Aloy/S4.png" alt="" height="30px" width="30px"/> <strong>Surcharge offensive</strong>' => 'Lorsqu\'Aloy est sous l\'effet d\'une bobine de <strong style="color:#ffd780">Frozen 
Wilds</strong>, son ATQ augmente de 16%, tandis que celle des personnages de l\'équipe à proximité augmente de 8%. Cet 
effet dure 10 s.',
        '<img src="/img/skills/Aloy/S5.png" alt="" height="30px" width="30px"/> <strong>Frappe puissance</strong>' => 'Lorsqu\'Aloy est dans l\'état de Glace précipitée accordé par <strong style="color:
#ffd780">Frozen Wilds</strong>, son bonus de <strong style="color: #a0e9e5">DGT Cryo</strong> augmente de 3.5% toutes 
les secondes. Son bonus de <strong style="color: #a0e9e5">DGT Cryo</strong> peut augmenter de cette manière jusqu\'à 35%.',
        '<img src="/img/skills/Aloy/S6.png" alt="" height="30px" width="30px"/> <strong>Doucement mais sûrement</strong>' => 'Quand Aloy fait partie de l\'équipe, vos personnages n\'effraient pas les petits 
        animaux en s\'approchant, et peuvent ainsi obtenir de la volaille, de la viande crue et de la viande congelée.'
    ],
    // Amber
    2 => [
        '<img src="/img/skills/S1/bow.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Archerie Revisitée
</strong>' => '<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 5 tirs 
consécutifs.<br><strong style="color: #ffd780">Attaque chargée</strong><br>Effectue un <strong style="color: #ffd780">
<strong style="color: #ffd780">tir visé</strong></strong> plus précis infligeant davantage de DGT. Lors de la visée, la flèche se charge en élément Pyro, 
infligeant de considérables <strong style="color: #fe925d">DGT Pyro</strong> quand elle est complétement chargée.<br>
<strong style="color: #ffd780">Attaque plongeante :</strong><br>Tire une pluie de flèches depuis les airs et plonge au 
sol, infligeant des DGT de zone à l\'impact.',
        '<img src="/img/skills/Amber/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Poupée explosive</strong>' =>
            'Le fidèle Baron Lapinou est déployé sur le terrain.<br><strong style="color: #ffd780">Baron Lapinou</strong><br>• Le 
Baron nargue les ennemis proches et attire leur attention.<br>• Ses PV sont proportionnels aux PV max d\'Amber.<br>• Le 
Baron explose à la fin ou s\'il est détruit entre temps, et inflige des <strong style="color: #fe925d">DGT Pyro de zone</strong>.<br>
<strong style="color: #ffd780">Appui long</strong><br>Ajuste la direction du jet.<br>Ajuste la portée du jet.',
        '<img src="/img/skills/Amber/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Pluie de flèches</strong>' => '
Tire une pluie de flèches qui inflige des <strong style="color: #fe925d">DGT Pyro continus</strong>.',
        '<img src="/img/skills/Amber/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Dans le mille !</strong>' => '
Augmente le taux CRIT de <strong style="color: #ffd780">Pluie de flèches</strong> de 10 % et la zone d\'effet de 30 %.',
        '<img src="/img/skills/Amber/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Tir précis</strong>' => '
        L\'ATQ augmente de 15 % pendant 10 s lorsque le <strong style="color: #ffd780">tir visé</strong> touche un point faible.',
        '<img src="/img/skills/Amber/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Championne de planage</strong>' => '
        Réduit la consommation d\'endurance de vos personnages dans l\équipe de 20 % lors du planage. Ne peut être 
        cumulé avec d\'autres aptitudes passives aux effets identiques.'
    ],
    // Arataki Itto
    3 => [
        '<img src="/img/skills/S1/claymore.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Légende de la baston</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 4 coups d\'épée.<br>Lorsque son 2e et 4e coup
touchent un ennemi, Itto gagne respectivement 1 et 2 cumuls de Mégaforce superlative.<br>Itto peut détenir un maximum de
5 cumuls de Mégaforce superlative, et chaque fois que cet effet se déclenche, la durée des cumuls en sa possession est
réinitialisée.<br>De plus, l\'enchaînement d\'attaques normales d\'Itto ne sera pas réinitialisé pendant une courte
période après Zetsugi anti-démon : Catapultage d\'akaushi ou l\'initiation d\'un sprint.<br><strong style="color: #ffd780">Attaque
chargée</strong><br>Lorsque vous maintenez appuyé pour lancer une attaque chargée tout en possédant des cumuls de
Mégaforce superlative, vous pouvez effectuer des kesa giri d\'Arataki sans consommer d\'endurance. Chaque kesa giri
consommera à la place un cumul de Mégaforce superlative. Lorsque le dernier cumul de Mégaforce est consommé, Itto
libère une attaque finale très puissante.<br>Si aucun cumul de Mégaforce superlative n\'est disponible, Itto consommera
de l\'endurance pour effectuer une simple entaille de Saichimonji.<br><strong style="color: #ffd780">Attaque plongeante</strong>
<br>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis sur la route et des DGT de zone à
l\'impact.',
        '<img src="/img/skills/Arataki_Itto/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Zetsugi anti-démon : Catapultage d\'akaushi</strong>' => '
Projette Ushi, le jeune taureau akaushi et membre auxiliaire du gang Arataki, pour infliger des <strong style="color: #e3b342">DGT
Géo</strong> ! Lorsqu\'Ushi touche un ennemi, il accorde à Arataki Itto 1 cumul de Mégaforce superlative. Ushi reste
ensuite sur le terrain et apporte son aide des façons suivantes :<br>&bull;&nbsp;Il nargue les ennemis proches et attire
leur attention.<br>&bull;&nbsp;Il hérite d\'un pourcentage des PV max d\'Arataki Itto.<br>&bull;&nbsp;Lorsqu\'il subit
des DGT, il accorde à Arataki Itto 1 cumul de Mégaforce superlative. Un cumul peut être obtenu une fois toutes les 2 s
de cette manière.<br>&bull;&nbsp;Si ses PV sont épuisés ou si la durée arrive à terme, il s\'enfuit tout en accordant à
Arataki Itto 1 cumul de Mégaforce superlative.<br><strong style="color: #ffd780">Appui long</strong><br>Ajuste la direction du jet.
Ushi est considéré comme une <strong style="color: #e3b342">construction Géo</strong>, et Arataki Itto ne peut générer
qu\'un seul Ushi à la fois.',
        '<img src="/img/skills/Arataki_Itto/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Roi oni maléfique : Avènement d\'Itto</strong>' => '
Il est temps de montrer la puissance du gang Arataki ! Itto laisse émerger son Roi oni courroucé intérieur pendant un
certain temps, utilisant son kanabo de Roi oni au combat.<br>Les caractéristiques suivantes s\'appliquent :<br>&bull;&nbsp;Les
attaques normales, chargées et plongeantes sont imprégnées de DGT Géo ne pouvant pas être enchantés.<br>&bull;&nbsp;La
VIT d\'attaque des attaques normales d\'Itto augmente, et son ATQ sera augmentée en fonction de sa D&Eacute;F.<br>&bull;&nbsp;Lorsque
le 1er ou 3e coup de son attaque normale touche un ennemi, Arataki Itto obtient 1 cumul de Mégaforce superlative.
<br>&bull;&nbsp;Les R&Eacute;S élémentaires et physique d\'Arataki Itto diminuent de 20 %.<br>Les effets du Roi oni courroucé
prennent fin lorsqu\'Arataki Itto quitte le champ de bataille.',
        '<img src="/img/skills/Arataki_Itto/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Arataki au top</strong>' => '
Lorsqu\'Arataki Itto effectue une série de kesa giri d\'Arataki, il obtient les effets suivants :<br>&bull;&nbsp;Chaque
frappe augmente la VIT d\'attaque de la prochaine de 10 %. La VIT d\'attaque peut être augmentée de 30 % max de cette
manière.<br>&bull;&nbsp;Sa R&Eacute;S à l\'interruption augmente. Ces effets prennent fin lorsqu\'Arataki Itto arrête
d\'utiliser cette série d\'attaques.',
        '<img src="/img/skills/Arataki_Itto/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Lignée de l\'Oni cramoisi</strong>' => '
Les DGT infligés par les kesa giri d\'Arataki augmentent d\'une valeur équivalant à 35 % de la D&Eacute;F d\'Arataki Itto.',
        '<img src="/img/skills/Arataki_Itto/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Castor au rapport</strong>' => '
        Lorsqu\'un personnage de l\'équipe utilise des attaques pour obtenir du bois d\'un arbre, il a 25 % de chances 
        d\'obtenir un morceau de bois supplémentaire.'
    ],
    // Ayaka
    4 => [
        '<img src="/img/skills/S1/sword.png" alt="" height="30px" width="30px"/> <strong>&Eacute;cole Kamisato - Sveltesse</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 5 coups d\'épée.<br><strong style="color: #ffd780">Attaque 
chargée</strong><br>Consomme de l\'endurance pour déclencher deux lames du vent rapides.<br><strong style="color: #ffd780">Attaque
descendante</strong><br>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis sur la route et des
DGT de zone à l\'impact.',
        '<img src="/img/skills/Kamisato_Ayaka/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>&Eacute;cole Kamisato - Fleur de glace</strong>' => '
Ayaka invoque une fleur glacée qui projette les ennemis proches, leur infligeant des <strong style="color: #a0e9e5">DGT Cryo de
zone</strong>.',
        '<img src="/img/skills/Kamisato_Ayaka/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>&Eacute;cole Kamisato - Sentier de givre</strong>' => '
<strong style="color: #ffd780">Remplace le sprint</strong><br>Ayaka consome de l\'endurance pour se déplacer rapidement dans un 
brouillard de glace.<br>Sous Sentier de givre, Ayaka peut se déplacer rapidement sur l\'eau. À la fin de l\'état, elle 
réapparaît ; produisant deux choses simultanément :<br>• Applique aux ennemis proches l\'élément <strong style="color: #a0e9e5">
Cryo.</strong><br>• Les DGT d\'épée sont convertis en <strong style="color: #a0e9e5">DGT Cryo</strong>.',
        '<img src="/img/skills/Kamisato_Ayaka/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>&Eacute;cole Kamisato - Givre mortel</strong>' => '
Ayaka libère un tourbillon givré qui avance sans s\'arrêter.<br><strong style="color: #ffd780">Tourbillon givré</strong><br>
&bull;&nbsp;Le tourbillon givré inflige de façon continue des <strong style="
color: #a0e9e5">DGT Cryo </strong>.<br>&bull;&nbsp;Le
tourbillon finit par exploser, infligeant des <strong style="color: #a0e9e5">DGT Cryo de zone</strong>.',
        '<img src="/img/skills/Kamisato_Ayaka/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Sanctification de l\'impur</strong>' => '
Confère aux attaques normales et chargées d\'Ayaka suivant dans les 6 s le lancement d\'<strong style="color: #ffd780">&Eacute;cole
Kamisato : Fleur de glace</strong> un bonus de 30 % de DGT.',
        '<img src="/img/skills/Kamisato_Ayaka/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Bénédiction de Kanten Senmyou</strong>' => '
L\'énergie glacée libérée à la fin du Se,tier de givre d\'<strong style="
color: #ffd780">&Eacute;cole Kamisato : Sentier de givre</strong>
confère à Ayaka les effets suivants lorsqu\'elle touche l\'ennemi : Régénation de 10 pts d\'endurance ;
<strong style="color: #a0e9e5">Bonus de DGT Cryo</strong> de 18 % pendant 10 s.',
        '<img src="/img/skills/Kamisato_Ayaka/S7.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Fruits de Shine</strong>' => '
        10 % de chances d\'obtenir le double de produits lors de la synthèse de matériaux d\'élévation d\'arme.'
    ],
    // Barbara
    5 => [
        '<img src="/img/skills/S1/catalyst.png" alt="" height="30px" width="30px"/> <strong>Murmure de l\'eau</strong>'
        => '<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 4 attaques
d\'eau qui infligent des <strong style="color: #21e1eb">DGT Hydro</strong>.<br><strong style="color: #ffd780">Attaque 
chargée</strong><br>Consomme de l\'endurance pour infliger des <strong style="color: #21e1eb">DGT Hydro de zone</strong> 
après un court délai.<br><strong style="color: #ffd780">Attaque plongeante</strong><br>Plonge depuis les airs pour 
infliger des DGT aux ennemis en chemin et des <strong style="color: #21e1eb">DGT Hydro de zone</strong> à l\'impact.',
        '<img src="/img/skills/Barbara/S2.png" alt="" height="30px" width="30px"/> <strong>C\'est parti pour le show</strong>' => '
Invoque des goutelettes dansantes qui forment un cercle de mélodie infligeant des 
<strong style="color: #21e1eb">DGT Hydro</strong> et <strong style="color: #21e1eb">trempant</strong> les ennemis proches.
<br><strong style="color: #ffd780">Cercle de mélodie</strong><br>&bull; Les attaques normales de Barbara restaurent les 
PV de vos personnages dans l\'équipe ainsi que de tous les alliés proches lorsqu\'elles touchent. La quantité de PV 
restaurés est proportionnelle aux PV max de Barbara.<br>&bull; L\'effet des soins est multiplié par 4 avec les attaques 
chargées.<br>Régénère les PV de votre personnage déployé à intervalles réguliers.<br>&bull; Barbara <strong style="color: 
#21e1eb">trempe</strong> les personnages et les ennemis avec qui elle entre en contact.',
        '<img src="/img/skills/Barbara/S3.png" alt="" height="30px" width="30px"/> <strong>Miracle brillant</strong>' => '
        Restaure considérablement les PV des alliés et de vos personnages dans l\'équipe ; la 
        quantité de PV restaurés est proportionnelle aux PV max de Barbara.',
        '<img src="/img/skills/Barbara/S4.png" alt="" height="30px" width="30px"/> <strong>Splendide saison</strong>' => '
Les personnages situés dans le cercle de mélodie de <strong style="color: #ffd780">C\'est 
parti pour le show</strong> consomment 12 % d\'endurance en moins.',
        '<img src="/img/skills/Barbara/S5.png" alt="" height="30px" width="30px"/> <strong>Bis repetita</strong>' => '
Chaque orbe ou particule élémentaire obtenu(e) par votre personnage déployé prolonge le cercle 
de mélodie de <strong style="color: #ffd780">C\'est parti pour le show</strong> de 1 s.',
        '<img src="/img/skills/Barbara/S6.png" alt="" height="30px" width="30px"/> <strong>De tout mon coeur</strong>' => '
        12 % de chance d\'obtenir un plat supplémentaire lorsque vous cuisinez un plat de soins 
        parfait.'
    ],
    // Beidou
    6 => [
        '<img src="/img/skills/S1/claymore.png" alt="" height="30px" width="30px"/> <strong>Conquête des mers</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 5 coups d\'
épée.<br><strong style="color: #ffd780">Attaque chargée</strong><br>Exécute une succession d\'entailles aussi rapides que 
tranchantes ; cette attaque consomme de l\'endurance sur la durée. L\'attaque chargée se termine sur un coup puissant.<br>
<strong style="color: #ffd780">Attaque descendante</strong><br>Plonge depuis les airs pour frapper le sol, infligeant 
des DGT aux ennemis sur la route et des DGT de zone à l\'impact.',
        '<img src="/img/skills/Beidou/S2.png" alt="" height="30px" width="30px"/> <strong>Invocation des marées</strong>' => '
<strong style="color: #ffd780">Appui simple</strong><br>Beidou concentre le pouvoir 
de la foudre sur son épée, et exécute un coup violent qui inflige aux ennemis en face des <strong style="color: #a757cb">
DGT &Eacute;lectro</strong>.<br><strong style="color: #ffd780">Appui long</strong><br>Beidou brandit son arme, qu\'elle utilise 
comme bouclier. La quantité de DGT absorbés est proportionnelle aux PV max de Beidou. Lorsque vous relachez la compétence 
ou que celle-ci prend fin, Beidou brandit sa longue épée et effectue une contre-attaque libérant toute l\'énergie 
accumulée, qui inflige des <strong style="color: #a757cb">DGT &Eacute;lectro</strong>. Augmente considérablement les DGT 
infligés selon le nombre de coups portés lors de la durée de la conséquence. Deux coups minimum doivent être portés pour 
obtenir le bonus de DGT maximum.<br>Bouclier :<br>&bull; Le bouclier est efficace à 250% contre les <strong style="color: 
#a757cb">DGT &Eacute;lectro</strong>.<br>&bull; Applique l\'<strong style="color: #a757cb">élément &Eacute;lectro</strong> à Beidou.',
        '<img src="/img/skills/Beidou/S3.png" alt="" height="30px" width="30px"/> <strong>Brisure d\'orage</strong>' => '
Beidou créée un bouclier de tonnerre qui inflige des <strong style="color: #a757cb">DGT 
&Eacute;lectro</strong> aux ennemis à proximité.<br>Bouclier de tonnerre<br>&bull; Les attaques normales et chargées, lorsqu\'elles
touchent, libèrent une décharge électrique qui se propage d\'ennemi en ennemi et inflige des <strong style="color: 
#a757cb">
DGT &Eacute;lectro</strong>.<br>&bull; Les actions de Beidou sont plus difficiles à interrompre et les DGT qu\'elle reçoit 
diminuent tant que le bouclier est actif.',
        '<img src="/img/skills/Beidou/S4.png" alt="" height="30px" width="30px"/> <strong>Châtiment</strong>' => '
La contre-attaque d\'<strong style="color: #ffd780">Invocation des marées</strong> inflige le 
maximum de DGT lorsqu\'elle est exécutée juste après une attaque.',
        '<img src="/img/skills/Beidou/S5.png" alt="" height="30px" width="30px"/> <strong>Tempête de coups de tonnerre</strong>' => '
<strong style="color: #ffd780">Invocation des marées</strong> confère pendant 
10 s les effets suivants lorsqu\'il est exécuté avec le maximum de DGT :<br>&bull; Les attaques normales et chargées 
infligent 15% de DGT supplémentaires.<br>&bull; Les attaques chargées se chargent beaucoup plus vite.',
        '<img src="/img/skills/Beidou/S6.png" alt="" height="30px" width="30px"/> <strong>Braveuse de marée</strong>' => '
        Réduit la consommation d\'endurance de vos personnages dans l\'équipe de 20% lors de la nage.
Ne peut pas être cumulé avec d\'autres aptitudes ayant les mêmes effets.'
    ],
    // Bennett
    7 => [
        '<img src="/img/skills/S1/sword.png" alt="" height="30px" width="30px"/> <strong>&Eacute;pée chanceuse</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 5 coups 
d\'épée.<br><strong style="color: #ffd780">Attaque chargée</strong><br>Consomme de l\'endurance pour déclencher deux 
coups d\'épée rapides.<br><strong style="color: #ffd780">Attaque descendante</strong><br>Plonge depuis les airs pour 
frapper le sol, infligeant des DGT aux ennemis sur la route et des DGT de zone à l\'impact.',
        '<img src="/img/skills/Bennett/S2.png" alt="" height="30px" width="30px"/> <strong>Surpassion</strong>' => '
<strong style="color: #ffd780">Appui simple</strong><br>Bennett exécute un coup rapide de sa 
lame enflammée, qui inflige des <strong style="color: #fe925d">DGT Pyro</strong> aux ennemis en face.<br><strong style="
color: #ffd780">Appui
long</strong><br>Bennett effecture une charge qui donne des résultats différents selon le niveau 
de charge.<br>&bull; Niveau 1 : Bennett exécute une seconde attaque, qui inflige des <strong style="color: #fe925d">DGT 
Pyro</strong> et projette les ennemis en l\'air.<br>&bull; Niveau 2 : Une troisième attaque complète l\'enchaînement ; 
celle-ci inflige des <strong style="color: #fe925d">DGT Pyro</strong>. L\'attaque se termine par une explosion, qui 
projette simultanément Bennett et les ennemis dans les airs. Bennett ne subit pas de DGT lorsqu\'il est projeté.',
        '<img src="/img/skills/Bennett/S3.png" alt="" height="30px" width="30px"/> <strong>Merveilleux voyage</strong>' => '
&bull;&nbsp;Les personnages se trouvant dans le champ et ayant moins de 70% de PV sont 
soignés d\'une quantité de PV proportionnelle aux PV max de Bennett.<br>&bull;&nbsp;Les personnages se trouvant dans le champ 
et ayant plus de 70% de PV obtiennent un bonus d\'ATQ proportionnel à l\'ATQ de base de Bennett.<br>&bull; Le champ 
vertueux applique l\'<strong style="color: #fe925d">élément Pyro</strong> à tous les personnages qui s\'y trouvent.',
        '<img src="/img/skills/Bennett/S4.png" alt="" height="30px" width="30px"/> <strong>Renouveau de la passion</strong>' => '
Réduit le TdR de <strong style="color: #ffd780">Surpassion</strong> de 20 %.',
        '<img src="/img/skills/Bennett/S5.png" alt="" height="30px" width="30px"/> <strong>Enthousiasme intrépide</strong>' => '
Dans le champ de <strong style="color: #ffd780">Merveilleux voyage</strong>, 
<strong style="color: #ffd780">Surpassion</strong> bénéficie des effets suivants :<br>&bull;&nbsp;TdR réduit de 50%.<br>&bull; 
Ne projette pas Bennett en l\'air en Niveau 2 de charge.',
        '<img src="/img/skills/Bennett/S6.png" alt="" height="30px" width="30px"/> <strong>R.A.S.</strong>' => 'Réduit
        la durée d\'une expédition de 25% lorsqu\'elle se déroule à Mondstadt.'
    ],
    // Chongyun
    8 => [
        '<img src="/img/skills/S1/claymore.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Fléau des démons</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 4 coups d\'épée.<br><strong style="color: #ffd780">Attaque
chargée</strong><br>Exécute une succession d\'attaques tournoyantes ; cette attaque consomme de l\'endurance sur la
durée. L\'attaque chargée se termine sur un coup puissant.<br><strong style="color: #ffd780">Attaque plongeante</strong>
<br>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis en chemin et des DGT de zone à l\'impact.',
        '<img src="/img/skills/Chongyun/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong><strong>Lame de l\'esprit : Givre superposé</strong>' => '
Chongyun abat violemment sa longue épée sur le sol, provoquant une explosion de glace qui inflige des<strong style="color: #a0e9e5">
DGT Cryo</strong> aux ennemis en face dans une zone circulaire.<br>Après un court délai, les courants d\'air froids de
l\'explosion se condensent en un champ de givre. Les DGT des attaques normales et chargées des personnages qui s\'y
trouvent et qui manient l\'épée longue, à une main, ou une arme d\'hast obtiennent un <strong style="color: #a0e9e5">enchantement
Cryo</strong>.',
        '<img src="/img/skills/Chongyun/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong><strong>Lame de l\'esprit : Chute d\'étoiles</strong>' => '
D\'un geste rapide, Chongyun invoque en l\'air 3 lames éthérées qui foncent au sol après un court délai.<br>L\'impact
inflige des <strong style="color: #a0e9e5">DGT Cryo de zone</strong> et projette les ennemis en l\'air.',
        '<img src="/img/skills/Chongyun/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong><strong>Respiration stable</strong>' => '
Dans le champs de <strong style="color: #ffd780">Lame de l\'esprit : Givre superposé</strong>, la VIT d\'attaque normale des
personnages maniant une épée à une ou deux mains ou une arme d\'hast augmente de 8%.',
        '<img src="/img/skills/Chongyun/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong><strong>Lame du chasseur de glace</strong>' => '
Une lame apparaît à la fin du champ de <strong style="color: #ffd780">Lame de l\'esprit : Givre superposé</strong> ; elle
inflige des <strong style="color: #a0e9e5">DGT Cryo de zone</strong> équivalent à 100% des DGT de <strong style="color: #ffd780">
Lame de l\'esprit : Givre superposé</strong> aux ennemis proches. La <strong style="color: #a0e9e5">RÉS Cryo</strong> des
ennemis touchés est réduite de 10% pendant 8 s.',
        '<img src="/img/skills/Chongyun/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong><strong>Périple alyzéen</strong>' => '
        Réduit la durée d\'une expédition de 25% lorsqu\'elle se déroule à Liyue.'
    ],
    // Diluc
    9 => [
        '<img src="/img/skills/S1/claymore.png" alt="" height="30px" width="30px"/>&nbsp;<strong>&Eacute;pée trempée</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 4 coups d\'épée.<br><strong style="color: #ffd780">Attaque
chargée</strong><br>Exécute une succession d\'entailles aussi rapides que tranchantes ; cette attaque consomme de l\'
endurance sur la durée. L\'attaque chargée se termine sur un coup puissant.<br><strong style="color: #ffd780">Attaque plongeante
</strong><br>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis en chemin et des DGT de zone à
l\'impact.',
        '<img src="/img/skills/Diluc/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong><strong>Assaut brûlant</strong>' => '
Diluc fait tournoyer sa lourde épée vers l\'avant, infligeant des <strong style="color:
#fe925d">DGT Pyro</strong>. Cette attaque 
peut être enchainée 3 fois de suite. Elle entre en TdR si l\'enchaînement n\'est pas assez rapide.',
        '<img src="/img/skills/Diluc/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Aurore</strong>' => '
Diluc érupte en une explosion de flammes qui repoussent les ennemis et leur inligent des <strong style="color: #fe925d">DGT Pyro
</strong>. Les flammes convergent ensuite sur son arme, pour renaître en un phénix qui inflige d\'importants
<strong style="color: #fe925d">DGT Pyro</strong> et repousse les ennemis sur sa route. Le phénix explose lorssqu\'il atteint sa 
destination et inflige d\'importants <strong style="color: #fe925d">DGT Pyro de zone</strong>.<br>Les flammes confèrent à l\'arme
de Diluc un <strong style="color: #fe925d">enchantement Pyro</strong>.',
        '<img src="/img/skills/Diluc/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Impitoyable</strong>' => '
        Les attaques chargées de Diluc consomment 50 % d\'endurance en moins, et durent 3 s de plus.',
        '<img src="/img/skills/Diluc/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Bénédiction du phénix</strong>' => '
Prolonge l\'<strong style="color: #fe925d">enchantement Pyro</strong> d\'<strong style="color: #ffd780">Aurore</strong> de 4 s.
Diluc inflige 20 % de <strong style="color: #fe925d">DGT Pyro</strong> supplémentaires pendant la durée de cet effet.',
        '<img src="/img/skills/Diluc/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Légende de l\'aurore</strong>' => '
        Lorsque vous forges une épée à deux mains, 15 % du minerai utilisé vous sera rendu.'
    ],
    // Diona
    10 => [
        '<img src="/img/skills/S1/bow.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Archerie de chasse</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 5 tirs consécutifs.<br>
<strong style="color: #ffd780">Attaque chargée</strong><br>Effectue un <strong style="color: #ffd780">tir visé</strong> plus
précis et infligeant davantage de DGT. Lors de la visée, la flèche se charge en élément Cryo, infligeant de considérables
<strong style="color: #a0e9e5">DGT Cryo</strong> quand elle est complètement chargée.<br><strong style="color: #ffd780">Attaque
plongeante</strong><br>Tire une pluie de flèches depuis les airs et plonge au sol, infligeant des DGT de zone à l\'impact.',
        '<img src="/img/skills/Diona/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Griffes Cryo</strong>' => '
Libère des griffes de chat Cryo qui infligent des <strong style="color: #a0e9e5">DGT Cryo</strong>, et génèrent un bouclier
lorsqu\'elles touchent. Le bouclier peut absorber une quantité de DGT proportionnelle aux PV max de Diona, et sa durée
dépend du nombre de cibles touchées.<br><strong style="color: #ffd780">Appui simple</strong><br>Exécute rapidement deux
attaques consécutives de Griffes Cryo.<br><strong style="color: #ffd780">Appui long</strong>Bat rapidement en retraite, et
libère 5 Griffes Cryo.<br>Le bouclier généré lors d\'un appui long obtient un bonus de 75% d\'absorption des DGT.<br>
Le bouclier est efficace à 250% contre les <strong style="color: #a0e9e5">DGT Cryo</strong>, et applique l\'élément
<strong style="color: #a0e9e5">Cryo</strong> au personnage déployé pendant un court instant lorsque le bouclier est généré.',
        '<img src="/img/skills/Diona/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Cuvée spéciale</strong>' => '
Diona lance un cocktail gelé de sa fabrication, qui inflige des <strong style="color: #a0e9e5">DGT Cryo de zone</strong>, et
génère un champ de vapeur d\'alcool.<br><strong style="color: #ffd780">Champ de vapeur d\'alcool</strong><br>&bull;&nbsp;Inflige
aux ennemis présents dans la zone des <strong style="color: #a0e9e5">DGT Cryo</strong> continus ;<br>&bull;&nbsp;Restaure les
PV des personnages présents dans la zone.',
        '<img src="/img/skills/Diona/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Menu secret de La Queue de Chat</strong>' => '
Augmente de 10% la VIT de déplacement des personnages sous la protection du bouclier généré par la<strong style="color: #ffd780">
Griffes Cryo</strong>. Leur coût d\'endurance est de plus réduit de 10%.',
        '<img src="/img/skills/Diona/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Joyeuse ébriété</strong>' => '
Les ennemis entrant dans le champ de vapeur d\'alcool de <strong style="color: #ffd780">Cuvée spéciale</strong> voient leur
ATQ baisse de 10% pendant 15 s.',
        '<img src="/img/skills/Diona/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Apéritif offert</strong>' => '
        12% de chance d\'obtenir un plat supplémentaire lorsque vous cuisinez un plat de soins parfait.'
    ],
    // Eula
    11 => [
        '<img src="/img/skills/S1/claymore.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Escrime de Favonius - Aristocratie</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne 
jusqu\'à 5 coups d\'épée.<br><strong style="color: #ffd780">Attaque chargée</strong><br>Exécute une succession 
d\'entailles aussi rapides que tranchantes ; cette attaque consomme de l\'endurance de façon continue. L\'attaque 
chargée se termine sur un coup puissant.<br><strong style="color: #ffd780">Attaque plongeante</strong><br>Plonge depuis 
les airs pour frapper le sol, infligeant des DGT aux ennemis en chemin et des DGT de zone à l\'impact.',
        '<img src="/img/skills/Eula/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Vortex des mers glacées</strong>' => '
<strong style="color: #ffd780">Appui simple</strong><br>Eula exécute une frappe rapide qui inflige des <strong style="
color: #a0e9e5">DGT Cryo
</strong>. Si elle touche un ennemi, Eula gagne une charge de C&oelig;ur de glace (jusqu\'à 2 
charges max).<br><strong style="color: #ffd780">C&oelig;ur de glace</strong><br>Améliore la R&Eacute;S à l\'interruption 
et la D&Eacute;F d\'Eula.<br><strong style="color: #ffd780">Appui long</strong><br>Eula consomme toutes les charges de 
C&oelig;ur de glace pour faire tournoyer son épée devant elle et infliger des <strong style="color: #a0e9e5">DGT Cryo de 
zone</strong> aux ennemis en face. Si des charges de C&oelig;ur de glace sont consommées, la R&Eacute;S physique et la 
<strong style="color: #a0e9e5">R&Eacute;S Cryo</strong> des ennemis proches dimminuent. Chaque charge de C&oelig;ur de 
glace est convertie en épée vortex de glace, qui inflige des <strong style="color: #a0e9e5">DGT Cryo</strong> aux 
ennemis proches.',
        '<img src="/img/skills/Eula/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Lame de fond</strong>' => 'Eula 
brandit son épée avec fureur, infligeant des <strong style="color: #a0e9e5">DGT Cryo</strong> aux ennemis proches, et 
créé une épée de lumière qui la suit pendant 7 s max. Tant qu\'elle est active, l\'épée de lumière augmente la R&Eacute;S 
à l\'interruption d\'Eula. Lorsqu\'Eula inflige des DGT à des ennemis avec son attaque normale, sa compétence ou son 
déchainement élémentaire, elle accumule des charges d\'énergie pour l\'épée de lumière. Une charge d\'énergie peut être 
cumulée toutes les 0,1 s. Lorsque la durée de l\'épée de lumière est écoulée, elle explose violemment, infligeant des 
DGT physiques aux ennemis proches. Ces DGT augmentent en fonction du nombre de charges d\'énergie accumulées. L\'épée 
explose immédiatement lorsqu\'Eula quitte le champ de bataille.',
        '<img src="/img/skills/Eula/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Maelström de glace</strong>' => '
Lorsque vous consommez 2 charges de C&oelig;ur de glace lors de l\'appui long de <strong style="color: #ffd780">Vortex 
des mers glacées</strong>, une brève épée de lumière est créée. Cette dernière explose immédiatement, infligeant de DGT 
physiques équivalant à 50 % des DGT de base de <strong style="color: #ffd780">Lame de fond</strong>.',
        '<img src="/img/skills/Eula/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Esprit belligérant</strong>' => '
Le TdR de <strong style="color: #ffd780">Vortex des mers glacées</strong> est réinitialisé lors de l\'utilisation de 
<strong style="color: #ffd780">Lame de fond</strong>, et Eula obtient une charge de C&oelig;ur de glace.',
        '<img src="/img/skills/Eula/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Gratification aristocratique</strong>' => '
        10 % de chances d\'obtenir le double de produits lors de la synthèse de matériaux de personnage.'
    ],
    // Fischl
    12 => [
        '<img src="/img/skills/S1/bow.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Flèche de culpabilité</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 5 tirs consécutifs.<br>
<strong style="color: #ffd780">Attaque chargée</strong><br>Effectue un <strong style="color: #ffd780">tir visé</strong> plus précis et infligeant davantage de 
DGT. Lors de la visée, les ténébreux esprits de la nuit convergent sur la flèche. Celle-ci se charge en élément &Eacute;lectro, 
infligeant de considérables <strong style="color: #a757cb">DGT &Eacute;lectro</strong> quand elle est complètement chargée.<br>
<strong style="color: #ffd780">Attaque descendante</strong><br>Tire une pluie de flèches depuis les airs et plonge au 
sol, infligeant des DGT de zone à l\'impact.',
        '<img src="/img/skills/Fischl/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Ailes de surveillance nocturne</strong>' => '
Fischl invoque son fidèle Oz à ses côtés. Le corbeau d\'ombre et de tonnerre descend sur ce monde, infligeant des 
<strong style="color: #a757cb">DGT &Eacute;lectro</strong> dans une petite zone lors de son invocation. Oz tire en continu des 
balles électrifiées sur les ennemis proches tant qu\'il est actif.<br><strong style="color: #ffd780">Appui long</strong><br>
Ajuste la zone où la compétence sera lancée ; appuyez à nouveau lorsqu\'Oz est actif pour le faire revenir.',
        '<img src="/img/skills/Fischl/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Incarnation de la nuit</strong>' => '
Répondant à l\'appel de Fischl, Oz vient protéger sa maîtresse de ses ailes tel un voile nocturne.
Pendant la durée de la compétence :<br>&bull; Fischl prend la forme d\'Oz, ce qui lui permet d\'augmenter sa VIT de 
déplacement.<br>&bull; Les ennemis sur sa route sont frappés par la foudre et subissent des <strong style="color: #a757cb">
DGT &Eacute;lectro</strong>. Chaque ennemi ne peut être frappé qu\'une fois.<br>Lorsque l\'effet prend fin, Oz reste pour 
combattre les ennemis de sa maîtresse. Si Oz est déjà présent sur le terrain avant l\'utilisation de cette compétence, 
son temps de présence sera remis à zéro. Restaure une partie de l\'énergie élémentaire de Fischl une fois terminé.',
        '<img src="/img/skills/Fischl/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Corbeau maléfique</strong>' => '
Oz libère sur les ennemis proches la foudre du jugement lorsque Fischl le touche d\'une flèche complètement 
chargée, leur infligeant des <strong style="color: #a757cb">DGT &Eacute;lectro de zone</strong> équivalent à 152,7% des DGT du tir.',
        '<img src="/img/skills/Fischl/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Foudre divine</strong>' => '
Lorsque votre personnage déployé déclenche une <strong style="color: #a757cb">réaction liée à l\'élément &Eacute;lectro</strong> 
en la présence d\'Oz, l\'ennemi est frappé par la foudre du jugement divin, et subit des <strong style="color: #a757cb">
DGT &Eacute;lectro équivalent</strong> à 80% de l\'ATQ de Fischl.',
        '<img src="/img/skills/Fischl/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Jardin secret</strong>' => '
        Réduit la durée d\'une expédition de 25% lorsqu\'elle se déroule à Mondstadt.'
    ],
    // Ganyu
    13 => [
        '<img src="/img/skills/S1/bow.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Archerie Liutian</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 6 tirs consécutifs.<br><strong style="color: #ffd780">Attaque
chargée</strong><br>Effectue un <strong style="color: #ffd780">tir visé</strong> plus précis et infligeant davantage de DGT. Lors du <strong style="color: #ffd780">tir visé</strong>, la puissance du 
froid vient se concentrer sur la pointe de la flèche. Les effets varient selon le nombre de charges :<br>&bull; 1 charge :
Tire une flèche glaciale qui inflige des <strong style="color: #a0e9e5">DGT Cryo</strong>.<br>&bull; 2 charges : Tire une flèche de
givre qui inflige des <strong style="color: #a0e9e5">DGT Cryo</strong>.<br>Le givre se répand lorsqu\'il touche un ennemi,
infligeant des <strong style="color: #a0e9e5">DGT Cryo de zone</strong>.<br><strong style="color: #ffd780">Attaque descendante</strong><br>
Tire une pluie de flèches depuis les airs et plonge au sol, infligeant des DGT de zone à l\'impact.',
        '<img src="/img/skills/Ganyu/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Trace de Qilin</strong>' => '
Ganyu dépose un lotus de glace qui inflige des <strong style="color: #a0e9e5">DGT Cryo</strong> de zone puis part vite en retraite.
<br><strong style="color: #ffd780">Lotus de glace</strong><br>Le lotus nargue les ennemis et concentre leurs attaques.<br>Ses PV
sont proportionnels aux PV max de Ganyu ; Le lotus explose à la fin ou s\'il est détruit entre temps, et inflige des
<strong style="color: #a0e9e5">DGT Cryo de zone</strong>.',
        '<img src="/img/skills/Ganyu/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Baptême céleste</strong>' => '
Ganyu invoque une perle de glace magique, tant qu\'elle est active, la perle libère des éclats de glace en continu qui
infligent des <strong style="color: #a0e9e5">DGT Cryo de zone </strong> aux ennemis dans la zone.',
        '<img src="/img/skills/Ganyu/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Cœur indivisible</strong>' => '
        Tirer une Flèche de givre confère pendant 5 s aux Flèches de givres 
        suivantes ainsi qu\'aux zones de givre ainsi créées un bonus de 20% de taux CRIT.',
        '<img src="/img/skills/Ganyu/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Harmonie du ciel et de la terre</strong>' => '
Les personnages déployés se trouvant dans la zone de Baptême céleste obtiennent un bonus de 20% de <strong style="color: #a0e9e5">
DGT Cryo</strong> supplémentaires.',
        '<img src="/img/skills/Ganyu/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Arc de réserve</strong>' => '
        Lorsque vous forgez un arc, 15% du minerai utilisé vous sera rendu.'
    ],
    // Hu Tao
    14 => [
        '<img src="/img/skills/S1/polearm.png" alt="" height="30px" width="30px"/> <strong>Lance secrète de Wangsheng</strong>' => '',
        '<img src="/img/skills/Hu_Tao/S2.png" alt="" height="30px" width="30px"/> <strong>Chaperon de la renaissance</strong>' => '',
        '<img src="/img/skills/Hu_Tao/S3.png" alt="" height="30px" width="30px"/> <strong>Apaisement divin</strong>' => '',
        '<img src="/img/skills/Hu_Tao/S4.png" alt="" height="30px" width="30px"/> <strong>Chrysalide</strong>' => '',
        '<img src="/img/skills/Hu_Tao/S5.png" alt="" height="30px" width="30px"/> <strong>Sang bouillant</strong>' => '',
        '<img src="/img/skills/Hu_Tao/S6.png" alt="" height="30px" width="30px"/> <strong>Plus il y en a, mieux c\'est</strong>' => '
        18 % de chance d\'obtenir un plat suspect supplémentaire du même type lorsque vous cuisinez un plat parfait.'
    ],
    // Kahedehara Kazuha
    15 => [
        '<img src="/img/skills/S1/sword.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kahedehara_Kazuha/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kahedehara_Kazuha/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kahedehara_Kazuha/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kahedehara_Kazuha/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kahedehara_Kazuha/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    // Kujou Sara
    16 => [
        '<img src="/img/skills/S1/bow.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kujou_Sara/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kujou_Sara/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kujou_Sara/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kujou_Sara/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kujou_Sara/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    // Jean
    17 => [
        '<img src="/img/skills/S1/sword.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    // Kaeya
    18 => [
        '<img src="/img/skills/S1/sword.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kaeya/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kaeya/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kaeya/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kaeya/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Kaeya/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    // Keqing
    19 => [
        '<img src="/img/skills/S1/sword.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Keqing/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Keqing/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Keqing/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Keqing/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Keqing/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    20 => [
        '<strong<img src="/img/skills/S1/catalyst.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    21 => [
        '<strong<img src="/img/skills/S1/catalyst.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    22 => [
        '<strong<img src="/img/skills/S1/catalyst.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    23 => [
        '<strong<img src="/img/skills/S1/catalyst.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    // Noëlle
    24 => [
        '<img src="/img/skills/S1/claymore.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Noelle/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Noelle/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Noelle/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Noelle/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Noelle/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    // Qiqi
    25 => [
        '<img src="/img/skills/S1/sword.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Qiqi/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Qiqi/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Qiqi/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Qiqi/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Qiqi/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    // Razor
    26 => [
        '<img src="/img/skills/S1/claymore.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Razor/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Razor/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Razor/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Razor/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Razor/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    // Rosalia
    27 => [
        '<img src="/img/skills/S1/polearm.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Rosalia/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Rosalia/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Rosalia/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Rosalia/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Rosalia/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    // Sangonomiya Kokomi
    28 => [
        '<strong<img src="/img/skills/S1/catalyst.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Jean/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    // Sayu
    29 => [
        '<img src="/img/skills/S1/claymore.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Sayu/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Sayu/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Sayu/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Sayu/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Sayu/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    // Shogun Raiden
    30 => [
        '<img src="/img/skills/S1/polearm.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Prémisse</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 5 coups de lance.<br><strong style="color: #ffd780">Attaque 
chargée</strong><br>Consomme de l\'endurance pour exécuter une attaque ascendante.<br><strong style="color: #ffd780">Attaque 
descendante</strong><br>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis sur la route et des 
DGT de zone à l\'impact.',
        '<img src="/img/skills/Shogun_Raiden/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Transcendance : Présage funeste</strong>' => '
La Shogun Raiden dévoile un fragment de son euthymie, infligeant des <strong style="color: #a757cb">DGT &Eacute;lectro</strong> aux 
ennemis proches, et accordant à tous les personnages de l\'équipe à proximité un œil de jugement orageux.<br><strong style="color: #ffd780">
Œil de jugement orageux</strong><br>&bull;&nbsp;Lorsqu\'un personnage bénéficiant de cet effet attaque et inflige des 
DGT à un adversaire, l\'œil déclenche une attaque coordonnée, infligeant des <strong style="color: #a757cb">DGT &Eacute;lectro de 
zone</strong> à l\'emplacement de l\'ennemi.<br>&bull;&nbsp;Les personnages qui obtiennent un œil de jugement orageux 
voient les DGT de leurs déchaînements élémentaires augmenter pendant la durée de l\'œil, en fonction de l\'énergie 
élémentaire consommée par le déchaînement.<br>L\'œil peut déclencher une attaque coordonnée toutes les 0,9 s par équipe. 
<br>Les attaques coordonnées générées par des personnages hors de votre équipe infligent 20 % des DGT normaux.',
        '<img src="/img/skills/Shogun_Raiden/S3.png" alt="" height="30px" width="30px"/> <strong>Art secret : Dogme d\'idéal</strong>' => '
La Shogun Raiden libère le Kendo d\'idéal et inflige des <strong style="color: #a757cb">DGT &Eacute;lectro de zone</strong>, avant 
d\'utiliser l\'Harmonie d\'idéal au combat pendant un certain temps. Les DGT infligés par le Kendo d\'idéal et ceux 
infligés par les attaques sous Harmonie d\'idéal augmentent selon le nombre de charges de résolution de Chakra 
Desiderata consommées en utilisant l\'aptitude.<br><strong style="color: #ffd780">Harmonie d\'idéal</strong><br> Dans cet état, 
la Shogun Raiden utilisera son tachi au combat, tandis que ses attaques normales, chargées et plongeantes seront 
imprégnées de <strong style="color: #a757cb">DGT &Eacute;lectro</strong> ne pouvant pas être enchantés. Lorsque de telles attaques 
touchent des ennemis, la Shogun restaure l\'énergie élémentaire de tous les personnages de l\'équipe à proximité. La 
restauration peut être déclenchée une fois toutes les secondes de cette façon, et un maximum de 5 fois pendant toute la 
durée de cette aptitude.<br>Dans cet état, la R&Eacute;S à l\'interruption de la Shogun Raiden augmente, et elle est immunisée 
contre les <strong style="color: #a757cb">&Eacute;lectrocutions</strong>.<br> Tant qu\'Harmonie d\'idéal est active, les DGT des 
attaques normales, chargées et plongeantes de la Shogun Raiden sont considérés comme étant des DGT de déchaînement 
élémentaire.<br>Les effets d\'Harmonie d\'idéal seront annulés lorsque la Shogun Raiden quitte le champ de bataille.<br>
<strong style="color: #ffd780">Chakra Desiderata</strong><br>Lorsque les personnages de l\'équipe à proximité utilisent un 
déchaînement élémentaire (hormis la Shogun Raiden), le Chakra Desiderata de la Shogun Raiden accumule de la résolution 
en fonction de l\'énergie élémentaire consommée par le déchaînement.<br>Il est possible de cumuler jusqu\'à 60 charges 
de résolution.<br>La résolution obtenue par le Chakra Desiderata sera annulée après 300 s si la Shogun Raiden quitte le 
combat.',
        '<img src="/img/skills/Shogun_Raiden/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Souhaits innombrables</strong>' => '
Lorsque les personnages de l\'équipe à proximité obtiennent un orbe ou une particule élémentaire, le Chakra Desiderata 
accumule 2 charges de résolution.<br>Cet effet peut être déclenché une fois toutes les 3 s.',
        '<img src="/img/skills/Shogun_Raiden/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>L\'illuminée</strong>' => '
Tous les 1 % de recharge d\'énergie au-dessus de 100 %, la Shogun Raiden bénéficie des effets suivants :<br>&bull;&nbsp;La 
restauration d\'énergie élémentaire accordée par Harmonie d\'idéal augmente de 0,6 % ;<br>&bull;&nbsp;Le bonus de 
<strong style="color: #a757cb">DGT &Eacute;lectro</strong> augmente de 0,4 %.',
        '<img src="/img/skills/Shogun_Raiden/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Préservation suprême</strong>' => '
Les moras utilisés lors de l\'élévation d\'épées à une main et d\'armes d\'hast sont réduits de 50 %.'
    ],
    // Sucrose
    31 => [
        '<img src="/img/skills/S1/catalyst.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Esprit du vent</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 4 attaques chargées de vent qui infligent 
des <strong style="color: #72e2c3">DGT Anémo</strong>.<br><strong style="color: #ffd780">Attaque chargée</strong><br>Après un 
court délai, inflige des <strong style="color: #72e2c3">DGT Anémo de zone</strong> ; cette attaque consomme de l\'endurance.
<br><strong style="color: #ffd780">Attaque descendante</strong><br>Plonge depuis les airs en concentrant ses pouvoirs Anémo, 
infligeant des DGT aux ennemis sur la route et des <strong style="color: #72e2c3">DGT Anémo de zone</strong> à l\'impact.',
        '<img src="/img/skills/Sucrose/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Esprit du vent : Sujet 6308</strong>' => '
Sucrose invoque un Esprit du vent de taille réduite, qui attire les ennemis et les objets proches à lui, projetant les 
ennemis dans les airs et leur infligeant des <strong style="color: #72e2c3">DGT Anémo</strong>.',
        '<img src="/img/skills/Sucrose/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Esprit du vent : Isomorphe 75 Type II</strong>' => '
Sucrose jette une concoction instable qui libère un Esprit du vent de grande taille. L\'Esprit attire les ennemis 
proches à lui, projetant les ennemis dans les airs et leurs infligeant des <strong style="color: #72e2c3">DGT Anémo</strong>.
<br><strong style="color: #ffd780">Absorption élémentaire</strong><br>L\'Esprit du vent absorbe les éléments
<strong style="color: #21e1eb">Hydro</strong>, <strong style="color: #fe925d">Pyro</strong>, <strong style="color: #a0e9e5">Cryo</strong>
et <strong style="color: #a757cb">&Eacute;lectro</strong> avec lesquels il entre en contact ; ceux-ci lui confèrent leurs attributs,
et infligent un bonus de DGT de l\'élément correspondant. Un seul élément peut être absorbé à la fois.',
        '<img src="/img/skills/Sucrose/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Permutation de catalyste</strong>' => '
        Tous les personnages de l\'équipe du type élémentaire concerné (à l\'exception de Sucrose) obtiennent un bonus 
        de 50 pts de maîtrise élémentaire pendant 8 s lorsque Sucrose déclenche une Dispersion.',
        '<img src="/img/skills/Sucrose/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Mollis Favonius</strong>' => '
Lorsque <strong style="color: #ffd780">Esprit du vent : Sujet 6308</strong> ou <strong style="color: #ffd780">Esprit du vent : Isomorphe
75 Type II</strong> touche un ennemi, tous les personnages (à l\'exception de Sucrose) bénéficient pendant 8 s d\'un 
bonus de maîtrise élémentaire équivalent à 20% de la maîtrise élémentaire de Sucrose.',
        '<img src="/img/skills/Sucrose/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Fragile découverte</strong>' => '
        Sucrose a 10% de chance d\'obtenir le double de produits lors de la synthèse de matériaux d\'amélioration de
        personnage ou d\'arme.'
    ],
    // Tartaglia
    32 => [
        '<img src="/img/skills/S1/bow.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Taille du torrent</strong>' => '
<strong style="color: #ffd780">Contre-courant</strong><br>Les ennemis affectés par cet effet subissent l\'un des types de
<strong style="color: #21e1eb">DGT Hydro de zone</strong> suivants lorsque Tartaglia attaque ; les DGT infligés par ces
effets comptent comme les DGT d\'une attaque normale.<br>&bull;&nbsp;Contre-courant : Flash : Les tirs visés complètement
chargés touchant les ennemis affectés par Contre-courant infligent des DGT de zone consécutifs. Contre-courant : Flash
peut être déclenché une fois toutes les 0,7 s.<br>&bull;&nbsp;Contre-courant : Éclat : Vaincre un ennemi affecté par
Contre-courant provoque une onde qui inflige l\'effet Contre-courant aux ennemis proches.<br><strong style="color: #ffd780">
Attaque normale</strong> : Enchaîne jusqu\'à 6 tirs consécutifs.<br><strong style="color: #ffd780">Attaque chargée</strong> :
Effectue un tir visé plus précis et infligeant davantage de DGT. Lors de la visée, la flèche se charge en élément Hydro,
infligeant des <strong style="color: #21e1eb">DGT Hydro</strong> quand elle est complètement chargée et qu\'elle touche ; elle
inflige également aux ennemis touchés l\'effet Contre-courant.<br><strong style="color: #ffd780">Attaque descendante</strong>
: Tire une pluie de flèches depuis les airs et plonge au sol, infligeant des DGT de zone à l\'impact. Impossible
d\'utiliser l\'attaque descendante lors de l\'activation de Posture du démon : Marée déchaînée (état de mêlée).',
        '<img src="/img/skills/Tartaglia/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Posture du démon : Marée déchaînée</strong>' => '
Tartaglia invoque un arsenal d\'armes exploitant la puissance de l\'eau pure et infligeant des <strong style="color: #21e1eb">DGT
Hydro</strong> aux ennemis proches ; Tartaglia entre en état de mêlée.<br>En état de mêlée, les attaques normales et
chargées de Tartaglia sont converties en <strong style="color: #21e1eb">DGT Hydro</strong>ne pouvant pas être enchantés, et
changent :<br><strong style="color: #ffd780">Contre-courant : Entaille</strong><br>Les attaques de mêlée appliquent à nouveau
l\'effet Contre-courant lorsqu\'elles touchent un ennemi affecté par Contre-courant. Ceci inflige des <strong style="color: #21e1eb">
DGT Hydro de zone</strong>. Les DGT infligés par Contre-courant : Entaille comptent comme des DGT de compétence élémentaire.
<br>Contre-courant : Entaille peut être déclenché une fois toutes les 1,5 s.<br>La compétence prend fin après 30 s, ou
lorsque vous appuyez dessus à nouveau. Tartaglia repasse alors en état de distance ; le TdR de la compétence est
réinitialisé, et dure plus longtemps si l\'état de mêlée a perduré.<br>L\'état de mêlée ne peut exéder 30 s. Au bout de
cette durée, Tartaglia repasse automatiquement à l\'état de distance.<br><strong style="color: #ffd780">Attaque normale</strong>
: Enchaîne jusqu\'à 6 entailles <strong style="color: #21e1eb">Hydro</strong> consécutives.<br><strong style="color: #ffd780">
Attaque chargée</strong> : Exécute une frappe croisée rapide et inflige des <strong style="color: #21e1eb">DGT Hydro</strong>
; cette attaque consomme de l\'endurance.',
        '<img src="/img/skills/Tartaglia/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Ravage : Oblitération</strong>' => '
Tartaglia effectue différentes attaques selon l\'état dans lequel il se trouve :<br><strong style="color: #ffd780">État à distance
: Éclair de balle maléfique</strong><br>Tire rapidement devant lui une flèche gorgée de magie Hydro, qui inflige des
<strong style="color: #21e1eb">DGT Hydro de zone</strong> ainsi que l\'effet Contre-courant aux ennemis en face. Restaure une
partie de l\'énergie élémentaire à la fin de l\'attaque.<br><strong style="color: #ffd780">État de mêlée : Lumière
d\'élimination</strong><br>Exécute une large entaille circulaire, qui inflige d\'importants <strong style="color: #21e1eb">DGT
Hydro</strong> à tous les ennemis proches et peut générer l\'effet Torrent.<br><strong style="color: #ffd780">Contre-courant :
Torrent</strong><br>Lorsqu\'elle touche un ennemi affecté par Contre-courant, Lumière d\'élimination consomme cet effet
et inflige des <strong style="color: #21e1eb">DGT Hydro de zone</strong>. Les DGT infligés par <strong style="color: #ffd780">Contre-courant :
Torrent</strong> comptent comme les DGT d\'un déchaînement élémentaire.',
        '<img src="/img/skills/Tartaglia/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Fin infinie</strong>' => '
        L\'effet Contre-courant est prolongé de 8 s.',
        '<img src="/img/skills/Tartaglia/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Épée hydromorphe</strong>' => '
        Les ennemis subissant des coups CRIT lors d\'attaques normales et chargées sont aussi affectés par l\'effet
Contre-courant tant que l\'état de mêlée de <strong style="color: #ffd780">Posture du démon : Marée déchaînée</strong> est actif.',
        '<img src="/img/skills/Tartaglia/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Maîtrise de l\'armement</strong>' => '
        Augmente le niveau des attaques normales des personnages de votre équipe de 1.'
    ],
    // Thomas
    33 => [
        '<img src="/img/skills/S1/polearm.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Thomas/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Thomas/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Thomas/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Thomas/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Thomas/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => ''
    ],
    // Venti
    34 => [
        '<img src="/img/skills/S1/bow.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Venti/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Venti/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Venti/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Venti/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Venti/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => ''
    ],
    // Xiangling
    35 => [
        '<img src="/img/skills/S1/polearm.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Cuisine-fu</strong>' => '
        <strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 5 coups de lance.<br><strong style="color: #ffd780">Attaque 
chargée</strong><br> Charge en ligne droite et inflige des DGT aux ennemis sur sa route ; cette attaque consomme de
l\'endurance.<br><strong style="color: #ffd780">Attaque descendante</strong><br>Plonge depuis les airs pour frapper le
sol, infligeant des DGT aux ennemis sur la route et des DGT de zone à l\'impact.',
        '<img src="/img/skills/Xiangling/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Attaque Gooba</strong>' => '
Xiangling invoque le panda Gooba. Tant que Gooba est actif, il crache du feu sur les ennemis, leur infligeant des
<strong style="color: #fe925d">DGT pyro de zone</strong> continus.',
        '<img src="/img/skills/Xiangling/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Pyrotation</strong>' => '
Démontrant à nouveau sa maîtrise du feu et des armes, Xiangling libère une tornade de feu qui tournoie autour d\'elle.<br>
La tornade suit le personnage tant qu\'elle est active, infligeant des <strong style="color: #fe925d">DGT Pyro</strong> aux
ennemis sur sa route.',
        '<img src="/img/skills/Xiangling/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Feux croisés</strong>' => '
        Augmente la portée des jets de feu de Gooba de 20 %.',
        '<img src="/img/skills/Xiangling/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Attention, ça pique</strong>' => '
À la fin d\'<strong style="color: #ffd780">Attaque Gooba</strong>, le gentil petit Gooba laisse quelques piments sur sa position
avant de disparaître. Ces piments confèrent un bonus de 10 % d\'ATQ pendant 10 s.',
        '<img src="/img/skills/Xiangling/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Cheffe cuisinière</strong>' => '
        12 % de chance d\'obtenir un plat supplémentaire lorsque vous cuisinez un plat parfait qui renforce l\'ATQ.'
    ],
    // Xiao
    36 => [
        '<img src="/img/skills/S1/polearm.png" alt="" height="30px" width="30px"/> <strong>Coup de tourbillon</strong>'
        => '<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 6 coups de lance.<br><strong style="color: #ffd780">
Attaque chargée</strong><br>Consomme de l\'endurance pour exécuter une attaque ascendante.<br><strong style="color: #ffd780">
Attaque descendante</strong><br>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis en chemin et 
des DGT de zone à l\'impact. Xiao ne subit pas de DGT lorsqu\'il exécute une attaque descendante.',
        '<img src="/img/skills/Xiao/S2.png" alt="" height="30px" width="30px"/> <strong>Cycle du vent lemniscatique</strong>'
        => 'Xiao se précipite vers l\'avant, infligeant des <strong style="color: #72e2c3">DGT Anémo</strong> aux 
ennemis sur sa route.<br>Fonctionne aussi dans les airs.<br>Xiao commence avec 2 charges.',
        '<img src="/img/skills/Xiao/S3.png" alt="" height="30px" width="30px"/> <strong>Fléau du mal</strong>' => 'Xiao 
        arbore le Masque du Yaksha.<br><strong style="color: #ffd780">Masque du Yaksha</strong><br>&bull; Améliore 
        considérablement la capacité de saut de Xiao.<br>&bull; Augmente la portée et les DGT d\'attaque.<br>&bull; Les 
        DGT d\'attaque sont convertis en <strong style="color: #72e2c3">DGT Anémo</strong> ne pouvant pas être 
        enchantés.<br>Cet effet consomme des PV de façon continue.<br>L\'état prend fin lorsque Xiao est vaincu ou 
        quitte le champ de bataille.',
        '<img src="/img/skills/Xiao/S4.png" alt="" height="30px" width="30px"/> <strong>Dompteur de démons : Conquérant 
du mal</strong>' => 'Xiao inflige 5 % de DGT supplémentaires tant que <strong style="color: #ffd780">Fléau du mal</strong>
est actif. Un cumul de 5 % de DGT supplémentaires est ensuite appliqué toutes les 3 s tant que dure la compétence.<br>
Cumul max : 25 % de DGT supplémentaires.',
        '<img src="/img/skills/Xiao/S5.png" alt="" height="30px" width="30px"/> <strong>Dissolution d\'éon : Chute des 
cieux</strong>' => '<strong style="color: #ffd780">Cycle du vent lemniscatique</strong> inflige 15% de DGT en plus 
lorsqu\'il est relancé dans les 7 s.<br>Cet effet dure 7 s et peut être cumulé 3 fois au maximum. Le délai est 
réinitialisé à chaque nouveau cumul.',
        '<img src="/img/skills/Xiao/S6.png" alt="" height="30px" width="30px"/> <strong>Transcendance : Contrôleur de 
gravité</strong>' => 'Réduit la consommation d\'endurance des personnages de l\'équipe de 20% lors de l\'escalade. Ne 
peut pas être cumulé avec d\'autres aptitudes passives ayant les mêmes effets.'
    ],
    // Xingqiu
    37 => [
        '<img src="/img/skills/S1/sword.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Xingqiu/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Xingqiu/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Xingqiu/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Xingqiu/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Xingqiu/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    // Xinyan
    38 => [
        '<img src="/img/skills/S1/claymore.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Xinyan/S2.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Xinyan/S3.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Xinyan/S4.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Xinyan/S5.png" alt="" height="30px" width="30px"/> <strong></strong>' => '',
        '<img src="/img/skills/Xinyan/S6.png" alt="" height="30px" width="30px"/> <strong></strong>' => ''
    ],
    // Yanfei
    39 => [
        '<img src="/img/skills/S1/polearm.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Caresse des nuages</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 5 coups de lance.<br><strong style="color: #ffd780">Attaque 
chargée</strong><br>Consomme de l\'endurance pour charger en ligne droite et infliger des DGT aux ennemis sur la route.<br><strong style="color: #ffd780">Attaque 
plongeante</strong><br>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis sur la route et des 
DGT de zone à l\'impact.',
        '<img src="/img/skills/Jean/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Jean/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Jean/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Jean/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Jean/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => ''
    ],
    // Yoimiya
    40 => [
        '<img src="/img/skills/S1/bow.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Yoimiya/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Yoimiya/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Yoimiya/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Yoimiya/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => '',
        '<img src="/img/skills/Yoimiya/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong></strong>' => ''
    ],
    // Zhongli
    41 => [
        '<img src="/img/skills/S1/polearm.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Pluie de pierre</strong>' =>
            '<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 6 coups de lance.<br><strong 
style="color: #ffd780">Attaque chargée</strong><br>Charge vers l\'avant, faisant pleuvoir des lances de roche sur sa route.<br>
<strong style="color: #ffd780">Attaque descendante</strong><br>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux 
ennemis sur la route et des DGT de zone à l\'impact.',
        '<img src="/img/skills/Zhongli/S2.png" alt="" height="30px" width="30px"/> <strong>Dominus Lapidis</strong>' =>
            '<strong style="color: #ffd780">Appui simple</strong><br>Zhongli matérialise une Dorsale rocheuse qui inflige 
des <strong style="color: #e3b342">DGT Géo de zone</strong>.<br>La Dorsale entre en résonance avec les autres <strong style="color: #e3b342">
constructions Géo</strong> présentes.<br>L\'amas rocheux libère l\'écho de la pierre originelle de façon intermittente, 
infligeant des <strong style="color: #e3b342">DGT Géo</strong> aux ennemis à proximité.<br>La Dorsale rocheuse est une construction 
Géo qui bloque les attaques et peut être escaladée.<br>Il ne peut exister qu\'une seule Dorsale à la fois.<br><strong 
style="color: #ffd780">Appui long</strong><br>Zhongli fait exploser l\'<strong style="color: #e3b342">élément Géo</strong> contenu dans les 
environs, entraînant les effets suivants :<br>&bull; Un bouclier de jade capable d\'absorber une quantité de DGT proportionnelle 
aux PV max de Zhongli est généré.<br>Le bouclier est efficace à 250% contre les <strong style="color: #e3b342">DGT Géo</strong>.
<br>&bull; Inflige des <strong style="color: #e3b342">DGT Géo</strong> de zone ; Absorbe l\'<strong style="
color: #e3b342">élément Géo</strong> 
des cibles proches affectées par l\'<strong style="color: #e3b342">élément Géo</strong> (jusqu\'à 2 cibles max).<br>Cet effet n\'
inflige pas de DGT.',
        '<img src="/img/skills/Zhongli/S3.png" alt="" height="30px" width="30px"/> <strong>Chute de météore</strong>' =>
            'Zhongli fait tomber des cieux un gigantesque météore, qui inflige d\'importants <strong style="color: #e3b342">DGT Géo
</strong> à l\'impact et pétrifie les ennemis.<br><strong style="color: 
#ffd780">Pétrification</strong><br>Les ennemis pétrifiés sont 
immobilisés.',
        '<img src="/img/skills/Zhongli/S4.png" alt="" height="30px" width="30px"/> <strong>Ondes résonnantes</strong>' =>
            'Chaque attaque touchant le bouclier de jade génère les effets suivants :<br>&bull; Augmente la force du bouclier 
de 5% ;<br>&bull; Cet effet peut être cumulé 5 fois maximum et dure jusqu\'à la fin du bouclier.',
        '<img src="/img/skills/Zhongli/S5.png" alt="" height="30px" width="30px"/> <strong>Domination de la Terre</strong>' =>
            '<strong style="color: #ffd780">Chute de météore</strong> inflige un bonus de DGT équivalent à 33% des PV max de Zhongli.',
        '<img src="/img/skills/Zhongli/S6.png" alt="" height="30px" width="30px"/> <strong>Cristal du destin</strong>' =>
            'Lorsque vous forgez une arme d\'hast, 15% du minerai utilisé vous sera rendu.',
    ],
    // Gorou
    42 => [
        '<img src="/img/skills/S1/bow.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Empenne aux crocs acérés</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 4 tirs consécutifs.<br><strong style="color: #ffd780">Attaque
chargée</strong><br>Effectue un <strong style="color: #ffd780">tir visé</strong> plus précis et infligeant davantage de DGT.<br>
Lors de la visé, la flèche se charge de cristaux de pierre, infligeant des <strong style="color: #e3b342">DGT Géo</strong>
quand elle est complètement chargée.<br><strong style="color: #ffd780">Attaque plongeante</strong><br>Tire une pluie de
flèches depuis les airs et plonge au sol, infligeant des DGT de zone à l\'impact.',
        '<img src="/img/skills/Gorou/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Défense intégrale d\'Inuzaka</strong>' => '
Inflige des <strong style="color: #e3b342">DGT Géo de zone</strong> et érige une bannière de général.<br>
<strong style="color: #ffd780">Bannière de général</strong><br>Accorde les effets suivants aux personnages déployés dans
la zone d\'effet en fonction de la quantité de personnages de type <strong style="color: #e3b342">Géo</strong> dans
l\'équipe au moment de l\'utilisation&nbsp;:<br>&bull;&nbsp;Avoir 1 personnage Géo accorde un effet de pied ferme :
bonus de D&Eacute;F.<br>&bull;&nbsp;Avoir 2 personnages Géo accorde un effet d\'imprenabilité : effet précédent + bonus
de R&Eacute;S à l\'interruption.<br>&bull;&nbsp;Avoir 3 personnages Géo accorde un effet de fracas : effets précédents +
<strong style="color: #e3b342">bonus de DGT Géo</strong>.<br>Gorou ne peut générer qu\'une bannière de général à la fois,
et les personnages ne peuvent bénéficier des effets que d\'une seule bannière de général à la fois. Lorsque le
personnage quitte la zone, les effets continuent pendant 2 s.<br><strong style="color: #ffd780">Appui long</strong><br>
Ajuste la zone où la compétence sera lancée.',
        '<img src="/img/skills/Gorou/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Crocs bestiaux : Vers la victoire</strong>' => '
Affichant sa bravoure de général, Gorou inflige des <strong style="color: #e3b342">DGT Géo de zone</strong> et crée un champ
de prestige de général pour enhardir ses compagnons.<br><strong style="color: #ffd780">Prestige de général</strong><br>
Les caractéristiques suivantes s\'appliquent&nbsp;:<br>&bull;&nbsp;Ce champ possède des effets identiques à ceux de la
bannière de général créée par la compétence élémentaire « Défense intégrale d\'Inuzaka », accordant des bonus aux
personnages déployés dans la zone d\'effet en fonction du nombre de personnages de type <strong style="color: #e3b342">Géo
</strong> dans l\'équipe. Le champ se déplace en suivant le personnage déployé.<br>&bull;&nbsp;Déclenche un effondrement
cristallin toutes les 1,5 s qui inflige des <strong style="color: #e3b342">DGT Géo de zone</strong> à 1 ennemi dans la
zone d\'effet vers l\'emplacement du personnage déployé toutes les 1,5 s.<br>Si une bannière de général créée par Gorou
est présente lors de l\'utilisation, elle sera détruite. De plus, si Gorou utilise sa compétence élémentaire « Défense
intégrale d\'Inuzaka » alors qu\'un prestige de général est actif, il ne crée pas de bannière de général.<br>Si Gorou
est vaincu, les effets du prestige de général sont annulés.',
        '<img src="/img/skills/Gorou/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Nonchalance du vent et de la pluie</strong>' => '
Pendant 12 s après <strong style="color: #ffd780">Crocs bestiaux : Vers la victoire</strong>, la D&Eacute;F de tous les personnages
de l\'équipe à proximité augmente de 25 %.',
        '<img src="/img/skills/Gorou/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Faveur rendue</strong>' => '
Les DGT des attaques suivantes de Gorou augmentent en fonction de sa D&Eacute;F&nbsp;:<br>&bull;&nbsp;Les DGT de compétence
de <strong style="color: #ffd780">Défense intégrale d\'Inuzaka</strong> augmentent à hauteur de 156 % de sa D&Eacute;F.<br>
&bull;&nbsp;Les DGT de compétence et les DGT de l\'effondrement cristallin de <strong style="color: #ffd780">Crocs bestiaux :
Vers la victoire</strong> augmentent à hauteur de 15,6 % de sa D&Eacute;F.',
        '<img src="/img/skills/Gorou/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Chien renifleur</strong>' => '
Affiche l\'emplacement des <strong style="color: #ffd780">produits d\'Inazuma</strong> sur la mini-carte.'
    ],
    // Shenhe
    43 => [
        '<img src="/img/skills/S1/polearm.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Percée des étoiles</strong>' => '
        <strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 5 coups de lance.<br><strong 
style="color: #ffd780">Attaque chargée</strong><br>Consomme de l\'endurance pour charger en ligne droite et infliger des
DGT aux ennemis sur la route.<br><strong style="color: #ffd780">Attaque descendante</strong><br>Plonge depuis les airs
pour frapper le sol, infligeant des DGT aux ennemis sur la route et des DGT de zone à l\'impact.',
        '<img src="/img/skills/Shenhe/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Invocation d\'esprit printannier</strong>' => '
La rosée givrée et argentée exorcisera tous les démons.<br>Accrode un effet de pennage glacé à tous les membres de
l\'équipe à proximité, et inflige des <strong style="color: #a0e9e5">DGT Cryo</strong> de différentes manières selon que
la capacité a été activée avec un appui simple ou long.<br><strong style="color: #ffd780">Appui simple</strong><br>Se précipite
vers l\'avant avec un esprit talismanique, infligeant des <strong style="color: #a0e9e5">DGT Cryo</strong> aux ennemis en chemin.
<br><strong style="color: #ffd780">Appui long</strong><br>Ordonne à l\'esprit talismanique d\'infliger des
<strong style="color: #a0e9e5">DGT Cryo de zone</strong>.<br><strong style="color: #ffd780">Pennage glacé</strong><br> Lorsqu\'une
attaque normale, chargée ou plongeante, une compétence ou un déchaînement élémentaire inflige des <strong style="color: #a0e9e5">
DGT Cryo</strong> à un ennemi, les DGT infligés augmentent en fonction de l\'ATQ actuelle de Shenhe. Les effets du
pennage glacé disparaissent à la fin de sa durée ou après avoir activé un certain nombre de cumuls. En utilisant un
pennage glacé avec un appui long à la place d\'un appui simple, sa durée et le nombre de cumuls générés augmentent.
Lorsqu\'une attaque de <strong style="color: #a0e9e5">DGT Cryo</strong> touche plusieurs ennemis en même temps, les cumuls sont
consommés selon le nombre d\'ennemis touchés. Les cumuls de pennage glacé sont calculés indépendamment pour tous les
personnages de l\'équipe.',
        '<img src="/img/skills/Shenhe/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Délivrance de la demoiselle divine</strong>' => '
Libère la puissance de l\'esprit talismanique, lui permettant de se déplacer librement dans ce plan d\'existence pour 
infliger des <strong style="color: #a0e9e5">DGT Cryo de zone</strong>. L\'esprit talismanique crée alors un champ qui
diminue les <strong style="color: #a0e9e5">R&Eacute;S Cryo</strong> et physique des ennemis, et inflige des <strong style="color: #a0e9e5">
DGT Cryo</strong> de façon continue aux ennemis à l\'intérieur.',
        '<img src="/img/skills/Shenhe/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>&Eacute;treinte divine</strong>' => '
Lorsque le personnage déployé est dans le champ généré par <strong style="color: #ffd780">Délivrance de la demoiselle
divine</strong>, son bonus de <strong style="color: #a0e9e5">DGT Cryo</strong> augmente de 15 %.',
        '<img src="/img/skills/Shenhe/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Sceau de communion spirituelle</strong>' => '
Lorsque Shenhe utilise <strong style="color: #ffd780">Invocation d\'esprit printanier</strong>, tous les personnages de l\'équipe
à proximité bénéficient des effets suivants :<br><strong style="color: #ffd780">Appui simple</strong><br>&bull;&nbsp;Les DGT
infligés par les compétences et les déchaînements élémentaires augmentent de 15 % pendant 10 s.<br><strong style="color: #ffd780">
Appui long</strong><br>&bull;&nbsp;Les DGT infligés par les attaques normales, chargées et plongeantes augmentent de 15
% pendant 15 s.',
        '<img src="/img/skills/Shenhe/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Arrivée opportune</strong>' => '
        Augmente les récompenses d\'une expédition de 20 h à Liyue de 25 %.'
    ],
    //Yun Jin
    44 => [
        '<img src="/img/skills/S1/polearm.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Caresse des nuages</strong>' => '
<strong style="color: #ffd780">Attaque normale</strong><br>Enchaîne jusqu\'à 5 coups de lance.<br><strong style="color: #ffd780">Attaque 
chargée</strong><br>Consomme de l\'endurance pour charger en ligne droite et infliger des DGT aux ennemis sur la route.<br><strong style="color: #ffd780">Attaque 
plongeante</strong><br>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis sur la route et des 
DGT de zone à l\'impact.',
        '<img src="/img/skills/Yun_Jin/S2.png" alt="" height="30px" width="30px"/>&nbsp;<strong>&Eacute;panouissement ouvert</strong>' => '
Bien que maître Yun ne fasse que jouer la comédie lors de ses combats sur scène, ses talents avec une lance sont bien
réels.<br><strong style="color: #ffd780">Appui simple</strong><br>Brandit sa lance pour caresser les nuages, infligeant des
<strong style="color: #e3b342">DGT Géo</strong><br><strong style="color: #ffd780">Appui long</strong>Adopte la posture
de l\'épanouissement ouvert pour se charger, formant ainsi un bouclier. L\'absorption de DGT du bouclier est fonction
des PV max de Yun Jin, et il est efficace à 150 % contre les DGT élémentaires et physiques. Le bouclier dure jusqu\'à ce
qu\'elle finisse de libérer sa compétence élémentaire.<br>Lorsque vous relâchez la compétence, que la durée prend fin ou
que le bouclier est détruit, Yun Jin libère l\'énergie stockée sous forme d\'attaque, infligeant des<strong style="color: #e3b342">
DGT Géo.</strong><br>En fonction du temps passé à charger, une attaque de 1e ou 2e charge sera déclenchée.',
        '<img src="/img/skills/Yun_Jin/S3.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Bannière de rupture des falaises</strong>' => '
Inflige des <strong style="color: #e3b342">DGT Géo de zone</strong> et accorde une formation de bannière de nuagerie à
tous les personnages de l\'équipe à proximité.<br><strong style="color: #ffd780">Formation de bannière de nuagerie</strong>
<br> Lorsque le personnage inflige des DGT d\'attaque normale à un ennemi, les DGT infligés augmentent en fonction de la
D&Eacute;F actuelle de Yun Jin. Les effets de la formation de bannière de nuagerie disparaissent à la fin de sa durée ou après
avoir activé un certain nombre de cumuls. Lorsqu\'une attaque normale touche plusieurs ennemis en même temps, les cumuls
sont consommés selon le nombre d\'ennemis touchés. Les cumuls de formation de bannière de nuagerie sont calculés
indépendamment pour tous les personnages de l\'équipe.',
        '<img src="/img/skills/Yun_Jin/S4.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Fidèle à soi-même</strong>' => '
Lorsque Yun Jin utilise <strong style="color: #ffd780">&Eacute;panouissement ouvert</strong> au moment exact où elle est attaquée,
elle déclenche sa 2e charge.',
        '<img src="/img/skills/Yun_Jin/S5.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Rejet des conventions</strong>' => '
Lorsque l\'équipe comprend des personnages de 1/2/3/4 types élémentaires, le bonus de DGT d\'attaque normale accordé par
une formation de bannière de nuagerie augmente davantage d\'une valeur équivalant à 2,5 %/5 %/7,5 %/11,5 % de la DÉF de
Yun Jin.',
        '<img src="/img/skills/Yun_Jin/S6.png" alt="" height="30px" width="30px"/>&nbsp;<strong>Nutrition optimisée</strong>' => '
12 % de chances d\'obtenir un plat supplémentaire lorsque vous cuisinez un plat parfait qui a des effets sur
l\'exploration.'
    ]
];