<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: "Calibri", Courier, monospace;
        }
        #print {
            margin: auto;
            text-align: center;
            width: 100%;
            max-width: 1200px;
            font-size: 14px;
        }
        #print .title {
            margin: 20px;
            text-align: right;
            font-size: 12px;
        }
        #print span {
            text-align: center;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            font-size: 18px;
        }
        #print table {
            border-collapse: collapse;
            width: 100%;
            margin: 10px 0;
        }
        #print .table1 {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
            margin: 10px 0;
        }
        #print table hr {
            border: 3px double #000;
        }
        #print .ttd {
            float: right;
            width: 100%;
            max-width: 250px;
            text-align: center;
        }
        #print table th, #print table td {
            color: #000;
            font-family: Verdana, Geneva, sans-serif;
            font-size: 12px;
            padding: 5px;
        }
        #logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        h2, h3 {
            margin: 0;
        }
        .total-pengeluaran {
            text-align: right;
            padding: 40px 40px 20px 20px;
            font-weight: bold;
        }
        @media print {
            body {
                margin: 0;
                padding: 0;
            }
            .no-print, .no-print * {
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <div id="print">
        <table class='table1'>
            <tr>
                <td><img src="/img/logo.jpg" class="rounded-full" id="logo"></td>
                <td>
                    <h2>Laporan Pengeluaran Harian</h2>
                    <h2>Restaurant HomeSteak Annisa</h2>
                    <p style="font-size: 14px;"><i>Jl. Air Bersih Ujung Gang Jati</i></p>
                </td>
            </tr>
        </table>
        <table class='table'>
            <tr>
                <td><hr /></td>
            </tr>
        </table>
        <h3>Laporan Pengeluaran Harian</h3>
        <table border='1' class='table'>
            <tr>
                <th width="5%">No.</th>
                <th width="15%">ID Pengeluaran</th>
                <th width="20%">Tanggal & Waktu</th>
                <th width="30%">Nama Pengeluaran</th>
                <th width="30%">Total Pengeluaran</th>
            </tr>
            @foreach($daily as $index => $pengeluaran)
            <tr>
                <td><center>{{ $index + 1 }}</center></td>
                <td>{{ $pengeluaran->id_pengeluaran }}</td>
                <td>{{ $pengeluaran->waktu_pengeluaran }}</td>
                <td>{{ $pengeluaran->nama_pengeluaran }}</td>
                <td>{{  number_format($pengeluaran->pengeluaran, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </table>
        <p class="total-pengeluaran">Total Pengeluaran: Rp {{ number_format($totalDailyExpense, 0, ',', '.') }}</p>
    </div>
    <div id="print">
        <table width="100%" align="right" class="ttd">
            <tr>
                <td style="padding: 20px;" align="center">
                    <strong>Restaurant HomeSteak Annisa,</strong>
                    <br><br><br><br>
                    <strong><u>TTD</u></strong>
                    <small></small>
                </td>
            </tr>
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
