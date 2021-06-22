<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report - App Zakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/laravel-2752139-2284956.png">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col bg-primary pt-3 pb-4 mx-auto">
            <h2 class="text-center text-white ">Zakat Pahang Data Entry Report</h2>
            <input id="file" type="file" accept=".txt" style="display:none;" />
            <div class="d-grid gap-1 col-1 mx-auto">
                <input type="button" value="Previous Page" class="btn btn-warning " onclick="location.replace('/')" />
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (count($reports) > 0)
                <h2 style="text-align: center" class="text-black-50">Zakat Records Pahang's Report</h2>
                <div style="display: flex; justify-content: flex-end">
                </div>
                <div class="table-responsive mb-5">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td scope="col">Daerah</td>
                                <td scope="col">Bil</td>
                                <td scope="col">Pendapatan</td>
                                <td scope="col">Bil</td>
                                <td scope="col">Perniagaan</td>
                                <td scope="col">Bil</td>
                                <td scope="col">Saham</td>
                                <td scope="col">Bil</td>
                                <td scope="col">Harta</td>
                                <td scope="col">Bil</td>
                                <td scope="col">Wang Simpanan</td>
                                <td scope="col">Bil</td>
                                <td scope="col">Emas</td>
                                <td scope="col">Bil</td>
                                <td scope="col">Perak</td>
                                <td scope="col">Bil</td>
                                <td scope="col">Pertanian</td>
                                <td scope="col">Bil</td>
                                <td scope="col">Ternakan</td>
                                <td scope="col">Bil</td>
                                <td scope="col">Rikaz</td>
                                <td scope="col">Bil</td>
                                <td scope="col">Qadha'</td>
                                <td scope="col">Bil</td>
                                <td scope="col">Jumlah</td>
                            </tr>
                        </thead>
                        <tr>
                            @php
                                $sumBilRow01 = 0;
                                $sumTypeRow01 = 0;
                                $sumBilRow02 = 0;
                                $sumTypeRow02 = 0;
                                $sumBilRow03 = 0;
                                $sumTypeRow03 = 0;
                                $sumBilRow04 = 0;
                                $sumTypeRow04 = 0;
                                $sumBilRow05 = 0;
                                $sumTypeRow05 = 0;
                                $sumBilRow06 = 0;
                                $sumTypeRow06 = 0;
                                $sumBilRow07 = 0;
                                $sumTypeRow07 = 0;
                                $sumBilRow08 = 0;
                                $sumTypeRow08 = 0;
                                $sumBilRow09 = 0;
                                $sumTypeRow09 = 0;
                                $sumBilRow10 = 0;
                                $sumTypeRow10 = 0;
                                $sumBilRow11 = 0;
                                $sumTypeRow11 = 0;
                                $colBilSum1 = 0;
                                $colBilSum2 = 0;
                                $colBilSum3 = 0;
                                $colBilSum4 = 0;
                                $colBilSum5 = 0;
                                $colBilSum6 = 0;
                                $colBilSum7 = 0;
                                $colBilSum8 = 0;
                                $colBilSum9 = 0;
                                $colBilSum10 = 0;
                                $colBilSum11 = 0;
                                $colAmtSum1 = 0;
                                $colAmtSum2 = 0;
                                $colAmtSum3 = 0;
                                $colAmtSum4 = 0;
                                $colAmtSum5 = 0;
                                $colAmtSum6 = 0;
                                $colAmtSum7 = 0;
                                $colAmtSum8 = 0;
                                $colAmtSum9 = 0;
                                $colAmtSum10 = 0;
                                $colAmtSum11 = 0;
                            @endphp
                            <td>KUANTAN</td>
                            @foreach($reports as $report)
                                @if( $report->district_code == 1 && $report->zakat_type <= 11)
                                <td>{{ $report->zakat_count }}</td>
                                <td>{{ $report->deduct_total }}</td>
                                @php
                                    if($report->zakat_type ==1){
                                          $colBilSum1+= $report->zakat_count;
                                          $colAmtSum1+= $report->deduct_total;
                                    } else if ($report->zakat_type ==2){
                                          $colBilSum2+= $report->zakat_count;
                                          $colAmtSum2+= $report->deduct_total;
                                    } else if ($report->zakat_type ==3){
                                          $colBilSum3+= $report->zakat_count;
                                          $colAmtSum3+= $report->deduct_total;
                                    } else if ($report->zakat_type ==4){
                                          $colBilSum4+= $report->zakat_count;
                                          $colAmtSum4+= $report->deduct_total;
                                    } else if ($report->zakat_type ==5){
                                          $colBilSum5+= $report->zakat_count;
                                          $colAmtSum5+= $report->deduct_total;
                                    } else if ($report->zakat_type ==6){
                                          $colBilSum6+= $report->zakat_count;
                                          $colAmtSum6+= $report->deduct_total;
                                    } else if ($report->zakat_type ==7){
                                          $colBilSum7+= $report->zakat_count;
                                          $colAmtSum7+= $report->deduct_total;
                                    } else if ($report->zakat_type ==8){
                                          $colBilSum8+= $report->zakat_count;
                                          $colAmtSum8+= $report->deduct_total;
                                    } else if ($report->zakat_type ==9){
                                          $colBilSum9+= $report->zakat_count;
                                          $colAmtSum9+= $report->deduct_total;
                                    } else if ($report->zakat_type ==10){
                                          $colBilSum10+= $report->zakat_count;
                                          $colAmtSum10+= $report->deduct_total;
                                    } else if ($report->zakat_type ==11){
                                          $colBilSum11+= $report->zakat_count;
                                          $colAmtSum11+= $report->deduct_total;
                                    }
                                        $sumBilRow01+=  $report->zakat_count;
                                        $sumTypeRow01+=  $report->deduct_total;
                                @endphp
                                @endif
                            @endforeach
                            <td>{{ $sumBilRow01 }}</td>
                            <td>{{ $sumTypeRow01 }}</td>
                        <tr>
                        <tr>
                            <td>PEKAN</td>
                            @foreach($reports as $report)
                                @if( $report->district_code == 2 && $report->zakat_type <= 11)
                                    <td>{{ $report->zakat_count }}</td>
                                    <td>{{ $report->deduct_total }}</td>
                                    @php
                                        if($report->zakat_type ==1){
                                              $colBilSum1+= $report->zakat_count;
                                              $colAmtSum1+= $report->deduct_total;
                                        } else if ($report->zakat_type ==2){
                                              $colBilSum2+= $report->zakat_count;
                                              $colAmtSum2+= $report->deduct_total;
                                        } else if ($report->zakat_type ==3){
                                              $colBilSum3+= $report->zakat_count;
                                              $colAmtSum3+= $report->deduct_total;
                                        } else if ($report->zakat_type ==4){
                                              $colBilSum4+= $report->zakat_count;
                                              $colAmtSum4+= $report->deduct_total;
                                        } else if ($report->zakat_type ==5){
                                              $colBilSum5+= $report->zakat_count;
                                              $colAmtSum5+= $report->deduct_total;
                                        } else if ($report->zakat_type ==6){
                                              $colBilSum6+= $report->zakat_count;
                                              $colAmtSum6+= $report->deduct_total;
                                        } else if ($report->zakat_type ==7){
                                              $colBilSum7+= $report->zakat_count;
                                              $colAmtSum7+= $report->deduct_total;
                                        } else if ($report->zakat_type ==8){
                                              $colBilSum8+= $report->zakat_count;
                                              $colAmtSum8+= $report->deduct_total;
                                        } else if ($report->zakat_type ==9){
                                              $colBilSum9+= $report->zakat_count;
                                              $colAmtSum9+= $report->deduct_total;
                                        } else if ($report->zakat_type ==10){
                                              $colBilSum10+= $report->zakat_count;
                                              $colAmtSum10+= $report->deduct_total;
                                        } else if ($report->zakat_type ==11){
                                              $colBilSum11+= $report->zakat_count;
                                              $colAmtSum11+= $report->deduct_total;
                                        }
                                             $sumBilRow02+=  $report->zakat_count;
                                             $sumTypeRow02+=  $report->deduct_total;
                                    @endphp
                                @endif
                            @endforeach
                            <td>{{ $sumBilRow02 }}</td>
                            <td>{{ $sumTypeRow02 }}</td>
                        <tr>
                        <tr>
                            <td>TEMERLOH</td>
                            @foreach($reports as $report)
                                @if( $report->district_code == 3 && $report->zakat_type <= 11)
                                    <td>{{ $report->zakat_count }}</td>
                                    <td>{{ $report->deduct_total }}</td>
                                    @php
                                        if($report->zakat_type ==1){
                                              $colBilSum1+= $report->zakat_count;
                                              $colAmtSum1+= $report->deduct_total;
                                        } else if ($report->zakat_type ==2){
                                              $colBilSum2+= $report->zakat_count;
                                              $colAmtSum2+= $report->deduct_total;
                                        } else if ($report->zakat_type ==3){
                                              $colBilSum3+= $report->zakat_count;
                                              $colAmtSum3+= $report->deduct_total;
                                        } else if ($report->zakat_type ==4){
                                              $colBilSum4+= $report->zakat_count;
                                              $colAmtSum4+= $report->deduct_total;
                                        } else if ($report->zakat_type ==5){
                                              $colBilSum5+= $report->zakat_count;
                                              $colAmtSum5+= $report->deduct_total;
                                        } else if ($report->zakat_type ==6){
                                              $colBilSum6+= $report->zakat_count;
                                              $colAmtSum6+= $report->deduct_total;
                                        } else if ($report->zakat_type ==7){
                                              $colBilSum7+= $report->zakat_count;
                                              $colAmtSum7+= $report->deduct_total;
                                        } else if ($report->zakat_type ==8){
                                              $colBilSum8+= $report->zakat_count;
                                              $colAmtSum8+= $report->deduct_total;
                                        } else if ($report->zakat_type ==9){
                                              $colBilSum9+= $report->zakat_count;
                                              $colAmtSum9+= $report->deduct_total;
                                        } else if ($report->zakat_type ==10){
                                              $colBilSum10+= $report->zakat_count;
                                              $colAmtSum10+= $report->deduct_total;
                                        } else if ($report->zakat_type ==11){
                                              $colBilSum11+= $report->zakat_count;
                                              $colAmtSum11+= $report->deduct_total;
                                        }
                                             $sumBilRow03+=  $report->zakat_count;
                                             $sumTypeRow03+=  $report->deduct_total;
                                    @endphp
                             @endif
                            @endforeach
                            <td>{{ $sumBilRow03 }}</td>
                            <td>{{ $sumTypeRow03 }}</td>
                        <tr>
                        <tr>
                            <td>ROMPIN</td>
                            @foreach($reports as $report)
                                @if( $report->district_code == 4 && $report->zakat_type <= 11)
                                    <td>{{ $report->zakat_count }}</td>
                                    <td>{{ $report->deduct_total }}</td>
                                    @php
                                        if($report->zakat_type ==1){
                                              $colBilSum1+= $report->zakat_count;
                                              $colAmtSum1+= $report->deduct_total;
                                        } else if ($report->zakat_type ==2){
                                              $colBilSum2+= $report->zakat_count;
                                              $colAmtSum2+= $report->deduct_total;
                                        } else if ($report->zakat_type ==3){
                                              $colBilSum3+= $report->zakat_count;
                                              $colAmtSum3+= $report->deduct_total;
                                        } else if ($report->zakat_type ==4){
                                              $colBilSum4+= $report->zakat_count;
                                              $colAmtSum4+= $report->deduct_total;
                                        } else if ($report->zakat_type ==5){
                                              $colBilSum5+= $report->zakat_count;
                                              $colAmtSum5+= $report->deduct_total;
                                        } else if ($report->zakat_type ==6){
                                              $colBilSum6+= $report->zakat_count;
                                              $colAmtSum6+= $report->deduct_total;
                                        } else if ($report->zakat_type ==7){
                                              $colBilSum7+= $report->zakat_count;
                                              $colAmtSum7+= $report->deduct_total;
                                        } else if ($report->zakat_type ==8){
                                              $colBilSum8+= $report->zakat_count;
                                              $colAmtSum8+= $report->deduct_total;
                                        } else if ($report->zakat_type ==9){
                                              $colBilSum9+= $report->zakat_count;
                                              $colAmtSum9+= $report->deduct_total;
                                        } else if ($report->zakat_type ==10){
                                              $colBilSum10+= $report->zakat_count;
                                              $colAmtSum10+= $report->deduct_total;
                                        } else if ($report->zakat_type ==11){
                                              $colBilSum11+= $report->zakat_count;
                                              $colAmtSum11+= $report->deduct_total;
                                        }
                                            $sumBilRow04+=  $report->zakat_count;
                                            $sumTypeRow04+=  $report->deduct_total;
                                    @endphp
                                @endif
                            @endforeach
                            <td>{{ $sumBilRow04 }}</td>
                            <td>{{ $sumTypeRow04 }}</td>
                        <tr>
                        <tr>
                            <td>MARAN</td>
                            @foreach($reports as $report)
                                @if( $report->district_code == 5 && $report->zakat_type <= 11)
                                    <td>{{ $report->zakat_count }}</td>
                                    <td>{{ $report->deduct_total }}</td>
                                    @php
                                        if($report->zakat_type ==1){
                                              $colBilSum1+= $report->zakat_count;
                                              $colAmtSum1+= $report->deduct_total;
                                        } else if ($report->zakat_type ==2){
                                              $colBilSum2+= $report->zakat_count;
                                              $colAmtSum2+= $report->deduct_total;
                                        } else if ($report->zakat_type ==3){
                                              $colBilSum3+= $report->zakat_count;
                                              $colAmtSum3+= $report->deduct_total;
                                        } else if ($report->zakat_type ==4){
                                              $colBilSum4+= $report->zakat_count;
                                              $colAmtSum4+= $report->deduct_total;
                                        } else if ($report->zakat_type ==5){
                                              $colBilSum5+= $report->zakat_count;
                                              $colAmtSum5+= $report->deduct_total;
                                        } else if ($report->zakat_type ==6){
                                              $colBilSum6+= $report->zakat_count;
                                              $colAmtSum6+= $report->deduct_total;
                                        } else if ($report->zakat_type ==7){
                                              $colBilSum7+= $report->zakat_count;
                                              $colAmtSum7+= $report->deduct_total;
                                        } else if ($report->zakat_type ==8){
                                              $colBilSum8+= $report->zakat_count;
                                              $colAmtSum8+= $report->deduct_total;
                                        } else if ($report->zakat_type ==9){
                                              $colBilSum9+= $report->zakat_count;
                                              $colAmtSum9+= $report->deduct_total;
                                        } else if ($report->zakat_type ==10){
                                              $colBilSum10+= $report->zakat_count;
                                              $colAmtSum10+= $report->deduct_total;
                                        } else if ($report->zakat_type ==11){
                                              $colBilSum11+= $report->zakat_count;
                                              $colAmtSum11+= $report->deduct_total;
                                        }
                                              $sumBilRow05+=  $report->zakat_count;
                                              $sumTypeRow05+=  $report->deduct_total;
                                    @endphp
                                @endif
                                @endforeach
                            <td>{{ $sumBilRow05 }}</td>
                            <td>{{ $sumTypeRow05 }}</td>
                        <tr>
                        <tr>
                            <td>BENTONG</td>
                            @foreach($reports as $report)
                                @if( $report->district_code == 6 && $report->zakat_type <= 11)
                                    <td>{{ $report->zakat_count }}</td>
                                    <td>{{ $report->deduct_total }}</td>
                                    @php
                                        if($report->zakat_type ==1){
                                              $colBilSum1+= $report->zakat_count;
                                              $colAmtSum1+= $report->deduct_total;
                                        } else if ($report->zakat_type ==2){
                                              $colBilSum2+= $report->zakat_count;
                                              $colAmtSum2+= $report->deduct_total;
                                        } else if ($report->zakat_type ==3){
                                              $colBilSum3+= $report->zakat_count;
                                              $colAmtSum3+= $report->deduct_total;
                                        } else if ($report->zakat_type ==4){
                                              $colBilSum4+= $report->zakat_count;
                                              $colAmtSum4+= $report->deduct_total;
                                        } else if ($report->zakat_type ==5){
                                              $colBilSum5+= $report->zakat_count;
                                              $colAmtSum5+= $report->deduct_total;
                                        } else if ($report->zakat_type ==6){
                                              $colBilSum6+= $report->zakat_count;
                                              $colAmtSum6+= $report->deduct_total;
                                        } else if ($report->zakat_type ==7){
                                              $colBilSum7+= $report->zakat_count;
                                              $colAmtSum7+= $report->deduct_total;
                                        } else if ($report->zakat_type ==8){
                                              $colBilSum8+= $report->zakat_count;
                                              $colAmtSum8+= $report->deduct_total;
                                        } else if ($report->zakat_type ==9){
                                              $colBilSum9+= $report->zakat_count;
                                              $colAmtSum9+= $report->deduct_total;
                                        } else if ($report->zakat_type ==10){
                                              $colBilSum10+= $report->zakat_count;
                                              $colAmtSum10+= $report->deduct_total;
                                        } else if ($report->zakat_type ==11){
                                              $colBilSum11+= $report->zakat_count;
                                              $colAmtSum11+= $report->deduct_total;
                                        }
                                              $sumBilRow06+=  $report->zakat_count;
                                              $sumTypeRow06+=  $report->deduct_total;
                                    @endphp
                                @endif
                            @endforeach
                            <td>{{ $sumBilRow06 }}</td>
                            <td>{{ $sumTypeRow06 }}</td>
                        <tr>
                        <tr>
                            <td>LIPIS</td>
                            @foreach($reports as $report)
                                @if( $report->district_code == 7 && $report->zakat_type <= 11)
                                    <td>{{ $report->zakat_count }}</td>
                                    <td>{{ $report->deduct_total }}</td>
                                    @php
                                        if($report->zakat_type ==1){
                                              $colBilSum1+= $report->zakat_count;
                                              $colAmtSum1+= $report->deduct_total;
                                        } else if ($report->zakat_type ==2){
                                              $colBilSum2+= $report->zakat_count;
                                              $colAmtSum2+= $report->deduct_total;
                                        } else if ($report->zakat_type ==3){
                                              $colBilSum3+= $report->zakat_count;
                                              $colAmtSum3+= $report->deduct_total;
                                        } else if ($report->zakat_type ==4){
                                              $colBilSum4+= $report->zakat_count;
                                              $colAmtSum4+= $report->deduct_total;
                                        } else if ($report->zakat_type ==5){
                                              $colBilSum5+= $report->zakat_count;
                                              $colAmtSum5+= $report->deduct_total;
                                        } else if ($report->zakat_type ==6){
                                              $colBilSum6+= $report->zakat_count;
                                              $colAmtSum6+= $report->deduct_total;
                                        } else if ($report->zakat_type ==7){
                                              $colBilSum7+= $report->zakat_count;
                                              $colAmtSum7+= $report->deduct_total;
                                        } else if ($report->zakat_type ==8){
                                              $colBilSum8+= $report->zakat_count;
                                              $colAmtSum8+= $report->deduct_total;
                                        } else if ($report->zakat_type ==9){
                                              $colBilSum9+= $report->zakat_count;
                                              $colAmtSum9+= $report->deduct_total;
                                        } else if ($report->zakat_type ==10){
                                              $colBilSum10+= $report->zakat_count;
                                              $colAmtSum10+= $report->deduct_total;
                                        } else if ($report->zakat_type ==11){
                                              $colBilSum11+= $report->zakat_count;
                                              $colAmtSum11+= $report->deduct_total;
                                        }
                                             $sumBilRow07+=  $report->zakat_count;
                                             $sumTypeRow07+=  $report->deduct_total;
                                    @endphp
                                 @endif
                            @endforeach
                            <td>{{ $sumBilRow07 }}</td>
                            <td>{{ $sumTypeRow07 }}</td>
                        <tr>
                        <tr>
                            <td>CAM. HIGHLANDS</td>
                            @foreach($reports as $report)
                                @if( $report->district_code == 7 && $report->zakat_type <= 11)
                                    <td>{{ $report->zakat_count }}</td>
                                    <td>{{ $report->deduct_total }}</td>
                                @php
                                    if($report->zakat_type ==1){
                                          $colBilSum1+= $report->zakat_count;
                                          $colAmtSum1+= $report->deduct_total;
                                    } else if ($report->zakat_type ==2){
                                          $colBilSum2+= $report->zakat_count;
                                          $colAmtSum2+= $report->deduct_total;
                                    } else if ($report->zakat_type ==3){
                                          $colBilSum3+= $report->zakat_count;
                                          $colAmtSum3+= $report->deduct_total;
                                    } else if ($report->zakat_type ==4){
                                          $colBilSum4+= $report->zakat_count;
                                          $colAmtSum4+= $report->deduct_total;
                                    } else if ($report->zakat_type ==5){
                                          $colBilSum5+= $report->zakat_count;
                                          $colAmtSum5+= $report->deduct_total;
                                    } else if ($report->zakat_type ==6){
                                          $colBilSum6+= $report->zakat_count;
                                          $colAmtSum6+= $report->deduct_total;
                                    } else if ($report->zakat_type ==7){
                                          $colBilSum7+= $report->zakat_count;
                                          $colAmtSum7+= $report->deduct_total;
                                    } else if ($report->zakat_type ==8){
                                          $colBilSum8+= $report->zakat_count;
                                          $colAmtSum8+= $report->deduct_total;
                                    } else if ($report->zakat_type ==9){
                                          $colBilSum9+= $report->zakat_count;
                                          $colAmtSum9+= $report->deduct_total;
                                    } else if ($report->zakat_type ==10){
                                          $colBilSum10+= $report->zakat_count;
                                          $colAmtSum10+= $report->deduct_total;
                                    } else if ($report->zakat_type ==11){
                                          $colBilSum11+= $report->zakat_count;
                                          $colAmtSum11+= $report->deduct_total;
                                    }
                                          $sumBilRow08+=  $report->zakat_count;
                                          $sumTypeRow08+=  $report->deduct_total;
                                @endphp
                                @endif
                            @endforeach
                            <td>{{ $sumBilRow08 }}</td>
                            <td>{{ $sumTypeRow08 }}</td>
                        <tr>
                        <tr>
                            <td>JERANTUT</td>
                            @foreach($reports as $report)
                                @if( $report->district_code == 9 && $report->zakat_type <= 11)
                                    <td>{{ $report->zakat_count }}</td>
                                    <td>{{ $report->deduct_total }}</td>
                                @php
                                    if($report->zakat_type ==1){
                                          $colBilSum1+= $report->zakat_count;
                                          $colAmtSum1+= $report->deduct_total;
                                    } else if ($report->zakat_type ==2){
                                          $colBilSum2+= $report->zakat_count;
                                          $colAmtSum2+= $report->deduct_total;
                                    } else if ($report->zakat_type ==3){
                                          $colBilSum3+= $report->zakat_count;
                                          $colAmtSum3+= $report->deduct_total;
                                    } else if ($report->zakat_type ==4){
                                          $colBilSum4+= $report->zakat_count;
                                          $colAmtSum4+= $report->deduct_total;
                                    } else if ($report->zakat_type ==5){
                                          $colBilSum5+= $report->zakat_count;
                                          $colAmtSum5+= $report->deduct_total;
                                    } else if ($report->zakat_type ==6){
                                          $colBilSum6+= $report->zakat_count;
                                          $colAmtSum6+= $report->deduct_total;
                                    } else if ($report->zakat_type ==7){
                                          $colBilSum7+= $report->zakat_count;
                                          $colAmtSum7+= $report->deduct_total;
                                    } else if ($report->zakat_type ==8){
                                          $colBilSum8+= $report->zakat_count;
                                          $colAmtSum8+= $report->deduct_total;
                                    } else if ($report->zakat_type ==9){
                                          $colBilSum9+= $report->zakat_count;
                                          $colAmtSum9+= $report->deduct_total;
                                    } else if ($report->zakat_type ==10){
                                          $colBilSum10+= $report->zakat_count;
                                          $colAmtSum10+= $report->deduct_total;
                                    } else if ($report->zakat_type ==11){
                                          $colBilSum11+= $report->zakat_count;
                                          $colAmtSum11+= $report->deduct_total;
                                    }
                                          $sumBilRow09+=  $report->zakat_count;
                                          $sumTypeRow09+=  $report->deduct_total;
                                @endphp
                                @endif
                            @endforeach
                            <td>{{ $sumBilRow09 }}</td>
                            <td>{{ $sumTypeRow09 }}</td>
                        <tr>
                        <tr>
                            <td>BERA</td>
                            @foreach($reports as $report)
                                @if( $report->district_code == 10 && $report->zakat_type <= 11)
                                    <td>{{ $report->zakat_count }}</td>
                                    <td>{{ $report->deduct_total }}</td>
                                @php
                                    if($report->zakat_type ==1){
                                          $colBilSum1+= $report->zakat_count;
                                          $colAmtSum1+= $report->deduct_total;
                                    } else if ($report->zakat_type ==2){
                                          $colBilSum2+= $report->zakat_count;
                                          $colAmtSum2+= $report->deduct_total;
                                    } else if ($report->zakat_type ==3){
                                          $colBilSum3+= $report->zakat_count;
                                          $colAmtSum3+= $report->deduct_total;
                                    } else if ($report->zakat_type ==4){
                                          $colBilSum4+= $report->zakat_count;
                                          $colAmtSum4+= $report->deduct_total;
                                    } else if ($report->zakat_type ==5){
                                          $colBilSum5+= $report->zakat_count;
                                          $colAmtSum5+= $report->deduct_total;
                                    } else if ($report->zakat_type ==6){
                                          $colBilSum6+= $report->zakat_count;
                                          $colAmtSum6+= $report->deduct_total;
                                    } else if ($report->zakat_type ==7){
                                          $colBilSum7+= $report->zakat_count;
                                          $colAmtSum7+= $report->deduct_total;
                                    } else if ($report->zakat_type ==8){
                                          $colBilSum8+= $report->zakat_count;
                                          $colAmtSum8+= $report->deduct_total;
                                    } else if ($report->zakat_type ==9){
                                          $colBilSum9+= $report->zakat_count;
                                          $colAmtSum9+= $report->deduct_total;
                                    } else if ($report->zakat_type ==10){
                                          $colBilSum10+= $report->zakat_count;
                                          $colAmtSum10+= $report->deduct_total;
                                    } else if ($report->zakat_type ==11){
                                          $colBilSum11+= $report->zakat_count;
                                          $colAmtSum11+= $report->deduct_total;
                                    }
                                         $sumBilRow10+=  $report->zakat_count;
                                         $sumTypeRow10+=  $report->deduct_total;
                                @endphp
                            @endif
                            @endforeach
                            <td>{{ $sumBilRow10 }}</td>
                            <td>{{ $sumTypeRow10 }}</td>
                        <tr>
                        <tr>
                            <td>JERANTUT</td>
                            @foreach($reports as $report)
                                @if( $report->district_code == 10 && $report->zakat_type <= 11)
                                    <td>{{ $report->zakat_count }}</td>
                                    <td>{{ $report->deduct_total }}</td>
                                @php
                                    if($report->zakat_type ==1){
                                          $colBilSum1+= $report->zakat_count;
                                          $colAmtSum1+= $report->deduct_total;
                                    } else if ($report->zakat_type ==2){
                                          $colBilSum2+= $report->zakat_count;
                                          $colAmtSum2+= $report->deduct_total;
                                    } else if ($report->zakat_type ==3){
                                          $colBilSum3+= $report->zakat_count;
                                          $colAmtSum3+= $report->deduct_total;
                                    } else if ($report->zakat_type ==4){
                                          $colBilSum4+= $report->zakat_count;
                                          $colAmtSum4+= $report->deduct_total;
                                    } else if ($report->zakat_type ==5){
                                          $colBilSum5+= $report->zakat_count;
                                          $colAmtSum5+= $report->deduct_total;
                                    } else if ($report->zakat_type ==6){
                                          $colBilSum6+= $report->zakat_count;
                                          $colAmtSum6+= $report->deduct_total;
                                    } else if ($report->zakat_type ==7){
                                          $colBilSum7+= $report->zakat_count;
                                          $colAmtSum7+= $report->deduct_total;
                                    } else if ($report->zakat_type ==8){
                                          $colBilSum8+= $report->zakat_count;
                                          $colAmtSum8+= $report->deduct_total;
                                    } else if ($report->zakat_type ==9){
                                          $colBilSum9+= $report->zakat_count;
                                          $colAmtSum9+= $report->deduct_total;
                                    } else if ($report->zakat_type ==10){
                                          $colBilSum10+= $report->zakat_count;
                                          $colAmtSum10+= $report->deduct_total;
                                    } else if ($report->zakat_type ==11){
                                          $colBilSum11+= $report->zakat_count;
                                          $colAmtSum11+= $report->deduct_total;
                                    }
                                           $sumBilRow11+=  $report->zakat_count;
                                           $sumTypeRow11+=  $report->deduct_total;
                                @endphp
                              @endif
                            @endforeach
                            <td>{{ $sumBilRow11 }}</td>
                            <td>{{ $sumTypeRow11 }}</td>
                        <tr>
                            @php
                                $grandBill = $sumBilRow01 + $sumBilRow02 + $sumBilRow03 + $sumBilRow04 + $sumBilRow05 + $sumBilRow06 + $sumBilRow07 + $sumBilRow08 + $sumBilRow09 + $sumBilRow10 + $sumBilRow11;
                                  $grandTotal= $sumTypeRow01 + $sumTypeRow02 + $sumTypeRow03 + $sumTypeRow04 + $sumTypeRow05 + $sumTypeRow06 + $sumTypeRow07 + $sumTypeRow08 + $sumTypeRow09 + $sumTypeRow10 + $sumTypeRow11;
                            @endphp
                            <td>Jumlah</td>
                            <td>{{ $colBilSum1 }}</td>
                            <td>{{ $colAmtSum1 }}</td>
                            <td>{{ $colBilSum2 }}</td>
                            <td>{{ $colAmtSum2 }}</td>
                            <td>{{ $colBilSum3 }}</td>
                            <td>{{ $colAmtSum3 }}</td>
                            <td>{{ $colBilSum4 }}</td>
                            <td>{{ $colAmtSum4 }}</td>
                            <td>{{ $colBilSum5 }}</td>
                            <td>{{ $colAmtSum5 }}</td>
                            <td>{{ $colBilSum6 }}</td>
                            <td>{{ $colAmtSum6 }}</td>
                            <td>{{ $colBilSum7 }}</td>
                            <td>{{ $colAmtSum7 }}</td>
                            <td>{{ $colBilSum8 }}</td>
                            <td>{{ $colAmtSum8 }}</td>
                            <td>{{ $colBilSum9 }}</td>
                            <td>{{ $colAmtSum9 }}</td>
                            <td>{{ $colBilSum10 }}</td>
                            <td>{{ $colAmtSum10 }}</td>
                            <td>{{ $colBilSum11 }}</td>
                            <td>{{ $colAmtSum11 }}</td>
                            <td>{{ $grandBill }}</td>
                            <td>{{ $grandTotal }}</td>
                        </tr>
                    </table>
                </div>
                @elseif (sizeof($reports) === 0)
                    <div class="jumbotron bg-danger text-center pt-5 pb-5">
                        <h1 class="display-4 text-white">No Data</h1>
                        <p class="lead text-white">Please input file to begin</p>
                    </div>
                 @endif
            </div>
        </div>
</div>
</body>
<style type="text/css">
.hide-me{
    display: none!important;
}
.show-me{
    display: grid!important;
}
.fix-extra-space{
    white-space: nowrap!important;
    width: 1%!important;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $('#file').on("change", function(){
        $("#progress").removeClass("hide-me").addClass("show-me");
        let file = document.getElementById("file").files[0];
        var formData = new FormData();
        formData.append('file', file);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "user/store",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data, textStatus, request) {
                if (request.status === 200) {
                    location.reload();
                }
            },
            error: function (e) {
                alert('Something went wrong. Refer support for help.');
            }
        });
    });
</script>
</html>
