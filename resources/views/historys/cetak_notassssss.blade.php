<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nota</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:5px;
            padding:40px;
            width:300px;
            height:5px;
            background-color:#fff;
        }
        .kolom1{
            text-align: end;
        }
        .kolom2{
            text-align: start; 
        }
        h4{
            font-size: 14px;
            text-align: left;
        }
        h5{
            font-size: 14px;
            word-spacing: 60px;
        }
        h6{
            font-size: 14px;
            word-spacing: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        @if(!empty($pesanan))
            <div style="text-align: center;">
                <a href="#" class="logo">
                    <img src="{{ url('images/logo.png') }}" width="100">
                </a>
                <h3>Toko Bangunan Rahayu</h3> 
                <p>Jl.Suryo Kusumo,Krajan</p>
            </div>
            <?php $no = 1; ?>
            <div style="text-align: center;">
                <hr>
                <p>Kasir : {{ auth()->user()->name }}</p>
                <p>Tanggal : {{ $pesanan->created_at->translatedFormat('l, d F Y') }}</p>
                <p>No.Struk : <strong>#{{ $pesanan->id }}</strong></p>
            </div>
            <hr>
            @foreach($pesanan_details as $pesanan_detail)
            <div style="text-align: center;"> 
                <h4>
                    {{ $pesanan_detail->stock->nama_barang }} 
                </h4>
                <h5>
                    Rp.{{ number_format($pesanan_detail->stock->harga) }}x{{ $pesanan_detail->jumlah }} Rp.{{ number_format($pesanan_detail->jumlah_harga) }}
                </h5>
            </div>
            @endforeach
            <div style="text-align: center;"> 
                <hr>
                <h6>
                    Total <strong>Rp.{{ number_format($pesanan->jumlah_harga) }}</strong>
                </h6>
            </div>
            <div style="text-align: center;">
                <hr>
                ~~Terima Kasih~~
            </div>
    @endif
    </div>

    <script type="text/javascript">
        window.print();
    </script>

</body>
</html>
