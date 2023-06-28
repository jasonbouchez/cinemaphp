<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    <title>Document</title>
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
$tab=[
    // 10 jours sans maman
    [
        "titre" => "10 jours encore sans maman",
     "image" =>"ressources/10_jours_encore_sans_maman/10_jours_encore_sans_maman_affiche.jpg",
     "date de sortie" => "12/04/2023 ",
     "realisateur" => "Ludovic Bernard",
     "dureé" =>"1.36 heures",
     "genre" => "comédie",
     "synopsis" => "Après son licenciement, Antoine, ancien DRH d'une grande enseigne de bricolage, a choisi de rester à la maison pour s'occuper de ses 4 enfants. Un nouveau travail qu'il effectue la plupart du temps seul, car sa femme Isabelle est très occupée par sa nouvelle activité d'avocate. Depuis deux ans dans la famille Mercier, les rôles ont donc clairement été inversés et Antoine commence à de moins en moins tenir le coup face à l'énergie que lui demande sa petite famille. Voilà pourquoi 10 jours de vacances à la montagne s'annoncent comme une aubaine pour le père au foyer qu'il est devenu. Hélas, une affaire inespérée pour le cabinet d'Isabelle tombe du ciel. Elle n'a pas d'autres solutions que de laisser Antoine partir 10 jours au ski seul avec les 4 enfants, et surtout : sans maman !",
    "bande annonce" => '<iframe width="330" height="215" src="https://www.youtube.com/embed/VRDglZvHa-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
    ],
    // 65 la terre d'avant
    [
        "titre" => "65 - la Terre d'avant",
        "image" =>"ressources/65-la_Terre_d_avant/65-la_Terre_d_avant_affiche.jpg",
     "date de sortie" => "15/03/2023",
     "realisateur" => "Scott Beck, Bryan Woods",
     "dureé" => "1.33 heures",
     "genre" => "Action, science-fiction, thriller",
     "synopsis" => "Après un terrible crash sur une planète inconnue, le pilote Mills découvre rapidement qu'il a en réalité échoué sur Terre… il y a 65 millions d'années. Pour réussir leur unique chance de sauvetage, Mills et Koa l'unique autre survivante du crash, doivent se frayer un chemin à travers des terres inconnues peuplées de dangereuses créatures préhistoriques dans un combat épique pour leur survie.",
     "bande annonce" => '<iframe width="330" height="215" src="https://www.youtube.com/embed/RF4pH6Xsorc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
    ],
    // Ailleurs si j'y suis
    [
        "titre"=>"ailleurs si j'y suis",
        "image" =>"ressources/Ailleurs_si_j_y_suis/Ailleurs_si_j_y_suis_affiche.jpg",
    "date de sortie"=>"29/03/2023", 
    "realisateur"=>"François Pirot",
    "dureé"=>"1.71 heures",
    "genre"=>"Comédie",
    "synopsis"=>"Alors que sa famille et son métier le mettent sous pression, Mathieu, sur un coup de tête, s'enfonce dans la forêt devant chez lui. Et y reste. Face à cette démonstration de liberté, ses proches s'interrogent… Sur lui, sur eux-mêmes, sur le sens de leur vie… Et s'il avait raison ?",
    "bande annonce"=>'<iframe width="330" height="215" src="https://www.youtube.com/embed/iYuNRV0NyHg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
    ],
    // Apaches
    [
        "titre" => "apaches",
     "image" =>"ressources/Apaches/apache_affiche.jpg", 
    "date de sortie"=>"29/03/2023",
    "realisateur"=>"Romain Quirot",
    "dureé"=>"1.58 heures",
    "genre"=>"Drame, Historique",
    "synopsis"=>"1900. De Montmartre à Belleville, Paris est aux mains de gangs ultra violents qui font régner la terreur sur la capitale : les Apaches. Prête à tout pour venger la mort de son frère, une jeune femme intègre un gang. Mais plus elle se rapproche de l'homme qu'elle veut éliminer, plus elle est fascinée par ce dernier.",
    "bande annonce"=>'<iframe width="330" height="215" src="https://www.youtube.com/embed/pyRhXe13Whw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
    ],
    // bonne conduite
    [
        "titre" => "bonne conduite",
     "image" =>"ressources/Bonne_conduite/bonne_conduite_affiche.jpg", 
    "date de sortie" =>"29/03/2023",
    "realisateur" =>"Jonathan Barré",
    "dureé" => "1.58 heures",
    "genre" =>"Comédie",
    "synopsis" =>"Pauline a une méthode bien à elle pour faire de la prévention routière : formatrice dans un centre de récupération de points le jour, elle se transforme en serial killeuse de chauffards la nuit.",
    "bande annonce"=>'<iframe width="330" height="215" src="https://www.youtube.com/embed/sRLz3-gcjgg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
    ],
    //donjons et dragons : l'honneur des voleurs 
    [
        "titre" => "donjons et dragons : l'honneur des voleurs" ,
        "image" =>"ressources/Donjons_&_Dragons_L_Honneur_des_voleurs/Donjons_&_Dragons_L_Honneur_des_voleurs_affiche.jpg", 
    "date de sortie" => "12/04/2023",
    "realisateur" =>"Jonathan Goldstein (XII), John Francis Daley",
    "dureé" =>"2.23 heures",
    "genre" =>"Aventure, fantastique",
    "synopsis" => "Un voleur beau gosse, une bande d'aventuriers improbables entreprennent un casse épique pour récupérer une relique perdue. Les choses tournent mal lorsqu'ils s'attirent les foudres des mauvaises personnes. Donjons &amp; Dragons : L'honneur des voleurs transpose sur grand écran l'univers riche et l'esprit ludique du légendaire jeu de rôle à travers une aventure hilarante et pleine d'action.",
    "bande annonce"=>'<iframe width="330" height="215" src="https://www.youtube.com/embed/eRcy28HBdmw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
    ],
    // je verrais toujours vos visages
    [
        "titre" => "Je verrai toujours vos visages" ,
        "image" =>"ressources/Je_verrai_toujours_vos_visages/Je_verrai_toujours_vos_visages_affiche.jpg", 
    "date de sortie" => "29/03/2023",
    "realisateur" =>"Jeanne Herry",
    "dureé" =>"1.96 heures",
    "genre" =>"Drame",
    "synopsis" => "Depuis 2014, en France, la Justice Restaurative propose à des personnes victimes et auteurs d'infraction de dialoguer dans des dispositifs sécurisés, encadrés par des professionnels et des bénévoles comme Judith, Fanny ou Michel. Nassim, Issa, et Thomas, condamnés pour vols avec violence, Grégoire, Nawelle et Sabine, victimes de homejacking, de braquages et de vol à l'arraché, mais aussi Chloé, victime de viols incestueux, s'engagent tous dans des mesures de Justice Restaurative. Sur leur parcours, il y a de la colère et de l'espoir, des silences et des mots, des alliances et des déchirements, des prises de conscience et de la con?ance retrouvée… Et au bout du chemin, parfois, la réparation...",
    "bande annonce"=>'<iframe width="330" height="215" src="https://www.youtube.com/embed/YecNA3DW334" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
    ],
    // john wick
    [
        "titre" => "John Wick : Chapitre 4" ,
        "image" =>"ressources/John_Wick_Chapitre_4/John_Wick_Chapitre_4_affiche.jpg", 
    "date de sortie" => "22/03/2023",
    "realisateur" =>"Chad Stahelski",
    "dureé" =>"2.83 heures",
    "genre" =>"Action",
    "synopsis" => "John Wick découvre un moyen de vaincre l'organisation criminelle connue sous le nom de la Grande Table. Mais avant de gagner sa liberté, Il doit affronter un nouvel ennemi qui a tissé de puissantes alliances à travers le monde et qui transforme les vieux amis de John en ennemis.",
    "bande annonce"=>'<iframe width="330" height="215" src="https://www.youtube.com/embed/JjBZ2iEBcxM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
    ],
    // la chambre des merveilles
    [
        "titre" => "La Chambre des merveilles" ,
        "image" =>"ressources/La_Chambre_des_merveilles/La_Chambre_des_merveilles_affiche.jpg", 
    "date de sortie" => "15/03/2023",
    "realisateur" =>"Lisa Azuelos",
    "dureé" =>"1.63 heures",
    "genre" =>"Comédie dramatique",
    "synopsis" => "La vie toute tracée de Thelma prend un détour tragique lorsqu'un accident plonge son fils Louis, 12 ans, dans le coma. Déterminée à le réveiller par tous les moyens, elle va faire le pari fou d'accomplir une par une les « 10 choses à faire avant la fin du monde » qu'il avait inscrites dans son journal intime, pour lui montrer tout ce que la vie a de magnifique à lui offrir. Mais ce voyage dans les rêves de son adolescent l'emmènera bien plus loin que ce qu'elle imaginait... jusqu'à raviver son propre goût à la vie.",
    "bande annonce" =>'<iframe width="330" height="215" src="https://www.youtube.com/embed/xXBhqEbpt1g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
    ],
    // la marginale
    [
         "titre" => "La Marginale" ,
         "image" =>"ressources/La_Marginale/La_Marginale_affiche.jpg", 
    "date de sortie" => "03/05/2023",
    "realisateur" =>"Franck Cimière",
    "dureé" =>"Inconnu",
    "genre" =>"Comédie",
    "synopsis" => "Michèle, SDF, vit à laéroport dOrly, vaguant entre les différents halls. Elle croise réguilièrement Théo, jeune balayeur à laéroport. Atteint dun handicap mental, il vit chez sa  Tatie  qui le surprotège. Un jour, Michèle fait une découverte des plus inattendues, qui la mène à convaincre Théo de la conduire dans sa voiture sans permis jusquà Lisbonne pour retrouver son fils. Ils sembarquent alors dans un road trip plein de rebondissements sur les routes départementales",
    "bande annonce" => '<iframe width="330" height="215" src="https://www.youtube.com/embed/bj81-1CI6PE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
    ],
    // la petite sirene 
    [
        "titre" => "La Petite sirène" ,
        "image" =>"ressources/La_Petite_sirène/La_Petite_sirene_affiche.jpg", 
    "date de sortie" => "24/05/2023",
    "realisateur" =>"Rob Marshall",
    "dureé" =>"Inconnu",
    "genre" =>"Aventure, drame, Famille, fantastique",
    "synopsis" => "Ariel, la benjamine des filles du roi Triton, est une jeune sirène belle et fougueuse dotée d'un tempérament d'aventurière. Rebelle dans l'âme, elle n'a de cesse d'être attirée par le monde qui existe par-delà les flots. Au détour de ses escapades à la surface, elle va tomber sous le charme du prince Eric. Alors qu'il est interdit aux sirènes d'interagir avec les humains, Ariel sent pourtant qu'elle doit suivre son cœur. Elle conclut alors un accord avec Ursula, la terrible sorcière des mers, qui lui octroie le pouvoir de vivre sur la terre ferme, mais sans se douter que ce pacte met sa vie - et la couronne de son père - en danger...",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/J5VvzJmiqJc title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // La Plus belle pour aller danser
    [
        "titre" => "La Plus belle pour aller danser" ,
        "image" =>"ressources/La_Plus_belle_pour_aller_danser/La_Plus_belle_pour_aller_danser_affiche.jpg", 
    "date de sortie" => "19/04/2023",
    "realisateur" =>"Victoria Bedos",
    "dureé" =>"1.53 heures",
    "genre" =>"Comédie",
    "synopsis" => "Marie-Luce Bison, 14 ans, est élevée par son père dans une joyeuse pension de famille pour seniors dont il est le directeur. C'est bientôt la soirée déguisée de son nouveau collège : son père ne veut pas qu'elle y aille ... et de toute façon, elle n'est pas invitée. Mais poussée par Albert, son meilleur ami de 80 ans, Marie-Luce, s'y incruste, habillée en homme. Ce soir-là, tout le monde la prend pour un garçon… un garçon que l'on regarde et qui plait. Elle décide alors de s'inventer un double masculin prénommé Léo pour vivre enfin sa vie d'ado. Bien entendu, à la maison, la relation avec son père se complique.",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/tinMJbzUWgU title=YouTube video player frameborder=0 allow= accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // La Vie pour de vrai
    [
        "titre" => "La Vie pour de vrai" ,
        "image" =>"ressources/La_Vie_pour_de_vrai/La_Vie_pour_de_vrai_affiche.jpg", 
    "date de sortie" => "19/04/2023",
    "realisateur" =>"Dany Boon",
    "dureé" =>"1.83 heures",
    "genre" =>"Comédie",
    "synopsis" => "Tridan Lagache a passé sa vie au Club Med, à changer d'amis tous les 8 jours. À 50 ans, il démissionne du club de vacances mexicain où il est né, bien décidé à retrouver, 42 ans plus tard, son grand amour d'enfance, Violette. Il débarque à Paris, naïf et perdu mais heureux d'être hébergé chez Louis, un demi-frère dont il ignorait l'existence. Pour se débarrasser d'un Tridan encombrant, Louis supplie une de ses conquêtes, Roxane, de se faire passer pour Violette que Tridan croit reconnaître au premier regard.",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/jLJquRF4nNg title=YouTube video player frameborder=0 allow= accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // le royaume de naya 
    [
        "titre" => "Le Royaume de Naya" ,
        "image" =>"ressources/Le_Royaume_de_Naya/Le_Royaume_de_Naya_affiche.jpg", 
    "date de sortie" => "29/03/2023",
    "realisateur" =>"Oleh Malamuzh, Oleksandra Ruban",
    "dureé" =>"1.65 heure",
    "genre" =>"Aventure, Animation, Famille, fantastique",
    "synopsis" => "Par-delà les hautes Montagnes Noires se cache un royaume peuplé de créatures fantastiques. Depuis des siècles, elles protègent du monde des hommes une source de vie éternelle aux pouvoirs infinis. Jusqu'au jour où Naya, la nouvelle élue de cette forêt enchantée, rencontre Lucas, un jeune humain égaré dans les montagnes. À l'encontre des règles établies depuis des millénaires, ils vont se revoir, sans prendre garde aux conséquences qui s'abattront sur le royaume. L'aventure ne fait que commencer.",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/dVHZ-q2aLmY title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // Les Aventures de Ricky
    [
        "titre" => "Les Aventures de Ricky" ,
        "image" =>"ressources/Les_Aventures_de_Ricky/Les_Aventures_de_Ricky_affiche.jpg",
    "date de sortie" => "12/04/2023Royaume_de_Naya_affiche",
    "realisateur" =>"Mette Rank-Tange, Benjamin Quabeck",
    "dureé" =>"1.41 heure",
    "genre" =>"Aventure, Animation, Famille",
    "synopsis" => "Ricky, un jeune moineau intrépide adopté par une famille de cigognes, est embarqué dans une aventure épique au cœur de l'Afrique. Accompagné de ses fidèles amis Olga la chouette pygmée et Kiki la perruche disco, il se lance à la poursuite d'un joyau légendaire…",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/BETFXlWV9ac title=YouTube video player frameborder= 0 allow= accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // Les Complices
    [
        "titre" => "Les Complices" ,
        "image" =>"ressources/Les_Complices/Les_Complices_affiche.jpg", 
    "date de sortie" => "12/04/2023",
    "realisateur" =>"Cécilia Rouaud",
    "dureé" =>"Inconnu",
    "genre" =>"Comédie",
    "synopsis" => "Max, un impitoyable tueur à gages de cinquante ans, découvre qu'il a un problème : il s'évanouit désormais devant la moindre goutte de sang. Son avenir dans la profession étant compromis, il va devoir se reconvertir... Mais pas si simple quand sa seule compétence professionnelle est de tuer des gens… Ils se fait aider par un couple de jeunes voisins, Karim et Stéphanie, qui n'imaginent pas un instant à qui ils ont affaire... Max s'attache, malgré lui, au jeune couple, jusqu'à ce que son passé le rattrape...",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/LRUrVzW035w title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // Les Gardiens de la Galaxie 3
    [
        "titre" => "Les Gardiens de la Galaxie 3" ,
        "image" =>"ressources/Les_Gardiens_de_la_Galaxie_3/Les_Gardiens_de_la_Galaxie_3_affiche.jpg", 
    "date de sortie" => "03/05/2023",
    "realisateur" =>"James Gunn",
    "dureé" =>"Inconnu",
    "genre" =>"Action, fantastique, science-fiction",
    "synopsis" => "Notre bande de marginaux favorite a quelque peu changé. Peter Quill, qui pleure toujours la perte de Gamora, doit rassembler son équipe pour défendre l'univers et protéger l'un des siens. En cas d'échec, cette mission pourrait bien marquer la fin des Gardiens tels que nous les connaissons.",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/0RsvBSFm938 title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // Les Trois Mousquetaires: D'Artagnan
    [
        "titre" => "Les Trois Mousquetaires: D'Artagnan" ,
        "image" =>"ressources/Les_Trois_Mousquetaires_D_Artagnan/Les_Trois_Mousquetaires_D_Artagnan_affiche.jpg", 
    "date de sortie" => "05/04/2023",
    "realisateur" =>"Martin Bourboulon",
    "dureé" =>"2.01 heures",
    "genre" =>"Aventure, Historique",
    "synopsis" => "Du Louvre au Palais de Buckingham, des bas-fonds de Paris au siège de La Rochelle… dans un Royaume divisé par les guerres de religion et menacé d'invasion par l'Angleterre, une poignée d'hommes et de femmes vont croiser leurs épées et lier leur destin à celui de la France.",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/a_OUHJziaoE title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // Mon chat et moi, la grande aventure de Rroû
    [
        "titre" => "Mon chat et moi, la grande aventure de Rroû" ,
        "image" =>"ressources/Mon_chat_et_moi_la_grande_aventure_de_Rrou/Mon_chat_et_moi_la_grande_aventure_de_Rrou_affiche.jpg", 
    "date de sortie" => "05/04/2023",
    "realisateur" =>"Guillaume Maidatchevsky",
    "dureé" =>"1.23 heure",
    "genre" =>"Aventure, Famille",
    "synopsis" =>"",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/k1OZ8bsMlMU title=YouTube video player frameborder= 0 allow= accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // mon crime
    [
        "titre" => "Mon Crime" ,
        "image" =>"ressources/Mon_Crime/Mon_Crime_affiche.jpg", 
    "date de sortie" => "08/03/2023",
    "realisateur" =>"François Ozon",
    "dureé" =>"2.10 heures",
    "genre" =>"comédie",
    "synopsis" => "Dans les années 30 à Paris, Madeleine Verdier, jeune et jolie actrice sans le sou et sans talent, est accusée du meurtre d'un célèbre producteur. Aidée de sa meilleure amie Pauline, jeune avocate au chômage, elle est acquittée pour légitime défense. Commence alors une nouvelle vie, faite de gloire et de succès, jusqu'à ce que la vérité éclate au grand jour…",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/PaNkAPIUvpA title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // Princes et princesses : le spectacle au cinéma
    [
        "titre" => "Princes et princesses : le spectacle au cinéma" ,
        "image" =>"ressources/Princes_et_princesses/Princes_et_princesses_affiche.jpg", 
    "date de sortie" => "05/04/2023",
    "realisateur" =>"Legrand Bemba-Debert",
    "dureé" =>"1.00 heure ",
    "genre" =>"Famille",
    "synopsis" => "Le film du spectacle Princes et Princesses, adapté des contes de Michel Ocelot, le papa de Kirikou. Un voyage dans un monde imaginaire, empreint de poésie. Quatre merveilleuses histoires où se croisent des fées, des reines, des princes et des princesses. La troupe de comédiens, musiciens, danseurs et chanteurs donne vie en quatre tableaux, faits de jeux d'ombres chinoises et de lumière, à d'envoûtants contes africain, japonais, égyptien et perse.",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/zFwvu-iz4eU title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // Sage-Homme
    [
        "titre" => "Sage-Homme" ,
        "image" =>"ressources/Sage-Homme/sage-homme_affiche.jpg", 
    "date de sortie" => "15/03/2023",
    "realisateur" =>"Jennifer Devoldère",
    "dureé" =>"1.40 heure",
    "genre" =>"comédie",
    "synopsis" => "Après avoir raté le concours d'entrée en médecine, Léopold intègre par défaut l'école des sage-femmes en cachant la vérité à son entourage. Alors qu'il s'engage sans conviction dans ce milieu exclusivement féminin, sa rencontre avec Nathalie, sage-femme d'expérience au caractère passionné, va changer son regard sur cet univers fascinant et bouleverser ses certitudes.",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/CWh6fsXY5xk title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // Shazam! La Rage des Dieux
    [
        "titre" => "Shazam! La Rage des Dieux" ,
        "image" =>"ressources/Shazam_La_Rage_des_Dieux/Shazam_La_Rage_des_Dieux_affiche.jpg", 
    "date de sortie" => "29/03/2023" ,
    "realisateur" => ".david F. Sandberg", 
    "dureé" => "1.60 heure",
    "genre" =>"Action, aventure, comédie, fantastique",
    "synopsis" => "Suite des aventures de Billy Batson, ado capable de devenir un super-héros adulte lorsqu'il prononce le mot Shazam !. Investis des pouvoirs des dieux, Billy Batson et ses copains apprennent encore à concilier leur vie d'ados avec leurs responsabilités de super-héros dès lors qu'ils se transforment en adultes. Mais quand les Filles de l'Atlas, trio d'anciennes déesses ivres de vengeance, débarquent sur Terre pour retrouver la magie qu'on leur a volée il y a longtemps, Billy, alias Shazam, et sa famille s'engagent dans une bataille destinée à conserver leurs superpouvoirs, à rester en vie et à sauver la planète. Mais une bande d'adolescents peut-elle vraiment empêcher la destruction du monde ? Et, surtout, Billy en a-t-il seulement envie ... ?",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/sDm4nRYv7dI title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // Spider-Man : Across The Spider-Verse
    [
        "titre" =>"Spider-Man : Across The Spider-Verse" ,
        "image" =>"ressources/Spider-Man_Across_The_Spider-Verse/Spider-Man_Across_The_Spider-Verse_affiche.jpg", 
    "date de sortie" => "31/05/2023",
    "realisateur" =>"Joaquim Dos Santos, Kemp Powers, Justin Thompson",
    "dureé" =>"Inconnu",
    "genre" =>"Action, aventure, Animation, fantastique",
    "synopsis" => "Après avoir retrouvé Gwen Stacy, Spider-Man, le sympathique héros originaire de Brooklyn, est catapulté à travers le Multivers, où il rencontre une équipe de Spider-Héros chargée d'en protéger l'existence. Mais lorsque les héros s'opposent sur la façon de gérer une nouvelle menace, Miles se retrouve confronté à eux et doit redéfinir ce que signifie être un héros afin de sauver les personnes qu'il aime le plus.",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/GtJX3gJInig title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // Super Mario Bros, le film
    [
        "titre" => "Super Mario Bros, le film" ,
        "image" =>"ressources/Super_Mario_ Bros_le_film/Super_Mario_ Bros_le_film_affiche.jpg", 
    "date de sortie" => "05/04/2023",
    "realisateur" =>"Aaron Horvath, Michael Jelenic",
    "dureé" =>"",
    "genre" =>"Action, aventure, Animation, comédie, Famille",
    "synopsis" => "Alors qu'ils tentent de réparer une canalisation souterraine, Mario et son frère Luigi, tous deux plombiers, se retrouvent plongés dans un nouvel univers féerique à travers un mystérieux conduit. Mais lorsque les deux frères sont séparés, Mario s'engage dans une aventure trépidante pour retrouver Luigi. Dans sa quête, il peut compter sur l'aide du champignon Toad, habitant du Royaume Champignon, et les conseils avisés, en matière de techniques de combat, de la Princesse Peach, guerrière déterminée à la tête du Royaume. C'est ainsi que Mario réussit à mobiliser ses propres forces pour aller au bout de sa mission.",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/732LtFVX6eU title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
    // Sur les chemins noirs
    [
        "titre" => "Sur les chemins noirs",
        "image" =>"ressources/Sur_les_chemins_noirs/Sur_les_chemins_noirs_affiche.jpg", 
    "date de sortie" => "22/03/2023",
    "realisateur" =>"Denis Imbert",
    "dureé" =>"1.35 heure",
    "genre" =>"drame",
    "synopsis" =>"Librement inspiré de Sur les chemins noirs de Sylvain Tesson (2016). Un soir d'ivresse, Pierre, écrivain explorateur, fait une chute de plusieurs étages. Cet accident le plonge dans un coma profond. Sur son lit d'hôpital, revenu à la vie, il se fait la promesse de traverser la France à pied du Mercantour au Cotentin. Un voyage unique et hors du temps à la rencontre de l'hyper-ruralité, de la beauté de la France et de la renaissance de soi.",
    "bande annonce" =>"<iframe src=https://www.youtube.com/embed/mOVf8g_XhwE title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    ],
];
?>

<section class="container">

    <?php
foreach ($tab as $key){
    ?>
    <div class="card">

      <h2><?php echo $key['titre']; ?></h2>
      <img class="image"  src=" <?php echo  $key['image']; ?>" alt="">
      <p> <?php echo $key['realisateur']; ?></p>
      <p> <?php echo $key['dureé']; ?></p>
      <p> <?php echo $key['genre']; ?></p>
      <p> <?php echo $key['synopsis']; ?></p>
      <p> <?php echo $key['date de sortie']; ?></p>
      <div class="band-annonce"> <?php echo $key['bande annonce']; ?></div>
      

    </div>
    <?php
}
?>
</div>

</section>

<img src="" alt="">




    
</body>
</html>