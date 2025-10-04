<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use Route;
use Settings;
use App\Models\User\User;
use App\Models\Character\Character;
use App\Models\Currency\Currency;
use App\Models\Currency\CurrencyLog;
use App\Models\User\UserCurrency;
use App\Models\Character\CharacterCurrency;
use App\Models\Character\CharacterTransfer;

use App\Services\CurrencyManager;
use App\Services\CharacterManager;

use App\Http\Controllers\Controller;

class EncounterController extends Controller
{

public function index()
    {
        return view('encounter.index');
    }


    public function generate()
    {
        $eyes = ["regular eye", "no pupil eye"];
        $antennae = ["floppy antennae", "centipede antennae", "long antennae", "ant antennae"];
        $ears = ["wolf ears", "no ears"];
        $carapace = ["shiny membrane", "plated membrane", "smooth membrane"];
        $body = ["short tail", "long tail"];
        $pattern = ["dot pattern", "stripes pattern", "calico pattern"];
        $misc = ["facial hair", "thick eyebrows", "no misc traits"];
        
        $picked = [
            $eyes[array_rand($eyes)],
            $antennae[array_rand($antennae)],
            $ears[array_rand($ears)],
            $carapace[array_rand($carapace)],
            $body[array_rand($body)],
            $pattern[array_rand($pattern)],
            $misc[array_rand($misc)]
        ];
        
        $traits = [];
        foreach ($picked as $trait) {
            $traits[] = "- $trait";
        }

        $mutation = ["extra eye", "crest", "nothing", "nothing", "nothing", "split tail"];

        $taken = [
            $mutation[array_rand($mutation)]
        ];

        $mutations = [];
        foreach ($taken as $mutation) {
            $mutations[] = "- $mutation";
        }
        
        return view('encounter.encounter', [
        'traits' => $picked,
        'mutations' => $taken,
        'primary_color' => $this->primary_hex(),
        'secondary_color' => $this->primary_hex(),
        'membrane_color' => $this->primary_hex(),
        ]);
    }
    
    private function primary_hex() {
        return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
    }


}