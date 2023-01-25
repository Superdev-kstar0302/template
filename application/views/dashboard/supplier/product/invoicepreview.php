<html>
    <head>
        <title>
            Table sample
        </title>
        <style> 
            #container{
                width: 100%;
            }

            #table1 , #table2 , #table3{
                text-align: center;
                border-collapse: collapse;
                width: 100%;
            }

            #table1 th , #table1 td , #table2 th , #table2 td , #table3 th , #table3 td{
                border: 1px solid #ddd;
                padding : 5px;
            }

            th {
                font-size: 12px;
            }

            td {
                font-size: 10px;
            }

            table#table2{
                margin-top: 5px;
            }

            table#table3{
                margin-top: 5px;
            }

            #table4{
                text-align: center;
                margin-top: 5px;
                width: 400px;
                border-collapse: collapse;
                border: 1px solid #ddd;
                float: right;
            }

            #table4 tr:nth-child(even){background-color: #ddd;}

            #table4 th{
                border: 1px solid #ddd;
                padding: 5px;
            }
            #table4 td{
                padding: 5px;
            }
            p{
                margin: 5px;
                font-size: 14px;
                font-weight: 400;
            }
            .div-space {
                height: 20px;
            }
            .text-supplier-invoice {
                text-align: left;
                font-size: 18px;
                font-weight: 600;
            }
            .table-title {
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <!-- <h1 style="text-align:center">Hello World</h1> -->
        <div id="container"> 
            <div style="display: inline-block;">
                <div style="width: 300px;">
                    <img style="margin-bottom: 5px; left: 50px; display: inline-block;" src="<?=base_url('assets/company/image/'.$company['id'].'.jpg')?>" width="100">
                </div>
            </div>
            <div style="height: 20px;"></div>
            <div>
                <p class="text-supplier-invoice">Supplier Name: <?=$products['supplier']?></p>
                <p class="text-supplier-invoice">Invoice Name: <?=$products['invoice_number']?></p>
                <p class="text-supplier-invoice">Invoice Date: <?=$products['invoice_date']?></p>
            </div>
            <div class="div-space"></div>
            <p class="table-title">Materials:</p>
            <table id="table1">
                <thead>
                    <th>No</th>
                    <th>Code EAN</th>
                    <th>Registered Stock</th>
                    <th>Registered Expense</th>
                    <th>Registered Project</th>
                    <th>Product description</th>
                    <th>Unit</th>
                    <th>Serial Number</th>
                    <th>Qty on doc</th>
                    <th>Qty received</th>
                    <th>Acq invoice price</th>
                    <th>VAT %</th>
                    <th>MarkUp %</th>
                </thead>
                <tbody>
                    <?php $lines = json_decode($products['lines'], true);?>
                    <?php foreach($lines as $index=>$line):?>
                    <tr>
                        <td><?=$index+1?></td>
                        <td><?=$line['code_ean']?></td>
                        <td><?=$line['stock']?></td>
                        <td><?=$line['expense']?></td>
                        <td><?=$line['project']?></td>
                        <td><?=$line['production_description']?></td>
                        <td><?=$line['units']?></td>
                        <td><?=$line['serial_number']?></td>
                        <td><?=$line['quantity_on_document']?></td>
                        <td><?=$line['quantity_received']?></td>
                        <td><?=$line['acquisition_unit_price']?></td>
                        <td><?=$line['vat']?></td>
                        <td><?=$line['makeup']?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </body>
</html>