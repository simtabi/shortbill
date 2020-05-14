<?php

// Sources
// https://www.safaricom.co.ke/images/Downloads/Mobile_Banking_Codes_Paybill.pdf
// https://www.mpesacharges.com/safaricom-mpesa-bank-paybill-numbers-bank-to-m-pesa-ussd/
return [
    'ke' => [
        'mbanking'=> [

            'kenya_commercial_bank' => [
                'name' => [
                    'short' => "KCB",
                    'long'  => "Kenya Commercial Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*522#",
                        'code' => ["522522"],
                    ],
                ],
            ],

            'commercial_bank_of_africa' => [
                'name' => [
                    'short' => "CBA",
                    'long'  => "Commercial Bank of Africa",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*654#",
                        'code' => ["880100"],
                    ],
                ],
            ],

            'cooperative_bank' => [
                'name' => [
                    'short' => "Co-oP Bank",
                    'long'  => "Co-operative Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*667#",
                        'code' => ["400200"],
                    ]
                ],
            ],

            'standard_chartered_bank' => [
                'name' => [
                    'short' => "SCB",
                    'long'  => "Standard Chartered Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*722#",
                        'code' => ["329329"],
                    ]
                ],
            ],

            'barclays_bank' => [
                'name' => [
                    'short' => "BBK",
                    'long'  => "Barclays Bank K LTD",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*224#",
                        'code' => ["303030"],
                    ]
                ],
            ],

            'nic_bank' => [
                'name' => [
                    'short' => "NIC",
                    'long'  => "NIC Bank Limited",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => true,
                        'ussd' => "*488#",
                        'code' => ["488488"],
                    ]
                ],
            ],

            'family_bank' => [
                'name' => [
                    'short' => "FB",
                    'long'  => "Family Bank Ltd",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*325#",
                        'code' => ["222111"],
                    ]
                ],
            ],

            'cfc_stanbic' => [
                'name' => [
                    'short' => "CFC",
                    'long'  => "CFC Stanbic",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*208#",
                        'code' => ["600100"],
                    ]
                ],
            ],

            'equity_bank' => [
                'name' => [
                    'short' => "EB",
                    'long'  => "Equity Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*247#",
                        'code' => ["247247"],
                    ]
                ],
            ],

            'national_bank' => [
                'name' => [
                    'short' => "NB",
                    'long'  => "National Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*625#",
                        'code' => ["547700", "625625"],
                    ]
                ],
            ],

            'chase_bank' => [
                'name' => [
                    'short' => "CB",
                    'long'  => "Chase Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*275#",
                        'code' => ["552800"],
                    ]
                ],
            ],

            'im_bank' => [
                'name' => [
                    'short' => "I&M Bank",
                    'long'  => "I&M Bank Limited",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*458#",
                        'code' => ["542542"],
                    ]
                ],
            ],

            'diamond_trust_bank' => [
                'name' => [
                    'short' => "DTB",
                    'long'  => "Diamond Trust Bank (DTB)",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*385#",
                        'code' => ["516600"],
                    ]
                ],
            ],

            'ecobank' => [
                'name' => [
                    'short' => "Ecobank",
                    'long'  => "Ecobank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*335#",
                        'code' => ["700201"],
                    ]
                ],
            ],

            'jamii_bora_bank' => [
                'name' => [
                    'short' => "JBK",
                    'long'  => "Jamii Bora Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*344#",
                        'code' => ["529901"],
                    ]
                ],
            ],

            'imperial_bank' => [
                'name' => [
                    'short' => "IBL",
                    'long'  => "IMPERIAL BANK LTD",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*356#",
                        'code' => ["800100"],
                    ]
                ],
            ],

            'abc_bank' => [
                'name' => [
                    'short' => "ABC Bank",
                    'long'  => "ABC Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => true,
                        'ussd' => null,
                        'code' => ["111777"],
                    ]
                ],
            ],

            'credit_bank' => [
                'name' => [
                    'short' => "Credit Bank",
                    'long'  => "Credit Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*699#",
                        'code' => ["972700"],
                    ]
                ],
            ],

            'consolidated_bank' => [
                'name' => [
                    'short' => " Consolidated Bank",
                    'long'  => " Consolidated Bank LTD",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*262#",
                        'code' => ["508400"],
                    ]
                ],
            ],

            'equatorial_commercial_bank' => [
                'name' => [
                    'short' => "Equatorial Commercial Bank",
                    'long'  => "Equatorial Commercial Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*286#",
                        'code' => ["498100"],
                    ]
                ],
            ],

            'k_rep_bank' => [
                'name' => [
                    'short' => "K-REP BANK",
                    'long'  => "K-REP BANK",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*527#",
                        'code' => ["111999"],
                    ]
                ],
            ],

            'transnational_bank' => [
                'name' => [
                    'short' => "Transnational Bank",
                    'long'  => "Transnational Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*862#",
                        'code' => ["862862"],
                    ]
                ],
            ],

            'post_office_savings_bank' => [
                'name' => [
                    'short' => "Post Office Savings Bank",
                    'long'  => "Post Office Savings Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*498#",
                        'code' => ["200999"],
                    ]
                ],
            ],

            'gulf_african_bank' => [
                'name' => [
                    'short' => "Gulf African Bank",
                    'long'  => "Gulf African Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*399#",
                        'code' => ["985050"],
                    ]
                ],
            ],

            'housing_finance_bank' => [
                'name' => [
                    'short' => "HFC",
                    'long'  => "Housing Finance Company Ltd",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*231#",
                        'code' => ["100400"],
                    ]
                ],
            ],

            'bank_of_africa' => [
                'name' => [
                    'short' => "BoA",
                    'long'  => "Bank of Africa",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*987#",
                        'code' => ["972900"],
                    ]
                ],
            ],

            'uba_bank' => [
                'name' => [
                    'short' => "UBA Bank",
                    'long'  => "UBA Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*368#",
                        'code' => ["559900"],
                    ]
                ],
            ],

            'guardian_bank' => [
                'name' => [
                    'short' => "GB",
                    'long'  => "Guardian Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*356#",
                        'code' => ["344501"],
                    ]
                ],
            ],

            'prime_bank' => [
                'name' => [
                    'short' => "PB",
                    'long'  => "Prime Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => true,
                        'ussd' => null,
                        'code' => ["982800"],
                    ]
                ],
            ],

            'guaranty_trust_bank' => [
                'name' => [
                    'short' => "GTB",
                    'long'  => "Guaranty Trust Bank",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => true,
                        'ussd' => null,
                        'code' => ["910200"],
                    ]
                ],
            ],

            'kwftdtm' => [
                'name' => [
                    'short' => "KWFTDTM",
                    'long'  => "Kenya Women Finance Trust DTM",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*378#",
                        'code' => ["101200"],
                    ]
                ],
            ],

            'smepdtm' => [
                'name' => [
                    'short' => "SMEP DTM",
                    'long'  => "SMEP DTM",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*741#",
                        'code' => ["777001"],
                    ]
                ],
            ],

            'musoni' => [
                'name' => [
                    'short' => "Musoni",
                    'long'  => "Musoni",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*279#",
                        'code' => ["514000"],
                    ]
                ],
            ],

            'vision_fund_kenya' => [
                'name' => [
                    'short' => "Vision Fund Kenya",
                    'long'  => "Vision Fund Kenya",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*985#",
                        'code' => ["200555", "549900"],
                    ]
                ],
            ],

            'rafiki_dtm' => [
                'name' => [
                    'short' => "Rafiki DTM",
                    'long'  => "Rafiki DTM",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*366#",
                        'code' => ["802200"],
                    ]
                ],
            ],

            'faulu_dtm' => [
                'name' => [
                    'short' => "Faulu DTM",
                    'long'  => "Faulu DTM",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*339#",
                        'code' => ["328585"],
                    ]
                ],
            ],

            'fisrt_community_bank' => [
                'name' => [
                    'short' => "FCB",
                    'long'  => "First Community Bank Ltd",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => "*342#",
                        'code' => ["919700"],
                    ]
                ],
            ],

            'citi_bank' => [
                'name' => [
                    'short' => "Citi Bank",
                    'long'  => "Citi Bank N.A",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => null,
                        'code' => ["100229"],
                    ]
                ],
            ],

            'uwezo_dtm' => [
                'name' => [
                    'short' => "Uwezo DTM",
                    'long'  => "Uwezo DTM",
                ],
                'info' => [
                    'mpesa' => [
                        'app'  => false,
                        'ussd' => null,
                        'code' => ["504600"],
                    ]
                ],
            ],
        ]
    ]
];