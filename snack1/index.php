<!-- 
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 
 -->

<?php 

$westernFirstRound = [
    [        
        [
            'homeTeam'  =>  'Utah Jazz',
            'score'     =>  112
        ],
        [
            'visitingTeam'  =>  'Memphis Grizzlies',
            'score'         =>  109
        ]
    ],
    [        
        [
            'homeTeam'  =>  'Los Angeles Lakers',
            'score'     =>  90
        ],
        [
            'visitingTeam'  =>  'Phoenix Suns',
            'score'         =>  99
        ]
        ],
    [        
        [
            'homeTeam'  =>  'Denver Nuggets',
            'score'     =>  109
        ],
        [
            'visitingTeam'  =>  'Portland Trail Blazers',
            'score'         =>  123
        ]
    ],
    [        
        [
            'homeTeam'  =>  'Dallas Mavericks',
            'score'     =>  113
        ],
        [
            'visitingTeam'  =>  'LA Clippers',
            'score'         =>  103
        ]
    ],
];

$j = count($westernFirstRound);

for ($i = 0; $i < $j; $i++) {

    $homeTeam = $westernFirstRound[$i][0]["homeTeam"];
    $homeScore = $westernFirstRound[$i][0]["score"];
    $visitingTeam = $westernFirstRound[$i][1]["visitingTeam"];
    $visitingScore = $westernFirstRound[$i][1]["score"];

    echo nl2br ($homeTeam . ' - ' . $visitingTeam . ' | ' . $homeScore . '-' . $visitingScore . "\n");
}

?>