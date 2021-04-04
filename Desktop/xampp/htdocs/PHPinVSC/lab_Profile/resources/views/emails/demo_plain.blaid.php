Hello {{ $demo->receiver }},
This is a demo email for lab work. Also, it is the HTML version

Demo object values


    Demo one: {{ $demo->demo_one }}
    Demo two: {{ $demo->demo_two }}


Values passed by with method:

testVarOne: {{ $testVarOne }}
testVarTwo: {{ $testVarTwo }}


Thank You,
{{ $demo->sender }}