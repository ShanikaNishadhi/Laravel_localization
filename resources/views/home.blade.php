@extends('layout')
@section('content')
    <div class="container">
        <h1 class="display-4 text-center" style="font-size: 3.0rem">{{ __('lang.welcome', ['Name' => 'Toni'])}}</h1>
        <h3 class="display-4 text-center" style="font-size: 2.0rem">{{ __('lang.title') }}</h3>
        <h4 class="display-4 text-center" style="font-size: 1.5rem">{{ __("Let's learn Laravel Localization")}}</h4>
        <br><br>
        <h4 class="display-4 text-center" style="font-size: 1.5rem">{{ __("Pluralization Rules")}}</h4>
        <h5 class="display-4 text-center" style="font-size: 1.0rem"><b>Two options: </b><?php echo trans_choice('lang.languages', 2)?></h6>
        <h5 class="display-4 text-center" style="font-size: 1.0rem"><b>Ranges: </b><?php echo trans_choice('lang.languagesRange', 0)?></h6>
        <h5 class="display-4 text-center" style="font-size: 1.0rem"><b>Count Placeholder: </b><?php echo trans_choice('lang.count', 5)?></h6>
        <h4 class="display-4 text-center" style="font-size: 1.5rem"> Numerical Representations </h4>
        <div class = "display-4 text-center" style="font-size: 1.0rem">
        <?php
        $num = NumberFormatter::create('en_US', NumberFormatter::SPELLOUT); 
        echo  "US: ".$num->format(123123.12);
        echo "<br>";
        echo "<br>";
        $num1 = NumberFormatter::create('de', NumberFormatter::SPELLOUT); 
        echo  "Germany: ".$num1->format(123123.12);
        echo "<br>";
        echo "<br>";
        $num2 = NumberFormatter::create('fr', NumberFormatter::DECIMAL); 
        echo "France: ".$num2->format(123123.12);
        echo "<br>";
        echo "<br>";
        $num3 = NumberFormatter::create('de_DE', NumberFormatter::CURRENCY); 
        echo "Germany: ".$num3->format(123123);
        echo "<br>";
        echo "<br>";
 
        ?>
        </div>
    </div>
@endsection
