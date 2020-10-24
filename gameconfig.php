<?php

/*
Maximální počet úrovní, které má hráč projít.
Pokud má hráč projít všechny úkoly, dej číslo větší než počet úkolů nebo INF.
Maximum of levels who player must play.
If player must play all tasks, enter nubler greater then task count or INF.
*/
define("MAX_LEVEL", INF);
/*
Výchozí jazyk pro hru.
  Pokud nebude nalezen překlad, automaticky se použije tento překlad (musí existovat)
Default game language.
  If no translation is found, this translation will be used automatically (it must exist)
*/
define("DEFAULT_LANGUAGE", "cs");
/*
  Vybírat úkoly náhodně (TRUE nebo FALSE)? Vždy se ale odpovídá na první úkol v seznamu.
  Select task randomly (TRUE or FALSE)? The first answer is always for the first task in list.
*/
define("RANDOMIZED", TRUE);
/*  Poskytovat úkoly podle jejich úrovně (TRUE nebo FALSE)? Pouze, když jsou úkoly vybírány náhodně.
  Může snížit počet úrovní hry. Vždy se ale odpovídá na první úkol v seznamu.
  Provide tasks according to their level (TRUE or FALSE)? Only when tasks are selected at random.
  It can reduce the number of game levels. The first answer is always for the first task in list.
*/
define("PROVIDE_TASKS_BY_LEVELS", TRUE);
/*
E-mail a jméno ze kterého se budou odesílat emaily.
E-mail and name for e-mail sending.
*/
define("OWNER_MAIL", "vylda@answerresponder.cz");
define("OWNER_NAME", "Vylda");
/*
Odesílat skrytou kopii (BCC) na autorův e-mail (TRUE nebo FALSE)?
Send BCC e-mail to author a-mail (TRUE or FALSE)?
*/
define("SEND_BCC", TRUE);

/* PŘEKLADY / TRANSLATIONS */
/*
Poznámky
  V některých případech je použité pole hodnot (v hranatých závorkách []).
  Pak lze použít pro každou úroveň jiný text. Pokud textů je méně než celkový počet úrovní, použije se poslední text.
  ¹ Pokud v textu použiješ %level%, tak se nahradí aktuálním číslem úlohy.
  ² Pokud v textu použiješ %nick%, tak se nahradí zadanou přezdívkou.
  ³ Pokud v textu použiješ \n, tak se nahradí novým řádkem.
  ⁴ Pokud v textu použiješ %email%, tak se nahradí e-mailovou adresou hráče.
  ⁵ Pokud v textu použiješ %answer%, tak se nahradí odeslanou odpovědí.
  ⁶ Pokud v textu použiješ %nextlevel%, tak se nahradí následující úrovní.
  ⁷ Pokud je více textů, budou se aplikovat v pořadí podle úrovně hry.¹²³⁴⁵⁶⁷
*/
/*
Comments:
  In some cases, an array of values is used (in square brackets []).
  Then different text can be used for each level. If the count of texts is less than the total number of levels, the last text is used.
  ¹ If you use %level% in the text, it will be replaced by the current task number.
  ² If you use %nick% in the text, it will be replaced by the entered nickname.
  ³ If you use \n in the text, it will be replaced by a new line.
  ⁴ If you use %email% in the text, it will be replaced by the player's email address.
  ⁵ If you use %answer% in the text, it will be replaced by the sent answer.
  ⁶ If you use% nextlevel% in the text, it will be replaced by the next level.
  ⁷ If there are multiple texts, they will be applied in order according to the level of the game.
*/

$translations = [
  "cs" => [
    /*
    Subjekt e-mailové zprávy při odeslání otázky. ¹
    */
    "MAIL_LEVEL_SUBJECTS"  => [
      "Teď tě čeká %level%. úkol hry",
      "Jdeme na %level%. úkol hry",
      "Pokračujeme v jízdě, úkol číslo %level% je tady",
      "Blížíme se k cíli…",
      "Poslední úkol je tady!",
    ],
    /*
    Subjekt e-mailové zprávy po poslední správně zodpovězené otázce.
    */
    "MAIL_FINAL_SUBJECT" => "Výborně, už je hotovo. Gratuluji k dokončení hry!",
    /*
    Zpráva, která se odešle na e-mail hráče po dokončení hry. ²³
    */
    "MAIL_FINAL_MESSAGE" => "Ahoj, %nick%. Hru jsi zdárně dokončil a tak se můžeš vydat slavit!",
    /*
    Text, který se v e-mailu vloží před novou otázku. ¹²³⁷
    */
    "MAIL_TASK_MESSAGES_BEFORE" => [
      "Hurá, %nick%! Odpověděl jsi správně.\nMám pro tebe připravený %level%. úkol!",
      "Jde ti to skvěle, %nick%. Tady je %level%. úkol.",
      "No vidíš, nebylo to tak těžké, že? \nUž jen dva úkoly tě dělí od konce!",
      "Jsi šikovný. Je tady předposlední úkol.",
      "Výborně,\nteď tě čeká poslední úkol!",
    ],
    /*
    Text, který se v e-mailu vloží za novou otázku. ¹²³⁷
    */
    "MAIL_TASK_MESSAGES_AFTER" => [
      "Neboj se, není to nic těžkého!",
      "Zatím ti to jde dobře, neboj se a pokračuj!",
      "Tak vzhůru do toho, %nick%, a půl je hotovo!\nPřeji bystrou mysl a ostrý zrak při řešení %level%. úkolu!",
    ],
    /*
    Zpráva v e-mailu před heslem pro obnovení
    */
    "RECOVERY_PASSWORD" => "Tvoje heslo pro obnovení hry je:",
    /*
    Nadpis, který se objeví po dokončení hry ve webové aplikaci.
    */
    "APP_FINAL_TITLE" => "Tak a je hotovo…",
    /*
    Zpráva, která se objeví po dokončení hry ve webové aplikaci. ²³⁴
    */
    "APP_FINAL_MESSAGE" => "Jupí, %nick%, !\nNa e-mail %email% ti byly zaslány informace o tom, co dělat dál.\nVšechna osobní data byla smazána.",
    /*
    Univerzální upráva, která se objeví ve webové aplikaci,
    pokud hráč odpoví správně a v seznamu otázek nejsou zadané zprávy ke správným odpovědím.
    */
    "CORRECT_ANSWER" => "Ano, %answer% je správná odpověď!",
    /*
    Titulek, který se objeví ve webové aplikaci, pokud hráč postoupí na další úroveň. ¹²⁶⁷
    */
    "NEXT_LEVEL_TITLES" => [
      "Tak %nick%. Úkol číslo %level% je hotov. Jdeme na %nextlevel%. úkol",
      "Úkol číslo %level% je hotov.",
      "Úkol číslo %level% je hotov.",
      "Úkol číslo %level% je hotov.",
      "Výborně, už je skoro hotovo!",
    ],
    /*
    Zpráva, která se objeví ve webové aplikaci, pokud hráč postoupí na další úroveň. ¹²³⁴⁶⁷
    */
    "NEXT_LEVEL_MESSAGES" => [
      "Na tvůj e-mail %email% ti byl odeslán nový úkol.\nSprávnou odpověď na úkol číslo %nextlevel% zapiš do políčka pro odpověď a odešli ji.",
      "Napiš správnou odpověď na otázku odeslanou do tvého e-mailu do políčka a klikni na zelené tlačítko!",
      "I úkol číslo %level% byl splněn. Stejně jako minule, na e-mailu máš otázku, tak napiš správnou odpověď do políčka a klikni na zelené tlačítko!",
    ],
    /*
    Data byla úspěšně smazána
    */
    "DELETE_DATA_SUCCESS" => "Data byla úspěšně smazána!",
    /*
    Hra byla úspěšně obnovena
    */
    "GAME_RECOVERY_SUCCESS" => "Hra byla úspěšně obnovena!",
    /*
    Obecná zpráva, která se objeví ve webové aplikaci,
    pokud hráč odpoví špatně a v seznamu otázek není odpověď uvedena jako špatná se svou vlastní zprávou. ⁵
    */
    "INCORRECT_ANSWER" => "Ne, %answer% není správná odpověď!",
    /*
    Zpráva, která se objeví ve webové aplikaci, pokud nebyla odeslána odpověď.
    */
    "NO_ANSWER" => "Musíš něco odpovědět!",/*
    Chybová zpráva, kerá se objeví, pokud byloněkteré z políčkek odesláno prázdné nebo špatně.
    */
    "ERROR_MISSING_FIELD" => "Následující políčka nebyla vyplněna vůbec nebo správně:",
    /*
    Pole e-mailová adresa.
    */
    "ERROR_MISSING_FIELD_EMAIL" => "e-mailová adresa",
    /*
    Pole odpověď.
    */
    "ERROR_MISSING_FIELD_ANSWER" => "odpověď",
    /*
    Pole s přezdívkou.
    */
    "ERROR_MISSING_FIELD_NICK" => "přezdívka",
    /*
    Neautorizovaný přístup na webové rozhraní.
    */
    "ERROR_UNAUTHORIZED_ANSWER" => "Vypadá to na neautorizovaný přístup! Zkus obnovit stránku…",
    /*
    Chybová zpráva do webové aplikace, pokud se nepovede update hry na další úroveň.
    */
    "ERROR_UPDATE" => "Aktualizace hry se nepovedla…",
    /*
    Chybová zpráva do webové aplikace, pokud nebyl odeslán email při žádosti o smazání dat.
    */
    "ERROR_DELETE_DATA_EMAIL_MISSING" => "Pro smazání herních dat je třeba odeslat e-mail.",
    /*
    Chybová zpráva do webové aplikace, pokud při žádosti o smazání dat nebyl uživatel nalezen.
    */
    "ERROR_PLAYER_NOT_FOUND" => "Hráč nenalezen!",
    /*
    Chybová zpráva do webové aplikace, pokud při žádosti o smazání dat data smazat nepovedlo.
    */
    "ERROR_DELETE_ACCOUNT_FAILED" => "Smazání dat se nepovedlo…",
    /*
    Chybová zpráva do webové aplikace, pokud se nepovede smazání dat po dokončení hry.
    */
    "ERROR_DELETE_DATA_GAME_END" => "Smazání herních dat po dohrání se nepovedlo. Data se smažou automaticky po jednom roku (pokud je chcete smazat dříve, kontaktujte autora hry).",
    /*
    Chybová zpráva do webové aplikace, pokud nebyla pro obnovu dat odeslána všechna potřebná data.
    */
    "ERROR_NOT_ALL_DATA" => "Nebyla odeslána všechna data, zkus to ještě jednou.",
    /*
    Chybová zpráva do webové aplikace, pokud se nepovede obnovení herních dat.
    */
    "ERROR_RECOVERY_GAME_DATA" => "Herní data se nepodařilo obnovit!",
    /*
    Chybová zpráva do webové aplikace, pokud není podporovaná metoda obnovy.
    */
    "ERROR_UNSUPORTED_RECOVERY_METHOD" => "Nepodporovaná metoda obnovy.",
    /*
    Chybová zpráva do webové aplikace, pokud heslo pro obnovu není správné.
    */
    "ERROR_BAD_RECOVERY_PASSWORD" => "Heslo pro obnovu není správné!",
    /*
    Chybová zpráva do webové aplikace, pokud v úkolu chybí otázka nebo odpověď.
    */
    "ERROR_EMPTY_MANDATORY_VARS" => "Otázka a odpověď musí být v úkolu zadány!",
    /*
    Chybová zpráva do webové aplikace, pokud odpovědi nejsou pole.
    */
    "ERROR_ANSWERS_NOT_ARRAY" => "Odpovědi musí být v úkolu uloženy v poli!",
    /*
    Chybová zpráva do webové aplikace, pokud zprávy k odpovědím nejsou pole.
    */
    "ERROR_ANSWER_MESSAGES_NOT_ARRAY" => "Zprávy ke správným odpovědím musí být v úkolu uloženy v poli!",
    /*
    Chybová zpráva do webové aplikace, pokud specifické chyby s jejich texty nejsou pole.
    */
    "ERROR_ERROR_MESSAGES_NOT_ARRAY" => "Chyby a texty k nim musí být v úkolu uloženy v poli!",
    /*
    Chybová zpráva do webové aplikace, pokud se nepodaří najít úkoly.
    */
    "ERROR_NO_TASKS" => "Nepodařilo se najít úkoly!",
    /*
    Ještě nebyla správně zodpovězena ani jedna otázka.
    */
    "NOTHING_ANSWERED" => "Hru jsi už rozehrál, ale zatím nebyla správně zodpovězena ani jedna otázka!",
    /*
    Chyba při zakládání úkolu
    */
  ],
  "en" => [
    /*
    Subject for e-mail, when new task is send. ¹
    */
    "MAIL_LEVEL_SUBJECTS"  => [
      "Now you have to complete task number %level% of the game",
      "Let's solve task number %level%",
      "We continue the game, task number %level% is here",
      "We are approaching the goal…",
      "Last task is here!",
    ],
    /*
    The subject of the e-mail message after the last correctly answered question.
    */
    "MAIL_FINAL_SUBJECT" => "Great, it's done. Congratulations on completing the game!",
    /*
    A message that will be sent to the player's email when the game is complete. ²³
    */
    "MAIL_FINAL_MESSAGE" => "Hi, %nick%. You have successfully completed the game so you can celebrate!",
    /*
    The text to be inserted in the email before the new question. ¹²³⁷
    */
    "MAIL_TASK_MESSAGES_BEFORE" => [
      "Hooray, %nick%! You answered correctly.\nI have task number %level% ready for you.!",
      "You're doing great, %nick%. Here is %level%. task.",
      "Well, you see, it wasn't that hard, was it?\nOnly two tasks separate you from the end!",
      "You are handy. Here is the penultimate task.",
      "Great,\nnow the last task awaits you!",
    ],
    /*
    The text to be inserted in the email after the new question. ¹²³⁷
    */
    "MAIL_TASK_MESSAGES_AFTER" => [
      "Don't worry, it's not hard!",
      "So far so good, don't worry and keep going!",
      "So up to it, %nick%, and a half is done!\nI wish you a sharp mind and sharp eyesight at solving task at %level% level!",
    ],
    /*
    Message in the email before the recovery password
    */
    "RECOVERY_PASSWORD" => "Your game recovery password is:",
    /*
    The title that appears when the game is complete in the web application.
    */
    "APP_FINAL_TITLE" => "So it's done…",
    /*
    A message that appears after the game is completed in the web application. ²³⁴
    */
    "APP_FINAL_MESSAGE" => "Yeah, %nick%,!\nYou've been sent information on what to do next to %email%!\nAll personal data has been deleted.",
    /*
    A universal message that appears in the web application
    if the player answers correctly and there are no messages for correct questions in the questions list. ³⁵⁷
    */
    "CORRECT_ANSWER" => "Yes, %answer% is the right answer!",
    /*
    The caption that appears in the web application when the player advances to the next level. ¹²⁶⁷
    */
    "NEXT_LEVEL_TITLES" => [
      "So %nick%. Task number %level% is done. We're going to task number %nextlevel%.",
      "Task number %level% is complete.",
      "Task number %level% is complete.",
      "Task number %level% is complete.",
      "Great, it's almost done!",
    ],
    /*
    A message that appears in the web application when a player advances to the next level. ¹²³⁴⁶⁷
    */
    "NEXT_LEVEL_MESSAGES" => [
      "A new task has been sent to your %email%.\nWrite the correct answer to task number %nextlevel% in the answer field and send it.",
      "Write the correct answer for a questin from email in the box and click on the green button!",
      "Task number %level% was also completed. Just like last time, question send to your email; write the correct answer in the box and click on the green button!",
    ],
    /*
    Data deleted successfully
    */
    "DELETE_DATA_SUCCESS" => "Data deleted successfully!",
    /*
    Hra byla úspěšně obnovena
    */
    "GAME_RECOVERY_SUCCESS" => "The game has been successfully restored!",
    /*
    A general message that appears in a web application
    if a player answers incorrectly and the answer list does not list the answer as incorrect with his own message. ⁵
    */
    "INCORRECT_ANSWER" => "No, %answer% is not the right answer!",
    /*
    A message that appears in the web application if no response has been sent.
    */
    "NO_ANSWER" => "You have to answer something!",
    /*
    An error message appears if any of the fields were sent blank or incorrect.
    */
    "ERROR_MISSING_FIELD" => "The following fields were not filled in at all or were filled in incorrectly:",
    /*
    Email address field.
    */
    "ERROR_MISSING_FIELD_EMAIL" => "email address",
    /*
    Answer box.
    */
    "ERROR_MISSING_FIELD_ANSWER" => "answer",
    /*
    Nickname field.
    */
    "ERROR_MISSING_FIELD_NICK" => "nickname",
    /*
    Unauthorized access to the web interface.
    */
    "ERROR_UNAUTHORIZED_ANSWER" => "It looks like unauthorized access! Try refresh the page…",
    /*
    Error message in the web application if the game update to the next level fails.
    */
    "ERROR_UPDATE" => "Game update failed…",
    /*
    Error message to web application if email was not sent when requesting to delete data.
    */
    "ERROR_DELETE_DATA_EMAIL_MISSING" => "An email is required to delete game data.",
    /*
    Chybová zpráva do webové aplikace, pokud při žádosti o smazání dat nebyl uživatel nalezen.
    */
    "ERROR_PLAYER_NOT_FOUND" => "Player not found!",
    /*
    Error message to the web application if the data was not deleted when requested to delete data.
    */
    "ERROR_DELETE_ACCOUNT_FAILED" => "Failed to delete data…",
    /*
    Error message to web application if data deletion after game completion fails.
    */
    "ERROR_DELETE_DATA_GAME_END" => "Game data deletion failed after deletion. The data will be deleted automatically after one year (if you want to delete it earlier, contact the author of the game).",
    /*
    Error message to the web application if not all necessary data has been sent for data recovery.
    */
    "ERROR_NOT_ALL_DATA" => "Not all data has been sent, please try again.",
    /*
    Error message to web application if game data recovery fails.
    */
    "ERROR_RECOVERY_GAME_DATA" => "Game data could not be restored!",
    /*
    Error message to web application if recovery method is not supported.
    */
    "ERROR_UNSUPORTED_RECOVERY_METHOD" => "Unsupported recovery method.",
    /*
    Error message to the web application if the recovery password is incorrect.
    */
    "ERROR_BAD_RECOVERY_PASSWORD" => "The recovery password is incorrect!",
    /*
    Error message to the web application if the question or answer is missing from the task.
    */
    "ERROR_EMPTY_MANDATORY_VARS" => "Question and answer in task must be entered!",
    /*
    Error message to the web application if the answers are not array.
    */
    "ERROR_ANSWERS_NOT_ARRAY" => "The answers must be stored in the task in the array!",
    /*
    Error message to the web application if the response messages are not array.
    */
    "ERROR_ANSWER_MESSAGES_NOT_ARRAY" => "Messages for correct answers must be stored in the task in the array!",
    /*
    Error message to web application if specific errors with their texts are not array.
    */
    "ERROR_ERROR_MESSAGES_NOT_ARRAY" => "Errors and texts to them must be stored in the task in the array!",
    /*
    Error message to web application if tasks cannot be found.
    */
    "ERROR_NO_TASKS" => "Couldn't find tasks!",
    /*
    Not a single question has been answered correctly yet.
    */
    "NOTHING_ANSWERED" => "You have already played the game, but not a single question has been answered correctly yet!"
  ],
];

/*
Neměňte následující řádky!
Do not change the following lines!
*/
require_once "./Task.php";
require_once "./tasks.php";
