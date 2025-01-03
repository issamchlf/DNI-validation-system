<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DniController extends Controller
{
    public function calculateLetter(Request $request)
    {
        // take the request
        $dni = $request->input('dni');

        // check if the number from 0 to 99999999 is corect
        if (!is_numeric($dni) || $dni < 0 || $dni > 99999999) {
            return response()->json(['error' => 'The entered number is invalid. Please enter a number between 0 and 99999999.'], 400);

        }

        // The letters related with the remainder of the division (/) (from 0 to 22)
        $letters = [
            "T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"
        ];

        // calcul the division
        $remainder = $dni % 23; // division number / 23
        $letter = $letters[$remainder]; // the result = check what the number match from the letters whish is from 0 -> 22

        return response()->json(['dni' => $dni, 'letter' => $letter]);
    }
}
