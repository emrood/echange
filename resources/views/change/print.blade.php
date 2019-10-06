<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Opération de change</title>
    {{--<link rel="stylesheet" href="{{ URL::to('css/print/paper.min.css') }}">--}}
    <link rel="stylesheet" href="{{ URL::to('css/print/style.css') }}"/>
    {{--<link href="{{ URL::to('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">--}}
</head>

<body>
<?php
setlocale(LC_ALL, "fr_FR");
setlocale(LC_TIME, "fr_FR");
?>
{{--{{ dd($succursales->get(0)) }}--}}
<div style="margin-bottom:-45px">
    <div>
        <div style="text-align:center">
            {{--<img src="{{ URL::to('plugins/images/logo.png') }}" alt="" class="logo">--}}
            <p>logo</p>
        </div>

        <div style="text-align: center; margin-bottom: -75px !important;">
            <h3>Opération de change @if($change->canceled) (Annulée) @endif</h3>
            {{--<p>Du {{ strftime("%e %B %Y", strtotime($change->created_at)) }}</p>--}}
        </div>
    </div>

    <table class="table-magasin" style="margin-top: 100px !important;">
        <thead>
        <tr>
            <th class="text-center">Date:</th>
            <th colspan="5" class="text-center">{{ $change->created_at }}</th>

        </tr>
        <tr>
            <th class="text-center">Caissier:</th>
            <th class="text-center">{{ $change->user->name }}</th>
        </tr>
        <tr>
            <th class="text-center">Montant Recu:</th>
            <th class="text-center">{{ $change->amount_received.' '.$change->fromCurrency->abbreviation }}</th>
        </tr>
        <tr>
            <th class="text-center">Taux utilisé:</th>
            <th class="text-center">{{ $change->rate_used }}</th>
        </tr>
        <tr>
            <th class="text-center">Montant Remis:</th>
            <th class="text-center">{{ $change->given_amount.' '.$change->toCurrency->abbreviation }}</th>
        </tr>
        </thead>
    </table>
    <br/>
</div>
</body>
<style type="text/css">
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
        font-size: 1.2em;
    }

    @page {
        size: letter
    }

    .logo {
        width: 25mm;
        height: 25mm;
    }

    body {
        font-family: Arial, sans-serif;
        font-size: smaller;

    }

    .header {
        display: flex;
        padding-bottom: 3mm;
        border-bottom: 2px solid #9d9b9b;
        position: relative;
    }

    .header h1, header p {
        margin: 0;
    }

    .header h1 {
        text-transform: uppercase;
        font-size: 1em;
        margin-top: 9mm;
    }

    .header p {
        font-size: .8em;
    }

    .header > div + div {
        margin-left: 5mm;
    }

    h2 {
        font-size: .85em;
    }

    section {
        margin-top: 10mm;
    }

    .top-date {
        font-size: 0.65em;
        position: absolute;
        right: 0;
        bottom: -5mm;
    }

    .text {
        font-size: .75em;
    }

    .section {

        padding-bottom: 3mm;
        border-bottom: 2px solid #9d9b9b;
    }

    ul {
        list-style: none;
    }

    ul li {
        margin-bottom: 3mm;
    }

    ul p {
        margin: 0;
    }

    table {
        width: calc(100%);
        font-size: small;

    }

    .tot {
        border: 1px solid black;
    }

    .table-magasin {
        width: 80%;
        border-collapse: collapse;
        border: 1px solid black;
    }

    table-magasin tbody {
        color: #797979;
    }

    .table-magasin > tbody > tr > td {
        border: 1px solid gray;
        padding: 4px 2px;
        line-height: 1.42857143;
        vertical-align: top;
    }

    .table-magasin > thead > tr > th {
        border: 1px solid black;
        padding: 4px 2px;
        line-height: 1.42857143;
        vertical-align: top;
    }

    th {
        text-align: left;
    }

    .table-header {

        border-color: black;
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
        padding: 4px 2px;
        line-height: 1.42857143;
        border: 1px solid black;
        width: 100%;

    }

    .table-header td {
        width: 200px;
    }

    .table-production {
        margin-top: -10px;
        border-color: black;
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
        padding: 4px 2px;
        line-height: 1.42857143;
        border: 1px solid black;
        width: 100%;
    }

    .table-recap {
        border: 1px solid black;
        border-collapse: collapse;
        line-height: 1.42857143;
        padding: 4px 2px;
    }

    .table-recap td {
        width: 200px;
        border: 1px solid black;
    }
</style>
</html>