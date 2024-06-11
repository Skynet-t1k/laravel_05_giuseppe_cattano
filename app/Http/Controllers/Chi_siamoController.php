<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chi_siamoController extends Controller
{

    public $vampiri = [
        [
            'id' => 1,
            'nome' => 'Edwardo Cullino',
            'incarico' => 'Responsabile della sicurezza notturna',
            'descrizione' => 'Edwardo è incaricato di assicurare che il lido sia sicuro durante le ore notturne, utilizzando i suoi sensi acuti per vigilare sull\'intera area.'
        ],
        [
            'id' => 2,
            'nome' => 'Bellissima Cullino',
            'incarico' => 'Direttrice delle attività e degli eventi',
            'descrizione' => 'Bellissima organizza tutti gli eventi e le attività ricreative del lido, assicurandosi che ogni ospite si diverta e partecipi alle numerose iniziative estive.'
        ],
        [
            'id' => 3,
            'nome' => 'Jasperino Cullino',
            'incarico' => 'Bagnino capo',
            'descrizione' => 'Jasperino supervisiona la sicurezza dei bagnanti, gestendo il team dei bagnini e assicurandosi che tutti rispettino le regole di sicurezza in acqua.'
        ],
        [
            'id' => 4,
            'nome' => 'Alicea Cullino',
            'incarico' => 'Coordinatrice del bar e dei ristoranti',
            'descrizione' => 'Alicea si occupa della gestione dei bar e dei ristoranti del lido, assicurando che il servizio sia eccellente e che le bevande siano sempre fresche e pronte per gli ospiti.'
        ],
        [
            'id' => 5,
            'nome' => 'Jacopo Pulicini',
            'incarico' => 'Addetto al divertimento',
            'descrizione' => 'Jacopo è il responsabile di assicurare che tutti gli ospiti si divertano al massimo, organizzando giochi sulla spiaggia e attività ricreative. È sempre accompagnato dai suoi amici a quattro zampe.'
        ]
    ];


    public function chi_siamo()
    {
        return view('chi_siamo', ['vampiri' => $this->vampiri]);
    }
}
