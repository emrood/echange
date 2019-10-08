<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Ticket</title>
    {{--<link rel="stylesheet" href="{{ URL::to('css/print/paper.min.css') }}">--}}
    {{--<link href="{{ URL::to('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">--}}

</head>

<body>
<?php
setlocale(LC_ALL, "fr_FR");
setlocale(LC_TIME, "fr_FR");
?>
{{--{{ dd($succursales->get(0)) }}--}}

<div class="main" style="margin-bottom:-45px">
    <div style="margin-bottom: 15px;">
        <div style="margin-left: 100px;">
            <img src="{{ URL::to('plugins/images/logo.png') }}" alt="" class="logo">
        </div>

    </div>


    <div class="tickets_container">
        <div class="tickets page-break">
            <div class="row">
                <div class="info_container">
                    <div class="titles">Date</div>
                    <div class="data">: {{  $change->created_at  }}</div>
                </div>
                <div class="info_container">
                    <div class="titles">Caissier</div>
                    <div class="data">: {{ $change->user->name }}</div>
                </div>
            </div>
            <br/>
            <table class="e-table">
                <thead>
                <tr>
                    <th style="text-align:center">Montant recu</th>
                    <th style="text-align:center">Montant rendu</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="text-align:center;vertical-align:middle;width:80px">{{ number_format($change->amount_received, 2, '.', ',') .' '.$change->fromCurrency->abbreviation }}</td>
                    <td style="text-align:center;vertical-align:middle;width:80px">{{ number_format($change->given_amount, 2, '.', ',').' '.$change->toCurrency->abbreviation }}</td>
                </tr>

                </tbody>
                <tfoot>
                <tr style="font-size: 1.1em;">
                    <td colspan="2" style="text-align:center;border: 1px solid black;">* Taux
                        utilisé {{ number_format($change->rate_used, 2, '.', ',') }}</td>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>


</div>
</body>
<style type="text/css">

    .logo{
        width: 50px;
        height: 50px;
    }


    .e-table{
        border-collapse: collapse;
        border: 1px solid black;
        width: 270px;
    }

    tr, td, th{
        border: 1px solid black;
    }

    .page-break {
        page-break-after: never;
    }

    .tickets {
        /*margin: auto !important;*/
        margin-bottom: 30px !important;
        width: 270px !important;
        /*border: 1px dashed black;*/
        /*border: 2px solid green;*/
    }

    .tickets_container {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        margin-left: none !important;
        padding-left: none !important;

    }

    /*.main{*/
    /*border: 2px solid green;*/
    /*margin-left: -20px !important;*/
    /*overflow: visible;*/
    /*}*/

    /*body{*/
    /*overflow: visible;*/
    /*padding-left: -20px !important;*/
    /*border: 2px solid red;*/
    /*}*/

    /*html, body{*/
    /*margin: 0;*/
    /*overflow: visible;*/
    /*}*/

    td {
        border-color: black !important;
        font-size: 11px !important;
    }

    tfoot td {
        font-weight: bold;
        font-size: 11px !important;
        border-top: 1px solid black !important;
    }

    .titles {
        display: inline-block;
        width: 80px;
        overflow: hidden;
        font-size: 0.8em;
    }

    .data {
        display: inline-block;
        width: 150px;
        overflow: hidden;
        font-size: 0.8em;
    }

    .barcode_container {
        margin-top: 25px;
        /*border: 2px solid yellow;*/
        height: 33px;
    }

    .barcode_container div {
        /*border: 2px solid red;*/
    }

    .barcode_img {
        display: block;
        float: right;
    }

    .token_container {
        /*border: 2px solid green;*/
    }

    .token {
        /*border: 2pz solid green;*/
        float: right;
        width: 215px;
        text-align: center;
        letter-spacing: 10px;
    }

    td {
        border-color: black !important;
        font-size: 11px !important;
    }

    tfoot td {
        font-weight: bold;
    }

    .text-center {
        text-align: center;
    }

    .total {
        font-weight: bold;
        font-size: 0.8em;
    }

    .tickets .row {
        border-top: 1px solid black;
        border-right: 1px solid black;
        border-left: 1px solid black;
        padding-top: 4px;
        padding-left: 4px;
        padding-bottom: 8px;
        margin-bottom: -20px;
    }
</style>
</html>