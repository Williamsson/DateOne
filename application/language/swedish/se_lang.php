<?php

/*
 * AUTHOR: Simon Williamsson
 * DATE: 2012-09-21
 * DESCRIPTION: A swedish language file
 * USAGE: Do NOT edit the $lang['whatever'] part, that's crucial for the system to find. Simply edit the text inside the quotes, and the system will find the text and use it.
 * New files must be registered in the language model, see further documentation for that
 */


/*
 * General words
 * 
 */
$lang['other'] = "Annat";
$lang['username'] = "Användarnamn";
$lang['password'] = "Lösenord";
$lang['repeat_password'] = "Upprepa lösenord";
$lang['description'] = "Skriv en kort beskrivning om dig själv";
$lang['update'] = "Uppdatera";
$lang['first_name'] = "Förnamn";
$lang['sur_name'] = "Efternamn";
$lang['reply'] = "Svara";
$lang['send'] = "Skicka";
$lang['title'] = "Rubrik";
$lang['message'] = "Meddelande";
$lang['close'] = "Stäng";
$lang['sender'] = "Avsändare";
$lang['sent_date'] = "Datum";

$lang['user_match'] = "Matchning";

$lang['language'] = "Språk";
$lang['choose_country'] = "Välj land..";

$lang['login'] = "Logga in";
$lang['logout'] = "Logga ut";
$lang['welcome'] = "Välkommen ";

$lang['faulty_login'] = "Felaktigt användarnamn eller lösenord.";

/*
 * First page
 */
$lang['what_is_dateone_header'] = "Vad är DateOne?";
$lang['who_uses_dateone_header'] = "Vem använder DateOne?";

$lang['what_is_dateone'] = "DateOne är en socialt nätverkande och dejtingsida som erbjuder dig att matchas med en potentiell partner, eller att skapa en träff i t.ex. Göteborg för att ta en öl med någon i det området, om du t.ex. är där på affärsresa.";
$lang['who_uses_dateone'] = "Personer i alla åldrar som vill träffa en partner, eller gå ut och ta en öl med någon likasinnad!";

/*
 * Registration form
 */
$lang['male_want_female'] = "Man som söker en kvinna";
$lang['male_want_male'] = "Man som söker en man";
$lang['female_want_male'] = "Kvinna som söker en man";
$lang['female_want_female'] = "Kvinna som söker en kvinna";
$lang['male_want_friendship'] = "Man som söker vänskap";
$lang['female_want_friendship'] = "Kvinna som söker vänskap";
$lang['postal_number'] = "Postnummer";
$lang['email'] = "Epost";
$lang['repeat_email'] = "Upprepa epost";
$lang['register'] = "Registrera";

/*
 * Registration Error messages
 */
$lang['min_password_length'] = "Ditt lösenord måste vara minst åtta tecken.";
$lang['postal_number_length'] = " måste vara exakt fem siffror, utan mellanslag.";
$lang['repeat_field_not_match'] = " matchar inte "; //fieldnames are added in code, so the user is shown FIELDNAME [this_translation] FIELDNAME
$lang['field_exists'] = " finns redan i vår databas.";
$lang['email_exists'] = "Den eposten finns redan i vår databas.";

/*
 * Menu stuff
 */
//Static top bar menu
$lang['home'] = "Start";
$lang['get_started'] = "Kom igång";
$lang['upgrade'] = "Uppgradera";
$lang['about'] = "Om oss";
$lang['contact'] = "Kontakt";

$lang['create_event'] = "Skapa evenemang";
$lang['search_events'] = "Sök evenemang";
$lang['my_events'] = "Mina evenemang";

//User control panel menu
$lang['menu_title'] = "Navigering";
$lang['profile'] = "Profil";
$lang['gallery'] = "Galleri";
$lang['control_panel'] = "Kontrollpanel";
$lang['events'] = "Evenemang";
$lang['friends'] = "Vänner";
$lang['flirts'] = "Flörtar";
$lang['messages'] = "Meddelanden";
$lang['chat'] = "Chatt";
$lang['user_matches'] = "Matchningar";

/*
 * Controlpanel
 */
$lang['enter_your_traits'] = "Berätta om dig själv.";
$lang['user_searching_for_traits'] = "Vad söker du hos din partner?";


/*
 * Generic error messages
 */

$lang['required_field'] = " måste fyllas i.";
$lang['not_valid_email'] = "Du har inte fyllt i en giltig email.";
$lang['no_such_user'] = "Den användaren verkar inte finnas. Försök igen.";
$lang['something_went_wrong_try_later'] = "Något gick fel, försök igen senare.";

/*
 * Messages
 */
$lang['new_member'] = "Välkommen till DateOne! Var vänlig fyll i följande fält med korrekt information, ju mer du fyller i, desto bättre kan vi matcha dig mot andra användare.";

/*
 * User traits
 */
$lang['ancestry'] = "Ursprung";
$lang['appearance'] = "Utseende";
$lang['bodytype'] = "Kroppsbyggnad";
$lang['civil_status'] = "Civilstånd";
$lang['clothing'] = "Klädstil";
$lang['drinking_habits'] = "Alkoholvanor";
$lang['education'] = "Utbildning";
$lang['exercising_habits'] = "Träningsvanor";
$lang['eye_color'] = "Ögonfärg";
$lang['favorite_music_genre'] = "Favoritgenre i musik";
$lang['friday_night_activity'] = "Gör helst en fredagskväll";
$lang['hair_color'] = "Hårfärg";
$lang['hobby'] = "Hobby/Hobbyer";
$lang['housing_type'] = "Bostad";
$lang['length'] = "Längd";
$lang['num_childs'] = "Barn";
$lang['occupation'] = "Yrke";
$lang['personality_type'] = "Personlighetstyp";
$lang['pets'] = "Husdjur";
$lang['religion'] = "Religion";
$lang['romance'] = "Romantik";
$lang['wanted_num_childs'] = "Önskat antal barn";
$lang['spoken_languages'] = "Talade språk";
$lang['tobacco_habits'] = "Tobaksvanor";
$lang['weight'] = "Vikt";
$lang['searching_for'] = "Jag är en.."; //Is used when entering what they're looking for, eg "man looking for woman"

/*
 * User traits in the "I'm looking for" section
 */

$lang['searchingfor_ancestry'] = "Ursprung";
$lang['searchingfor_appearance'] = "Utseende";
$lang['searchingfor_bodytype'] = "Kroppsbyggnad";
$lang['searchingfor_civil_status'] = "Civilstånd";
$lang['searchingfor_clothing'] = "Klädstil";
$lang['searchingfor_drinking_habits'] = "Alkoholvanor";
$lang['searchingfor_education'] = "Utbildning";
$lang['searchingfor_exercising_habits'] = "Träningsvanor";
$lang['searchingfor_eye_color'] = "Ögonfärg";
$lang['searchingfor_favorite_music_genre'] = "Favoritgenre?";
$lang['searchingfor_friday_night_activity'] = "Vad gör han/hon helst en fredagskväll?";
$lang['searchingfor_hair_color'] = "Hårfärg";
$lang['searchingfor_hobby'] = "Hobby";
$lang['searchingfor_housing_type'] = "Bostad";
$lang['searchingfor_length'] = "Längd";
$lang['searchingfor_num_childs'] = "Hur många barn bör personen ha?";
$lang['searchingfor_occupation'] = "Yrke";
$lang['searchingfor_personality_type'] = "Personlighetstyp";
$lang['searchingfor_pets'] = "Husdjur";
$lang['searchingfor_religion'] = "Religion";
$lang['searchingfor_romance'] = "Romantik";
$lang['searchingfor_wanted_num_childs'] = "Hur många barn bör personen vilja ha?";
$lang['searchingfor_spoken_languages'] = "Vilka språk bör personen kunna?";
$lang['searchingfor_tobacco_habits'] = "Tobaksvanor";
$lang['searchingfor_weight'] = "Vikt";
$lang['searchingfor_searching_for'] = "Söker..";

$lang['no_answer'] = "Vill inte svara";
$lang['dosent_matter'] = "Spelar ingen roll";

/*
 * Event stuff
 */

$lang['event_name'] = "Evenemangets namn";
$lang['start_date'] = "Startdatum";
$lang['end_date'] = "Slutdatum";
$lang['max_participants'] = "Max antal deltagare";
$lang['participants'] = "Deltagare";
$lang['event_description'] = "Beskrivning";
$lang['event_notification_range'] = "Notifieringsdiameter i mil";
$lang['participate'] = "Deltar";
$lang['leave_event'] = "Delta inte";



/*
 * Countries, places, etc
 */

$lang['europe'] = "Europa";
$lang['scandinavia'] = "Skandinavien";
$lang['asia'] = "Asien";
$lang['middle_east'] = "Mellanöstern";
$lang['africa'] = "Afrika";
$lang['latin_america'] = "Latinamerika";
$lang['northern_america'] = "Nordamerika";
$lang['swedish'] = "Svenska";
$lang['sweden'] = "Sverige";
$lang['english'] = "Engelska";
$lang['england'] = "England";
$lang['spanish'] = "Spanska";
$lang['spain'] = "Spanien";
$lang['german'] = "Tyska";
$lang['germany'] = "Tyskland";
$lang['chinese'] = "Kinesiska";
$lang['norweigan'] = "Norska";
$lang['danish'] = "Danska";
$lang['finish'] = "Finska";
$lang['french'] = "Franska";
$lang['turkish'] = "Turkiska";
/*
 * User traits
 */
$lang['very_good_looking'] = "Väldigt snygg";
$lang['good_looking'] = "Snygg";
$lang['average'] = "Ganska vanlig";
$lang['bad_looking'] = "Mindre snygg";

$lang['muscular'] = "Muskulös";
$lang['well_built'] = "Välbyggd";
$lang['regular_body'] = "Vanlig kropp";
$lang['bit_fat'] = "Några kilon för många..";
$lang['fat'] = "Tjock";

$lang['married'] = "Gift";
$lang['engaged'] = "Förlovad";
$lang['relationship'] = "I ett förhållande";
$lang['divorced'] = "Skild";
$lang['single'] = "Singel";

$lang['buissiness'] = "Affärsmässigt";
$lang['classy'] = "Classy, hippt";
$lang['ordinary'] = "Inget speciellt";
$lang['my_own_style'] = "Min egen stil";
$lang['trendy'] = "Trendigt";
$lang['rock'] = "Rockigt";

$lang['very_often'] = "Väldigt ofta";
$lang['often'] = "Ofta";
$lang['with_company'] = "Med sällskap";
$lang['almost_never'] = "Nästan aldrig";
$lang['never'] = "Aldrig";

$lang['elementary_school'] = "Grundskolan";
$lang['college'] = "Högskola";
$lang['university'] = "Universitet";
$lang['bacherlor'] = "Kandidatsexamen";
$lang['masters'] = "Magistersexamen";
$lang['doctoral'] = "Doktorsexamen";

$lang['regular'] = "Ofta";
$lang['seldom'] = "Sällan";

$lang['green'] = "Gröna";
$lang['blue'] = "Blåa";
$lang['brown'] = "Bruna";
$lang['grey'] = "Gråa";

$lang['classical'] = "Klassiskt";
$lang['electronic'] = "Elektronisk";
$lang['pop'] = "Pop";
$lang['blues'] = "Blues";
$lang['dance'] = "Dansmusik";
$lang['disco'] = "Disco";
$lang['hip_hop'] = "Hip hop";
$lang['country'] = "Country";
$lang['hard_rock'] = "Hårdrock";
$lang['folk'] = "Folkmusik";
$lang['opera'] = "Opera";
$lang['reagge'] = "Reagge";

$lang['party'] = "Festa";
$lang['after_work'] = "After work";
$lang['cinema'] = "Bio";
$lang['theatre'] = "Teater";
$lang['meet_friends'] = "Träffa vänner";
$lang['concert'] = "Konserter";
$lang['read_book'] = "Läsa en bok";
$lang['watch_movie'] = "Se på film";
$lang['cuddle'] = "Mysa";
$lang['play_game'] = "Spela spel";
$lang['restaurant'] = "Gå på restaurang";

$lang['blonde'] = "Blond";
$lang['brunette'] = "Brunett";
$lang['bald'] = "Skallig";
$lang['red'] = "Röd";
$lang['white_grey'] = "Vit/grå";
$lang['black'] = "Svart";

$lang['books'] = "Böcker";
$lang['art'] = "Konst";
$lang['music'] = "Musik";
$lang['dancing'] = "Dansa";
$lang['animals'] = "Djur";
$lang['photography'] = "Fotografi";
$lang['history'] = "Historia";
$lang['writing'] = "Skrivande";
$lang['games'] = "Spel";
$lang['drawing'] = "Rita";
$lang['walking'] = "Promenera";
$lang['movies'] = "Filmer";
$lang['hiking'] = "Camping/Hajk";
$lang['cooking'] = "Matlagning";
$lang['travel'] = "Resa";
$lang['exercising'] = "Träning";
$lang['cars_motorcykles'] = "Bilar/motorcyklar";
$lang['computers'] = "Datorer";
$lang['fishing_hunting'] = "Fiske/Jakt";
$lang['painting'] = "Måla";
$lang['politics'] = "Politik";
$lang['roleplaying'] = "Rollspela";

$lang['alone'] = "Ensam";
$lang['with_parents'] = "Med föräldrar";
$lang['with_roommate'] = "Med rumskompis-ar";
$lang['with_children'] = "Med barn";
$lang['with_partner'] = "Med sambo";
$lang['with_family'] = "Med familj";

$lang['administration'] = "Administrativt";
$lang['artist'] = "Artist";
$lang['chef'] = "Kock";
$lang['construction'] = "Byggbranchen";
$lang['architect'] = "Arkitekt";
$lang['economy'] = "Ekonomi";
$lang['retail'] = "Detaljhandeln";
$lang['health_care'] = "Vården";
$lang['hotel_restaurant'] = "Hotell/Restaurang";
$lang['engineer'] = "Ingenjör";
$lang['it'] = "IT";
$lang['jurisprudence'] = "Juridik";
$lang['entertainment'] = "Underhållning";
$lang['student'] = "Student";
$lang['teaching'] = "Utbildning";
$lang['retired'] = "Pensionerad";

$lang['ambitious'] = "Ambitiös";
$lang['generous'] = "Generös";
$lang['happy'] = "Munter";
$lang['sensible'] = "Förnuftig/Resonabel";
$lang['calm'] = "Lugn";
$lang['caring'] = "Omtänksam";
$lang['social'] = "Social";
$lang['spontaneous'] = "Spontan";
$lang['proud'] = "Stolt";
$lang['adventurous'] = "Äventyrlig";
$lang['carefree'] = "Bekymmerslös";
$lang['shy'] = "Blyg";
$lang['dominating'] = "Dominerande";
$lang['sad'] = "Ledsen/Deppig";
$lang['carefull'] = "Försiktig";
$lang['self_contained'] = "Reserverad";
$lang['stubborn'] = "Envis";
$lang['emotional'] = "Känslig";

$lang['dog'] = "Hund";
$lang['cat'] = "Katt";
$lang['bird'] = "Fågel";
$lang['fish'] = "Fisk";
$lang['horse'] = "Häst";
$lang['reptiles'] = "Reptil";
$lang['rabbit_hamster'] = "Kanin/Hamster/Gnagare";
$lang['no_animal'] = "Inget djur";

$lang['christian'] = "Kristen";
$lang['jewish'] = "Jude";
$lang['islam'] = "Islamist";
$lang['buddhism'] = "Buddhist";
$lang['hinduism'] = "Hinduist";
$lang['atheist'] = "Ateist";

$lang['very_romantic'] = "Väldigt romantisk";
$lang['romantic'] = "Romantisk";
$lang['little_romantic'] = "Lite romantisk";
$lang['not_romantic'] = "Inte romantisk alls";













?>