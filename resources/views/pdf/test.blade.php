<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patients State - CSC</title>
    {{--
    <link rel="stylesheet" href="{{ public_path('assets/css/patients-state.css') }}"> --}}

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: #fff;
            padding: 0;
            margin: 0;
        }

        @page {
            size: A4;
            margin: 10mm 10mm;
        }

        .header {
            margin-top: 40px;
            text-align: center;
            text-decoration: underline;
        }

        .ps-container {
            width: 100%;
            max-width: 200mm;
            height: auto;
            margin: auto;
            box-sizing: border-box;
        }

        .ps-table {
            margin: 30px auto 50px auto;
            border: 1px solid black;
            width: 35rem;
            padding: 0;
            border-collapse: collapse;
            font-size: smaller;
        }

        .ps-table th {
            text-align: center;
            border-top: 1px solid black;
            padding: 10px 20px;
            margin: 0;
            border-collapse: collapse;
        }

        .ps-table td {
            margin: 0;
            padding: 10px 20px;
            text-align: center;
            border-top: 1px solid black;
            border-collapse: collapse;
        }

        .column-left {
            border-left: 1px solid dimgray;
        }
    </style>
</head>

<body>
    <div class="ps-container">
        <header class="header">
            <div>
                <h4>Patients State - CSC</h4>
                <h4>18 Sep - 24 Nov 24</h4>
            </div>
        </header>
        <div class="reciept">
            <table class="ps-table">
                <thead>
                    <tr>
                        <td colspan="4">SIRM</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Category</td>
                        <td colspan="3" class="column-left">Number of Patients</td>
                    </tr>
                    <tr>
                        <th class="column-left">From within CSC</th>
                        <th class="column-left">From outside CSC</th>
                        <th class="column-left">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="label column-left">Rehab Specialist Consultation</th>
                        <td class="value column-left">57</td>
                        <td class="label column-left">15</td>
                        <td class="value column-left">72</td>
                    </tr>
                    <tr>
                        <th class="label column-left">Physiotherapy Sessions</th>
                        <td class="value column-left">154</td>
                        <td class="label column-left">10</td>
                        <td class="value column-left">164</td>
                    </tr>
                    <tr>
                        <th class="label column-left">Total</th>
                        <td class="value column-left">211</td>
                        <td class="label column-left">25</td>
                        <td class="value column-left">236</td>
                    </tr>
                </tbody>
            </table>

            <section class="content">

                <table class="gpe-table">
                    <thead>
                        <tr>
                            <th colspan="2"></th>
                        </tr>
                        <tr>
                            <th></th>
                            <th class="column-left"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td class="column-left"></td>
                        </tr>
                    </tbody>
                </table>

                <table class="investigations-table" style="width: 100%">
                    <thead>
                        <th colspan="3" style="padding: 7px 5px;">

                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 30%">
                                <table class="investigation-types">
                                    <thead>
                                        <th class="row-bottom"></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td style="width: 30%">
                                <table class="investigation-types">
                                    <thead>
                                        <th class="row-bottom"></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </td>
                            <td style="width: 30%">
                                <table class="investigation-types-3">
                                    <thead>
                                        <th class="row-bottom"></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </td>
                        </tr>
                    </tbody>

                </table>


            </section>
        </div>
    </div>
</body>

</html>