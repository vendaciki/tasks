<?php
/*
Seznam úkolů
Vždy se jako první odešle první úkol (u prvního úkolu stačí jako otázka znak pomlčka, protože tuto otázku se hráč dozví jinde).
Správných odpovědí může být více, odpovědi nejsou citlivé na velikost písmen.
Volitelně můžeš zadat možné špatné odpovědi, po jejichž zadání uvidí hráč odpovídající nápovědný text.
Volitelně také můžeš zadat doprovodné texty ke správným odpovědím. Pokud nezadáš ke správným odpovědím jejich doplňující
text, použije se univerzální text z překladů.
Pokud nepotřebuješ anglické otázky, smaž vše od „en => [“ až po „],“ (se stejným odsazením od levého kraje).
Každá otázka se vytváří podle následujícího vzoru:
new Task(
  "Otázka, která se hráči pošle na jeho e-mail (vyjma první otázky).",
  [
    "Jedna nebo více správných odpovědí v uvozovkách, oddělené čárkou.",
    "Nebere se ohled na malá a velká písmenka; mezery na začátku a na konci se oříznou a mezi slovy se zkrátí na jednu."
  ],
  [
    "nepovinná špatná odpověď" => "Nápovědný tekt k této odpovědi.",
    "jiná nepovinná špatná odpověď" => "Nápovědný tekt k této jiné odpovědi.",
  ],
  [
    "Volitelný doprovodný text k první správé odpovědi.",
    "Volitelný doprovodný text k druhé správé odpovědi.",
    "Pokud napíšeš %answer%, tak se nahradí odpovědí hráče, znak navytvoří zalomení řádku.",
  ],
),
*/
/*
Task list
The first task is always sent first (for the first task, a dash is enough as a question, because the player learns this question elsewhere).
There may be more than one correct answer, the answers are not case sensitive.
Optionally, you can enter possible incorrect answers, after which the player will see the corresponding help text.
Optionally, you can also enter accompanying texts for the correct answers. If you do not enter additional text to the correct answers,
the universal text from the translations will be used.
If you don't need English questions, delete everything from "en => [" to "]," (with the same indent from the left margin).
Each question is created according to the following pattern:
new Task(
  "A question that is sent to the player's e-mail (except for the first question).",
  [
    "One or more correct answers in quotation marks, separated by commas.",
    "Lowercase and uppercase letters are not taken into account; the spaces at the beginning and end are truncated and the spaces between the words are shortened to one."
  ],
  [
    "optional wrong answer" => "A hint to this answer.",
    "another optional wrong answer" => "A hint to this other answer.",
  ],
  [
    "Optional accompanying text to the first response message",
    "Optional accompanying text to the second response message",
    "If you type %answer%, it will be replaced by the player's answer, the \n will create a line break.",
  ],
),
*/
$gameTasks = [
  "cs" => 
  
   new Task(
      "-",
      ["HICON"],
      ["HICON" => "Hurááá. Dalo to zabrat, ale musíme jít prostě dál. \nTvůj první úkol je splněn a ještě 3 zbývají :)",
       "ŠVEJK" => "Dobrý voják Švejk to není.",
       "MĚSTA" => "Tak to je špatná odpověď.",
       "VJEZD" => "Vjezd to není, ale určitě tudma půjdeš dovnitř.",
       "VSTUP" => "Vstup to není, ale určitě ho použiješ.",
      ]
    ),

    new Task(
      'N 49° 10.205 E 016° 35.478 \nZajímá mě nejjižnější segment urnové zdi. Vpravo dole (číslo urny) mínus vlevo nahoře (číslo urny).',
      ["319"],
      ["319" => "No vidíš, a ani to nebylo tak těžký. \nTvůj druhý úkol je splněn :) \nMůžeme jít dál.",
       "623" => "To je trošku vysoké číslo. Zkus to znovu.",
       "316" => "Skoro. Ještě 3 k tomu.",
       "377" => "Malinko uber. Stačí 58.",
      ]  
    ), /*OTÁZKA 1 z 8*/      
    new Task(
      'N 49° 10.246 E 016° 35.441 \nCo je na kameni napsáno? (jen první dvě slova).',
      ["ROZPTYLOVÁ LOUČKA"],
      ["ROZPTYLOVÁ LOUČKA" => "No vidíš, a ani to nebylo tak těžký. \nTvůj druhý úkol je splněn :) \nMůžeme jít dál.",
      ]
    ), /*1 OTÁZKA 2 z 8*/
    
    new Task(
      'N 49° 10.312 E 016° 35.447 \nZde nás bude zajímat pochovaná rodina (černý náhrobek).',
      ["ELGARTOVA"],
      ["ELGARTOVA" => "No vidíš, a ani to nebylo tak těžký. \nTvůj druhý úkol je splněn :) \nMůžeme jít dál.",
      ]
    ), /*1 OTÁZKA 3 z 8*/
    
    new Task(
      'N 49° 10.318 E 016° 35.413 \nTady se nachází černý náhrobek se zlatým písmem „Rodina…“',
      ["LEDEREROVA"],
      ["LEDEREROVA" => "No vidíš, a ani to nebylo tak těžký. \nTvůj druhý úkol je splněn :) \nMůžeme jít dál.",
      ]
    ), /*1 OTÁZKA 4 z 8*/
    
    new Task(
      'N 49° 10.342 E 016° 35.385 \nKolik jehlanů se nachází na střeše krematoria?',
      ["16". "ŠESTNÁCT"],
      ["16" => "No vidíš, a ani to nebylo tak těžký. \nTvůj druhý úkol je splněn :) \nMůžeme jít dál.",
      ["šestnáct" => "Lepsí by byla číslovka, ale uznám ti to taky :)",
      ]
    ), /*1 OTÁZKA 5 z 8*/
    
    new Task(
      'N 49° 10.325 E 016° 35.597 \nVelký černý náhrobek má rodina Čapkova. Jaký obrazec (symbol) mají na náhrobku nahoře?',
      ["KALICH"],
      ["KALICH" => "Symbol husitů nebo taky symbol ženství. \nTvůj druhý úkol je splněn :) \nMůžeme jít dál.",
      ["POHÁR" => "I ten by to mohl být, ale chci jiné slovo.",
      ]
    ), /*1 OTÁZKA 6 z 8*/
    
    new Task(
      'N 49° 10.237 E 016° 35.652 \nKruh slavných osobností. Hledáme houslistu „Jaroslav…“ má housle na náhrobku.',
      ["ŠTĚPÁNEK"],
      ["ŠTĚPÁNEK" => "Velice nadaný český houslista. \nTvůj druhý úkol je splněn :) \nMůžeme jít dál.",
      ]
    ), /*1 OTÁZKA 7 z 8*/
    
    new Task(
      'N 49° 10.220 E 016° 35.612 \nNa zdi nad náhrobky je neúplná socha „černého…“',
      ["ANDĚLA"],
      ["ANDĚLA" => "No vidíš, a ani to nebylo tak těžký. \nTvůj druhý úkol je splněn :) \nMůžeme jít dál.",
      ]
    ), /*1 OTÁZKA 8 z 8*/
    
    new Task(
      'N 49° 10.115 E 016° 35.814 \nPrvní náhrobek ruského vojáka a první slovo v azbuce (z azbuky do latinky).',
      ["GEROJ"],
      ["GEROJ" => "Neboli HRDINA. Proč asi? \nTvůj třetí úkol je splněn :) \nMůžeme jít dál na poslední úkol.",
      ["HRDINA" => "Ano, to je, ale stačí to dát do latinky, ne přeložit. \nTak ještě jednou a správně.",
      ["VELKÝ" => "Velký hrdina. Ano. Zkus to znovu.",
      ]
    ), /*2 OTÁZKA 1 z 8*/
    
    new Task(
      'N 49° 10.098 E 016° 35.786 \nNa pomníku hledej hvězdu. Jaké dvě věci jsou v ní uprostřed? Slova odděl spojkou „… a …“.',
      ["SRP A KLADIVO", "KLADIVO A SRP"],
      ["SRP A KLADIVO" => "Tento obrazec měl Sovětský svaz na vlajce.\nTvůj třetí úkol je splněn :) \nMůžeme jít dál na poslední úkol.",
      ["KLADIVO A SRP" => "Opačné pořadí, ale přímhouřím jedno oko ať můžeš jít dál.\nTvůj třetí úkol je splněn :)",
      ["ŠAVLE A SAMOPAL" => "Ne. To co hledáme, měl Sovětský svaz na vlajce.",
      ]
    ), /*2 OTÁZKA 2 z 8*/
    
    new Task(
      'N 49° 10.116 E 016° 35.833 \nMezi stromky se schovává pomník. První příjmení je? Josef… ',
      ["BENEŠ"],
      ["BENEŠ" => "No vidíš, a ani to nebylo tak těžký. \nTvůj třetí úkol je splněn :) \nMůžeme jít dál na poslední úkol.",
      ]
    ), /*2 OTÁZKA 3 z 8*/
    
    new Task(
      'N 49° 10.091 E 016° 35.861 \nMáme tu pomník. Z kolika částí se skládá? ,
      ["12", "DVANÁCT"],
      ["12" => "No vidíš, a ani to nebylo tak těžký. \nTvůj třetí úkol je splněn :) \nMůžeme jít dál na poslední úkol.",
      ["DVANÁCT" => "To je správné číslo, ale lepší by bylo číslovkou, ale že jsi to ty, tak ti to uznám :)\nTvůj třetí úkol je splněn :)",
      ]
    ), /*2 OTÁZKA 4 z 8*/
    
    new Task(
      'N 49° 10.157 E 016° 35.696 \nNa pravé straně zdi je cedulka na sloupku. Co je na ní napsáno?',
      ["SKUPINA 54"],
      ["SKUPINA 54" => "No vidíš, a ani to nebylo tak těžký. \nTvůj třetí úkol je splněn :) \nMůžeme jít dál na poslední úkol.",
      ]
    ), /*2 OTÁZKA 5 z 8*/
    
    new Task(
      'N 49° 10.164 E 016° 35.760 \nTady je náhrobní kámen, opřený o zeď. Co je na něm napsáno? (je to špatně vidět).',
      ["KONORSA"],
      ["KONORSA" => "No vidíš, a ani to nebylo tak těžký. \nTvůj třetí úkol je splněn :) \nMůžeme jít dál na poslední úkol.",
      ]
    ), /*2 OTÁZKA 6 z 8*/
    
    new Task(
      'N 49° 10.116 E 016° 35.843 \nKolik je pomníků na této straně?.',
      ["10", "DESET"],
      ["10" => "No vidíš, a ani to nebylo tak těžký. \nTvůj třetí úkol je splněn :) \nMůžeme jít dál na poslední úkol.",
      ["DESET" => "Číslovka by byla lepší, ale uznám ti to ať můžeme jít dál.\nTvůj třetí úkol je splněn :)",
      ]
    ), /*2 OTÁZKA 7 z 8*/
    
    new Task(
      'N 49° 10.116 E 016° 35.833 \nMezi stromky se schovává pomník. Kolik je tam jmen.',
      ["20"],
      ["20" => "No vidíš, a ani to nebylo tak těžký. \nTvůj třetí úkol je splněn :) \nMůžeme jít dál na poslední úkol.",
      ["DVACET" => "Číslovka by byla lepší, ale uznám ti to ať můžeme jít dál.\nTvůj třetí úkol je splněn :)",
      ]
    ), /*2 OTÁZKA 8 z 8*/
    
    new Task(
      'N 49° 09.911 E 016° 35.696 \nU konce zdi je pomník dvou rodin. Nás zajímá rodina vpravo.',
      ["DOLEŽELOVA"],
      ["DOLEŽELOVA" => "No, a teď už se můžeš jít logovat a máš povoleno i klít, ale potichu.\nN 49° 10.362 E 016° 35.344 \nLOVU ZDAR :-D",
      ]
    ), /*3 OTÁZKA 1 z 8*/
    
    new Task(
      'N 49° 09.920 E 016° 35.603 \nCo v těchto místech stojí? ',
      ["KONTEJNER"],
      ["KONTEJNER" => "No, a teď už se můžeš jít logovat a máš povoleno i klít, ale potichu.\nN 49° 10.362 E 016° 35.344 \nLOVU ZDAR :-D",
      ["POPELNICE" => "Popelnice to je, ale já bych radši jiný název.",
      ["KOŠ" => "Koš to je, ale já bych radši jiný název.",
      ["STROM" => "Ten tam je taky. Ale co ještě tam je?",
      ]
    ), /*3 OTÁZKA 2 z 8*/
    
    new Task(
      'N 49° 09.967 E 016° 35.535 \nZde na rohu je cedulka a na ní je napsáno…',
      ["79 C"],
      ["79 C" => "No, a teď už se můžeš jít logovat a máš povoleno i klít, ale potichu.\nN 49° 10.362 E 016° 35.344 \nLOVU ZDAR :-D",
      ["79 A" => "Možná bych zkusila třetí písmeno v abecedě.",
      ]
    ), /*3 OTÁZKA 3 z 8*/
    
    new Task(
      'N 49° 09.961 E 016° 35.796 \nTřetí náhrobek, Zdeňka….',
      ["JANSOVÁ"],
      ["JANSOVÁ" => "No, a teď už se můžeš jít logovat a máš povoleno i klít, ale potichu.\nN 49° 10.362 E 016° 35.344 \nLOVU ZDAR :-D",
      ]
    ), /*3 OTÁZKA 4 z 8*/
    
    new Task(
      'N 49° 09.957 E 016° 35.546 \nNáhrobek s velkým hnědým křížem. První jméno na něm? (ženské).',
      ["MARIE"],
      ["MARIE" => "No, a teď už se můžeš jít logovat a máš povoleno i klít, ale potichu.\nN 49° 10.362 E 016° 35.344 \nLOVU ZDAR :-D",
      ]
    ), /*3 OTÁZKA 5 z 8*/
    
    new Task(
      'N 49° 09.958 E 016° 35.746 \nTřetí pomník zprava, rodina…',
      ["HOVORKOVA"],
      ["HOVORKOVA" => "No, a teď už se můžeš jít logovat a máš povoleno i klít, ale potichu.\nN 49° 10.362 E 016° 35.344 \nLOVU ZDAR :-D",
      ]
    ), /*3 OTÁZKA 6 z 8*/
    
    new Task(
      'N 49° 09.929 E 016° 35.903 \nZde máme bránu. Kolik je na ní křížků ve tvaru X? .',
      ["28", "DVACETOSM"],
      ["28" => "No, a teď už se můžeš jít logovat a máš povoleno i klít, ale potichu.\nN 49° 10.362 E 016° 35.344 \nLOVU ZDAR :-D",
      ["DVACETOSM" => "No, byla bych radši za číslovku, ale žej si to ty...\nTeď už se můžeš jít logovat a máš povoleno i klít, ale potichu.\nN 49° 10.362 E 016° 35.344 \nLOVU ZDAR :-D",
      ]
    ), /*3 OTÁZKA 7 z 8*/
    
    new Task(
      'N 49° 10.002 E 016° 35.527 \nU cedulky 79 A roste strom. Co je to za strom? .',
      ["LÍPA"],
      ["STROM" => "No, ale jaký?",
      ["LÍPA" => "No, a teď už se můžeš jít logovat a máš povoleno i klít, ale potichu.\nN 49° 10.362 E 016° 35.344 \nLOVU ZDAR :-D",
      ["-" => "Jaký je náš národní strom?"
      ]
    ), /*3 OTÁZKA 8 z 8*/
    
    
    
    
    
    
    
    
  ],
  "en" => [
    new Task(
      "-",
      [
        "Farrokh Bulsara", "Roger Meddows Taylor", "Brian Harold May", "Freddie Mercury",
        "Roger Taylor", "Brian May", "John Deacon", "Farrokh", "Bulsara", "Freddie", "Mercury",
        "Brian", "Roger", "John", "May", "Taylor", "Deacon", "Harold", "Meddows",
        "Bulsara Farrokh", "Mercury Freddie",
        "Taylor Roger", "Taylor Roger Meddows", "Taylor Meddows Roger", "Deacon John",
        "May Brian", "May Brian Harold", 'May Harold Brian',
      ],
      [
        "Farokh" => "Right next door, you miss one r.",
        "Farrok" => "Right next door, you're missing the letter h.",
        "Farok" => "Right next door, you're missing the letters r and h.",
      ],
      [
        "That's right, you know Freddie's original name!", // Farrokh Bulsara
        "That's right,% answe% is really the full name of the drummer of the Queen!", // Roger Meddows Taylor
        "Well, one of the best guitarists with the full name is really %answer%!", // Brian Harold May
        "Yes, %answer% is correct,\n but you know it was originally called Farrokh Bulsara?", // Freddie Mercury
        "Well, the full name of this British Empire officer is Roger Meddows Taylor!", // Roger Taylor
        "You answered correctly. But Brian Harold May is also a good astrophysicist.", // Brian May
        "%answer% is one of the correct answers. For example,%answer% is the author of the song I Want To Break Free.", // John Deacon
        "Farrokh is the original first name of Freddie Mercury. His original surname was Bulsara.",
        "Bulsara is the original surname of Freddie Mercury. His original first name was Farrokh.",
        "Freddie is the artistic first name of the frontman of the band Queen.\nThe last name was Mercury and his original name was Farrokh Bulsara.",
        "Mercury is the artistic surname of the frontman of the band Queen.\nHis first name was Freddie and his original name was Farrokh Bulsara.",
        "%answer% is the first name of the guitarist of the band Queen. His full name is Brian Harold May.",
        "%answer% is the first name of the drummer of the band Queen. His full name is Roger Meddows Taylor.",
        "%answer% is the first name of the bassist of the band Queen. His full name is John Deacon.",
        "%answer% is the last name of the guitarist of the band Queen. His full name is Brian Harold May.",
        "%answer% is the last name of the drummer of the band Queen. His full name is Roger Meddows Taylor.",
        "%answer% is the last name of the bassist of the band Queen. His full name is John Deacon.",
        "%answer% is the middle name of the guitarist of the band Queen. His full name is Brian Harold May.",
        "%answer% is the middle name of the drummer of the band Queen. His full name is Roger Meddows Taylor.",
      ],
    ),
    new Task(
      "What is the name of the companion of the planet Earth?
      You can try any planet in our solar system and you will always get a specially crafted answer.
      The correct answer is the Moon and Luna.",
      ["Moon", "Luna"],
      [
        "Mercury" => "Oh no, Mercury is closest to the sun, but it is not the companion of the Earth.",
        "Venus" => "Not. Venus is a bright \"star\" that you can see in the morning or evening, but it is not.",
        "Mars" => "It's not the red planet Mars, no way.",
        "Jupiter" => "Jupiter has a big spot, but he is not a companion to Earth.",
        "Saturn" => "This gas giant is known for its beautiful rings, but it is not the right answer.",
        "Uranus" => "It's not Uranus. It is interesting in that it has poles where other planets have an equator.",
        "Neptune" => "Neptune is a more distant planet from Earth, which is also as blue as Earth.\nBut it is not her companion.",
      ],
    ),
    new Task(
      "What does the shape of the scar on Harry's forehead look like?
      Just to be sure: the right answer is lightning.",
      ["lightning"],
    ),
    new Task(
      "What is the name of John Lennon's wife?
      Try these wrong answers first: Joko, Joko Ono, Ono Joko.
      There are more correct answers, Yoko, Ono, Yoko Ono and Ono Yoko.",
      ["Yoko", "Ono", "Yoko Ono" . "Ono Yoko"],
      [
        "Joko" => "Right next door, one letter is wrong!",
        "Joko Ono" => "Right next door, one letter is wrong!",
        "Ono Joko" => "Right next door, one letter is wrong!",
      ]
    ),
    new Task(
      "What is the name of the US capital?
      Try New York, but Washington is right.",
      ["Washington"],
      [
        "New York" => "New York is a big city, but it is not the capital of the USA",
      ]
    ),
    new Task(
      "What is the name of the spring, which is characterized by an intermittent discharge of water ejected turbulently and accompanied by steam?
      The only correct answer is a geyser.",
      ["Geyser"],
    ),
  ],
];