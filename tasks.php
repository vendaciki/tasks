<?php

$gameTasks = [
  "cs" => [
    new Task(
      "-",
      ["HICON"],
      0,
      [
        "ŠVEJK" => "Dobrý voják Švejk to není.",
        "MĚSTA" => "Tak to je špatná odpověď.",
        "VJEZD" => "Vjezd to není, ale určitě tudy půjdeš dovnitř.",
        "VSTUP" => "Vstup to není, ale určitě ho použiješ.",
      ],
      [
        "Hurááá. Dalo to zabrat, ale musíme jít prostě dál.\nTvůj první úkol je splněn a ještě 3 zbývají :)",
      ]
    ),
    new Task(
      "Jdi na N 49° 10.205 E 016° 35.478.\nZajímá tě nejjižnější segment urnové zdi. Vpravo dole (číslo urny) mínus vlevo nahoře (číslo urny).",
      ["319"],
      1,
      [
        "623" => "To je trošku vysoké číslo. Zkus to znovu.",
        "316" => "Skoro. Ještě 3 k tomu.",
        "377" => "Malinko uber. Stačí 58.",
      ],
      [
        "No vidíš, a ani to nebylo tak těžký..\nTvůj druhý úkol je splněn :).\nMůžeme jít dál."
      ]
    ), /*OTÁZKA 1 z 8*/
    new Task(
      "Jdi na N 49° 10.246 E 016° 35.441.\nCo je na kameni napsáno? (jen první dvě slova).",
      ["ROZPTYLOVÁ LOUČKA"],
      1,
      [],
      [
        "No vidíš, a ani to nebylo tak těžký.\nTvůj druhý úkol je splněn :).\nMůžeme jít dál.",
      ]
    ), /*1 OTÁZKA 2 z 8*/

    new Task(
      "Jdi na N 49° 10.312 E 016° 35.447.\nZde nás bude zajímat pochovaná rodina (černý náhrobek).",
      ["ELGARTOVA"],
      1,
      [],
      [
        "No vidíš, a ani to nebylo tak těžký.\nTvůj druhý úkol je splněn :).\nMůžeme jít dál.",
      ]
    ), /*1 OTÁZKA 3 z 8*/

    new Task(
      "Jdi na N 49° 10.318 E 016° 35.413.\nTady se nachází černý náhrobek se zlatým písmem „Rodina…“",
      ["LEDEREROVA"],
      1,
      [],
      [
        "No vidíš, a ani to nebylo tak těžký.\nTvůj druhý úkol je splněn :).\nMůžeme jít dál.",
      ]
    ), /*1 OTÁZKA 4 z 8*/

    new Task(
      "Jdi na N 49° 10.342 E 016° 35.385.\nKolik jehlanů se nachází na střeše krematoria?",
      ["16", "ŠESTNÁCT"],
      1,
      [],
      [
        "No vidíš, a ani to nebylo tak těžký.\nTvůj druhý úkol je splněn :).\nMůžeme jít dál.",
        "Lepší by byly číslice, ale uznám ti to taky :)",
      ]
    ), /*1 OTÁZKA 5 z 8*/

    new Task(
      "Jdi na N 49° 10.325 E 016° 35.597.\nVelký černý náhrobek má rodina Čapkova. Jaký obrazec (symbol) mají na náhrobku nahoře?",
      ["KALICH"],
      1,
      [
        "POHÁR" => "I ten by to mohl být, ale chci jiné slovo."
      ],
      [
        "Symbol husitů nebo taky symbol ženství.\nTvůj druhý úkol je splněn :).\nMůžeme jít dál.",
      ]
    ), /*1 OTÁZKA 6 z 8*/

    new Task(
      "Jdi na N 49° 10.237 E 016° 35.652.\nKruh slavných osobností. Hledáme houslistu. Jaroslav … má housle na náhrobku.",
      ["ŠTĚPÁNEK"],
      1,
      [],
      [
        "Velice nadaný český houslista.\nTvůj druhý úkol je splněn :).\nMůžeme jít dál.",
      ]
    ), /*1 OTÁZKA 7 z 8*/

    new Task(
      "Jdi na N 49° 10.220 E 016° 35.612.\nNa zdi nad náhrobky je neúplná socha „černého …“",
      ["ANDĚLA"],
      1,
      [
        "anděl" => "Neúplná socha černého (koho čeho)…"
      ],
      [
        "No vidíš, a ani to nebylo tak těžký..\nTvůj druhý úkol je splněn :).\nMůžeme jít dál.",
      ]
    ), /*1 OTÁZKA 8 z 8*/

    new Task(
      "Jdi na N 49° 10.115 E 016° 35.814.\nPrvní náhrobek ruského vojáka a první slovo v azbuce (transkribuj z azbuky do latinky).",
      ["GEROJ"],
      2,
      [
        "HRDINA" => "Ano, to je, ale stačí to dát do latinky, ne přeložit.\nTak ještě jednou a správně.",
        "VELKÝ" => "Velký hrdina. Ano. Zkus to znovu.",
      ],
      [
        "Neboli HRDINA. Proč asi?.\nTvůj třetí úkol je splněn :).\nMůžeme jít dál na poslední úkol.",
      ]
    ), /*2 OTÁZKA 1 z 8*/

    new Task(
      "Jdi na N 49° 10.098 E 016° 35.786.\nNa pomníku hledej hvězdu. Jaké dvě věci jsou v ní uprostřed? Slova odděl spojkou „… a …“.",
      ["SRP A KLADIVO", "KLADIVO A SRP"],
      2,
      [
        "ŠAVLE A SAMOPAL" => "Ne. To co hledáme, měl Sovětský svaz na vlajce.",
      ],
      [
        "Tento obrazec měl Sovětský svaz na vlajce.\nTvůj třetí úkol je splněn :).\nMůžeme jít dál na poslední úkol.",
        "Opačné pořadí, ale přímhouřím jedno oko a jdi dál.\nTvůj třetí úkol je splněn :)",
      ]
    ), /*2 OTÁZKA 2 z 8*/

    new Task(
      "Jdi na N 49° 10.116 E 016° 35.833.\nMezi stromky se schovává pomník. První příjmení je? Josef …",
      ["BENEŠ"],
      2,
      [],
      [
        "No vidíš, a ani to nebylo tak těžký.\nTvůj třetí úkol je splněn :).\nMůžeme jít dál na poslední úkol.",
      ]
    ), /*2 OTÁZKA 3 z 8*/

    new Task(
      "Jdi na N 49° 10.091 E 016° 35.861.\nMáme tu pomník. Z kolika částí se skládá?",
      ["12", "DVANÁCT", "DVANÁCTI"],
      2,
      [],
      [
        "No vidíš, a ani to nebylo tak těžký.\nTvůj třetí úkol je splněn :).\nMůžeme jít dál na poslední úkol.",
        "To je správné číslo, ale lepší by to bylo číslicemi, ale že jsi to ty, tak ti to uznám :)\nTvůj třetí úkol je splněn :)",
        "To je správně, ale stačilo by číslo. :)\nTvůj třetí úkol je splněn :)",
      ]
    ), /*2 OTÁZKA 4 z 8*/

    new Task(
      "Jdi na N 49° 10.157 E 016° 35.696.\nNa pravé straně zdi je cedulka na sloupku. Co je na ní napsáno?",
      ["SKUPINA 54"],
      2,
      [],
      [
        "No vidíš, a ani to nebylo tak těžký.\nTvůj třetí úkol je splněn :).\nMůžeme jít dál na poslední úkol.",
      ]
    ), /*2 OTÁZKA 5 z 8*/

    new Task(
      "Jdi na N 49° 10.164 E 016° 35.760.\nTady je náhrobní kámen, opřený o zeď. Co je na něm napsáno? (je to špatně vidět).",
      ["KONORSA"],
      2,
      [],
      [
        "No vidíš, a ani to nebylo tak těžký.\nTvůj třetí úkol je splněn :).\nMůžeme jít dál na poslední úkol.",
      ]
    ), /*2 OTÁZKA 6 z 8*/

    new Task(
      "Jdi na N 49° 10.116 E 016° 35.843.\nKolik je pomníků na této straně?.",
      ["10", "DESET"],
      2,
      [],
      [
        "No vidíš, a ani to nebylo tak těžký.\nTvůj třetí úkol je splněn :).\nMůžeme jít dál na poslední úkol.",
        "Číslice by byly lepší, ale uznám ti to ať můžeme jít dál.\/nTvůj třetí úkol je splněn :)",
      ]
    ), /*2 OTÁZKA 7 z 8*/

    new Task(
      "Jdi na N 49° 10.116 E 016° 35.833.\nMezi stromky se schovává pomník. Kolik je tam jmen.",
      ["20", "DVACET"],
      2,
      [],
      [
        "No vidíš, a ani to nebylo tak těžký..\nTvůj třetí úkol je splněn :).\nMůžeme jít dál na poslední úkol.",
        "Číslice by byly lepší, ale uznám ti to ať můžeme jít dál.\nTvůj třetí úkol je splněn :)",
      ]
    ), /*2 OTÁZKA 8 z 8*/

    new Task(
      "Jdi na N 49° 09.911 E 016° 35.696.\nU konce zdi je pomník dvou rodin. Nás zajímá rodina vpravo. Jak se rodina jmenuje?",
      ["DOLEŽELOVA"],
      3,
    ), /*3 OTÁZKA 1 z 8*/

    new Task(
      "Jdi na N 49° 09.920 E 016° 35.603.\nCo v těchto místech stojí? ",
      ["KONTEJNER"],
      3,
      [
        "POPELNICE" => "Popelnice to je, ale já bych radši jiný název.",
        "KOŠ" => "Koš to je, ale já bych radši jiný název.",
        "STROM" => "Ten tam je taky. Ale co ještě tam je?",
      ]
    ), /*3 OTÁZKA 2 z 8*/

    new Task(
      "Jdi na N 49° 09.967 E 016° 35.535.\nZde na rohu je cedulka a na ní je napsáno…",
      ["79 C", "79C"],
      3,
      [
        "79 A" => "Možná bych zkusila třetí písmeno v abecedě.",
        "79A" => "Možná bych zkusila třetí písmeno v abecedě.",
      ]
    ), /*3 OTÁZKA 3 z 8*/

    new Task(
      "Jdi na N 49° 09.961 E 016° 35.796.\nTřetí náhrobek, Zdeňka ….",
      ["JANSOVÁ"],
      3
    ), /*3 OTÁZKA 4 z 8*/

    new Task(
      "Jdi na N 49° 09.957 E 016° 35.546.\nNáhrobek s velkým hnědým křížem. První jméno na něm? (ženské).",
      ["MARIE"],
      3
    ), /*3 OTÁZKA 5 z 8*/

    new Task(
      "Jdi na N 49° 09.958 E 016° 35.746.\nTřetí pomník zprava, rodina…",
      ["HOVORKOVA"],
      3
    ), /*3 OTÁZKA 6 z 8*/

    new Task(
      "Jdi na N 49° 09.929 E 016° 35.903.\nZde máme bránu. Kolik je na ní křížků ve tvaru X?",
      ["DVACETOSM", "28"],
      3,
      [
        "Číslice by byly lepší, ale uznám ti to ať můžeme jít dál.\nTvůj třetí úkol je splněn :)",
      ]
    ), /*3 OTÁZKA 7 z 8*/

    new Task(
      "Jdi na N 49° 10.002 E 016° 35.527.\nU cedulky 79 A roste strom. Co je to za strom?",
      ["LÍPA"],
      3,
      [
        "STROM" => "No, ale jaký?",
      ]
    ), /*3 OTÁZKA 8 z 8*/
  ],
];
