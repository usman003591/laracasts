<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPD Receipt</title>
    {{--
    <link rel="stylesheet" href="{{ public_path('assets/css/patients-state.css') }}"> --}}
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
        }

        @page {
            size: A7;
            margin-top: 10mm 10mm;
        }

        .receipt {
            width: 58mm;
            padding: 10px;
            border: 1px solid rgb(145, 143, 143);
            margin: 30px auto;
            text-align: center;
        }

        .receipt_no {
            text-align: left;
            font-size: 11px;
        }

        .qr-code {
            margin-bottom: 10px;
        }

        .receipt-header {
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .details {
            font-size: 11px;
            margin-bottom: 10px;
            text-align: left;
        }

        .details th,
        td {
            text-align: left;
            padding: 3px;
        }

        .footer {
            font-size: 10px;
            border-top: 1px dotted #000;
            padding-top: 5px;
            margin-top: 10px;
        }
    </style>

</head>

<body>
    <div class="receipt">
        <div class="receipt_no">
            <p>Receipt No. </p>
        </div>
        <div class="qr-code">
            <img src="{{ public_path('/QR_code.png') }}" alt="QR Code" width="120">
        </div>
        <div class="receipt-header">OPD Receipt</div>

        <table class="details">
            <tr>
                <th>OPD ID: </th>
                <td>545454</td>
            </tr>
            <tr>
                <th>Patient Name: </th>
                <td>John Doe</td>
            </tr>
            <tr>
                <th>Doctor Name: </th>
                <td>Dr. Test</td>
            </tr>
            <tr>
                <th>Date: </th>
                <td>12/12/2024</td>
            </tr>
            <tr>
                <th>MR No.:</th>
                <td>1200-RE-52</td>
            </tr>
        </table>

        {{-- <div class="details">
            <span><strong>OPD ID:</strong> OPD-12345</span>
            <span><strong>Patient Name:</strong> John Doe</span>
            <span><strong>Doctor Name:</strong> Dr. Smith</span>
            <span><strong>Date:</strong> 17-Jan-2025</span>
            <span><strong>MR No:</strong> MR-67890</span>
        </div> --}}
        <div class="footer">
            Thank you for visiting!
        </div>
    </div>
</body>

</html>
