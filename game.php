<?php
    $urlImages = 'http://localhost:8080/baseball/images/';

    echo json_encode(array(
        'status' => 0,
        'game' => array(
            'id' => 1,
            'teams' => array(
                'visitor' => array(
                    'id' => 'LAD',
                    'name' => 'Los Angeles Dodgers',
                    'logo' => $urlImages.'teams/dodgers.png',
                    'lineup' => [
                        array(
                            'order' => 1,
                            'player' => array(
                                'number' => 15,
                                'name' => 'Austin Barnes',
                                'photo' => $urlImages.'players/abarnes.jpg',
                                'bio' => array(
                                    'age' => 25,
                                    'height' => '5-10',
                                    'weight' => '197 lbs'
                                ),
                                'position' => array(
                                    'id' => 'C',
                                    'name' => 'Catcher'
                                )
                            )
                        ),
                        array(
                            'order' => 2,
                            'player' => array(
                                'number' => 13,
                                'name' => 'Max Muncy',
                                'photo' => $urlImages.'players/mmuncy.jpg',
                                'bio' => array(
                                    'age' => 29,
                                    'height' => '6-0',
                                    'weight' => '218 lbs'
                                ),
                                'position' => array(
                                    'id' => '1B',
                                    'name' => 'First Base'
                                )
                            )
                        ),
                        array(
                            'order' => 3,
                            'player' => array(
                                'number' => 14,
                                'name' => 'Kiké Hernández',
                                'photo' => $urlImages.'players/khernandez.jpg',
                                'bio' => array(
                                    'age' => 28,
                                    'height' => '5-11',
                                    'weight' => '192 lbs'
                                ),
                                'position' => array(
                                    'id' => '2B',
                                    'name' => 'Second Base'
                                )
                            )
                        ),
                        array(
                            'order' => 4,
                            'player' => array(
                                'number' => 10,
                                'name' => 'Justin Turner',
                                'photo' => $urlImages.'players/jturner.jpg',
                                'bio' => array(
                                    'age' => 35,
                                    'height' => '5-10',
                                    'weight' => '202 lbs'
                                ),
                                'position' => array(
                                    'id' => '3B',
                                    'name' => 'Third Base'
                                )
                            )
                        ),
                        array(
                            'order' => 5,
                            'player' => array(
                                'number' => 5,
                                'name' => 'Corey Seager',
                                'photo' => $urlImages.'players/cseager.jpg',
                                'bio' => array(
                                    'age' => 27,
                                    'height' => '6-4',
                                    'weight' => '215 lbs'
                                ),
                                'position' => array(
                                    'id' => 'SS',
                                    'name' => 'ShortStop'
                                )
                            )
                        ),
                        array(
                            'order' => 6,
                            'player' => array(
                                'number' => 31,
                                'name' => 'Joc Pederson',
                                'photo' => $urlImages.'players/jpederson.jpg',
                                'bio' => array(
                                    'age' => 27,
                                    'height' => '6-1',
                                    'weight' => '220 lbs'
                                ),
                                'position' => array(
                                    'id' => 'LF',
                                    'name' => 'Left Field'
                                )
                            )
                        ),
                        array(
                            'order' => 7,
                            'player' => array(
                                'number' => 11,
                                'name' => 'A.J. Pollock',
                                'photo' => $urlImages.'players/apollock.jpg',
                                'bio' => array(
                                    'age' => 32,
                                    'height' => '6-1',
                                    'weight' => '212 lbs'
                                ),
                                'position' => array(
                                    'id' => 'CF',
                                    'name' => 'Center Field'
                                )
                            )
                        ),
                        array(
                            'order' => 8,
                            'player' => array(
                                'number' => 35,
                                'name' => 'Cody Bellinger',
                                'photo' => $urlImages.'players/cbellinger.jpg',
                                'bio' => array(
                                    'age' => 24,
                                    'height' => '6-4',
                                    'weight' => '203 lbs'
                                ),
                                'position' => array(
                                    'id' => 'RF',
                                    'name' => 'Right Field'
                                )
                            )
                        ),
                        array(
                            'order' => 9,
                            'player' => array(
                                'number' => 22,
                                'name' => 'Clayton Kershaw',
                                'photo' => $urlImages.'players/ckershaw.jpg',
                                'bio' => array(
                                    'age' => 32,
                                    'height' => '6-4',
                                    'weight' => '226 lbs'
                                ),
                                'position' => array(
                                    'id' => 'P',
                                    'name' => 'Pitcher'
                                )
                            )
                        )
                    ]
                ),
                'home' => array(
                    'id' => 'SD',
                    'name' => 'San Diego Padres',
                    'logo' => $urlImages.'teams/padres.jpg',
                    'lineup' => [
                        array(
                            'order' => 1,
                            'player' => array(
                                'number' => 18,
                                'name' => 'Austin Hedges',
                                'photo' => $urlImages.'players/ahedges.jpg',
                                'bio' => array(
                                    'age' => 27,
                                    'height' => '6-1',
                                    'weight' => '206 lbs'
                                ),
                                'position' => array(
                                    'id' => 'C',
                                    'name' => 'Catcher'
                                )
                            )
                        ),
                        array(
                            'order' => 2,
                            'player' => array(
                                'number' => 30,
                                'name' => 'Eric Hosmer',
                                'photo' => $urlImages.'players/ehosmer.jpg',
                                'bio' => array(
                                    'age' => 30,
                                    'height' => '6-4',
                                    'weight' => '225 lbs'
                                ),
                                'position' => array(
                                    'id' => '1B',
                                    'name' => 'First Base'
                                )
                            )
                        ),
                        array(
                            'order' => 3,
                            'player' => array(
                                'number' => 5,
                                'name' => 'Greg Garcia',
                                'photo' => $urlImages.'players/ggarcia.jpg',
                                'bio' => array(
                                    'age' => 30,
                                    'height' => '6-0',
                                    'weight' => '190 lbs'
                                ),
                                'position' => array(
                                    'id' => '2B',
                                    'name' => 'Second Base'
                                )
                            )
                        ),
                        array(
                            'order' => 4,
                            'player' => array(
                                'number' => 13,
                                'name' => 'Manny Machado',
                                'photo' => $urlImages.'players/mmachado.jpg',
                                'bio' => array(
                                    'age' => 27,
                                    'height' => '6-3',
                                    'weight' => '215 lbs'
                                ),
                                'position' => array(
                                    'id' => '3B',
                                    'name' => 'Third Base'
                                )
                            )
                        ),
                        array(
                            'order' => 5,
                            'player' => array(
                                'number' => 23,
                                'name' => 'Fernando tasis Jr.',
                                'photo' => $urlImages.'players/ftatis.jpg',
                                'bio' => array(
                                    'age' => 21,
                                    'height' => '6-3',
                                    'weight' => '185 lbs'
                                ),
                                'position' => array(
                                    'id' => 'SS',
                                    'name' => 'ShortStop'
                                )
                            )
                        ),
                        array(
                            'order' => 6,
                            'player' => array(
                                'number' => 4,
                                'name' => 'Wil Myers',
                                'photo' => $urlImages.'players/wmyers.jpg',
                                'bio' => array(
                                    'age' => 29,
                                    'height' => '6-3',
                                    'weight' => '205 lbs'
                                ),
                                'position' => array(
                                    'id' => 'LF',
                                    'name' => 'Left Field'
                                )
                            )
                        ),
                        array(
                            'order' => 7,
                            'player' => array(
                                'number' => 22,
                                'name' => 'Josh Naylor',
                                'photo' => $urlImages.'players/jnaylor.jpg',
                                'bio' => array(
                                    'age' => 22,
                                    'height' => '5-11',
                                    'weight' => '250 lbs'
                                ),
                                'position' => array(
                                    'id' => 'CF',
                                    'name' => 'Center Field'
                                )
                            )
                        ),
                        array(
                            'order' => 8,
                            'player' => array(
                                'number' => 33,
                                'name' => 'Franchy Cordero',
                                'photo' => $urlImages.'players/fcordero.jpg',
                                'bio' => array(
                                    'age' => 25,
                                    'height' => '6-3',
                                    'weight' => '175 lbs'
                                ),
                                'position' => array(
                                    'id' => 'RF',
                                    'name' => 'Right Field'
                                )
                            )
                        ),
                        array(
                            'order' => 9,
                            'player' => array(
                                'number' => 59,
                                'name' => 'Chris Paddack',
                                'photo' => $urlImages.'players/cpaddack.jpg',
                                'bio' => array(
                                    'age' => 24,
                                    'height' => '6-4',
                                    'weight' => '195 lbs'
                                ),
                                'position' => array(
                                    'id' => 'P',
                                    'name' => 'Pitcher'
                                )
                            )
                        )
                    ]
                )
                ),
                'stadium' => array(
                    'id' => 'PCP',
                    'name' => 'Petco Park'
                )
        )
    ));
?>
