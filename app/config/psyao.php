<?php

use Carbon\Carbon;

return [
    'companies'  => [
        [
            'name'     => 'McDonald’s Restaurant',
            'location' => 'Morges/Nyon',
            'featured' => false,
            'jobs'     => [
                [
                    'title'       => 'Assistant du gérant',
                    'from'        => Carbon::create(2012, 7, 1),
                    'to'          => Carbon::create(2014, 3, 31),
                    'description' => "Supervision du recrutement et de la formation - Supervision de la planification du personnel - Supervision des commandes et du stock - Supervision de l’entretien du matériel - Planification des ventes - Bouclement comptable mensuel"
                ],
                [
                    'title'       => "Coordinateur d'équipe",
                    'from'        => Carbon::create(2006, 7, 1),
                    'to'          => Carbon::create(2012, 6, 30),
                    'description' => "Organisation du personnel sur le terrain - Mise en application des standards de qualité, de services et d’hygiène"
                ],
                [
                    'title'       => 'Collaborateur polyvalent puis Formateur',
                    'from'        => Carbon::create(2003, 3, 7),
                    'to'          => Carbon::create(2006, 6, 30),
                    'description' => "Accueil des clients en caisse - Travail sur les différents postes de production - Formation des nouveaux collaborateurs"
                ]
            ],
        ],
        [
            'name'     => '5D Multimédia & Communication web',
            'location' => 'Lausanne',
            'featured' => false,
            'jobs'     => [
                [
                    'title'       => 'Développeur web stagiaire',
                    'from'        => Carbon::create(2014, 8, 1),
                    'to'          => Carbon::create(2014, 9, 30),
                    'description' => "Réalisation de maquette de site sous Photoshop - Animation d'interface en Javascript/jQuery - Administration de CMS (Wordpress et Drupal) - Développement PHP/MySql en mode orienté objet"
                ],
            ]
        ],
        [
            'name'     => 'Freelance',
            'location' => 'St-Prex',
            'featured' => true,
            'jobs'     => [
                [
                    'title'       => 'Développeur web - Webmaster',
                    'from'        => Carbon::create(2002, 1, 1),
                    'to'          => null,
                    'description' => "Analyse des besoins client - Réalisation et intégration de chartes graphiques - Installation, configuration et personnalisation de CMS - Mise à jour de contenu"
                ],
            ]
        ],
        [
            'name'     => 'CFI SA',
            'location' => 'Neuchâtel',
            'featured' => false,
            'jobs'     => [
                [
                    'title'       => 'Développeur-analyste',
                    'from'        => Carbon::create(2007, 10, 10),
                    'to'          => Carbon::create(2008, 1, 10),
                    'description' => "Développement d’une application web de gestion du recrutement en c#/.net dans le cadre d’un travail de diplôme"
                ],
            ]
        ],
        [
            'name'     => 'Iware SA',
            'location' => 'Morges',
            'featured' => false,
            'jobs'     => [
                [
                    'title'       => 'Concepteur en multimédia stagiaire',
                    'from'        => Carbon::create(2003, 5, 31),
                    'to'          => Carbon::create(2003, 6, 30),
                    'description' => "Réalisation d’un site web de présentation pour un produit - Réalisation d’animations vectorielles"
                ],
            ]
        ],
        [
            'name'     => 'Fondation pour le dépistage du cancer du sein',
            'location' => 'Lausanne',
            'featured' => false,
            'jobs'     => [
                [
                    'title'       => 'Employé de bureau',
                    'from'        => Carbon::create(2001, 11, 1),
                    'to'          => Carbon::create(2002, 2, 28),
                    'description' => "Saisie de données médicales - Numérisation de mammographies"
                ],
            ]
        ],
        [
            'name'     => 'Perfect Nettoyages sàrl',
            'location' => 'Morges',
            'featured' => false,
            'jobs'     => [
                [
                    'title'       => 'Assistant administratif',
                    'from'        => Carbon::create(2001, 6, 1),
                    'to'          => Carbon::create(2004, 7, 31),
                    'description' => "Tenue de la comptabilité - Traitement des salaires - Facturation - Secrétariat"
                ],
            ]
        ],
        [
            'name'     => 'La Poste',
            'location' => 'Daillens',
            'featured' => false,
            'jobs'     => [
                [
                    'title'       => 'Manutentionnaire',
                    'from'        => Carbon::create(1999, 12, 1),
                    'to'          => Carbon::create(2000, 4, 30),
                    'description' => null
                ],
            ]
        ],
    ],
    'institutes' => [
        [
            'name'     => "HEIG-VD",
            'location' => "Lausanne/Yverdon",
            'from'     => null,
            'to'       => null,
            'courses'  => [
                [
                    'title'   => "Ingénieur des médias",
                    'domain'  => "Communication, ingénieurie et management - IT",
                    'from'    => Carbon::create(2004, 10, 1),
                    'to'      => Carbon::create(2008, 7, 31),
                    'diploma' => null
                ]
            ]
        ],
        [
            'name'     => "ERACOM",
            'location' => "Lausanne",
            'from'     => null,
            'to'       => null,
            'courses'  => [
                [
                    'title'   => "Apprentissage de Concepteur en multimédia",
                    'domain'  => "Gestion du web/multimédia et Webmaster",
                    'from'    => Carbon::create(2002, 8, 1),
                    'to'      => Carbon::create(2004, 7, 31),
                    'diploma' => "Certificat fédéral de capacité de Concepteur en multimédia"
                ]
            ]
        ],
        [
            'name'     => "Faculté des hautes études commerciales",
            'location' => "Lausanne",
            'from'     => null,
            'to'       => null,
            'courses'  => [
                [
                    'title'   => "HEC",
                    'domain'  => "Sciences économiques",
                    'from'    => Carbon::create(2000, 10, 1),
                    'to'      => Carbon::create(2001, 7, 31),
                    'diploma' => null
                ]
            ]
        ],
        [
            'name'     => "Faculté de droit",
            'location' => "Lausanne",
            'from'     => null,
            'to'       => null,
            'courses'  => [
                [
                    'title'   => 'Droit',
                    'domain'  => "Sciences juridiques",
                    'from'    => Carbon::create(1995, 10, 1),
                    'to'      => Carbon::create(1999, 7, 31),
                    'diploma' => null
                ]
            ]
        ],
        [
            'name'     => "Centre d'études secondaires et supérieures",
            'location' => "Morges",
            'from'     => null,
            'to'       => null,
            'courses'  => [
                [
                    'title'   => "Gymnase",
                    'domain'  => "Economie et droit",
                    'from'    => Carbon::create(1992, 8, 1),
                    'to'      => Carbon::create(1995, 7, 31),
                    'diploma' => "Baccalauréat et maturité fédérale ès sciences économiques"
                ]
            ]
        ],
    ],
    'skills'     => [
        [
            'name'  => 'PHP5',
            'level' => 60,
        ],
        [
            'name'  => 'HTML/CSS',
            'level' => 70,
        ],
        [
            'name'  => 'Javascript',
            'level' => 50,
        ],
        [
            'name'  => 'Architecture MVC',
            'level' => 60,
        ],
        [
            'name'  => 'Framework Laravel',
            'level' => 40,
        ],
        [
            'name'  => 'MySQL',
            'level' => 60,
        ],
        [
            'name'  => 'Photoshop',
            'level' => 50,
        ],
        [
            'name'  => 'Illustrator',
            'level' => 50,
        ],
        [
            'name'  => 'Dreamweaver',
            'level' => 50,
        ],
    ]

];