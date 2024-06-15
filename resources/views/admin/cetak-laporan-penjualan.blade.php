<!DOCTYPE html>
<html>
<head>
    <style>
        #print {
            margin: auto;
            text-align: center;
            font-family: "Calibri", Courier, monospace;
            width: 1200px;
            font-size: 14px;
        }
        #print .title {
            margin: 20px;
            text-align: right;
            font-family: "Calibri", Courier, monospace;
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
            margin: 10px;
        }
        #print .table1 {
            border-collapse: collapse;
            width: 90%;
            text-align: center;
            margin: 10px;
        }
        #print table hr {
            border: 3px double #000;
        }
        #print .ttd {
            float: right;
            width: 250px;
            background-position: center;
            background-size: contain;
        }
        #print table th {
            color: #000;
            font-family: Verdana, Geneva, sans-serif;
            font-size: 12px;
        }
        #logo {
            width: 111px;
            height: 90px;
            padding-top: 10px;
            margin-left: 10px;
        }
        h2, h3 {
            margin: 0px 0px 0px 0px;
        }
    </style>
</head>
<body>
    <div id="print">
        <table class='table1'>
            <tr>
                <td><img src="/img/logo.jpg" height="100" width="100"></td>
                <td>
                    <h2>Laporan Penjualan Harian</h2>
                    <h2>Restaurant HomeSteak Annisa</h2>
                    <p style="font-size: 14px;"><i>Jl. Air Bersih Ujung Gang Jati</i></p>
                </td>
            </tr>
        </table>
        <table class='table'>
            <td><hr /></td>
        </table>
        <td><h3>Laporan Penjualan Harian</h3></td>
        <tr>
            <td>
                <table border='1' class='table' width="90%">
                    <tr>
                        <th width="30">No.</th>
                        <th>ID Order</th>
                        <th>Waktu Order</th>
                        <th>Pelanggan</th>
                        <th>Kasir</th>
                        <th>Total Subtotal</th>
                    </tr>
                    @foreach($laporan as $index => $order)
                    <tr>
                        <td><center>{{ $index + 1 }}</center></td>
                        <td>&nbsp;&nbsp;{{ $order->id_order }}</td>
                        <td>&nbsp;&nbsp;{{ $order->waktu_order }}</td>
                        <td>&nbsp;&nbsp;{{ $order->nama_pelanggan }}</td>
                        <td>&nbsp;&nbsp;{{ $order->user->karyawan->nama }}</td>
                        <td>&nbsp;&nbsp;{{ number_format($order->total_subtotal, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </table>
            </td>
            <p align="right" style="padding: 40px 40px 20px 20px;" class="mb-6"> <strong>Total Penjualan : Rp {{ number_format($dapat, 0, ',', '.') }} <strong></p>
        </tr>
    </table>
    </div>
    <div id="print">
        <table width="450" align="right" class="ttd">
            <tr>
                <td width="100px" style="padding: 20px 20px 20px 20px;" align="center">
                    <strong>Restaurant HomeSteak Annisa,</strong>
                    <br><br><br><br>
                    <strong><u>TTD</u><br></strong><small></small>
                </td>
            </tr>
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
