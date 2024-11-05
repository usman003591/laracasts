<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription Slip</title>
    {{--
    <link rel="stylesheet" href="styles.css"> --}}
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 0;
            margin: 0;
        }

        @page {
            size: A4;
            margin: 10mm 10mm;
        }

        .prescription-container {
            width: 100%;
            max-width: 200mm;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            height: auto;
            box-sizing: border-box;
        }

        .header {
            margin-bottom: 20px;
        }

        .tables {
            font-size: 14px;
        }

        .hms-logo {
            height: 70px;
            width: 70px;
            margin-bottom: 40px
        }

        .csc-logo {
            height: 70px;
            width: 75px;
            margin-bottom: 33px
        }

        .title-section {
            width: 60%;
            text-align: center;
        }

        .title-section h2 {
            font-size: 25px;
            margin-bottom: 5px;

        }

        .title-section h5 {
            font-size: 16px;
            margin-top: 5px;
            text-decoration: underline;
        }

        .details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .left-section,
        .right-section {
            width: 45%;
        }

        .attributes-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .attributes-table tr {
            padding-bottom: 20px;
        }

        .attributes-table td {
            padding: 12px 5px 3px 5px;
            vertical-align: top;
            line-height: 20px;
            /* border: 1px solid black; */
        }

        .attributes-table .label {
            width: 15%;
            font-weight: bold;
            white-space: nowrap;
        }

        .attributes-table .value {
            max-width: 30rem;
            border-bottom: 1px solid #bbbaba;
        }

        .attributes-table .value[colspan="3"] {
            width: auto;
        }

        .prescription-table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            margin-bottom: 25px;
        }

        .prescription-table th {
            width: 25%;
            text-align: left;
            vertical-align: top;
            padding: 10px 5px;
            font-weight: bold;
            border-bottom: 1px solid #ddd;
        }

        .prescription-table td {
            text-align: left;
            vertical-align: top;
            padding: 10px 5px;
            border-bottom: 1px solid #ddd;
            word-wrap: break-word;
            line-height: 20px;
        }

        .gpe-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            border: 1px solid dimgray;
        }

        .gpe-table td {
            text-align: left;
            vertical-align: middle;
            padding: 7px 5px;
            border-bottom: 1px solid dimgray;
        }

        .gpe-table th {
            width: 50%;
            text-align: center;
            vertical-align: middle;
            padding: 7px 5px;
            border-bottom: 1px solid dimgray;
        }


        .investigations-table {
            width: 100%;
            margin-bottom: 20px;
            padding: 0;
            border: 1px solid dimgray;
            /* border-left: 1px solid dimgray;
            border-right: 1px solid dimgray; */
            border-collapse: collapse;
        }

        .investigations-table td {
            width: 30%;
            margin: 0;
            padding: 0;
        }

        .investigation-types {
            width: 100%;
            border-top: 1px solid dimgray;
            border-right: 1px solid dimgray;
            /* border-bottom: 1px solid dimgray; */
            border-collapse: collapse;
        }


        .investigation-types td {
            padding: 7px 5px;
        }

        .investigation-types th {
            padding: 7px 5px;
        }

        .investigation-types-3 {
            width: 100%;
            border-top: 1px solid dimgray;
            /* border-bottom: 1px solid dimgray; */
            border-collapse: collapse;
        }

        .investigation-types-3 td {
            padding: 7px 5px;
        }

        .investigation-types-3 th {
            padding: 7px 5px;
        }

        .row-bottom {
            border-bottom: 1px solid dimgray;
        }

        .default-table {
            width: 100%;
            border-collapse: collapse;
            /* table-layout: fixed; */
            margin-bottom: 20px;
            border: 1px solid dimgray;
        }

        .default-table th {
            text-align: center;
            vertical-align: middle;
            padding: 7px 5px;
            border-bottom: 1px solid dimgray;
        }

        .default-table td {
            text-align: left;
            vertical-align: middle;
            padding: 7px 5px;
            border-bottom: 1px solid dimgray;
        }

        .column-left {
            border-left: 1px solid dimgray;
        }

        .next-visit {
            margin-top: 20px;
        }

        .footer {
            font-size: 12px;
            padding-top: 5px;
            text-align: right;
        }

        .footer .qr {
            height: 6rem;
            width: 6rem;
            margin-right: 50px;
        }

        @media screen and (max-width: 768px) {

            .attributes-table .label,
            .attributes-table .value {
                display: block;
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="prescription-container">
        <header class="header">
            <table style="width: 100%; table-layout: fixed; height: 10%;">
                <tr>
                    <td style="width: 20%; text-align: left;">
                        <img class="hms-logo"
                            src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('logo_without_background_1.png')))}}"
                            alt="Logo">
                    </td>
                    <td class="title-section">
                        <div style="margin-top: 20px">
                            <h2>Smart Institute of Rehabilitation</h2>
                            <h2>Medicine (SIRM)</h2>
                            <h5><strong>Health Directorate</strong></h5>
                        </div>
                    </td>
                    <td style="width: 20%; text-align: right;">
                        <img class="csc-logo"
                            src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('samrtcitylogo.png')))}}"
                            alt="Smart City Logo">
                    </td>
                </tr>
            </table>
        </header>
        <div class="tables">
            <section class="details">
                <table class="attributes-table">
                    <tbody>
                        <tr>
                            <td class="label">Department/Consultant:</td>
                            <td class="value">Pathology</td>
                            <td class="label">Category:</td>
                            <td class="value">Resident</td>
                        </tr>
                        <tr>
                            <td class="label">Patient Name:</td>
                            <td class="value">Muhammad Azfar Nasir Janjua</td>
                            <td class="label">Age:</td>
                            <td class="value">24</td>
                        </tr>
                        <tr>
                            <td class="label">Gender:</td>
                            <td class="value">Male</td>
                            <td class="label">Date:</td>
                            <td class="value">24/10/2024</td>
                        </tr>
                        <tr>
                            <td class="label">CNIC No:</td>
                            <td class="value">0123456789012353</td>
                            <td class="label">MR No:</td>
                            <td class="value">24545</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="content">
                <table class="prescription-table">
                    <tbody>
                        <tr>
                            <th>Brief History:</th>
                            <td>hgdhfghdgfaaaaaaahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                                dhaghdghdags
                            </td>
                        </tr>

                        <tr>
                            <th>Diagnosis:</th>
                            <td>hgdhfghdgfaaaaaaahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="gpe-table">
                    <thead>
                        <tr>
                            <th colspan="2">General Physical Examinations</th>
                        </tr>
                        <tr>
                            <th>Symptoms</th>
                            <th class="column-left">Additional Symptoms</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Test</td>
                            <td class="column-left">Test</td>
                        </tr>
                    </tbody>
                </table>

                <table class="investigations-table" style="width: 100%">
                    <thead>
                        <th colspan="3" style="padding: 7px 5px;">
                            Investigations
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 30%">
                                <table class="investigation-types">
                                    <thead>
                                        <th class="row-bottom">Radiology</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ECG</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td style="width: 30%">
                                <table class="investigation-types">
                                    <thead>
                                        <th class="row-bottom">Pathology</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ECG</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </td>
                            <td style="width: 30%">
                                <table class="investigation-types-3">
                                    <thead>
                                        <th class="row-bottom">Rahabilitation</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ECG</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </td>
                        </tr>
                    </tbody>

                </table>

                <table class="default-table">
                    <thead>
                        <tr>
                            <th colspan="8">Vitals</th>
                        </tr>
                        <tr>
                            <th>Pulse/min</th>
                            <th class="column-left">B.P (mmHg)</th>
                            <th class="column-left">Temperature (F)</th>
                            <th class="column-left">Respiratory Rate/min</th>
                            <th class="column-left">Height (cm)</th>
                            <th class="column-left">Weight (cm)</th>
                            <th class="column-left" style="width: 8%;">BMI</th>
                            <th class="column-left">OFC (cm)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Test</td>
                            <td class="column-left">Test</td>
                            <td class="column-left">Test</td>
                            <td class="column-left">Test</td>
                            <td class="column-left">Test</td>
                            <td class="column-left">Test</td>
                            <td class="column-left">Test</td>
                            <td class="column-left">Test</td>
                        </tr>
                    </tbody>
                </table>
                <table class="default-table">
                    <thead>
                        <tr>
                            <th colspan="8">Medication</th>
                        </tr>
                        <tr>
                            <th style="width: 25%;">Medicine</th>
                            <th class="column-left" style="width: 9%;">Dose</th>
                            <th class="column-left">Freq</th>
                            <th class="column-left">Period</th>
                            <th class="column-left">Qty</th>
                            <th class="column-left">Instructions</th>
                            <th class="column-left" style="width: 10%">Stopped By</th>
                            <th class="column-left" style="width: 11%">Stop Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>OPINOL Tablets 40 mg</td>
                            <td class="column-left">.5 Tab</td>
                            <td class="column-left">BID (1+1)</td>
                            <td class="column-left">14 Days</td>
                            <td class="column-left">14 Tablets</td>
                            <td class="column-left"></td>
                            <td class="column-left"></td>
                            <td class="column-left"></td>
                        </tr>
                        <tr>
                            <td>Bepsin Tablets 20 mg</td>
                            <td class="column-left">1 Tab</td>
                            <td class="column-left">HS</td>
                            <td class="column-left">14 Days</td>
                            <td class="column-left">14 Tablets</td>
                            <td class="column-left"></td>
                            <td class="column-left"></td>
                            <td class="column-left"></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>


        <section class="next-visit">
            <p><strong>Next Visit:</strong> ____________________</p>
        </section>

        <div class="footer">
            <footer>
                <img class="qr"
                    src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('QR_code.png')))}}"
                    alt="QR Code">
                <p>(NOT VALID FOR COURT OF LAW)</p>
            </footer>
        </div>
    </div>
</body>

</html>