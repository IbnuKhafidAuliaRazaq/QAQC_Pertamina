<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body class="A4" >
    <section class="sheet padding-10mm">
        <table border="1" style="border-collapse: collapse;width: 100%;font-size: 12px" >
            <tr>
                <th>Kode OAS</th>
                <th>Sercom</th>
                <th>Nama Barang</th>
                <th>Prouduct In</th>
                <th>Product Out</th>
                <th>Balance Stock</th>
                <th>Minimum Stock</th>
                <th>Remarks</th>
            </tr>
            @foreach ($distinct_data as $dst)
                    <tr>
                        <td> {{ $dst->oas_code }} </td> 
                        <td> {{ $dst->sercom_name }} </td>
                        <td>
                            {{ $dst->tool_name }}
                        </td>
                        <td> {{ $dst->product_in }} </td>
                        <td> {{ $dst->product_out }} </td>
                        <td> {{ $dst->quantity_code }} </td>
                        <td> <span >{{ $dst->min_stock }}</span> </td>
                        <td style="font-size: 10px;text-align:center" > 
                            @if ($dst->quantity_code <= $dst->min_stock)
                                <strong >TOP UP</strong>
                            @else
                                <strong >OK</strong>
                            @endif    
                        </td>
                    </tr>
                @endforeach
        </table>
    </section>
</body>
<script>
    window.print()
</script>
</html>