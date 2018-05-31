<?php
printMun($_GET["province"]);

function printMun($strProv){
 $mun = getMunicipality($strProv);
 foreach ($mun as $key => $value) {
  echo '<option>'.$value.'</option>';
 }
}

function getMunicipality($strProv){
 $strMunicipality = array("-");
 if($strProv == "Metro Manila"){
  $strMunicipality2 = array(
   "Caloocan", "Las Piñas", "Makati", "Malabon", "Mandaluyong",
   "Manila", "Marikina", "Muntinlupa", "Navotas", "Parañaque",
   "Pasay", "Pasig", "Quezon City", "San Juan", "Taguig",
   "Valenzuela", "Pateros"
  );

  return $strMunicipality2;
 }
 if($strProv == "Abra"){
  $strMunicipality2 = array(
   "Bangued", "Boliney", "Bucay", "Bucloc", "Daguioman", "Danglas",
   "Dolores", "La Paz", "Lacub", "Lagangilang", "Lagayan", "Langiden",
   "Licuan-Baay","Luba","Malibcong","Manabo","Peñarrubia","Pidigan",
   "Pilar","Sallapadan","San Isidro","San Juan","San Quintin","Tayum",
   "Tineg","Tubo","Villaviciosa",
  );

  return $strMunicipality2;
 }

 if($strProv == "Agusan del Norte"){
  $strMunicipality2 = array(
   "Butuan City","Buenavista","Cabadbaran","Carmen","Jabonga","Kitcharao",
   "Las Nieves","Magallanes","Nasipit","Remedios T. Romualdez","Santiago",
   "Tubay"
  );

  return $strMunicipality2;
 }

 if($strProv == "Agusan del Sur"){
  $strMunicipality2 = array(
   "Bayugan","Bunawan","Esperanza","La Paz","Loreto","Prosperidad",
   "Rosario","San Francisco","San Luis","Santa Josefa","Sibagat",
   "Talacogon","Trento","Veruela",
  );

  return $strMunicipality2;
 }

 if($strProv == "Aklan"){
  $strMunicipality2 = array(
   "Altavas","Balete","Banga","Batan","Buruanga","Ibajay",
   "Kalibo","Lezo","Libacao","Madalag","Makato","Malay",
   "Malinao","Nabas","New Washington","Numancia","Tangalan"
  );

  return $strMunicipality2;
 }

 if($strProv == "Albay"){
  $strMunicipality2 = array(
   "Legazpi City","Ligao City","Tabaco City","Bacacay","Camalig","Daraga",
   "Guinobatan","Jovellar","Libon","Malilipot","Malinao","Manito",
   "Oas","Pio Duran","Polangui","Rapu-Rapu","Santo Domingo","Tiwi"
  );

  return $strMunicipality2;
 }

 if($strProv == "Antique"){
  $strMunicipality2 = array(
   "Anini-y",
   "Barbaza",
   "Belison",
   "Bugasong",
   "Caluya",
   "Culasi",
   "Hamtic",
   "Laua-an",
   "Libertad",
   "Pandan",
   "Patnongon",
   "San Jose",
   "San Remigio",
   "Sebaste",
   "Sibalom",
   "Tibiao",
   "Tobias Fornier",
   "Valderrama"
  );

  return $strMunicipality2;
 }

 if($strProv == "Apayao"){
  $strMunicipality2 = array(
   "Calanasan",
   "Conner",
   "Flora",
   "Kabugao",
   "Luna",
   "Pudtol",
   "Santa Marcela"
  );

  return $strMunicipality2;
 }

 if($strProv == "Aurora"){
  $strMunicipality2 = array(
   "Baler",
   "Casiguran",
   "Dilasag",
   "Dinalungan",
   "Dingalan",
   "Dipaculao",
   "Maria Aurora",
   "San Luis"
  );

  return $strMunicipality2;
 }

 if($strProv == "Basilan"){
  $strMunicipality2 = array(
   "Isabela City",
   "Akbar",
   "Al-Barka",
   "Hadji Mohammad Ajul",
   "Hadji Muhtamad",
   "Lamitan",
   "Lantawan",
   "Maluso",
   "Sumisip",
   "Tabuan-Lasa",
   "Tipo-Tipo",
   "Tuburan",
   "Ungkaya Pukan"
  );

  return $strMunicipality2;
 }

 if($strProv == "Bataan"){
  $strMunicipality2 = array(
   "Balanga City",
   "Abucay",
   "Bagac",
   "Dinalupihan",
   "Hermosa",
   "Limay",
   "Mariveles",
   "Morong",
   "Orani",
   "Orion",
   "Pilar",
   "Samal"
  );

  return $strMunicipality2;
 }

 if($strProv == "Batanes"){
  $strMunicipality2 = array(
   "Basco",
   "Itbayat",
   "Ivana",
   "Mahatao",
   "Sabtang",
   "Uyugan"
  );

  return $strMunicipality2;
 }

 if($strProv == "Batangas"){
  $strMunicipality2 = array(
   "Batangas City",
   "Lipa City",
   "Tanauan City",
   "Agoncillo",
   "Alitagtag",
   "Balayan",
   "Balete",
   "Bauan",
   "Calaca",
   "Calatagan",
   "Cuenca",
   "Ibaan",
   "Laurel",
   "Lemery",
   "Lian",
   "Lobo",
   "Mabini",
   "Malvar",
   "Mataas na Kahoy",
   "Nasugbu",
   "Padre Garcia",
   "Rosario",
   "San Jose",
   "San Juan",
   "San Luis",
   "San Nicolas",
   "San Pascual",
   "Santa Teresita",
   "Santo Tomas",
   "Taal",
   "Talisay",
   "Taysan",
   "Tingloy",
   "Tuy"
  );

  return $strMunicipality2;
 }

 if($strProv == "Benguet"){
  $strMunicipality2 = array(
   "Baguio City",
   "Atok",
   "Bakun",
   "Bokod",
   "Buguias",
   "Itogon",
   "Kabayan",
   "Kapangan",
   "Kibungan",
   "La Trinidad",
   "Mankayan",
   "Sablan",
   "Tuba",
   "Tublay"
  );

  return $strMunicipality2;
 }

 if($strProv == "Biliran"){
  $strMunicipality2 = array(
   "Almeria",
   "Biliran",
   "Cabucgayan",
   "Caibiran",
   "Culaba",
   "Kawayan",
   "Maripipi",
   "Naval"
  );

  return $strMunicipality2;
 }

 if($strProv == "Bohol"){
  $strMunicipality2 = array(
   "Tagbilaran City",
   "Alburquerque",
   "Alicia",
   "Anda",
   "Antequera",
   "Baclayon",
   "Balilihan",
   "Batuan",
   "Bien Unido",
   "Bilar",
   "Buenavista",
   "Calape",
   "Candijay",
   "Carmen",
   "Catigbian",
   "Clarin",
   "Corella",
   "Cortes",
   "Dagohoy",
   "Danao",
   "Dauis",
   "Dimiao",
   "Duero",
   "Garcia Hernandez",
   "Guindulman",
   "Inabanga",
   "Jagna",
   "Jetafe",
   "Lila",
   "Loay",
   "Loboc",
   "Loon",
   "Mabini",
   "Maribojoc",
   "Panglao",
   "Pilar",
   "Pres. Carlos P. Garcia",
   "Sagbayan",
   "San Isidro",
   "San Miguel",
   "Sevilla",
   "Sierra Bullones",
   "Sikatuna",
   "Talibon",
   "Trinidad",
   "Tubigon",
   "Ubay",
   "Valencia"
  );

  return $strMunicipality2;
 }

 if($strProv == "Bukidnon"){
  $strMunicipality2 = array(
   "Malaybalay City",
   "Valencia City",
   "Baungon",
   "Cabanglasan",
   "Damulog",
   "Dangcagan",
   "Don Carlos",
   "Impasug-Ong",
   "Kadingilan",
   "Kalilangan",
   "Kibawe",
   "Kitaotao",
   "Lantapan",
   "Libona",
   "Malitbog",
   "Manolo Fortich",
   "Maramag",
   "Pangantucan",
   "Quezon",
   "San Fernando",
   "Sumilao",
   "Talakag"
  );

  return $strMunicipality2;
 }

 if($strProv == "Bulacan"){
  $strMunicipality2 = array(
   "Malolos City",
   "Meycauayan City",
   "San Jose del Monte City",
   "Angat",
   "Balagtas",
   "Baliuag",
   "Bocaue",
   "Bulacan",
   "Bustos",
   "Calumpit",
   "Doña Remedios Trinidad",
   "Guiguinto",
   "Hagonoy",
   "Marilao",
   "Norzagaray",
   "Obando",
   "Pandi",
   "Paombong",
   "Plaridel",
   "Pulilan",
   "San Ildefonso",
   "San Miguel",
   "San Rafael",
   "Santa Maria"
  );

  return $strMunicipality2;
 }

 if($strProv == "Cagayan"){
  $strMunicipality2 = array(
   "Tuguegarao City",
   "Abulug",
   "Alcala",
   "Allacapan",
   "Amulung",
   "Aparri",
   "Baggao",
   "Ballesteros",
   "Buguey",
   "Calayan",
   "Camalaniugan",
   "Claveria",
   "Enrile",
   "Gattaran",
   "Gonzaga",
   "Iguig",
   "Lal-Lo",
   "Lasam",
   "Pamplona",
   "Peñablanca",
   "Piat",
   "Rizal",
   "Sanchez-Mira",
   "Santa Ana",
   "Santa Praxedes",
   "Santa Teresita",
   "Santo Niño",
   "Solana",
   "Tuao"
  );

  return $strMunicipality2;
 }

 if($strProv == "Camarines Norte"){
  $strMunicipality2 = array(
   "Basud",
   "Capalonga",
   "Daet",
   "Jose Panganiban",
   "Labo",
   "Mercedes",
   "Paracale",
   "San Lorenzo Ruiz",
   "San Vicente",
   "Santa Elena",
   "Talisay",
   "Vinzons"
  );

  return $strMunicipality2;
 }

 if($strProv == "Camarines Sur"){
  $strMunicipality2 = array(
   "Iriga City",
   "Naga City",
   "Baao",
   "Balatan",
   "Bato",
   "Bombon",
   "Buhi",
   "Bula",
   "Cabusao",
   "Calabanga",
   "Camaligan",
   "Canaman",
   "Caramoan",
   "Del Gallego",
   "Gainza",
   "Garchitorena",
   "Goa",
   "Lagonoy",
   "Libmanan",
   "Lupi",
   "Magarao",
   "Milaor",
   "Minalabac",
   "Nabua",
   "Ocampo",
   "Pamplona",
   "Pasacao",
   "Pili",
   "Presentacion",
   "Ragay",
   "Sagñay",
   "San Fernando",
   "San Jose",
   "Sipocot",
   "Siruma",
   "Tigaon",
   "Tinambac"
  );

  return $strMunicipality2;
 }

 if($strProv == "Camiguin"){
  $strMunicipality2 = array(
   "Catarman",
   "Guinsiliban",
   "Mahinog",
   "Mambajao",
   "Sagay"
  );

  return $strMunicipality2;
 }

 if($strProv == "Capiz"){
  $strMunicipality2 = array(
   "Roxas City",
   "Cuartero",
   "Dao",
   "Dumalag",
   "Dumarao",
   "Ivisan",
   "Jamindan",
   "Ma-ayon",
   "Mambusao",
   "Panay",
   "Panitan",
   "Pilar",
   "Pontevedra",
   "President Roxas",
   "Sapi-an",
   "Sigma",
   "Tapaz"
  );

  return $strMunicipality2;
 }

 if($strProv == "Catanduanes"){
  $strMunicipality2 = array(
   "Bagamanoc",
   "Baras",
   "Bato",
   "Caramoran",
   "Gigmoto",
   "Pandan",
   "Panganiban",
   "San Andres",
   "San Miguel",
   "Viga",
   "Virac"
  );

  return $strMunicipality2;
 }

 if($strProv == "Cavite"){
  $strMunicipality2 = array(
   "Cavite City",
   "Tagaytay City",
   "Trece Martires City",
   "Alfonso",
   "Amadeo",
   "Bacoor",
   "Carmona",
   "Dasmariñas",
   "Gen. Mariano Alvarez",
   "Gen. Emilio Aguinaldo",
   "Gen. Trias",
   "Imus",
   "Indang",
   "Kawit",
   "Magallanes",
   "Maragondon",
   "Mendez",
   "Naic",
   "Noveleta",
   "Rosario",
   "Silang",
   "Tanza",
   "Ternate"
  );

  return $strMunicipality2;
 }

 if($strProv == "Cebu"){
  $strMunicipality2 = array(
   "Cebu City",
   "Danao City",
   "Lapu-Lapu City",
   "Mandaue City",
   "Talisay City",
   "Toledo City",
   "Alcantara",
   "Alcoy",
   "Alegria",
   "Aloguinsan",
   "Argao",
   "Asturias",
   "Badian",
   "Balamban",
   "Bantayan",
   "Barili",
   "Bogo",
   "Boljoon",
   "Borbon",
   "Carcar",
   "Carmen",
   "Catmon",
   "Compostela",
   "Consolacion",
   "Cordoba",
   "Daanbantayan",
   "Dalaguete",
   "Dumanjug",
   "Ginatilan",
   "Liloan",
   "Madridejos",
   "Malabuyoc",
   "Medellin",
   "Minglanilla",
   "Moalboal",
   "Naga",
   "Oslob",
   "Pilar",
   "Pinamungahan",
   "Poro",
   "Ronda",
   "Samboan",
   "San Fernando",
   "San Francisco",
   "San Remigio",
   "Santa Fe",
   "Santander",
   "Sibonga",
   "Sogod",
   "Tabogon",
   "Tabuelan",
   "Tuburan",
   "Tudela"
  );

  return $strMunicipality2;
 }

 if($strProv == "Compostela Valley"){
  $strMunicipality2 = array(
   "Compostela",
   "Laak",
   "Mabini",
   "Maco",
   "Maragusan",
   "Mawab",
   "Monkayo",
   "Montevista",
   "Nabunturan",
   "New Bataan",
   "Pantukan"
  );

  return $strMunicipality2;
 }

 if($strProv == "Cotabato"){
  $strMunicipality2 = array(
   "Kidapawan City",
   "Alamada",
   "Aleosan",
   "Antipas",
   "Arakan",
   "Banisilan",
   "Carmen",
   "Kabacan",
   "Libungan",
   "M'Lang",
   "Magpet",
   "Makilala",
   "Matalam",
   "Midsayap",
   "Pigkawayan",
   "Pikit",
   "President Roxas",
   "Tulunan"
  );

  return $strMunicipality2;
 }

 if($strProv == "Davao del Norte"){
  $strMunicipality2 = array(
   "Panabo City",
   "Island Garden City of Samal",
   "Tagum City",
   "Asuncion",
   "Braulio E. Dujali",
   "Carmen",
   "Kapalong",
   "New Corella",
   "San Isidro",
   "Santo Tomas",
   "Talaingod"
  );

  return $strMunicipality2;
 }

 if($strProv == "Davao del Sur"){
  $strMunicipality2 = array(
   "Davao City",
   "Digos City",
   "Bansalan",
   "Don Marcelino",
   "Hagonoy",
   "Jose Abad Santos",
   "Kiblawan",
   "Magsaysay",
   "Malalag",
   "Malita",
   "Matanao",
   "Padada",
   "Santa Cruz",
   "Santa Maria",
   "Sarangani",
   "Sulop"
  );

  return $strMunicipality2;
 }

 if($strProv == "Davao Oriental"){
  $strMunicipality2 = array(
   "Baganga",
   "Banaybanay",
   "Boston",
   "Caraga",
   "Cateel",
   "Governor Generoso",
   "Lupon",
   "Manay",
   "Mati",
   "San Isidro",
   "Tarragona"
  );

  return $strMunicipality2;
 }

 if($strProv == "Dinagat Islands"){
  $strMunicipality2 = array(
   "Basilisia (Rizal)",
   "Cagdianao",
   "Dinagat",
   "Libjo (Albor)",
   "Loreto",
   "San Jose",
   "Tubajon",
  );

  return $strMunicipality2;
 }

 if($strProv == "Eastern Samar"){
  $strMunicipality2 = array(
   "Arteche",
   "Balangiga",
   "Balangkayan",
   "Borongan",
   "Can-avid",
   "Dolores",
   "General MacArthur",
   "Giporlos",
   "Guiuan",
   "Hernani",
   "Jipapad",
   "Lawaan",
   "Llorente",
   "Maslog",
   "Maydolong",
   "Mercedes",
   "Oras",
   "Quinapondan",
   "Salcedo",
   "San Julian",
   "San Policarpo",
   "Sulat",
   "Taft"
  );

  return $strMunicipality2;
 }

 if($strProv == "Guimaras"){
  $strMunicipality2 = array(
   "Buenavista",
   "Jordan",
   "Nueva Valencia",
   "San Lorenzo",
   "Sibunag"
  );

  return $strMunicipality2;
 }

 if($strProv == "Ifugao"){
  $strMunicipality2 = array(
   "Aguinaldo",
   "Alfonso Lista",
   "Asipulo",
   "Banaue",
   "Hingyon",
   "Hungduan",
   "Kiangan",
   "Lagawe",
   "Lamut",
   "Mayoyao",
   "Tinoc"
  );

  return $strMunicipality2;
 }

 if($strProv == "Ilocos Norte"){
  $strMunicipality2 = array(
   "Laoag City",
   "Adams",
   "Bacarra",
   "Badoc",
   "Bangui",
   "Banna",
   "Burgos",
   "Carasi",
   "Currimao",
   "Dingras",
   "Dumalneg",
   "Marcos",
   "Nueva Era",
   "Pagudpud",
   "Paoay",
   "Pasuquin",
   "Piddig",
   "Pinili",
   "San Nicolas",
   "Sarrat",
   "Solsona",
   "Vintar"
  );

  return $strMunicipality2;
 }

 if($strProv == "Ilocos Sur"){
  $strMunicipality2 = array(
   "Candon City",
   "Vigan City",
   "Alilem",
   "Banayoyo",
   "Bantay",
   "Burgos",
   "Cabugao",
   "Caoayan",
   "Cervantes",
   "Galimuyod",
   "Gregorio Del Pilar",
   "Lidlidda",
   "Magsingal",
   "Nagbukel",
   "Narvacan",
   "Quirino",
   "Salcedo",
   "San Emilio",
   "San Esteban",
   "San Ildefonso",
   "San Juan",
   "San Vicente",
   "Santa",
   "Santa Catalina",
   "Santa Cruz",
   "Santa Lucia",
   "Santa Maria",
   "Santiago",
   "Santo Domingo",
   "Sigay",
   "Sinait",
   "Sugpon",
   "Suyo",
   "Tagudin"
  );

  return $strMunicipality2;
 }

 if($strProv == "Iloilo"){
  $strMunicipality2 = array(
   "Passi City",
   "Iloilo City",
   "Ajuy",
   "Alimodian",
   "Anilao",
   "Badiangan",
   "Balasan",
   "Banate",
   "Barotac Nuevo",
   "Barotac Viejo",
   "Batad",
   "Bingawan",
   "Cabatuan",
   "Calinog",
   "Carles",
   "Concepcion",
   "Dingle",
   "Dueñas",
   "Dumangas",
   "Estancia",
   "Guimbal",
   "Igbaras",
   "Janiuay",
   "Lambunao",
   "Leganes",
   "Lemery",
   "Leon",
   "Maasin",
   "Miagao",
   "Mina",
   "New Lucena",
   "Oton",
   "Pavia",
   "Pototan",
   "San Dionisio",
   "San Enrique",
   "San Joaquin",
   "San Miguel",
   "San Rafael",
   "Santa Barbara",
   "Sara",
   "Tigbauan",
   "Tubungan",
   "Zarraga"
  );

  return $strMunicipality2;
 }

 if($strProv == "Isabela"){
  $strMunicipality2 = array(
   "Cauayan City",
   "Santiago City",
   "Alicia",
   "Angadanan",
   "Aurora",
   "Benito Soliven",
   "Burgos",
   "Cabagan",
   "Cabatuan",
   "Cordon",
   "Delfin Albano",
   "Dinapigue",
   "Divilacan",
   "Echague",
   "Gamu",
   "Ilagan",
   "Jones",
   "Luna",
   "Maconacon",
   "Mallig",
   "Naguilian",
   "Palanan",
   "Quezon",
   "Quirino",
   "Ramon",
   "Reina Mercedes",
   "Roxas",
   "San Agustin",
   "San Guillermo",
   "San Isidro",
   "San Manuel",
   "San Mariano",
   "San Mateo",
   "San Pablo",
   "Santa Maria",
   "Santo Tomas",
   "Tumauini"
  );

  return $strMunicipality2;
 }

 if($strProv == "Kalinga"){
  $strMunicipality2 = array(
   "Balbalan",
   "Lubuagan",
   "Pasil",
   "Pinukpuk",
   "Rizal",
   "Tabuk",
   "Tanudan",
   "Tinglayan"
  );

  return $strMunicipality2;
 }

 if($strProv == "La Union"){
  $strMunicipality2 = array(
   "San Fernando City",
   "Agoo",
   "Aringay",
   "Bacnotan",
   "Bagulin",
   "Balaoan",
   "Bangar",
   "Bauang",
   "Burgos",
   "Caba",
   "Luna",
   "Naguilian",
   "Pugo",
   "Rosario",
   "San Gabriel",
   "San Juan",
   "Santo Tomas",
   "Santol",
   "Sudipen",
   "Tubao"
  );

  return $strMunicipality2;
 }

 if($strProv == "Laguna"){
  $strMunicipality2 = array(
   "Calamba City",
   "San Pablo City",
   "Santa Rosa City",
   "Alaminos",
   "Bay",
   "Biñan",
   "Cabuyao",
   "Calauan",
   "Cavinti",
   "Famy",
   "Kalayaan",
   "Liliw",
   "Los Baños",
   "Luisiana",
   "Lumban",
   "Mabitac",
   "Magdalena",
   "Majayjay",
   "Nagcarlan",
   "Paete",
   "Pagsanjan",
   "Pakil",
   "Pangil",
   "Pila",
   "Rizal",
   "San Pedro",
   "Santa Cruz",
   "Santa Maria",
   "Siniloan",
   "Victoria"
  );

  return $strMunicipality2;
 }

 if($strProv == "Lanao del Norte"){
  $strMunicipality2 = array(
   "Iligan City",
   "Bacolod",
   "Baloi",
   "Baroy",
   "Kapatagan",
   "Kauswagan",
   "Kolambugan",
   "Lala",
   "Linamon",
   "Magsaysay",
   "Maigo",
   "Matungao",
   "Munai",
   "Nunungan",
   "Pantao Ragat",
   "Pantar",
   "Poona Piagapo",
   "Salvador",
   "Sapad",
   "Sultan Naga Dimaporo",
   "Tagoloan",
   "Tangcal",
   "Tubod"
  );

  return $strMunicipality2;
 }

 if($strProv == "Lanao del Sur"){
  $strMunicipality2 = array(
   "Marawi City",
   "Bacolod-Kalawi",
   "Balabagan",
   "Balindong",
   "Bayang",
   "Binidayan",
   "Buadiposo-Buntong",
   "Bubong",
   "Bumbaran",
   "Butig",
   "Calanogas",
   "Ditsaan-Ramain",
   "Ganassi",
   "Kapai",
   "Kapatagan",
   "Lumba-Bayabao",
   "Lumbaca-Unayan",
   "Lumbatan",
   "Lumbayanague",
   "Madalum",
   "Madamba",
   "Maguing",
   "Malabang",
   "Marantao",
   "Marogong",
   "Masiu",
   "Mulondo",
   "Pagayawan",
   "Piagapo",
   "Poona Bayabao",
   "Pualas",
   "Saguiaran",
   "Sultan Dumalondong",
   "Picong",
   "Tagoloan II",
   "Tamparan",
   "Taraka",
   "Tubaran",
   "Tugaya",
   "Wao"
  );

  return $strMunicipality2;
 }

 if($strProv == "Leyte"){
  $strMunicipality2 = array(
   "Ormoc City",
   "Tacloban City",
   "Abuyog",
   "Alangalang",
   "Albuera",
   "Babatngon",
   "Barugo",
   "Bato",
   "Baybay",
   "Burauen",
   "Calubian",
   "Capoocan",
   "Carigara",
   "Dagami",
   "Dulag",
   "Hilongos",
   "Hindang",
   "Inopacan",
   "Isabel",
   "Jaro",
   "Javier",
   "Julita",
   "Kananga",
   "La Paz",
   "Leyte",
   "Macarthur",
   "Mahaplag",
   "Matag-ob",
   "Matalom",
   "Mayorga",
   "Merida",
   "Palo",
   "Palompon",
   "Pastrana",
   "San Isidro",
   "San Miguel",
   "Santa Fe",
   "Tabango",
   "Tabontabon",
   "Tanauan",
   "Tolosa",
   "Tunga",
   "Villaba"
  );

  return $strMunicipality2;
 }

 if($strProv == "Maguindanao"){
  $strMunicipality2 = array(
   "Cotabato City",
   "Ampatuan",
   "Barira",
   "Buldon",
   "Buluan",
   "Datu Abdullah Sangki",
   "Datu Anggal Midtimbang",
   "Datu Blah T. Sinsuat",
   "Datu Hoffer Ampatuan",
   "Datu Odin Sinsuat",
   "Datu Paglas",
   "Datu Piang",
   "Datu Salibo",
   "Datu Saudi-Ampatuan",
   "Datu Unsay",
   "Gen. S. K. Pendatun",
   "Guindulungan",
   "Kabuntalan",
   "Mamasapano",
   "Mangudadatu",
   "Matanog",
   "Northern Kabuntalan",
   "Pagagawan",
   "Pagalungan",
   "Paglat",
   "Pandag",
   "Parang",
   "Rajah Buayan",
   "Shariff Aguak",
   "Shariff Saydona Mustapha",
   "South Upi",
   "Sultan Kudarat",
   "Sultan sa Barongis",
   "Sultan Mastura",
   "Talayan",
   "Talitay",
   "Upi"
  );

  return $strMunicipality2;
 }

 if($strProv == "Marinduque"){
  $strMunicipality2 = array(
   "Boac",
   "Buenavista",
   "Gasan",
   "Mogpog",
   "Santa Cruz",
   "Torrijos",
  );

  return $strMunicipality2;
 }

 if($strProv == "Masbate"){
  $strMunicipality2 = array(
   "Masbate City",
   "Aroroy",
   "Baleno",
   "Balud",
   "Batuan",
   "Cataingan",
   "Cawayan",
   "Claveria",
   "Dimasalang",
   "Esperanza",
   "Mandaon",
   "Milagros",
   "Mobo",
   "Monreal",
   "Palanas",
   "Pio V. Corpuz",
   "Placer",
   "San Fernando",
   "San Jacinto",
   "San Pascual",
   "Uson"
  );

  return $strMunicipality2;
 }

 if($strProv == "Misamis Occidental"){
  $strMunicipality2 = array(
   "Oroquieta City",
   "Ozamiz City",
   "Tangub City",
   "Aloran",
   "Baliangao",
   "Bonifacio",
   "Calamba",
   "Clarin",
   "Concepcion",
   "Don Victoriano Chiongbian",
   "Jimenez",
   "Lopez Jaena",
   "Panaon",
   "Plaridel",
   "Sapang Dalaga",
   "Sinacaban",
   "Tudela"
  );

  return $strMunicipality2;
 }

 if($strProv == "Misamis Oriental"){
  $strMunicipality2 = array(
   "Cagayan de Oro",
   "Gingoog City",
   "Alubijid",
   "Balingasag",
   "Balingoan",
   "Binuangan",
   "Claveria",
   "El Salvador",
   "Gitagum",
   "Initao",
   "Jasaan",
   "Kinoguitan",
   "Lagonglong",
   "Laguindingan",
   "Libertad",
   "Lugait",
   "Magsaysay",
   "Manticao",
   "Medina",
   "Naawan",
   "Opol",
   "Salay",
   "Sugbongcogon",
   "Tagoloan",
   "Talisayan",
   "Villanueva"
  );

  return $strMunicipality2;
 }

 if($strProv == "Mountain Province"){
  $strMunicipality2 = array(
   "Barlig",
   "Bauko",
   "Besao",
   "Bontoc",
   "Natonin",
   "Paracelis",
   "Sabangan",
   "Sadanga",
   "Sagada",
   "Tadian"
  );

  return $strMunicipality2;
 }

 if($strProv == "Negros Occidental"){
  $strMunicipality2 = array(
   "Bacolod City",
   "Bago City",
   "Cadiz City",
   "Escalante City",
   "Himamaylan City",
   "Kabankalan City",
   "La Carlota City",
   "Sagay City",
   "San Carlos City",
   "Silay City",
   "Sipalay City",
   "Talisay City",
   "Victorias City",
   "Binalbagan",
   "Calatrava",
   "Candoni",
   "Cauayan",
   "Enrique B. Magalona",
   "Hinigaran",
   "Hinoba-an",
   "Ilog",
   "Isabela",
   "La Castellana",
   "Manapla",
   "Moises Padilla",
   "Murcia",
   "Pontevedra",
   "Pulupandan",
   "Salvador Benedicto",
   "San Enrique",
   "Toboso",
   "Valladolid",
  );

  return $strMunicipality2;
 }

 if($strProv == "Negros Oriental"){
  $strMunicipality2 = array(
   "Bais",
   "Bayawan",
   "Canlaon",
   "Dumaguete",
   "Tanjay",
   "Amlan",
   "Ayungon",
   "Bacong",
   "Basay",
   "Bindoy",
   "Dauin",
   "Guihulngan",
   "Jimalalud",
   "La Libertad",
   "Mabinay",
   "Manjuyod",
   "Pamplona",
   "San Jose",
   "Santa Catalina",
   "Siaton",
   "Sibulan",
   "Tayasan",
   "Valencia",
   "Vallehermoso",
   "Zamboanguita"
  );

  return $strMunicipality2;
 }

 if($strProv == "Northern Samar"){
  $strMunicipality2 = array(
   "Allen",
   "Biri",
   "Bobon",
   "Capul",
   "Catarman",
   "Catubig",
   "Gamay",
   "Laoang",
   "Lapinig",
   "Las Navas",
   "Lavezares",
   "Lope de Vega",
   "Mapanas",
   "Mondragon",
   "Palapag",
   "Pambujan",
   "Rosario",
   "San Antonio",
   "San Isidro",
   "San Jose",
   "San Roque",
   "San Vicente",
   "Silvino Lobos",
   "Victoria"
  );

  return $strMunicipality2;
 }

 if($strProv == "Nueva Ecija"){
  $strMunicipality2 = array(
   "Cabanatuan City",
   "Gapan City",
   "Science City of Muñoz",
   "Palayan City",
   "San Jose City",
   "Aliaga",
   "Bongabon",
   "Cabiao",
   "Carranglan",
   "Cuyapo",
   "Gabaldon",
   "General Mamerto Natividad",
   "General Tinio",
   "Guimba",
   "Jaen",
   "Laur",
   "Licab",
   "Llanera",
   "Lupao",
   "Nampicuan",
   "Pantabangan",
   "Peñaranda",
   "Quezon",
   "Rizal",
   "San Antonio",
   "San Isidro",
   "San Leonardo",
   "Santa Rosa",
   "Santo Domingo",
   "Talavera",
   "Talugtug",
   "Zaragoza"
  );

  return $strMunicipality2;
 }

 if($strProv == "Nueva Vizcaya"){
  $strMunicipality2 = array(
   "Alfonso Castaneda",
   "Ambaguio",
   "Aritao",
   "Bagabag",
   "Bambang",
   "Bayombong",
   "Diadi",
   "Dupax del Norte",
   "Dupax del Sur",
   "Kasibu",
   "Kayapa",
   "Quezon",
   "Santa Fe",
   "Solano",
   "Villaverde"
  );

  return $strMunicipality2;
 }

 if($strProv == "Occidental Mindoro"){
  $strMunicipality2 = array(
   "Abra de Ilog",
   "Calintaan",
   "Looc",
   "Lubang",
   "Magsaysay",
   "Mamburao",
   "Paluan",
   "Rizal",
   "Sablayan",
   "San Jose",
   "Santa Cruz"
  );

  return $strMunicipality2;
 }

 if($strProv == "Oriental Mindoro"){
  $strMunicipality2 = array(
   "Calapan City",
   "Baco",
   "Bansud",
   "Bongabong",
   "Bulalacao",
   "Gloria",
   "Mansalay",
   "Naujan",
   "Pinamalayan",
   "Pola",
   "Puerto Galera",
   "Roxas",
   "San Teodoro",
   "Socorro",
   "Victoria"
  );

  return $strMunicipality2;
 }

 if($strProv == "Palawan"){
  $strMunicipality2 = array(
   "Puerto Princesa City",
   "Aborlan",
   "Agutaya",
   "Araceli",
   "Balabac",
   "Bataraza",
   "Brooke\'s Point",
   "Busuanga",
   "Cagayancillo",
   "Coron",
   "Culion",
   "Cuyo",
   "Dumaran",
   "El Nido",
   "Kalayaan",
   "Linapacan",
   "Magsaysay",
   "Narra",
   "Quezon",
   "Rizal",
   "Roxas",
   "San Vicente",
   "Sofronio Española",
   "Taytay"
  );

  return $strMunicipality2;
 }

 if($strProv == "Pampanga"){
  $strMunicipality2 = array(
   "Angeles City",
   "City of San Fernando",
   "Apalit",
   "Arayat",
   "Bacolor",
   "Candaba",
   "Floridablanca",
   "Guagua",
   "Lubao",
   "Mabalacat",
   "Macabebe",
   "Magalang",
   "Masantol",
   "Mexico",
   "Minalin",
   "Porac",
   "San Luis",
   "San Simon",
   "Santa Ana",
   "Santa Rita",
   "Santo Tomas",
   "Sasmuan"
  );

  return $strMunicipality2;
 }

 if($strProv == "Pangasinan"){
  $strMunicipality2 = array(
   "Alaminos City",
   "Dagupan City",
   "San Carlos City",
   "Urdaneta City",
   "Agno",
   "Aguilar",
   "Alcala",
   "Anda",
   "Asingan",
   "Balungao",
   "Bani",
   "Basista",
   "Bautista",
   "Bayambang",
   "Binalonan",
   "Binmaley",
   "Bolinao",
   "Bugallon",
   "Burgos",
   "Calasiao",
   "Dasol",
   "Infanta",
   "Labrador",
   "Laoac",
   "Lingayen",
   "Mabini",
   "Malasiqui",
   "Manaoag",
   "Mangaldan",
   "Mangatarem",
   "Mapandan",
   "Natividad",
   "Pozzorubio",
   "Rosales",
   "San Fabian",
   "San Jacinto",
   "San Manuel",
   "San Nicolas",
   "San Quintin",
   "Santa Barbara",
   "Santa Maria",
   "Santo Tomas",
   "Sison",
   "Sual",
   "Tayug",
   "Umingan",
   "Urbiztondo",
   "Villasis"
  );

  return $strMunicipality2;
 }

 if($strProv == "Quezon"){
  $strMunicipality2 = array(
   "Lucena City",
   "Agdangan",
   "Alabat",
   "Atimonan",
   "Buenavista",
   "Burdeos",
   "Calauag",
   "Candelaria",
   "Catanauan",
   "Dolores",
   "General Luna",
   "General Nakar",
   "Guinayangan",
   "Gumaca",
   "Infanta",
   "Jomalig",
   "Lopez",
   "Lucban",
   "Macalelon",
   "Mauban",
   "Mulanay",
   "Padre Burgos",
   "Pagbilao",
   "Panukulan",
   "Patnanungan",
   "Perez",
   "Pitogo",
   "Plaridel",
   "Polillo",
   "Quezon",
   "Real",
   "Sampaloc",
   "San Andres",
   "San Antonio",
   "San Francisco",
   "San Narciso",
   "Sariaya",
   "Tagkawayan",
   "Tayabas",
   "Tiaong",
   "Unisan"
  );

  return $strMunicipality2;
 }

 if($strProv == "Quirino"){
  $strMunicipality2 = array(
   "Aglipay",
   "Cabarroguis",
   "Diffun",
   "Maddela",
   "Nagtipunan",
   "Saguday"
  );

  return $strMunicipality2;
 }

 if($strProv == "Rizal"){
  $strMunicipality2 = array(
   "Antipolo City",
   "Angono",
   "Baras",
   "Binangonan",
   "Cainta",
   "Cardona",
   "Jalajala",
   "Morong",
   "Pililla",
   "Rodriguez",
   "San Mateo",
   "Tanay",
   "Taytay",
   "Teresa"
  );

  return $strMunicipality2;
 }

 if($strProv == "Romblon"){
  $strMunicipality2 = array(
   "Alcantara",
   "Banton",
   "Cajidiocan",
   "Calatrava",
   "Concepcion",
   "Corcuera",
   "Ferrol",
   "Looc",
   "Magdiwang",
   "Odiongan",
   "Romblon",
   "San Agustin",
   "San Andres",
   "San Fernando",
   "San Jose",
   "Santa Fe",
   "Santa Maria"
  );

  return $strMunicipality2;
 }

 if($strProv == "Samar"){
  $strMunicipality2 = array(
   "Calbayog City",
   "Almagro",
   "Basey",
   "Calbiga",
   "Catbalogan",
   "Daram",
   "Gandara",
   "Hinabangan",
   "Jiabong",
   "Marabut",
   "Matuguinao",
   "Motiong",
   "Pagsanghan",
   "Paranas",
   "Pinabacdao",
   "San Jorge",
   "San Jose De Buan",
   "San Sebastian",
   "Santa Margarita",
   "Santa Rita",
   "Santo Niño",
   "Tagapul-an",
   "Talalora",
   "Tarangnan",
   "Villareal",
   "Zumarraga"
  );

  return $strMunicipality2;
 }

 if($strProv == "Sarangani"){
  $strMunicipality2 = array(
   "Alabel",
   "Glan",
   "Kiamba",
   "Maasim",
   "Maitum",
   "Malapatan",
   "Malungon"
  );

  return $strMunicipality2;
 }

 if($strProv == "Siquijor"){
  $strMunicipality2 = array(
   "Enrique Villanueva",
   "Larena",
   "Lazi",
   "Maria",
   "San Juan",
   "Siquijor"
  );

  return $strMunicipality2;
 }

 if($strProv == "Sorsogon"){
  $strMunicipality2 = array(
   "Sorsogon City",
   "Barcelona",
   "Bulan",
   "Bulusan",
   "Casiguran",
   "Castilla",
   "Donsol",
   "Gubat",
   "Irosin",
   "Juban",
   "Magallanes",
   "Matnog",
   "Pilar",
   "Prieto Diaz",
   "Santa Magdalena"
  );

  return $strMunicipality2;
 }

 if($strProv == "South Cotabato"){
  $strMunicipality2 = array(
   "General Santos City",
   "Koronadal City",
   "Banga",
   "Lake Sebu",
   "Norala",
   "Polomolok",
   "Santo Niño",
   "Surallah",
   "T\'Boli",
   "Tampakan",
   "Tantangan",
   "Tupi"
  );

  return $strMunicipality2;
 }

 if($strProv == "Southern Leyte"){
  $strMunicipality2 = array(
   "Maasin City",
   "Anahawan",
   "Bontoc",
   "Hinunangan",
   "Hinundayan",
   "Libagon",
   "Liloan",
   "Limasawa",
   "Macrohon",
   "Malitbog",
   "Padre Burgos",
   "Pintuyan",
   "Saint Bernard",
   "San Francisco",
   "San Juan",
   "San Ricardo",
   "Silago",
   "Sogod",
   "Tomas Oppus"
  );

  return $strMunicipality2;
 }

 if($strProv == "Sultan Kudarat"){
  $strMunicipality2 = array(
   "Tacurong City",
   "Bagumbayan",
   "Columbio",
   "Esperanza",
   "Isulan",
   "Kalamansig",
   "Lambayong",
   "Lebak",
   "Lutayan",
   "Palimbang",
   "President Quirino",
   "Sen. Ninoy Aquino"
  );

  return $strMunicipality2;
 }

 if($strProv == "Sulu"){
  $strMunicipality2 = array(
   "Banguingui",
   "Hadji Panglima Tahil",
   "Indanan",
   "Jolo",
   "Kalingalan Caluang",
   "Lugus",
   "Luuk",
   "Maimbung",
   "Old Panamao",
   "Omar",
   "Pandami",
   "Panglima Estino",
   "Pangutaran",
   "Parang",
   "Pata",
   "Patikul",
   "Siasi",
   "Talipao",
   "Tapul"
  );

  return $strMunicipality2;
 }

 if($strProv == "Surigao del Norte"){
  $strMunicipality2 = array(
   "Surigao City",
   "Alegria",
   "Bacuag",
   "Burgos",
   "Claver",
   "Dapa",
   "Del Carmen",
   "General Luna",
   "Gigaquit",
   "Mainit",
   "Malimono",
   "Pilar",
   "Placer",
   "San Benito",
   "San Francisco",
   "San Isidro",
   "Santa Monica",
   "Sison",
   "Socorro",
   "Tagana-an",
   "Tubod"
  );

  return $strMunicipality2;
 }

 if($strProv == "Surigao del Sur"){
  $strMunicipality2 = array(
   "Bislig City",
   "Barobo",
   "Bayabas",
   "Cagwait",
   "Cantilan",
   "Carmen",
   "Carrascal",
   "Cortes",
   "Hinatuan",
   "Lanuza",
   "Lianga",
   "Lingig",
   "Madrid",
   "Marihatag",
   "San Agustin",
   "San Miguel",
   "Tagbina",
   "Tago",
   "Tandag"
  );

  return $strMunicipality2;
 }

 if($strProv == "Tarlac"){
  $strMunicipality2 = array(
   "Tarlac City",
   "Anao",
   "Bamban",
   "Camiling",
   "Capas",
   "Concepcion",
   "Gerona",
   "La Paz",
   "Mayantoc",
   "Moncada",
   "Paniqui",
   "Pura",
   "Ramos",
   "San Clemente",
   "San Jose",
   "San Manuel",
   "Santa Ignacia",
   "Victoria"
  );

  return $strMunicipality2;
 }

 if($strProv == "Tawi-Tawi"){
  $strMunicipality2 = array(
   "Bongao",
   "Languyan",
   "Mapun",
   "Panglima Sugala",
   "Sapa-Sapa",
   "Sibutu",
   "Simunul",
   "Sitangkai",
   "South Ubian",
   "Tandubas",
   "Turtle Islands"
  );

  return $strMunicipality2;
 }

 if($strProv == "Zambales"){
  $strMunicipality2 = array(
   "Olongapo City",
   "Botolan",
   "Cabangan",
   "Candelaria",
   "Castillejos",
   "Iba",
   "Masinloc",
   "Palauig",
   "San Antonio",
   "San Felipe",
   "San Marcelino",
   "San Narciso",
   "Santa Cruz",
   "Subic"
  );

  return $strMunicipality2;
 }

 if($strProv == "Zamboanga del Norte"){
  $strMunicipality2 = array(
   "Dapitan City",
   "Dipolog City",
   "Bacungan",
   "Baliguian",
   "Godod",
   "Gutalac",
   "Jose Dalman",
   "Kalawit",
   "Katipunan",
   "La Libertad",
   "Labason",
   "Liloy",
   "Manukan",
   "Mutia",
   "Piñan",
   "Polanco",
   "Pres. Manuel A. Roxas",
   "Rizal",
   "Salug",
   "Sergio Osmeña Sr.",
   "Siayan",
   "Sibuco",
   "Sibutad",
   "Sindangan",
   "Siocon",
   "Sirawai",
   "Tampilisan"
  );

  return $strMunicipality2;
 }

 if($strProv == "Zamboanga del Sur"){
  $strMunicipality2 = array(
   "Pagadian City",
   "Zamboanga City",
   "Aurora",
   "Bayog",
   "Dimataling",
   "Dinas",
   "Dumalinao",
   "Dumingag",
   "Guipos",
   "Josefina",
   "Kumalarang",
   "Labangan",
   "Lakewood",
   "Lapuyan",
   "Mahayag",
   "Margosatubig",
   "Midsalip",
   "Molave",
   "Pitogo",
   "Ramon Magsaysay",
   "San Miguel",
   "San Pablo",
   "Sominot",
   "Tabina",
   "Tambulig",
   "Tigbao",
   "Tukuran",
   "Vincenzo A. Sagun"
  );

  return $strMunicipality2;
 }

 if($strProv == "Zamboanga Sibugay"){
  $strMunicipality2 = array(
   "Alicia",
   "Buug",
   "Diplahan",
   "Imelda",
   "Ipil",
   "Kabasalan",
   "Mabuhay",
   "Malangas",
   "Naga",
   "Olutanga",
   "Payao",
   "Roseller Lim",
   "Siay",
   "Talusan",
   "Titay",
   "Tungawan"
  );

  return $strMunicipality2;
 }

 return $strMunicipality;
}
?>
