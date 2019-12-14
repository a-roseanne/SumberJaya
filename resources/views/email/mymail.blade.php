<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sumber Jaya - Rincian Pesanan Anda </title>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
</head>
<body>
    <h1>Terima kasih telah berbelanja di toko kami !</h1>
<br>
    <h4>Berikut adalah rincian pesanan Anda </h4>

    <?php $total = 0 ?>
 
    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
        <div class="card">
            
            <div class="card-body">
                
                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th class="right">Harga</th>
                                <th class="center">Jumlah</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
                            <tr>
                                <td class="left strong">{{ $details['name'] }}</td>
                                <td class="right">{{ $details['price'] }}</td>
                                <td class="center">{{ $details['quantity'] }}</td>
                                <td class="right">Rp {{ $details['price'] * $details['quantity'] }}</td>
                            </tr>
                @endforeach
                @endif             
                        </tbody>
                        
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">
                    </div>
                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Total</strong> </td>
                                    <td class="right">
                                        <strong class="text-dark">Rp  {{ $total }}</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="card-footer bg-white">
                <p class="mb-0">Sumber Jaya Store and Fashion Display</p>
                <p>Jl. Diponegoro 46 Mojosari - 0877 0261 0777 </p>
            </div>
        </div>
    </div>
</body>
</html>