<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examination Report Clark</title>
</head>
<style>
    @page {
        header: page-header;
        footer: page-footer;
        margin: 0;
    }
    @font-face {
        font-family: arialnarrow;
        src: url("{{ public_path('fonts/ARIALN.TTF') }}");
    }
    body {
        font-family: arialNarrow, sans-serif;
    }
    .container{
        padding-top: 1.2in;
        padding-left: 0.5in;
        padding-right: 0.5in;
        padding-bottom: 0.5in;
    }
    #table-1{
        border-collapse: collapse;
        border: 1px;
        border-style: dotted;
        width: 100%;
        font-size: 12pt;
    }
    #table-1 th{
        border-collapse: collapse;
        border: 1px;
        border-style: dotted;
        text-align: left;
        padding-left: 4pt;
        padding-right: 4pt;
    }
    #table-1 td{
        border-collapse: collapse;
        border: 1px;
        border-style: dotted;
        text-align: left;
        padding-left: 4pt;
        padding-right: 4pt;
    }
    #table-2{
        border-collapse: collapse;
        border: 1px;
        border-style: dotted;
        width: 100%;
        font-size: 12pt;
        border-top: 0;
    }
    #table-2 th{
        border-collapse: collapse;
        border: 1px;
        border-style: dotted;
        text-align: left;
        padding-left: 4pt;
        padding-right: 4pt;
        border-top: 0;
        border-bottom: 0;
    }
    #table-2 td{
        border-collapse: collapse;
        border: 1px;
        border-style: dotted;
        text-align: left;
        padding-left: 4pt;
        padding-right: 4pt;
        border-top: 0;
        border-bottom: 0;
    }
    .documentary-images{
        border: 1px;
        border-style: dotted;
        margin-top: 10pt;
    }
    .fill-text{
        position:relative;
        font-weight: bold;
        border: 1px solid black;
    }
</style>
<body>
<htmlpageheader name="page-header">
    <div>
        <img style="margin-top: 20pt;" src="{{ public_path('images/pdf-header-1.png') }}" alt="">
    </div>
</htmlpageheader>

<htmlpagefooter name="page-footer">
    <div style="padding-bottom: 10pt;">
        <!-- <span style="top: 300pt;" class="fill-text">asdasd</span> -->
        <img src="{{ public_path('images/pdf-footer-1.png') }}" alt="">
    </div>
</htmlpagefooter>

<div class="container">
    <p style="font-size: 14pt; text-align:center"><b>EXAMINATION AND APPRAISAL REPORT</b></p>
    <table id="table-1">
        <tr>
            <th style="width: 25%">Identification:</th>
            <td colspan="2">
                <span>{{ $identification }}</span>
            </td>
        </tr>
        <tr>
            <th>Consignee:</th>
            <td colspan="2">
                <span>{{ $consignee }}</span>
            </td>
        </tr>
        <tr>
            <th>Location:</th>
            <td colspan="2">
                <span>{{ $location }}</span>
            </td>
        </tr>
        <tr>
            <th>Container Numbers:</th>
            <td colspan="2">
                <span>{{ $container_numbers }}</span>
            </td>
        </tr>
        <tr>
            <th>Bill of Lading Number:</th>
            <td colspan="2">
                <span>{{ $bill_of_lading_number }}</span>
            </td>
        </tr>
        <tr>
            <th>Date of Examination:</th>
            <td colspan="2">
                <span>{{ $examination_date }}</span>
            </td>
        </tr>
        <tr>
            <th>Description:</th>
            <td style="width: 37%; vertical-align: top;height: 50pt">
                As Declared <br>
                <span>{{ $description_as_declared }}</span>
            </td>
            <td style="width: 37%; vertical-align: top;height: 50pt">
                As Found <br>
                <span>{{ $description_as_found }}</span>
            </td>
        </tr>
        <tr>
            <th>Net Weight (kgs)</th>
            <td colspan="2">
                <span>{{ $net_weight }}</span>
            </td>
        </tr>
        <tr>
            <th>Customs Value ($)</th>
            <td colspan="2">
                <span>{{ $customs_value }}</span>
            </td>
        </tr>
        <tr>
            <th>Freight ($)</th>
            <td colspan="2">
                <span>{{ $freight }}</span>
            </td>
        </tr>
        <tr>
            <th>Insurance ($)</th>
            <td colspan="2">
                <span>{{ $insurance }}</span>
            </td>
        </tr>
        <tr>
            <th>Dutiable Value ($)</th>
            <td colspan="2">
                <span>{{ $dutiable_value }}</span>
            </td>
        </tr>
        <tr>
            <th>Exchange Rate</th>
            <td colspan="2">
                <span>{{ $exchange_rate }}</span>
            </td>
        </tr>
        <tr>
            <th>Dutiable Value (DV)</th>
            <td colspan="2">
                <span>{{ $dutiable_value_dv }}</span>
            </td>
        </tr>
        <tr>
            <th>Duty Rate</th>
            <td colspan="2">
                <span>{{ $duty_rate }}</span>
            </td>
        </tr>
        <tr>
            <th>Customs Duty</th>
            <td colspan="2">
                <span>{{ $customs_duty }}</span>
            </td>
        </tr>
        <tr>
            <th>Brokerage Fee</th>
            <td colspan="2">
                <span>{{ $brokerage_fee }}</span>
            </td>
        </tr>
        <tr>
            <th>Arrastre</th>
            <td colspan="2">
                <span>{{ $arrastre }}</span>
            </td>
        </tr>
        <tr>
            <th>Wharfage</th>
            <td colspan="2">
                <span>{{ $warfage }}</span>
            </td>
        </tr>
        <tr>
            <th>IPF</th>
            <td colspan="2">
                <span>{{ $ipf }}</span>
            </td>
        </tr>
        <tr>
            <th>CDS</th>
            <td colspan="2">
                <span>{{ $cds }}</span>
            </td>
        </tr>
        <tr>
            <th>IRS</th>
            <td colspan="2">
                <span>{{ $irs }}</span>
            </td>
        </tr>
        <tr>
            <th>Total Landed Cost</th>
            <td colspan="2">
                <span>{{ $total_landed_cost }}</span>
            </td>
        </tr>
        <tr>
            <th>VAT</th>
            <td colspan="2">
                <span>{{ $vat }}</span>
            </td>
        </tr>
        <tr>
            <th>Depreciation</th>
            <td colspan="2">
                <span>{{ $depreciation }}</span>
            </td>
        </tr>
        <tr>
            <th>Total:<br><i style="font-size: 12; font-weight: normal;">(ESTIMATED VALUE/ FLOOR PRICE)</i></th>
            <td colspan="2">
                <span>{{ $total }}</span><br>
                <span><b>Proposed Floor Price: {{ $floor_price }}</b></span>
            </td>
        </tr>
        <tr>
            <th>Remarks:<br><i style="font-size: 12; font-weight: normal;">(Proposed Mode of Disposal)</i></th>
            <td colspan="2">
                <span>{{ $remarks }}</span><br>
                <span><b>{{ $mode_of_disposal }}</b></span>
            </td>
        </tr>
    </table>
    <table id="table-2">
        <tr>
            <td style="height: 40pt; vertical-align: top">Prepared by:</td>
            <td style="height: 40pt; vertical-align: top">Reviewed by:</td>
            <td style="height: 40pt; vertical-align: top">Approved by:</td>
        </tr>
        <tr>
            <td style="text-align: left;">
                <b>{{ $prepared_by_name }}</b><br>
                <i>{{ $prepared_by_designation }}</i>
            </td>
            <td style="text-align: left;">
                <b>{{ $reviewed_by_name }}</b><br>
                <i>{{ $reviewed_by_designation }}</i>
            </td>
            <td style="text-align: left;">
                <b>{{ $approved_name }}</b><br>
                <i>{{ $approved_designation }}</i>
            </td>
        </tr>
    </table>
</div>
@foreach($images as $chunk)
<pagebreak>
<div class="container">
    <div style="text-align: center;" class="documentary-images">
        <p style="text-align: center;"><b>DOCUMENTARY IMAGES</b></p>
        @foreach($chunk as $image)
        <img style="height: 230pt; width: 230pt; margin: 5pt" src="{{ storage_path('app/'.$image['image_path']) }}" alt="">
        @endforeach

        <p style="text-align: left; margin-left: 10pt"><b>Witnessed by:</b></p>

        <p style="text-align: left; margin-left: 10pt">
        Enforcement and Security Service
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        ___________________________________________</p>

        <p style="text-align: left; margin-left: 10pt">
        Customs Intelligence and Investigation Service
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        ___________________________________________</p>

        <p style="text-align: left; margin-left: 10pt">
        Auction and Cargo Disposal Division
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;
        ___________________________________________</p>

    </div>
</div>
</pagebreak>
@endforeach
</body>
</html>