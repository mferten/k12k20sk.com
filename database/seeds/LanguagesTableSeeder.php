<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Load json file into PHP array
        $languages = ["Afrikaans","Albanian","Amharic","Arabic","Armenian","Asante","Assamese","Aymara","Azerbaijani","Bahasa","Bahasa Indonesia","Bajan",
            "Bambara","Bangla","Belarusian","Bemba","Bengali","Bhojpuri","Bislama","Bosnian","Bulgarian","Burmese","Catalan","Chamorro","Chichewa","Creole","Crioulo",
            "Croatian","Czech","Danish","Dari","Dhivehi","Dioula","Dutch","Dzongkha","Emakhuwa","English","Estonian","Ewe","Fante","Fijian","Filipino","Finnish",
            "French","Fula","Gaelic","Ganda","Georgian","German","Greek","Greenlandic","Guarani","Gujarati","Hebrew","Hindi","Hiri Motu","Hungarian","I-Kiribati",
            "Icelandic","Irish","isiZulu","Italian","Japanese","Javanese","Kannada","Kashmiri","Kazakh","Khmer","Kinyarwanda","Kirundi","Korean","Krio","Kurdish",
            "Kyrgyz","Lao","Latvian","Lhotshamkha","Lingala","Lithuanian","Luganda","Luxembourgish","Macedonian","Maithali","Makasai","Malagasy","Malay","Malayalam",
            "Maltese","Mambai","Mandarin","Mandinka","Marathi","Marshallese","Maya","Melanesian pidgin","Mende","Moldovan","Mongolian","Monokutuba","Montenegrin",
            "Nauruan","Nawat","Ndebele","Nepali","Niuean","Norwegian","Nyanja","Oriya","Oromo","Palauan","Papiamento","Pashto","Persian","Polish","Portuguese","Punjabi",
            "Quechua","Rarotongan","Romanian","Romansch","Russian","Samoan","Sango","Sanskrit","Saraiki","Scots","Sekalanga","Sepedi","Serbian","Sesotho","Setswana",
            "Seychellois Creole","Sharchhopka","Shona","Sindhi","Sinhala","siSwati","Slovak","Slovenian","Somali","Spanish","Swahili","Swedish","Tajik",
            "Tamil","Tatar","Telugu","Temne","Tetum","Thai","Tigrinya","Tok Pisin","Tokelauan","Tonga","Tongan","Turkish","Turkmen","Tuvaluan","Ukrainian","Umbundu",
            "Urdu","Uzbek","Vietnamese","Welsh","Wolof","Xichangana"];

        # Initiate a new timestamp we can use for created_at/updated_at fields
        $timestamp = Carbon\Carbon::now()->toDateTimeString(); # same is OK

        $languagesShortAndLongDescription = ["Afrikaans"=>["africký","africký"],"Albanian" => ["albánsky","albánsky"],
            "Amharic" => ["amharský","amharský"],
            "Arabic" => ["arabský","arabský"],"Armenian" => ["armenský","armenský"],
            "Asante" => ["asantský","asantský"],"Assamese" => ["ásámský","ásámský"],"Aymara" => ["aymarský","aymarský"],
            "Azerbaijani" => ["azerbajdžanský","azerbajdžanský"],
            "Bahasa" => ["bahaský","bahaský"],"Bahasa Indonesia" => ["bahaskoindonezský","bahaskoindonezský"],
            "Bajan" => ["bajanský","bajanský"],
            "Bambara" => ["bambarský","bambarský"],"Bangla" => ["bangolský","bangolský"],
            "Belarusian" => ["bieloruský","bieloruský"],
            "Bemba" => ["bembský","bembský"],
            "Bengali" => ["bengálský","bengálský"],"Bhojpuri" => ["bhódžpurpský","bhódžpurpský"],
            "Bislama" => ["bislamský","bislamský"],
            "Bosnian" => ["bosniacký","bosniacký"],"Bulgarian" => ["bulharský","bulharský"],"Burmese" => ["bamrský","bamrský"],
            "Catalan" => ["Katalan","Katalan"],
            "Chamorro" => ["čamorský","čamorský"],"Chichewa" => ["čičewský","čičewský"],"Creole" => ["kreolský","kreolský"],
            "Crioulo" => ["krioulský","krioulský"],
            "Croatian" => ["chorvátský","chorvátský"],"Czech" => ["český","český"],"Danish" => ["dánsky","dánsky"],
            "Dari" => ["dársky","dársky"],"Dhivehi" => ["divehský","divehský"],
            "Dioula" => ["dioulská","dioulská"],"Dutch" => ["holandský","holandský"],"Dzongkha" => ["dzongkhský","dzongkhský"],
            "Emakhuwa" => ["emakhuwský","emakhuwský"],
            "English" => ["anglický","anglický"],"Estonian" => ["estónsky","estónsky"],"Ewe" => ["ewský","ewský"],
            "Fante" => ["fantský","fantský"],
            "Fijian" => ["fidžijský","fidžijský"],"Filipino" => ["filipinsky","filipinsky"],"Finnish" => ["fínsky","fínsky"],
            "French" => ["francúzsky","francúzsky"],"Fula" => ["fulský","fulský"],"Gaelic" => ["gaelský","gaelský"],
            "Ganda" => ["gandský","gandský"],"Georgian" => ["gruzínsky","gruzínsky"],
            "German" => ["nemecky","nemecky"],"Greek" => ["grécky","grécky"],"Greenlandic" => ["grónsky","grónsky"],
            "Guarani" => ["guaranský","guaranský"],
            "Gujarati" => ["gujaratský","gujaratský"],"Hebrew" => ["hebrejský","hebrejský"],"Hindi" => ["hindický","hindický"],
            "Hiri Motu" => ["hiri-motský","hiri-motský"],
            "Hungarian" => ["maďarský","maďarský"],"I-Kiribati" => ["kiribatský","kiribatský"],
            "Icelandic" => ["islandský","islandský"],"Indonesian" => ["indonézsky","indonézsky"],
            "Irish" => ["írsky","írsky"],"isiZulu" => ["isiZulský","isiZulský"],"Italian" => ["talianský","talianský"],
            "Japanese" => ["japonský","japonský"],"Javanese" => ["jávsky","jávsky"],"Kannada" => ["kannadský","kannadský"],
            "Kashmiri" => ["kašmírsky","kašmírsky"],"Kazakh" => ["kazašský","kazašský"],"Khmer" => ["kmérsky","kmérsky"],
            "Kinyarwanda" => ["kinyarwandský","kinyarwandský"],
            "Kirundi" => ["kirundský","kirundský"],"Korean" => ["korejský","korejský"],"Krio" => ["krioský","krioský"],
            "Kurdish" => ["kurdský","kurdský"],
            "Kyrgyz" => ["kirgizský","kirgizský"],"Lao" => ["laoský","laoský"],"Latvian" => ["lotyšský","lotyšský"],
            "Lhotshamkha" => ["lhotshamký","lhotshamký"],"Lingala" => ["lingalský","lingalský"],
            "Lithuanian" => ["litovský","litovský"],"Luganda" => ["lugandský","lugandský"],
            "Luxembourgish" => ["luxemburský","luxemburský"],
            "Macedonian" => ["macedónsky","macedónsky"],"Maithali" => ["maithalský","maithalský"],
            "Makasai" => ["makasajský","makasajský"],
            "Malagasy" => ["Malagasi","Malagasi"],"Malay" => ["malajský","malajský"],"Malayalam" => ["malayalamský","malayalamský"],
            "Maltese" => ["maltský","maltský"],"Mambai" => ["mambajský","mambajský"],"Mandarin" => ["andarínsky","andarínsky"],
            "Mandinka" => ["mandinský","mandinský"],
            "Marathi" => ["marathiský","marathiský"],"Marshallese" => ["Maršálsky","Maršálsky"],"Maya" => ["Maya","Maya"],
            "Melanesian pidgin" => ["melanesky pidgin","melanesky pidgin"],"Mende" => ["mendský","mendský"],
            "Moldovan" => ["moldavský","moldavský"],
            "Mongolian" => ["mongolský","mongolský"],"Monokutuba" => ["monokutubský","monokutubský"],
            "Montenegrin" => ["čiernohorský","čiernohorský"],
            "Nauruan" => ["naurský","naurský"],"Nawat" => ["nawatský","nawatský"],"Ndebele" => ["ndebelský","ndebelský"],
            "Nepali" => ["nepálsky","nepálsky"],
            "Niuean" => ["niueanský","niueanský"],"Norwegian" => ["nórsky","nórsky"],"Nyanja" => ["ňandžitský","ňandžitský"],
            "Oriya" => ["urijský","urijský"],
            "Oromo" => ["oromonský","oromonský"],"Palauan" => ["palauanský","palauanský"],"Papiamento" => ["papiamentský","papiamentský"],
            "Pashto" => ["pashto","pashto"],
            "Persian" => ["perzský","perzský"],"Polish" => ["poľský","poľský"],"Portuguese" => ["portugalský","portugalský"],
            "Punjabi" => ["punjabský","punjabský"],
            "Quechua" => ["quechuanský","quechuanský"],"Rarotongan" => ["rarotonganský","rarotonganský"],"Romanian" => ["rumunský","rumunský"],
            "Romansch" => ["romanshový","romanshový"],
            "Russian" => ["ruský","ruský"],"Samoan" => ["samoan","samoan"],"Sango" => ["Sango","Sango"],
            "Sanskrit" => ["sanskrit","sanskrit"],
            "Saraiki" => ["saraiki","saraiki"],"Scots" => ["škótsky","škótsky"],"Sekalanga" => ["sekalanga","sekalanga"],
            "Sepedi" => ["sepedi","sepedi"],
            "Serbian" => ["srbský","srbský"],"Sesotho" => ["sesotho","sesotho"],"Setswana" => ["setswana","setswana"],
            "Seychellois Creole" => ["seychelsko-kreolský","seychelsko-kreolský"],"Sharchhopka" => ["sharchhopka","sharchhopka"],
            "Shona" => ["shona","shona"],
            "Sign language" => ["posunková reč","posunková reč"],"Sindhi" => ["sindh","sindh"],"Sinhala" => ["sinhala","sinhala"],
            "siSwati" => ["Swati","Swati"],"Slovak" => ["slovenský","slovenský"],"Slovenian" => ["slovinčina","slovinčina"],
            "Somali" => ["somálsky","somálsky"],
            "Spanish" => ["španielsky","španielsky"],"Swahili" => ["swahilský","swahilský"],"Swedish" => ["švédsky","švédsky"],
            "Tajik" => ["tadžický","tadžický"],
            "Tamil" => ["tamilský","tamilský"],"Tatar" => ["tatarský","tatarský"],"Telugu" => ["telugu","telugu"],
            "Temne" => ["temne","temne"],
            "Tetum" => ["tetu","tetu"],
            "Thai" => ["thai","thai"],"Tigrinya" => ["tigrinya","tigrinya"],"Tok Pisin" => ["tok Pisin","tok Pisin"],
            "Tokelauan" => ["tokelauanský","tokelauanský"],"Tonga" => ["tonga","tonga"],"Tongan" => ["tongan","tongan"],
            "Turkish" => ["turecký","turecký"],
            "Turkmen" => ["turkmenský","turkmenský"],"Tuvaluan" => ["tuvaluanský","tuvaluanský"],
            "Ukrainian" => ["ukrajinský","ukrajinský"],
            "Umbundu" => ["umbundu","umbundu"],
            "Urdu" => ["urdu","urdu"],"Uzbek" => ["uzbecký","uzbecký"],"Vietnamese" => ["vietnamský","vietnamský"],
            "Welsh" => ["waleský","waleský"],
            "Wolof" => ["wolofský","wolofský"],"Xichangana" => ["xichangana","xichangana"]];

        foreach($languages as $language) {
            Language::insert([
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'language' => $language,
                'short_name' => $languagesShortAndLongDescription[$language][0],
                'long_name' => $languagesShortAndLongDescription[$language][1],
            ]);
        }
    }
}
