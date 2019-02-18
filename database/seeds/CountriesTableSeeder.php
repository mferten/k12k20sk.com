<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Load json file into PHP array
        $countries = json_decode(file_get_contents(database_path().'/jsonfile/countriesPopulations.json'), true);

        # Short Name for Application language
        $shortCountryNames =
        [
            "Afghanistan" => "Afghanistan",
          	"AlandIslands" => "Alandy",
          	"Albania" => "Albánsko",
          	"Algeria" => "Alžírsko",
          	"AmericanSamoa" => "Americká Samoa",
          	"Andorra" => "Andorra",
          	"Angola" => "Angola",
          	"Anguilla" => "Anguilla",
          	"AntarcticTreatySystem" => "Antarktída",
          	"AntiguaandBarbuda" =>  "Antigua",
          	"Argentina" => "Argentína",
          	"Armenia" => "Arménsko",
          	"Aruba" => "Aruba",
          	"Australia" => "Australia",
          	"Austria" => "Rakúsko",
          	"Azerbaijan" => "Azerbajdžan",
          	"Bahamas" => "Bahamy",
          	"Bahrain" => "Bahrajn",
          	"Bangladesh" => "Bangladéš",
          	"Barbados" => "Barbados",
          	"Belarus" => "Bielorusko",
          	"Belgium" => "Belgicko",
          	"Belize" => "Belize",
          	"Benin" => "Benin",
          	"Bermuda" => "Bermudy",
          	"Bhutan" => "Bhután",
          	"Bolivia" => "Bolívia",
          	"BonaireSintEustatiusandSaba" => "Bonaire",
          	"BosniaandHerzegovina" => "Bosna",
          	"Botswana" => "Botsvana",
          	"BouvetIsland" => "Bouvet",
          	"Brazil" => "Brazília",
          	"BritishIndianOceanTerritory" => "Britské územie Indického oceánu",
          	"BritishVirginIslands" => "Britské Panenské ostrovy",
          	"Brunei" => "Brunej",
          	"Bulgaria" => "Bulharsko",
          	"BurkinaFaso" => "Burkina Faso",
          	"Burundi" => "Burundi",
          	"Cambodia" => "Kambodža",
          	"Cameroon" => "Kamerun",
          	"Canada" => "Kanada",
          	"CanaryIslands" => "Kanarske",
          	"CaboVerde" => "Kapverdy",
          	"CaymanIslands" => "Kajmany",
          	"CentralAfricanRepublic" => "Stredoafrická republika",
          	"Chad" => "Čad",
          	"Chile" => "Čile",
          	"China" => "Čína",
          	"ChristmasIsland" => "Vianočný",
          	"CocosIslands" => "Kokosové",
          	"Colombia" => "Kolumbia",
          	"Comoros" => "Komory",
          	"CookIslands" => "Cookove",
          	"CostaRica" => "Kostarika",
          	"CotedIvoire" => "Pobrežie Slonoviny",
          	"Croatia" => "Chorvátsko",
          	"Cuba" => "Kuba",
          	"Curacao" => "Curaçao",
          	"Cyprus" => "Cyprus",
          	"Czechia" => "Česko",
          	"DemocraticRepublicoftheCongo" => "Konžská DR",
          	"Denmark" => "Dánsko",
          	"Djibouti" => "Džibutsko",
          	"Dominica" => "Dominika",
          	"DominicanRepublic" => "Dominikánska republika",
          	"Ecuador" => "Ekvádor",
          	"Egypt" => "Egypt",
          	"ElSalvador" => "Salvádor",
          	"EquatorialGuinea" => "R. Guinea",
          	"Eritrea" => "Eritrea",
          	"Estonia" => "Estónsko",
          	"Eswatini" => "Eswatini",
          	"Ethiopia" => "Etiópia",
          	"FalklandIslands" => "Falklandy",
          	"FaroeIslands" => "Faery",
          	"Fiji" => "Fidži",
          	"Finland" => "Fínsko",
          	"France" => "Francúzsko",
          	"FrenchGuiana" => "Francúzska Guiana",
          	"FrenchPolynesia" => "Polynézia",
          	"FrenchSouthernandAntarcticLands" => "Francúzske antarktické",
          	"Gabon" => "Gabon",
          	"Gambia" => "Gambia",
          	"Georgia" => "Gruzínsko",
          	"Germany" => "Nemecko",
          	"Ghana" => "Ghana",
          	"Gibraltar" => "Gibraltár",
          	"Greece" => "Grécko",
          	"Greenland" => "Grónsko",
          	"Grenada" => "Grenada",
          	"Guadeloupe" => "Guadeloupe",
          	"Guam" => "Guam",
          	"Guatemala" => "Guatemala",
          	"Guernsey" => "Guernsey",
          	"Guinea" => "Guinea",
          	"GuineaBissau" => "Guinea Bissau",
          	"Guyana" => "Guyana",
          	"Haiti" => "Haiti",
          	"HeardIslandandMcDonaldIslands" => "H McDonald",
          	"Honduras" => "Honduras",
          	"HongKong" => "Hong Kong",
          	"Hungary" => "Maďarsko",
          	"Iceland" => "Island",
          	"India" => "India",
          	"Indonesia" => "Indonézia",
          	"Iran" => "Irán",
          	"Iraq" => "Irak",
          	"Ireland" => "Írsko",
          	"IsleofMan" => "Isle of Man",
          	"Israel" => "Izrael",
          	"Italy" => "Taliansko",
          	"Jamaica" => "Jamajka",
          	"Japan" => "Japonsko",
          	"Jersey" => "Jersey",
          	"Jordan" => "Jordán",
          	"Kazakhstan" => "Kazachstan",
          	"Kenya" => "Keňa",
          	"Kiribati" => "Kiribati",
          	"Kosovo" => "Kosovo",
          	"Kuwait" => "Kuvajt",
          	"Kyrgyzstan" => "Kirgizsko",
          	"Laos" => "Laos",
          	"Latvia" => "Lotyšsko",
          	"Lebanon" => "Libanon",
          	"Lesotho" => "Lesotho",
          	"Liberia" => "Libéria",
          	"Libya" => "Líbya",
          	"Liechtenstein" => "Lichtenštajnsko",
          	"Lithuania" => "Litva",
          	"Luxembourg" => "Luxembursko",
          	"Macau" => "Macau",
          	"Macedonia" => "Macedónska",
          	"Madagascar" => "Madagaskar",
          	"Malawi" => "Malavi",
          	"Malaysia" => "Malajzia",
          	"Maldives" => "Maldivy",
          	"Mali" => "Mali",
          	"Malta" => "Malta",
          	"MarshallIslands" => "Marshallove",
          	"Mauritania" => "Mauritánia",
            "Martinique" => "Martinik",
          	"Mauritius" => "Maurícius",
          	"Mayotte" => "Mayotte",
          	"Mexico" => "Mexiko",
          	"Micronesia" => "Mikronézia",
          	"Moldova" => "Moldavsko",
          	"Monaco" => "Monako",
          	"Mongolia" => "Mongolsko",
          	"Montenegro" => "Čierna Hora",
          	"Montserrat" => "Montserrat",
          	"Morocco" => "Maroko",
          	"Mozambique" => "Mozambik",
          	"Myanmar" => "Mjanmarsko",
          	"Namibia" => "Namíbia",
          	"Nauru" => "Nauru",
          	"Nepal" => "Nepál",
          	"Netherlands" => "Holandsko",
          	"NewCaledonia" => "N Kaledónia",
          	"NewZealand" => "N Zéland",
          	"Nicaragua" => "Nikaragua",
          	"Niger" => "Niger",
          	"Nigeria" => "Nigéria",
          	"Niue" => "Niue",
          	"NorfolkIsland" => "Norfolk",
          	"NorthernMarianaIslands" => "Mariány",
          	"NorthKorea" => "Severná Kórea",
          	"Norway" => "Nórsko",
          	"Oman" => "Omán",
          	"Pakistan" => "Pakistan",
          	"Palau" => "Palau",
          	"Panama" => "Panama",
          	"PapuaNewGuinea" => "P N Guinea",
          	"Paraguay" => "Paraguaj",
          	"Peru" => "Peru",
          	"Philippines" => "Filipíny",
          	"PitcairnIslands" => "Pitcairn",
          	"Poland" => "Poľsko",
          	"Portugal" => "Portugalsko",
          	"PuertoRico" => "Portoriko",
          	"Qatar" => "Katar",
          	"RepublicofCongo" => "Kongo",
          	"Reunion" => "Réunion",
          	"Romania" => "Rumunsko",
          	"RussianFederation" => "Rusko",
          	"Rwanda" => "Rwanda",
          	"SaintBarthelemy" => "Bartolomej",
          	"SaintHelena" => "Sv Helena",
          	"SaintKittsandNevis" => "Sv Krištof",
          	"SaintLucia" => "Sv Lucia",
          	"SaintMartin" => "Sv Martin",
          	"SaintPierreandMiquelon" => "Sv Peter",
          	"SaintVincentandGrenadines" => "Sv Vincent",
          	"Samoa" => "Samoa",
          	"SanMarino" => "San Maríno",
          	"SaoTomeandPrincipe" => "Svätý Tomáš",
          	"SaudiArabia" => "Saudská Arábia",
          	"Senegal" => "Senegal",
          	"Serbia" => "Srbsko",
          	"Seychelles" => "Seychely",
          	"SierraLeone" => "Sierra Leone",
          	"Singapore" => "Singapur",
          	"SintMaarten" => "St Maarten",
          	"Slovakia" => "Slovensko",
          	"Slovenia" => "Slovinsko",
          	"SolomonIslands" => "Šalamúnske",
          	"Somalia" => "Somálsko",
          	"SouthAfrica" => "Južná Afrika",
          	"SouthGeorgiaAndSouthSandwichIslands" => "J Gruzínsko",
          	"SouthKorea" => "Južná Kórea",
          	"SouthSudan" => "J Sudán",
            "Spain" => "Španielsko",
          	"SriLanka" => "Srí Lanka",
          	"StateofPalestine" =>  "Palestína",
          	"Sudan" => "Sudán",
          	"Suriname" => "Surinam",
          	"SvalbardandJanMayen" => "Svalbard",
          	"Sweden" => "Švédsko",
          	"Switzerland" => "Švajčiarsko",
          	"Syria" => "Sýria",
          	"Taiwan" => "Taiwan",
          	"Tajikistan" => "Tadžikistan",
          	"Tanzania" => "Tanzánia",
          	"Thailand" => "Thajsko",
          	"TimorLeste" => "Timor Leste",
          	"Togo" => "Togo",
          	"Tokelau" => "Tokelau",
          	"Tonga" => "Tonga",
          	"TrinidadandTobago" => "Trinidad",
          	"Tunisia" => "Tunisko",
          	"Turkey" => "Turecko",
          	"TurkishRepublicofNorthernCyprus" => "TRSC",
          	"Turkmenistan" => "Turkménsko",
          	"TurksandCaicosIslands" => "Turks Caicos",
          	"Tuvalu" => "Tuvalu",
          	"Uganda" => "Uganda",
          	"Ukraine" => "Ukrajina",
          	"UnitedArabEmirates" => "SAE",
          	"UnitedKingdom" => "UK",
          	"UnitedStatesMinorOutlyingIslands" => "US Minor",
          	"UnitedStatesofAmerica" => "USA",
          	"UnitedStatesVirginIslands" => "USVI",
          	"Uruguay" => "Uruguaj",
          	"Uzbekistan" => "Uzbekistan",
          	"Vanuatu" => "Vanuatu",
          	"VaticanCityAndHolySee" => "Vatikán",
          	"Venezuela" => "Venezuela",
          	"Vietnam" => "Vietnam",
          	"WallisandFutuna" => "Walis",
          	"WesternSahara" => "Západná Sahara",
          	"Yemen" => "Jemen",
          	"Zambia" => "Zambia",
          	"Zimbabwe" => "Zimbabwe"
        ];

        # Long Name for Congratulation Panel
        $longCountryNames =
        [
            "Afghanistan" => "Afganistan",
            "AlandIslands" => "Alandské ostrovy",
            "Albania" => "Albánsko",
            "Algeria" => "Alžírsko",
            "AmericanSamoa" => "Americká Samoa",
            "Andorra" => "Andorra",
            "Angola" => "Angola",
            "Anguilla" => "Anguilla",
            "AntarcticTreatySystem" => "Antarktický zmluvný systém",
            "AntiguaandBarbuda" =>  "Antigua a Barbuda",
            "Argentina" => "Argentína",
            "Armenia" => "Arménsko",
            "Aruba" => "Aruba",
            "Australia" => "Australia",
            "Austria" => "Rakúsko",
            "Azerbaijan" => "Azerbajdžan",
            "Bahamas" => "Bahamy",
            "Bahrain" => "Bahrajn",
            "Bangladesh" => "Bangladéš",
            "Barbados" => "Barbados",
            "Belarus" => "Bielorusko",
            "Belgium" => "Belgicko",
            "Belize" => "Belize",
            "Benin" => "Benin",
            "Bermuda" => "Bermudy",
            "Bhutan" => "Bhután",
            "Bolivia" => "Bolívia",
            "BonaireSintEustatiusandSaba" => "Bonaire Sint Eustatius a Saba",
            "BosniaandHerzegovina" => "Bosna a Hercegovina",
            "Botswana" => "Botswana",
            "BouvetIsland" => "Ostrov Bouvet",
            "Brazil" => "Brazília",
            "BritishIndianOceanTerritory" => "Britské územie Indického oceánu",
            "BritishVirginIslands" => "Britské Panenské ostrovy",
            "Brunei" => "Brunej",
            "Bulgaria" => "Bulharsko",
            "BurkinaFaso" => "Burkina Faso",
            "Burundi" => "Burundi",
            "Cambodia" => "Kambodža",
            "Cameroon" => "Kamerun",
            "Canada" => "Kanada",
            "CanaryIslands" => "Kanarske ostrovy",
            "CaboVerde" => "Kapverdy",
            "CaymanIslands" => "Kajmanské ostrovy",
            "CentralAfricanRepublic" => "Stredoafrická republika",
            "Chad" => "Čad",
            "Chile" => "Čile",
            "China" => "Čína",
            "ChristmasIsland" => "Vianočný ostrov",
            "CocosIslands" => "Kokosové ostrovy",
            "Colombia" => "Kolumbia",
            "Comoros" => "Komory",
            "CookIslands" => "Cookove ostrovy",
            "CostaRica" => "Kostarika",
            "CotedIvoire" => "Pobrežie Slonoviny",
            "Croatia" => "Chorvátsko",
            "Cuba" => "Kuba",
            "Curacao" => "Curaçao",
            "Cyprus" => "Cyprus",
            "Czechia" => "Česko",
            "DemocraticRepublicoftheCongo" => "Konžská demokratická republika",
            "Denmark" => "Dánsko",
            "Djibouti" => "Džibutsko",
            "Dominica" => "Dominika",
            "DominicanRepublic" => "Dominikánska republika",
            "Ecuador" => "Ekvádor",
            "Egypt" => "Egypt",
            "ElSalvador" => "Salvádor",
            "EquatorialGuinea" => "Rovníková Guinea",
            "Eritrea" => "Eritrea",
            "Estonia" => "Estónsko",
            "Eswatini" => "Eswatini",
            "Ethiopia" => "Etiópia",
            "FalklandIslands" => "Falklandské ostrovy",
            "FaroeIslands" => "Faerské ostrovy",
            "Fiji" => "Fidži",
            "Finland" => "Fínsko",
            "France" => "Francúzsko",
            "FrenchGuiana" => "Francúzska Guiana",
            "FrenchPolynesia" => "Francúzska Polynézia",
            "FrenchSouthernandAntarcticLands" => "Francúzske južné a antarktické územia",
            "Gabon" => "Gabon",
            "Gambia" => "Gambia",
            "Georgia" => "Gruzínsko",
            "Germany" => "Nemecko",
            "Ghana" => "Gana",
            "Gibraltar" => "Gibraltár",
            "Greece" => "Grécko",
            "Greenland" => "Grónsko",
            "Grenada" => "Grenada",
            "Guadeloupe" => "Guadeloupe",
            "Guam" => "Guam",
            "Guatemala" => "Guatemala",
            "Guernsey" => "Guernsey",
            "Guinea" => "Guinea",
            "GuineaBissau" => "Guinea Bissau",
            "Guyana" => "Guyana",
            "Haiti" => "Haiti",
            "HeardIslandandMcDonaldIslands" => "Ostrov Heard a ostrovy McDonald",
            "Honduras" => "Honduras",
            "HongKong" => "Hong Kong",
            "Hungary" => "Maďarsko",
            "Iceland" => "Island",
            "India" => "India",
            "Indonesia" => "Indonézia",
            "Iran" => "Irán",
            "Iraq" => "Irak",
            "Ireland" => "Írsko",
            "IsleofMan" => "Isle of Man",
            "Israel" => "Izrael",
            "Italy" => "Taliansko",
            "Jamaica" => "Jamajka",
            "Japan" => "Japonsko",
            "Jersey" => "Jersey",
            "Jordan" => "Jordán",
            "Kazakhstan" => "Kazachstan",
            "Kenya" => "Keňa",
            "Kiribati" => "Kiribati",
            "Kosovo" => "Kosovo",
            "Kuwait" => "Kuvajt",
            "Kyrgyzstan" => "Kirgizsko",
            "Laos" => "Laos",
            "Latvia" => "Lotyšsko",
            "Lebanon" => "Libanon",
            "Lesotho" => "Lesotho",
            "Liberia" => "Libéria",
            "Libya" => "Líbya",
            "Liechtenstein" => "Lichtenštajnsko",
            "Lithuania" => "Litva",
            "Luxembourg" => "Luxembursko",
            "Macau" => "Macau",
            "Macedonia" => "Macedónska republika",
            "Madagascar" => "Madagaskar",
            "Malawi" => "Malawi",
            "Malaysia" => "Malajzia",
            "Maldives" => "Maldivy",
            "Mali" => "Mali",
            "Malta" => "Malta",
            "MarshallIslands" => "Marshallove ostrovy",
            "Mauritania" => "Mauritánia",
            "Martinique" => "Martinik",
            "Mauritius" => "Maurícius",
            "Mayotte" => "Mayotte",
            "Mexico" => "Mexiko",
            "Micronesia" => "Mikronézia",
            "Moldova" => "Moldavsko",
            "Monaco" => "Monako",
            "Mongolia" => "Mongolsko",
            "Montenegro" => "Čierna Hora",
            "Montserrat" => "Montserrat",
            "Morocco" => "Maroko",
            "Mozambique" => "Mozambik",
            "Myanmar" => "Mjanmarsko",
            "Namibia" => "Namíbia",
            "Nauru" => "Nauru",
            "Nepal" => "Nepál",
            "Netherlands" => "Holandsko",
            "NewCaledonia" => "Nová Kaledónia",
            "NewZealand" => "Nový Zéland",
            "Nicaragua" => "Nikaragua",
            "Niger" => "Niger",
            "Nigeria" => "Nigéria",
            "Niue" => "Niue",
            "NorfolkIsland" => "Norfolkský ostrov",
            "NorthernMarianaIslands" => "Severné Mariány",
            "NorthKorea" => "Severná Kórea",
            "Norway" => "Nórsko",
            "Oman" => "Omán",
            "Pakistan" => "Pakistan",
            "Palau" => "Palau",
            "Panama" => "Panama",
            "PapuaNewGuinea" => "Papua-Nová Guinea",
            "Paraguay" => "Paraguaj",
            "Peru" => "Peru",
            "Philippines" => "Filipíny",
            "PitcairnIslands" => "Pitcairn ostrovy",
            "Poland" => "Poľsko",
            "Portugal" => "Portugalsko",
            "PuertoRico" => "Portoriko",
            "Qatar" => "Katar",
            "RepublicofCongo" => "Konžská demokratická republika",
            "Reunion" => "Réunion",
            "Romania" => "Rumunsko",
            "RussianFederation" => "Ruská federácia",
            "Rwanda" => "Rwanda",
            "SaintBarthelemy" => "Svätý Bartolomej",
            "SaintHelena" => "Svätá Helena",
            "SaintKittsandNevis" => "Svätý Krištof a Nevis",
            "SaintLucia" => "Svätá Lucia",
            "SaintMartin" => "Svätý Martin",
            "SaintPierreandMiquelon" => "Svätý Peter a Michal",
            "SaintVincentandGrenadines" => "Svätý Tomáš a Princov ostrov",
            "Samoa" => "Samoa",
            "SanMarino" => "San Maríno",
            "SaoTomeandPrincipe" => "São Tomé ve Príncipe",
            "SaudiArabia" => "Saudská Arábia",
            "Senegal" => "Senegal",
            "Serbia" => "Srbsko",
            "Seychelles" => "Seychely",
            "SierraLeone" => "Sierra Leone",
            "Singapore" => "Singapur",
            "SintMaarten" => "Sint Maarten",
            "Slovakia" => "Slovensko",
            "Slovenia" => "Slovinsko",
            "SolomonIslands" => "Šalamúnove ostrovy",
            "Somalia" => "Somálsko",
            "SouthAfrica" => "Južná Afrika",
            "SouthGeorgiaAndSouthSandwichIslands" => "Južná Gruzínsko a Južné Sandwichove ostrovy",
            "SouthKorea" => "Južná Kórea",
            "SouthSudan" => "Južný Sudán",
            "Spain" => "Španielsko",
            "SriLanka" => "Srí Lanka",
            "StateofPalestine" =>  "Palestínsky štát",
            "Sudan" => "Sudán",
            "Suriname" => "Surinam",
            "SvalbardandJanMayen" => "Svalbard and Jan Mayen",
            "Sweden" => "Švédsko",
            "Switzerland" => "Švajčiarsko",
            "Syria" => "Sýria",
            "Taiwan" => "Taiwan: Čína",
            "Tajikistan" => "Tadžikistan",
            "Tanzania" => "Tanzánia",
            "Thailand" => "Thajsko",
            "TimorLeste" => "Timor-Leste",
            "Togo" => "Togo",
            "Tokelau" => "Tokelau",
            "Tonga" => "Tonga",
            "TrinidadandTobago" => "Trinidad a Tobago",
            "Tunisia" => "Tunisko",
            "Turkey" => "Turecko",
            "TurkishRepublicofNorthernCyprus" => "Turecká republika severného Cypru",
            "Turkmenistan" => "Turkménsko",
            "TurksandCaicosIslands" => "Ostrovy Turks a Caicos",
            "Tuvalu" => "Tuvalu",
            "Uganda" => "Uganda",
            "Ukraine" => "Ukrajina",
            "UnitedArabEmirates" => "Spojené Arabské Emiráty",
            "UnitedKingdom" => "Spojené kráľovstvo",
            "UnitedStatesMinorOutlyingIslands" => "Malé odľahlé ostrovy Spojených štátoch",
            "UnitedStatesofAmerica" => "Spojené štáty",
            "UnitedStatesVirginIslands" => "Americké Panenské ostrovy",
            "Uruguay" => "Uruguaj",
            "Uzbekistan" => "Uzbekistan",
            "Vanuatu" => "Vanuatu",
            "VaticanCityAndHolySee" => "Vatikán a Svätá stolica",
            "Venezuela" => "Venezuela",
            "Vietnam" => "Vietnam",
            "WallisandFutuna" => "Wallis a Futuna",
            "WesternSahara" => "Západná Sahara",
            "Yemen" => "Jemen",
            "Zambia" => "Zambia",
            "Zimbabwe" => "Zimbabwe"
        ];
        # Initiate a new timestamp we can use for created_at/updated_at fields
        $timestamp = Carbon\Carbon::now()->toDateTimeString(); # same is OK

        foreach($countries as $countryName => $country)
        {
            // Short Name
            if (array_key_exists($countryName, $shortCountryNames))
            {
                $shortName = $shortCountryNames["$countryName"];
            }
            else
            {
                $shortName = $countryName;
            }
            // Full Name
            if (array_key_exists($countryName, $longCountryNames))
            {
                $longtName = $longCountryNames["$countryName"];
            }
            else
            {
                $longtName = $countryName;
            }

            Country::insert([
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'country' => $countryName,
                'short_name' => $shortName,
                'long_name' => $longtName,
            ]);
        }
    }
}
