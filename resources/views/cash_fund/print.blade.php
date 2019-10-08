<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Fond de caisse</title>
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
            <img src="{{ URL::to('plugins/images/logo.png') }}" alt="" class="logo">
        </div>

        <div style="text-align: center; margin-bottom: -75px !important;">
            <h3>Fond de caisse</h3>
            <p>{{ strftime("%e %B %Y %r", strtotime($cashFund->created_at)) }}</p>
        </div>
    </div>
    <table class="table-magasin" style="margin-top: 100px !important;">
        <thead>
        <tr>
            <th class="text-center" style="width: 50%;">Caissier:</th>
            <th colspan="5" class="text-center" style="width: 50%;">{{ $cashFund->cashier->name }}</th>
        </tr>
        <tr>
            <th class="text-center" style="width: 50%;">Superviseur:</th>
            <th colspan="5" class="text-center" style="width: 50%;">{{ $cashFund->admin->name }}</th>
        </tr>
        </thead>
    </table>
    <br/>
    <table class="table-magasin">
        <thead>
        <tr>
            <th style="text-align:center; width: 50%;">Devise</th>
            <th style="text-align:center; width: 50%;">Montant</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cashFund->funds as $fund)
            <tr>
                <td style="text-align:center;vertical-align:middle;width: 50%;"> {{ $fund->currency->abbreviation }}</td>
                <td style="text-align:center;vertical-align:middle;width: 50%;"> {{ $fund->amount }}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        </tfoot>
    </table>
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
        width: 100%;
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