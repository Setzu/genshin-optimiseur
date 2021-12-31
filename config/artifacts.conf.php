<?php
// Voir le fichier de conf metadatas => affixes pour les valeur des affixes
// Les mainStats dépendent uniquement du type de l'artefact et non du rang
return [
    'mainStats' => [
        // Id de l'attribut (voir fichier metadatas.conf)
        // ATQ
        1 => [
            // Niveau => valeur
            0 => 47,
            2 => 100,
            8 => 152,
            11 => 205,
            16 => 258 ,
            20 => 311
        ],
        // ATQ %
        2 => [
            0 => 7,
            2 => 14.9,
            8 => 22.8,
            11 => 30.8,
            16 => 38.7,
            20 => 46.6
        ],
        // DEF %
        4 => [
            0 => 8.7,
            2 => 18.6,
            8 => 28.6,
            11 => 38.5,
            16 => 48.4,
            20 => 58.3
        ],
        // PV
        5 => [
            0 => 717,
            2 => 1530,
            8 => 2342,
            11 => 3155,
            16 => 3967 ,
            20 => 4780
        ],
        // PV %
        6 => [
            0 => 7,
            2 => 14.9,
            8 => 22.8,
            11 => 30.8,
            16 => 38.7,
            20 => 46.6
        ],
        // Recharge d'énergie (%)
        7 => [
            0 => 7.8,
            2 => 16.6,
            8 => 25.4,
            11 => 34.2,
            16 => 43,
            20 => 51.8
        ],
        // Taux CRIT (%)
        8 => [
            0 => 4.7,
            2 => 9.9,
            8 => 15.2,
            11 => 20.5,
            16 => 25.8,
            20 => 31.1
        ],
        // DGT CRIT (%)
        9 => [
            0 => 9.3,
            2 => 19.9,
            8 => 30.5,
            11 => 41,
            16 => 51.6,
            20 => 62.2
        ],
        // Maitrise élémentaire
        10 => [
            0 => 28,
            2 => 60,
            8 => 91,
            11 => 123,
            16 => 155,
            20 => 187
        ],
        // Bonus de soins (%)
        11 => [
            0 => 5.4,
            2 => 11.5,
            8 => 17.6,
            11 => 23.7,
            16 => 29.8,
            20 => 35.9
        ],
        // Bonus DGT Physiques (%)
        11 => [
            0 => 8.7,
            2 => 18.6,
            8 => 28.6,
            11 => 38.5,
            16 => 48.4,
            20 => 58.3
        ],
        // Bonus DGT Pyro (%)
        13 => [
            0 => 7,
            2 => 14.9,
            8 => 22.8,
            11 => 30.8,
            16 => 38.7,
            20 => 46.6
        ],
        // Bonus DGT Electro (%)
        12 => [
            0 => 7,
            2 => 14.9,
            8 => 22.8,
            11 => 30.8,
            16 => 38.7,
            20 => 46.6
        ],
        // Bonus DGT Cryo (%)
        15 => [
            0 => 7,
            2 => 14.9,
            8 => 22.8,
            11 => 30.8,
            16 => 38.7,
            20 => 46.6
        ],
        // Bonus DGT Hydro (%)
        16 => [
            0 => 7,
            2 => 14.9,
            8 => 22.8,
            11 => 30.8,
            16 => 38.7,
            20 => 46.6
        ],
        // Bonus DGT Anémo (%)
        17 => [
            0 => 7,
            2 => 14.9,
            8 => 22.8,
            11 => 30.8,
            16 => 38.7,
            20 => 46.6
        ],
        // Bonus DGT Géo (%)
        18 => [
            0 => 7,
            2 => 14.9,
            8 => 22.8,
            11 => 30.8,
            16 => 38.7,
            20 => 46.6
        ],

    ],
    'artifacts' => [
        'flower' => [
            'fr' => 'Fleur',
            'mainStat' => 5 // PV
        ],
        'heather' => [
            'fr' => 'Plume',
            'mainStat' => 1 // ATQ
        ],
        'hourglass' => [
            'fr' => 'Sablier',
            'mainStat' => [2,4,6,7,10]
        ],
        'goblet' => [
            'fr' => 'Coupe',
            'mainStat' => [2,4,6,7,10,12,13,14,15,16,17,18]
        ],
        'headgear' => [
            'fr' => 'Couvre-chef',
            'mainStat' => [2,4,6,7,8,9,10,11]
        ],
    ],
    'affixesValues' => [
        // @TODO : ajouter les valeurs des affixes pour certaines stats
        // Id de l'attribut (voir fichier de conf metadatas)
        // ATQ
        1 => [
            0 => ['min' => 14,'max' => 19],
            2 => ['min' => 14,'max' => 38],
            8 => ['min' => 14,'max' => 57],
            11 => ['min' => 14,'max' => 76],
            16 => ['min' => 14,'max' => 95],
            20 => ['min' => 14,'max' => 114],
            'step' => 1
        ],
        // ATQ %
        2 => [
            0 => ['min' => 4.1,'max' => 19],
            2 => ['min' => 4.1,'max' => 38],
            8 => ['min' => 4.1,'max' => 57],
            11 => ['min' => 4.1,'max' => 76],
            16 => ['min' => 4.1,'max' => 95],
            20 => ['min' => 4.1,'max' => 34.8],
            'step' => 0.1
        ],
        // DEF
        3 => [
            0 => ['min' => 16,'max' => 19],
            2 => ['min' => 16,'max' => 38],
            8 => ['min' => 16,'max' => 57],
            11 => ['min' => 16,'max' => 76],
            16 => ['min' => 16,'max' => 95],
            20 => ['min' => 16,'max' => 1386],
            'step' => 1
        ],
        // DEF %
        4 => [
            0 => ['min' => 5.1,'max' => 19],
            2 => ['min' => 5.1,'max' => 38],
            8 => ['min' => 5.1,'max' => 57],
            11 => ['min' => 5.1,'max' => 76],
            16 => ['min' => 5.1,'max' => 95],
            20 => ['min' => 5.1,'max' => 43.8],
            'step' => 0.1
        ],
        // PV
        5 => [
            0 => ['min' => 209,'max' => 299],
            2 => ['min' => 209,'max' => 38],
            8 => ['min' => 209,'max' => 57],
            11 => ['min' => 209,'max' => 76],
            16 => ['min' => 209,'max' => 95],
            20 => ['min' => 209,'max' => 1794],
            'step' => 1
        ],
        // PV %
        6 => [
            0 => ['min' => 4.1,'max' => 19],
            2 => ['min' => 4.1,'max' => 38],
            8 => ['min' => 4.1,'max' => 57],
            11 => ['min' => 4.1,'max' => 76],
            16 => ['min' => 4.1,'max' => 95],
            20 => ['min' => 4.1,'max' => 34.8],
            'step' => 0.1
        ],
        // Recharge d'énergie (%)
        7 => [
            0 => ['min' => 4.5,'max' => 19],
            2 => ['min' => 4.5,'max' => 38],
            8 => ['min' => 4.5,'max' => 57],
            11 => ['min' => 4.5,'max' => 76],
            16 => ['min' => 4.5,'max' => 95],
            20 => ['min' => 4.5,'max' => 39],
            'step' => 0.1
        ],
        // TAUX CRIT (%)
        8 => [
            0 => ['min' => 2.7,'max' => 3.9],
            2 => ['min' => 2.7,'max' => 7.8],
            8 => ['min' => 2.7,'max' => 11.7],
            11 => ['min' => 2.7,'max' => 15.6],
            16 => ['min' => 2.7,'max' => 19.5],
            20 => ['min' => 2.7,'max' => 23.4],
            'step' => 0.1
        ],
        // DGT CRIT (%)
        9 => [
            0 => ['min' => 5.4,'max' => 7.8],
            2 => ['min' => 5.4,'max' => 15.6],
            8 => ['min' => 5.4,'max' => 23.4],
            11 => ['min' => 5.4,'max' => 31.2],
            16 => ['min' => 5.4,'max' => 39],
            20 => ['min' => 5.4,'max' => 46.8],
            'step' => 0.1
        ],
        // Maîtrise élémentaire
        10 => [
            0 => ['min' => 16,'max' => 23],
            2 => ['min' => 16,'max' => 46],
            8 => ['min' => 16,'max' => 69],
            11 => ['min' => 16,'max' => 92],
            16 => ['min' => 16,'max' => 115],
            20 => ['min' => 16,'max' => 138],
            'step' => 1
        ],
    ],

    // Les affixes sont communs à tous les artefacts peu importe leur type et ne peuvent pas être identique à la
    // main stat. Voir métadatas.conf pour les valeurs
    'affixes' => [1,2,3,4,5,6,7,8,9,10],

    'sets' => [
        1 => [
            'Aventurier' => [
                1 => 'Augmente les PV max de 1000 pts.',
                2 => 'Restaure 30 % des PV pendant 5 s après l\'ouverture d\'un coffre.'
            ],
            'Chanceux' => [
                1 => 'Augmente la DÉF de 100 pts.',
                2 => 'Collecter des moras restaure 300 PV.',
            ],
            'Médecin itinérant' => [
                1 => 'Augmente les soins reçus par le personnage de 20 %.',
                2 => 'Le déchaînement élémentaire restaure 20 % des PV.'
            ],
        ],
        2 => [
            'Aventurier' => [
                1 => 'Augmente les PV max de 1000 pts.',
                2 => 'Restaure 30 % des PV pendant 5 s après l\'ouverture d\'un coffre.'
            ],
            'Chanceux' => [
                1 => 'Augmente la DÉF de 100 pts.',
                2 => 'Collecter des moras restaure 300 PV.',
            ],
            'Médecin itinérant' => [
                1 => 'Augmente les soins reçus par le personnage de 20 %.',
                2 => 'Le déchaînement élémentaire restaure 20 % des PV.'
            ],
        ],
        3 => [
            'Aventurier' => [
                1 => 'Augmente les PV max de 1000 pts.',
                2 => 'Restaure 30 % des PV pendant 5 s après l\'ouverture d\'un coffre.'
            ],
            'Chanceux' => [
                1 => 'Augmente la DÉF de 100 pts.',
                2 => 'Collecter des moras restaure 300 PV.',
            ],
            'Médecin itinérant' => [
                1 => 'Augmente les soins reçus par le personnage de 20 %.',
                2 => 'Le déchaînement élémentaire restaure 20 % des PV.'
            ],
            'Coeur du Voyageur' => [
                1 => 'Augmente l\'ATQ de 18%.',
                2 => 'Augmente le taux CRIT des attaques chargées de 30%'
            ],
            'Miracle' => [
                1 => 'Augmente toutes les RÉS élémentaires de 20 %.',
                2 => 'Les DGT élémentaires subis augmentent la RÉS à l\'élément correspondant de 30 % pendant 10 s. Cet
                effet peut être déclenché une fois toutes les 10 s.'
            ],
            'Berserker' => [
                1 => 'Augmente le taux CRIT de 12 %.',
                2 => 'Augmente le taux CRIT de 24 % lorsque les PV sont inférieurs à 70%.'
            ],
            'Instructeur' => [
                1 => 'Augmente la maîtrise élémentaire de 80 pts.',
                2 => 'Augmente la maîtrise élémentaire de toute l\'équipe de 120 pts pendant 8 s après avoir déclenché
                une réaction élémentaire.'
            ],
            'Exilé' => [
                1 => 'Augmente la recharge d\'énergie de 20 %.',
                2 => 'Le déchaînement élémentaire restaure 2 pts d\'énergie élémentaire à tous les personnages de
                l\'équipe (à l\'exception du porteur) toutes les 2 s pendant 6 s. Cet effet est non cumulable.'
            ],
            'Coeur du Gardien' => [
                1 => 'Augmente la DÉF de 30 %.',
                2 => 'Pour chaque personnage de l\'équipe ayant un élément de type différent du personnage équipé, la
                R&Eacute;S élémentaire correspondante est augmentée de 30 %.'
            ],
            'Coeur du Brave' => [
                1 => 'Augmente l\'ATQ de 18%.',
                2 => 'Augmente les DGT infligés aux ennemis ayant plus de 50 % de PV de 30 %.'
            ],
            'Artiste martial' => [
                1 => 'Augmente les DGT infligés par les attaques normales et chargées de 15 %.',
                2 => 'Augmente les DGT infligés par les attaques normales et chargées de 15 % pendant 8 s après
                l\'utilisation d\'une compétence élémentaire.'
            ],
            'Parieur' => [
                1 => 'Augmente les DGT infligés par la compétence élémentaire de 20%.',
                2 => 'Après la défaite d\'un ennemi, le TdR de compétence élémentaire à 100 % de chances d\'être
                réinitialisé. Cet effet peut être déclenché une fois toutes les 15 s.'
            ],
            'Érudit' => [
                1 => 'Augmente la recharge d\'énergie de 20 %.',
                2 => 'Les personnages maniant l\'arc et le catalyseur récupèrent 3 pts d\'énergie supplémentaire à
                chaque fois qu\'une particule ou élémentaires sont récupérés. Cet effet peut être déclenché une fois
                toutes les 3 s.'
            ],
            'Sacrifieur Pyro' => [
                1 => 'Réduit la durée des effets Pyro subis de 40 %.',
                'headgear only' => true
            ],
            'Sacrifieur Hydro' => [
                1 => 'Réduit la durée des effets Hydro subis de 40 %.',
                'headgear only' => true
            ],
            'Sacrifieur Électro' => [
                1 => 'Réduit la durée des effets Électro subis de 40 %.',
                'headgear only' => true
            ],
            'Sacrifieur Cryo' => [
                1 => 'Réduit la durée des effets Cryo subis de 40 %.',
                'headgear only' => true
            ],
        ],
        4 => [
            'Coeur du Voyageur' => [
                1 => 'Augmente l\'ATQ de 18%.',
                2 => 'Augmente le taux CRIT des attaques chargées de 30%'
            ],
            'Miracle' => [
                1 => 'Augmente toutes les RÉS élémentaires de 20 %.',
                2 => 'Les DGT élémentaires subis augmentent la RÉS à l\'élément correspondant de 30 % pendant 10 s. Cet
                effet peut être déclenché une fois toutes les 10 s.'
            ],
            'Berserker' => [
                1 => 'Augmente le taux CRIT de 12 %.',
                2 => 'Augmente le taux CRIT de 24 % lorsque les PV sont inférieurs à 70%.'
            ],
            'Instructeur' => [
                1 => 'Augmente la maîtrise élémentaire de 80 pts.',
                2 => 'Augmente la maîtrise élémentaire de toute l\'équipe de 120 pts pendant 8 s après avoir déclenché
                une réaction élémentaire.'
            ],
            'Exilé' => [
                1 => 'Augmente la recharge d\'énergie de 20 %.',
                2 => 'Le déchaînement élémentaire restaure 2 pts d\'énergie élémentaire à tous les personnages de
                l\'équipe (à l\'exception du porteur) toutes les 2 s pendant 6 s. Cet effet est non cumulable.'
            ],
            'Coeur du Gardien' => [
                1 => 'Augmente la DÉF de 30 %.',
                2 => 'Pour chaque personnage de l\'équipe ayant un élément de type différent du personnage équipé, la
                R&Eacute;S élémentaire correspondante est augmentée de 30 %.'
            ],
            'Coeur du Brave' => [
                1 => 'Augmente l\'ATQ de 18%.',
                2 => 'Augmente les DGT infligés aux ennemis ayant plus de 50 % de PV de 30 %.'
            ],
            'Artiste martial' => [
                1 => 'Augmente les DGT infligés par les attaques normales et chargées de 15 %.',
                2 => 'Augmente les DGT infligés par les attaques normales et chargées de 15 % pendant 8 s après
                l\'utilisation d\'une compétence élémentaire.'
            ],
            'Parieur' => [
                1 => 'Augmente les DGT infligés par la compétence élémentaire de 20%.',
                2 => 'Après la défaite d\'un ennemi, le TdR de compétence élémentaire à 100 % de chances d\'être
                réinitialisé. Cet effet peut être déclenché une fois toutes les 15 s.'
            ],
            'Érudit' => [
                1 => 'Augmente la recharge d\'énergie de 20 %.',
                2 => 'Les personnages maniant l\'arc et le catalyseur récupèrent 3 pts d\'énergie supplémentaire à
                chaque fois qu\'une particule ou élémentaires sont récupérés. Cet effet peut être déclenché une fois
                toutes les 3 s.'
            ],
            'Sacrifieur Pyro' => [
                1 => 'Réduit la durée des effets Pyro subis de 40 %.',
                'headgear only' => true
            ],
            'Sacrifieur Hydro' => [
                1 => 'Réduit la durée des effets Hydro subis de 40 %.',
                'headgear only' => true
            ],
            'Sacrifieur Électro' => [
                1 => 'Réduit la durée des effets Électro subis de 40 %.',
                'headgear only' => true
            ],
            'Sacrifieur Cryo' => [
                1 => 'Réduit la durée des effets Cryo subis de 40 %.',
                'headgear only' => true
            ],
            'Briseur de glace' => [
                1 => 'Confère un bonus de DGT Cryo de 15 %.',
                2 => 'Augmente le taux CRIT de 20 % lorsque le personnage attaque un ennemi affecté par l\'élément Cryo.
                Confère un bonus supplémentaire de 20 % de taux CRIT si l\'ennemi est gelé.'
            ],
            'Dompteur de foudre' => [
                1 => 'Augmente la R&Eacute;S &Eacute;lectro de 40 %.',
                2 => 'Augmente les DGT infligés aux ennemis affectés par l\'élément &Eacute;lectro de 35 %.'
            ],
            'Marcheur du feu' => [
                1 => 'Augmente la R&Eacute;S Pyro de 40 %.',
                2 => 'Augmente les DGT infligés aux ennemis affectés par l\'élément Pyro de 35 %.'
            ],
            'Amour chéri' => [
                1 => 'Augmente les soins effectués par le personnage de 15 %.',
                2 => 'Augmente les soins reçus par toute l\'équipe de 20 % pendant 10 s après l\'utilisation d\'une
                compétence élémentaire ou d\'un déchaînement élémenataire.'
            ],
            'Rideau du Gladiateur' => [
                1 => 'Augmente l\'ATQ de 18 %.',
                2 => 'Augmente les DGT infligés par les attaques normales de 35 % lorsque ce set d\'artéfacts est équipé
                par les personnages maniant une épée à une ou deux mains ou une arme d\'hast.'
            ],
            'Ombre de la Verte Chasseuse' => [
                1 => 'Confère un bonus de DGT Anémo de 15 %.',
                2 => 'Augmente les DGT infligés par Dispersion de 60 % ; la R&Eacute;S élémentaire des ennemis est
                réduite de 40 % pendant 10 s selon le type élémentaire de Dispersion.'
            ],
            'Bande vagabonde' => [
                1 => 'Augmente la maîtrise élémentaire de 80 pts.',
                2 => 'Augmente les DGT infligés par les attaques chargées de 35 % lorsque ce set d\'artéfacts est équipé
                par les personnages maniant un arc ou un catalyseur.'
            ],
            'Colère de tonnerre' => [
                1 => 'Confère un bonus de DGT &Eacute;lectro de 15 %.',
                2 => 'Augmente les DGT infligés par Surcharge, &Eacute;lectrocution et Supraconduction de 40 %. Lorsque
                vous déclenchez ses réactions élémentaire est réduit de 1 s. Cet effet peut être déclenché une fois
                toutes les 0,8 s.'
            ],
            'Sorcière des flammes ardentes' => [
                1 => 'Confère un bonus de DGT Pyro de 15 %.',
                2 => 'Augmente les DGT infligés par Surcharge et Brûlure de 40 % et ceux d\'&Eacute;vaporation et de
                Fonte de 15 %. L\'utilisation d\'une compétence élémentaire augmente pendant 10 s l\'effet du set de 2
                pièces de 50 % ; cet effet peut être cumulé 3 fois au maximum.'
            ],
            'Ancien rituel royal' => [
                1 => 'Augmente les DGT infligés par le déchaînement élémentaire de 20 %.',
                2 => 'Augmente l\'ATQ de tous les personnage de l\'équipe de 20 % pendant 12 s après un déchaînement
                élémentaire. Cet effet est non cumulable.'
            ],
            'Chevalerie ensanglantée' => [
                1 => 'Augmente les DGT physiques de 25 %.',
                2 => 'L\'utilisation d\'attaques chargées ne consomme pas l\'endurance pendant 10 s après la défaite
                d\'un ennemi, et ces dernières infligent 50 % de DGT supplémentaires.'
            ],
            'Roche ancienne' => [
                1 => 'Confère un bonus de DGT Géo de 15 %.',
                2 => 'Lorsque vous obtenez un cristal issu d\'une Cristallisation, tous les personnages de l\'équipe
                reçoivent un bonus de DGT du second élément de la réaction de 35 % pendant 10 s. Cet effet ne peut
                s\'appliquer qu\'à un seul élément à la fois.'
            ],
            'Météore inversé' => [
                1 => 'Augmente la force du bouclier de 35 %.',
                2 => 'Les attaques normales et chargées infligent un bonus de 40 % de DGT lorsque le personnage est sous
                la protection d\'un bouclier.'
            ],
            'Âme des profondeurs' => [
                1 => 'Confère un bonus de DGT Hydro de 15 %.',
                2 => 'Augmente les DGT infligés par les attaques normales et chargées de 30 % pendant 15 s après
                l\'utilisation d\'une compétence élémentaire.'
            ],
            'Ténacité du Millelithe' => [
                1 => 'Les PV sont augmentés de 20 %.',
                2 => 'Lorsqu\'une compétence élémentaire touche un ennemi, l\'ATQ de tous les personnages de l\'équipe
                à proximité augmente de 20 % et la force de leur bouclier augmente de 30 % pendant 3 s. Cet effet peut
                être déclenché une fois toutes les 0,5 s, même si le personnage équipé de ce set d\'artéfacts fait
                partie de l\'équipe mais n\'est pas déployé.'
            ],
            'Flamme blême' => [
                1 => 'Augmente les DGT physiques de 25 %.',
                2 => 'Lorsqu\'une compétence élémentaire touche un ennemi, l\'ATQ augmente de 9 % pendant 7 s. Cet effet
                peut être cumulé jusqu\'à 2 fois et déclenché une fois toutes les 0,3 s. Une fois 2 cumuls atteints,
                l\'effet du set de 2 pièces augmente de 100 %.'
            ],
            'Réminiscence nostalgique' => [
                1 => 'Augmente l\'ATQ de 18 %.',
                2 => 'Lorsque le personnage possède au minimum 15 pts d\'énergie élémentaire, libérer une compétence
                élémentaire entraîne une perte de 15 pts d\'énergie, mais les DGT infligés par son attaque normale,
                chargée et plongeante augmentent de 50 % pendant 10 s. Cet effet ne se déclenchera plus pendant cette
                durée.'
            ],
            'Emblème du destin brisé' => [
                1 => 'Augmente la recharge d\'énergie de 20 %.',
                2 => 'Augmente les DGT infligés par le déchaînement élémentaire d\'une valeur équivalant à 25 % de la
                recharge d\'énergie. Les DGT peuvent être augmentés de 75 % max de cette manière.'
            ],
            'Coquille des rêves opulents' => [
                1 => 'Augmente la DÉF de 30 %.',
                2 => 'Un personnage équipé de ce set d\'artéfacts obtiendra 1 cumul de Curiosité des façons suivantes :
                sur le champ de bataille, il gagne 1 cumul en touchant un ennemi avec une attaque Géo, ceci pouvant êtr
                 déclenché une fois toutes les 0,3 s ; en faisant partie de l\'équipe mais en n\'étant pas déployé, il
                 gagne 1 cumul toutes les 3 s. La Curiosité peut être cumulée 4 fois maximum, chaque cumul accordant 6
                 % de bonus de DÉF et 6 % de Bonus de DGT Géo. Si 6 s s\'écoulent sans gagner de cumul de Curiosité, 1
                 cumul sera perdu.'
            ],
            'Palourde aux teintes océaniques' => [
                1 => 'Augmente le bonus de soins de 15 %.',
                2 => 'Lorsqu\'un personnage équipé de ce set d\'artéfacts soigne un personnage de l\'équipe, une mousse
                marine apparaîtra pendant 3 s, accumulant la quantité de PV récupérée grâce au soin (y compris tout
                surplus au-dessus de 100 %). À la fin de la durée, la mousse marine explosera, infligeant des DGT aux
                ennemis proches d\'une valeur équivalant à 90 % du soin accumulé (Ces DGT sont calculés de la même
                manière que les réactions d\'Électrocution et de Supraconduction, mais ne sont pas affectés par la
                maîtrise élémentaire, les niveaux des personnages ou les bonus de DGT de réactions élémentaires). Une
                mousse marine peut être générée toutes les 3,5 s, et chaque mousse marine peut accumuler jusqu\'à 30 000
                PV, incluant tout surplus au-dessus de 100 %. Il ne peut exister qu\'une seule mousse marine à la fois.
                Cet effet peut être déclenché même si le personnage équipé de ce set d\'artéfacts fait partie de
                l\'équipe mais n\'est pas déployé.'
            ]
        ],
        5 => [
            'Briseur de glace' => [
                1 => 'Confère un bonus de DGT Cryo de 15 %.',
                2 => 'Augmente le taux CRIT de 20 % lorsque le personnage attaque un ennemi affecté par l\'élément Cryo.
                Confère un bonus supplémentaire de 20 % de taux CRIT si l\'ennemi est gelé.'
            ],
            'Dompteur de foudre' => [
                1 => 'Augmente la R&Eacute;S &Eacute;lectro de 40 %.',
                2 => 'Augmente les DGT infligés aux ennemis affectés par l\'élément &Eacute;lectro de 35 %.'
            ],
            'Marcheur du feu' => [
                1 => 'Augmente la R&Eacute;S Pyro de 40 %.',
                2 => 'Augmente les DGT infligés aux ennemis affectés par l\'élément Pyro de 35 %.'
            ],
            'Amour chéri' => [
                1 => 'Augmente les soins effectués par le personnage de 15 %.',
                2 => 'Augmente les soins reçus par toute l\'équipe de 20 % pendant 10 s après l\'utilisation d\'une
                compétence élémentaire ou d\'un déchaînement élémenataire.'
            ],
            'Rideau du Gladiateur' => [
                1 => 'Augmente l\'ATQ de 18 %.',
                2 => 'Augmente les DGT infligés par les attaques normales de 35 % lorsque ce set d\'artéfacts est équipé
                par les personnages maniant une épée à une ou deux mains ou une arme d\'hast.'
            ],
            'Ombre de la Verte Chasseuse' => [
                1 => 'Confère un bonus de DGT Anémo de 15 %.',
                2 => 'Augmente les DGT infligés par Dispersion de 60 % ; la R&Eacute;S élémentaire des ennemis est
                réduite de 40 % pendant 10 s selon le type élémentaire de Dispersion.'
            ],
            'Bande vagabonde' => [
                1 => 'Augmente la maîtrise élémentaire de 80 pts.',
                2 => 'Augmente les DGT infligés par les attaques chargées de 35 % lorsque ce set d\'artéfacts est équipé
                par les personnages maniant un arc ou un catalyseur.'
            ],
            'Colère de tonnerre' => [
                1 => 'Confère un bonus de DGT &Eacute;lectro de 15 %.',
                2 => 'Augmente les DGT infligés par Surcharge, &Eacute;lectrocution et Supraconduction de 40 %. Lorsque
                vous déclenchez ses réactions élémentaire est réduit de 1 s. Cet effet peut être déclenché une fois
                toutes les 0,8 s.'
            ],
            'Sorcière des flammes ardentes' => [
                1 => 'Confère un bonus de DGT Pyro de 15 %.',
                2 => 'Augmente les DGT infligés par Surcharge et Brûlure de 40 % et ceux d\'&Eacute;vaporation et de
                Fonte de 15 %. L\'utilisation d\'une compétence élémentaire augmente pendant 10 s l\'effet du set de 2
                pièces de 50 % ; cet effet peut être cumulé 3 fois au maximum.'
            ],
            'Ancien rituel royal' => [
                1 => 'Augmente les DGT infligés par le déchaînement élémentaire de 20 %.',
                2 => 'Augmente l\'ATQ de tous les personnage de l\'équipe de 20 % pendant 12 s après un déchaînement
                élémentaire. Cet effet est non cumulable.'
            ],
            'Chevalerie ensanglantée' => [
                1 => 'Augmente les DGT physiques de 25 %.',
                2 => 'L\'utilisation d\'attaques chargées ne consomme pas l\'endurance pendant 10 s après la défaite
                d\'un ennemi, et ces dernières infligent 50 % de DGT supplémentaires.'
            ],
            'Roche ancienne' => [
                1 => 'Confère un bonus de DGT Géo de 15 %.',
                2 => 'Lorsque vous obtenez un cristal issu d\'une Cristallisation, tous les personnages de l\'équipe
                reçoivent un bonus de DGT du second élément de la réaction de 35 % pendant 10 s. Cet effet ne peut
                s\'appliquer qu\'à un seul élément à la fois.'
            ],
            'Météore inversé' => [
                1 => 'Augmente la force du bouclier de 35 %.',
                2 => 'Les attaques normales et chargées infligent un bonus de 40 % de DGT lorsque le personnage est sous
                la protection d\'un bouclier.'
            ],
            '&Acirc;me des profondeurs' => [
                1 => 'Confère un bonus de DGT Hydro de 15 %.',
                2 => 'Augmente les DGT infligés par les attaques normales et chargées de 30 % pendant 15 s après
                l\'utilisation d\'une compétence élémentaire.'
            ],
            'Ténacité du Millelithe' => [
                1 => 'Les PV sont augmentés de 20 %.',
                2 => 'Lorsqu\'une compétence élémentaire touche un ennemi, l\'ATQ de tous les personnages de l\'équipe
                à proximité augmente de 20 % et la force de leur bouclier augmente de 30 % pendant 3 s. Cet effet peut
                être déclenché une fois toutes les 0,5 s, même si le personnage équipé de ce set d\'artéfacts fait
                partie de l\'équipe mais n\'est pas déployé.'
            ],
            'Flamme blême' => [
                1 => 'Augmente les DGT physiques de 25 %.',
                2 => 'Lorsqu\'une compétence élémentaire touche un ennemi, l\'ATQ augmente de 9 % pendant 7 s. Cet effet
                peut être cumulé jusqu\'à 2 fois et déclenché une fois toutes les 0,3 s. Une fois 2 cumuls atteints,
                l\'effet du set de 2 pièces augmente de 100 %.'
            ],
            'Réminiscence nostalgique' => [
                1 => 'Augmente l\'ATQ de 18 %.',
                2 => 'Lorsque le personnage possède au minimum 15 pts d\'énergie élémentaire, libérer une compétence
                élémentaire entraîne une perte de 15 pts d\'énergie, mais les DGT infligés par son attaque normale,
                chargée et plongeante augmentent de 50 % pendant 10 s. Cet effet ne se déclenchera plus pendant cette
                durée.'
            ],
            'Emblème du destin brisé' => [
                1 => 'Augmente la recharge d\'énergie de 20 %.',
                2 => 'Augmente les DGT infligés par le déchaînement élémentaire d\'une valeur équivalant à 25 % de la
                recharge d\'énergie. Les DGT peuvent être augmentés de 75 % max de cette manière.'
            ],
            'Coquille des rêves opulents' => [
                1 => 'Augmente la DÉF de 30 %.',
                2 => 'Un personnage équipé de ce set d\'artéfacts obtiendra 1 cumul de Curiosité des façons suivantes :
                sur le champ de bataille, il gagne 1 cumul en touchant un ennemi avec une attaque Géo, ceci pouvant êtr
                 déclenché une fois toutes les 0,3 s ; en faisant partie de l\'équipe mais en n\'étant pas déployé, il
                 gagne 1 cumul toutes les 3 s. La Curiosité peut être cumulée 4 fois maximum, chaque cumul accordant 6
                 % de bonus de DÉF et 6 % de Bonus de DGT Géo. Si 6 s s\'écoulent sans gagner de cumul de Curiosité, 1
                 cumul sera perdu.'
            ],
            'Palourde aux teintes océaniques' => [
                1 => 'Augmente le bonus de soins de 15 %.',
                2 => 'Lorsqu\'un personnage équipé de ce set d\'artéfacts soigne un personnage de l\'équipe, une mousse
                marine apparaîtra pendant 3 s, accumulant la quantité de PV récupérée grâce au soin (y compris tout
                surplus au-dessus de 100 %). À la fin de la durée, la mousse marine explosera, infligeant des DGT aux
                ennemis proches d\'une valeur équivalant à 90 % du soin accumulé (Ces DGT sont calculés de la même
                manière que les réactions d\'Électrocution et de Supraconduction, mais ne sont pas affectés par la
                maîtrise élémentaire, les niveaux des personnages ou les bonus de DGT de réactions élémentaires). Une
                mousse marine peut être générée toutes les 3,5 s, et chaque mousse marine peut accumuler jusqu\'à 30 000
                PV, incluant tout surplus au-dessus de 100 %. Il ne peut exister qu\'une seule mousse marine à la fois.
                Cet effet peut être déclenché même si le personnage équipé de ce set d\'artéfacts fait partie de
                l\'équipe mais n\'est pas déployé.'
            ]
        ]
    ]
];