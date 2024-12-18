<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily Cash Details</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        @page {
            size: A4 landscape;
            /* Set paper size to A4 landscape */
            margin: 10mm 10mm;
        }

        .dc-container {
            width: 100%;
            max-width: 297mm;
            background-color: #fff;
            height: auto;
            margin: auto;
            box-sizing: border-box;
        }

        .header {
            margin: 20px auto auto auto;
            height: auto;
            text-align: center;
            font-size: smaller;
            margin-bottom: 10px;
        }

        .hms-logo {
            height: 50px;
            width: 50px;
        }

        .date {
            font-size: smaller;
            margin: auto;
            height: auto;
            width: 93%;
            text-align: right;
            padding-bottom: 2px;
        }

        .dc-table {
            border: 1px solid dimgray;
            font-size: xx-small;
            margin: auto;
            height: auto;
            border-collapse: collapse;
        }

        .dc-table tr {
            border-bottom: 1px solid dimgray;
            text-align: center;
        }

        .dc-table th {
            padding: 5px 5px;
            height: 20px;
        }

        .dc-table td {
            padding: 5px 5px;
        }

        .column-left {
            border-left: 1px solid dimgray;
        }

        .note {
            font-size: smaller;
            margin: auto;
            height: auto;
            width: 94%;
            text-align: left;
            padding-top: 2px;
        }

        .footer {
            width: 93%;
            margin: 40px auto auto auto;
            height: auto;
            font-size: x-small;
            text-align: center;
        }

        .footer-item {
            width: 15%;
            border-top: 1px solid black;
            padding-top: 3px;
        }
    </style>
</head>

<body>
    <div class="dc-container">
        <header class="header">
            <img class="hms-logo"
                src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('logo_without_background_1.png')))}}"
                alt="Logo">
            <h5>Daily Cash Details</h5>
            <h5>Smart Institute of Rehabilitation Medicine</h5>
        </header>
        <section class="dc-section">
            <div class="date">
                <h5>Date: 00-00-24</h5>
            </div>
            <table class="dc-table">
                <thead>
                    <tr>
                        <th style="width: 20px">SR. No.</th>
                        <th class="column-left">Receipt No.</th>
                        <th class="column-left">Name of Patient</th>
                        <th class="column-left">Patient MR No.</th>
                        <th class="column-left">Cashier Name</th>
                        <th class="column-left">Consultation Fee</th>
                        <th class="column-left">Diagnostic Charges</th>
                        <th class="column-left">Treatment Charges</th>
                        <th class="column-left">Prosthetics</th>
                        <th class="column-left">Total Amount</th>
                        <th class="column-left">Discount Amount</th>
                        <th class="column-left">Net Amount</th>
                        <th class="column-left">Amount Received</th>
                        <th class="column-left">Remarks</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th>2&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th>3&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th>4&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th>5&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th>6&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th>7&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th>8&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th>9&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th>10&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th>11&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th>12&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th>13&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th>14&nbsp;</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th colspan="5" style="height: 25px">Total</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                    <tr>
                        <th colspan="11">G-Total</th>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                        <td class="column-left">-&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <div class="note">
                <h5>Note:</h5>
            </div>
        </section>
        <footer>
            <table class="footer">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th class="footer-item">Manager Finance</th>
                    <th></th>
                    <th class="footer-item">CEO</th>
                    <th></th>
                    <th class="footer-item">Admin/HR</th>
                </tr>
            </table>
        </footer>
    </div>

</body>

</html>