<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Afganistán','Albania','Alemania','Andorra','Angola','Anguila','Antártida','Antigua y Barbuda',
            'Arabia Saudita','Argelia','Argentina','Armenia','Aruba','Australia','Austria','Azerbaiyán',
            'Bahamas','Bangladés','Barbados','Baréin','Bélgica','Belice','Benín','Bermudas','Bielorrusia',
            'Myanmar','Bolivia','Bosnia y Herzegovina','Botsuana','Brasil','Brunéi Darussalam','Bulgaria',
            'Burkina Faso','Burundi','Bután','Cabo Verde','Camboya','Camerún','Canadá','Catar','Bonaire','Chad',
            'Chile','China','Chipre','Colombia','Comoras','Corea del sur','Costa de Marfil','Costa Rica',
            'Croacia','Cuba','Curaçao','Dinamarca','Dominica','Ecuador','Egipto','El Salvador',
            'Emiratos Árabes Unidos','Eritrea','Eslovaquia','Eslovenia',
            'España','Estados Unidos','Estonia',
            'Etiopía','Filipinas','Finlandia','Fiyi','Francia','Gabón','Gambia','Georgia','Ghana','Gibraltar',
            'Granada','Grecia','Groenlandia','Guadalupe','Guam','Guatemala','Guayana Francesa',
            'Guernsey','Guinea','Guinea-Bisáu','Guinea Ecuatorial','Guyana','Haití','Honduras',
            'Hong Kong','Hungría','India','Indonesia','Irak','Irán','Irlanda','Isla Bouvet','Isla de Man',
            'Isla de Navidad','Isla Norfolk','Islandia','Islas Caimán','Islas Cocos','Islas Cook',
            'Islas Feroe','Georgia del sur y las islas sandwich del sur','Isla Heard e Islas McDonald',
            'Islas Malvinas','Islas Marianas del Norte','Islas Marshall','Pitcairn','Islas Salomón',
            'Islas Turcas y Caicos','Islas de Ultramar Menores de Estados Unidos','Islas Vírgenes',
            'Israel','Italia','Jamaica','Japón','Jersey','Jordania','Kazajistán','Kenia','Kirguistán',
            'Kiribati','Kuwait','Lao','Lesoto','Letonia','Líbano','Liberia','Libia','Liechtenstein',
            'Lituania','Luxemburgo','Macao','Madagascar','Malasia','Malaui','Maldivas','Malí','Malta',
            'Marruecos','Martinica','Mauricio','Mauritania','Mayotte','México','Micronesia','Moldavia',
            'Mónaco','Mongolia','Montenegro','Montserrat','Mozambique','Namibia','Nauru','Nepal',
            'Nicaragua','Níger','Nigeria','Niue','Noruega','Nueva Caledonia','Nueva Zelanda','Omán',
            'Países Bajos','Pakistán','Palaos','Estado de Palestina','Panamá','Papúa Nueva Guinea',
            'Paraguay','Perú','Polinesia Francesa','Polonia','Portugal','Puerto Rico','Reino Unido',
            'República Centroafricana','República Checa','Macedonia','Congo','República Dominicana',
            'Reunión','Ruanda','Rumania','Rusia','Sahara Occidental','Samoa','Samoa Americana',
            'San Bartolomé','San Cristóbal y Nieves','San Marino','San Martín','San Pedro y Miquelón',
            'San Vicente y las Granadinas','Santa Helena','Santa Lucía','Santo Tomé y Príncipe','Senegal',
            'Serbia','Seychelles','Sierra leona','Singapur','Sint Maarten','Siria','Somalia','Sri Lanka',
            'Suazilandia','Sudáfrica','Sudán','Sudán del Sur','Suecia','Suiza','Surinam',
            'Svalbard y Jan Mayen','Tailandia','Taiwán','Tanzania','Tayikistán',
            'Territorio Británico del Océano Índico','Territorios Australes Franceses',
            'Timor-Leste','Togo','Tokelau','Tonga','Trinidad y Tobago','Túnez',
            'Turkmenistán','Turquía','Tuvalu','Ucrania','Uganda','Uruguay',
            'Uzbekistán','Vanuatu','Venezuela','Vietnam','Wallis y Futuna','Yemen',
            'Yibuti','Zambia','Zimbabue'];

        $data = [
            ['name' => 'Afganistán'], ['name' => 'Albania'],['name' => 'Alemania'], ['name' => 'Andorra'],
            ['name' => 'Angola'], ['name' => 'Anguila'],['name' => 'Antártida'], ['name' => 'Antigua y Barbuda'],
            ['name' => 'Arabia Saudita'], ['name' => 'Argelia'],['name' => 'Argentina'], ['name' => 'Armenia'],
            ['name' => 'Aruba'], ['name' => 'Australia'],['name' => 'Azerbaiyán'], ['name' => 'Bahamas'],
            ['name' => 'Bangladés'], ['name' => 'Barbados'],['name' => 'Baréin'], ['name' => 'Bélgica'],
            ['name' => 'Belice'], ['name' => 'Benín'],['name' => 'Bermudas'], ['name' => 'Bielorrusia'],
            ['name' => 'Myanmar'], ['name' => 'Bolivia'],['name' => 'Bosnia y Herzegovina'], ['name' => 'Botsuana'],
            ['name' => 'Brasil'], ['name' => 'Brunéi Darussalam'],['name' => 'Bulgaria'], ['name' => 'Burkina Faso'],
            ['name' => 'Burundi'], ['name' => 'Bután'],['name' => 'Cabo Verde'], ['name' => 'Camboya'],
            ['name' => 'Camerún'], ['name' => 'Canadá'],['name' => 'Catar'], ['name' => 'Bonaire'],
            ['name' => 'Chad'], ['name' => 'Chile'],['name' => 'China'], ['name' => 'Chipre'],
            ['name' => 'Colombia'], ['name' => 'Comoras'],['name' => 'Corea del sur'], ['name' => 'Costa de Marfil'],
            ['name' => 'Costa Rica'], ['name' => 'Croacia'],['name' => 'Cuba'], ['name' => 'Curaçao'],
            ['name' => 'Dinamarca'], ['name' => 'Dominica'],['name' => 'Ecuador'], ['name' => 'Egipto'],
            ['name' => 'El Salvador'], ['name' => 'Emiratos Árabes Unidos'],['name' => 'Eritrea'], ['name' => 'Eslovaquia'],
            ['name' => 'Eslovenia'], ['name' => 'España'],['name' => 'Estados Unidos'], ['name' => 'Estonia'],
            ['name' => 'Etiopía'], ['name' => 'Filipinas'],['name' => 'Finlandia'], ['name' => 'Fiyi'],
            ['name' => 'Francia'], ['name' => 'Gabón'],['name' => 'Gambia'], ['name' => 'Georgia'],
            ['name' => 'Ghana'], ['name' => 'Gibraltar'],['name' => 'Granada'], ['name' => 'Grecia'],
            ['name' => 'Groenlandia'], ['name' => 'Guadalupe'],['name' => 'Guam'], ['name' => 'Guatemala'],
            ['name' => 'Guayana Francesa'], ['name' => 'Guernsey'],['name' => 'Guinea'], ['name' => 'Guinea-Bisáu'],
            ['name' => 'Guinea Ecuatorial'], ['name' => 'Guyana'],['name' => 'Haití'], ['name' => 'Honduras'],
            ['name' => 'Hong Kong'], ['name' => 'Hungría'],['name' => 'India'], ['name' => 'Indonesia'],
            ['name' => 'Irak'], ['name' => 'Irán'],['name' => 'Irlanda'], ['name' => 'Isla Bouvet'],
            ['name' => 'Isla de Man'], ['name' => 'Isla de Navidad'],['name' => 'Isla Norfolk'], ['name' => 'Islandia'],
            ['name' => 'Islas Caimán'], ['name' => 'Islas Cocos'],['name' => 'Islas Cook'], ['name' => 'Islas Feroe'],
            ['name' => 'Georgia del sur y las islas sandwich del sur'], ['name' => 'Isla Heard e Islas McDonald'],['name' => 'Islas Malvinas'], ['name' => 'Islas Marianas del Norte'],
            ['name' => 'Islas Marshall'], ['name' => 'Pitcairn'],['name' => 'Islas Salomón'], ['name' => 'Islas Turcas y Caicos'],
            ['name' => 'Islas de Ultramar Menores de Estados Unidos'], ['name' => 'Islas Vírgenes'],['name' => 'Israel'], ['name' => 'Italia'],
            ['name' => 'Jamaica'], ['name' => 'Japón'],['name' => 'Jersey'], ['name' => 'Jordania'],
            ['name' => 'Kazajistán'], ['name' => 'Kenia'],['name' => 'Kirguistán'], ['name' => 'Kiribati'],
            ['name' => 'Kuwait'], ['name' => 'Lao'],['name' => 'Lesoto'], ['name' => 'Letonia'],
            ['name' => 'Líbano'], ['name' => 'Liberia'],['name' => 'Libia'], ['name' => 'Liechtenstein'],
            ['name' => 'Lituania'], ['name' => 'Luxemburgo'],['name' => 'Macao'], ['name' => 'Madagascar'],
            ['name' => 'Malasia'], ['name' => 'Malaui'],['name' => 'Maldivas'], ['name' => 'Malí'],
            ['name' => 'Malta'], ['name' => 'Marruecos'],['name' => 'Martinica'], ['name' => 'Mauricio'],
            ['name' => 'Mauritania'], ['name' => 'Mayotte'],['name' => 'México'], ['name' => 'Micronesia'],
            ['name' => 'Moldavia'], ['name' => 'Mónaco'],['name' => 'Mongolia'], ['name' => 'Montenegro'],
            ['name' => 'Montserrat'], ['name' => 'Mozambique'],['name' => 'Namibia'], ['name' => 'Nauru'],
            ['name' => 'Nepal'], ['name' => 'Nicaragua'],['name' => 'Níger'], ['name' => 'Nigeria'],
            ['name' => 'Niue'], ['name' => 'Noruega'],['name' => 'Nueva Caledonia'], ['name' => 'Nueva Zelanda'],
            ['name' => 'Omán'], ['name' => 'Países Bajos'],['name' => 'Pakistán'], ['name' => 'Estado de Palestina'],
            ['name' => 'Palaos'], ['name' => 'Panamá'],['name' => 'Papúa Nueva Guinea'], ['name' => 'Paraguay'],
            ['name' => 'Perú'], ['name' => 'Polinesia Francesa'],['name' => 'Polonia'], ['name' => 'Portugal'],
            ['name' => 'Puerto Rico'], ['name' => 'Reino Unido'],['name' => 'República Centroafricana'], ['name' => 'República Checa'],
            ['name' => 'Macedonia'], ['name' => 'Congo'],['name' => 'República Dominicana'], ['name' => 'Reunión'],
            ['name' => 'Ruanda'], ['name' => 'Rumania'],['name' => 'Rusia'], ['name' => 'Sahara Occidental'],
            ['name' => 'Samoa'], ['name' => 'Samoa Americana'],['name' => 'San Bartolomé'], ['name' => 'San Cristóbal y Nieves'],
            ['name' => 'San Marino'], ['name' => 'San Martín'],['name' => 'San Pedro y Miquelón'], ['name' => 'San Vicente y las Granadinas'],
            ['name' => 'Santa Helena'], ['name' => 'Santa Lucía'],['name' => 'Santo Tomé y Príncipe'], ['name' => 'Senegal'],
            ['name' => 'Serbia'], ['name' => 'Seychelles'],['name' => 'Sierra leona'], ['name' => 'Singapur'],
            ['name' => 'Sint Maarten'], ['name' => 'Siria'],['name' => 'Somalia'], ['name' => 'Sri Lanka'],
            ['name' => 'Suazilandia'], ['name' => 'Sudáfrica'],['name' => 'Sudán'], ['name' => 'Sudán del Sur'],
            ['name' => 'Suecia'], ['name' => 'Suiza'],['name' => 'Surinam'], ['name' => 'Svalbard y Jan Mayen'],
            ['name' => 'Tailandia'], ['name' => 'Taiwán'],['name' => 'Tanzania'], ['name' => 'Tayikistán'],
            ['name' => 'Territorio Británico del Océano Índico'], ['name' => 'Territorios Australes Franceses'],
            ['name' => 'Timor-Leste'], ['name' => 'Togo'],
            ['name' => 'Tokelau'], ['name' => 'Tonga'],['name' => 'Trinidad y Tobago'], ['name' => 'Túnez'],
            ['name' => 'Turkmenistán'], ['name' => 'Turquía'],['name' => 'Tuvalu'], ['name' => 'Ucrania'],
            ['name' => 'Uganda'], ['name' => 'Uruguay'],['name' => 'Uzbekistán'], ['name' => 'Vanuatu'],
            ['name' => 'Venezuela'], ['name' => 'Vietnam'],['name' => 'Wallis y Futuna'], ['name' => 'Yemen'],
            ['name' => 'Yibuti'], ['name' => 'Zambia'],['name' => 'Zimbabue'],
            ];

        //$data = [['name'=>"Test"]];

        Country::insert($data);
    }
}










