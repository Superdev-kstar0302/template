<body>
    <section id="hero" class="align-items-center">
        <div data-aos="fade-up" data-aos-delay="100">
            <a href="<?=base_url('expense/product')?>"><button
                    class="backbutton w-8 sm:w-12 h-8 sm:h-12 text-sm sm:text-2xl"
                    title="Add New Client">&#8249;</button></a>
        </div>
        <div class="position-relative m-5" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Expense Product modifier</h1>
                </div>
            </div>

            <div class="container">
                <div class="text-sm">
                    <div id="section1" class="row d-flex justify-content-center align-items-center border border-lime-600">
                        <div class="col-sm-4 text-center">
                            <table class="table " style="border : 1px solid gray; text-align: left">
                                <tr>
                                    <td style="border : 1px solid black"> Category Name: </td>
                                    <td>
                                        <select class="form-select" id="categoryid">
                                        <?php foreach ($expenses as $index => $expense):?>
                                            <option value="<?=$expense['id']?>" <?=($expense['id']==$product['categoryid'])?"selected":""?>>
                                                <?=str_replace("_"," ", $expense['name'])?>
                                            </option>
                                        <?php endforeach;?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border : 1px solid black"> Assign to Project: </td>
                                    <td>
                                        <select class="form-select" id="projectid">
                                        <?php foreach ($projects as $index => $project):?>
                                            <option value="<?=$project['id']?>" <?=($project['id']==$product['projectid'])?"selected":""?>>
                                                <?=str_replace("_"," ", $project['name'])?>
                                            </option>
                                        <?php endforeach;?>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-4 text-center">
                            <table class="table " style="border : 1px solid gray; text-align: left">
                                <tr>
                                    <td style="border : 1px solid black">Expense Date:</td>
                                    <td>
                                        <input type="date" class="form-control " id="expense_date" value="<?=$product['date']?>" title="Choose your color">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border : 1px solid black">Coin:</td>
                                    <td>
                                        <select class="form-select" id="invoice_coin">
                                            <option value="EURO" <?=($product['Coin']=="EURO")?"selected":""?>>€</option>
                                            <option value="POUND" <?=($product['Coin']=="POUND")?"selected":""?>>£</option>
                                            <option value="USD" <?=($product['Coin']=="USD")?"selected":""?>>$</option>
                                            <option value="LEI" <?=($product['Coin']=="LEI")?"selected":""?>>LEI</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <hr>

                    <div class="row d-flex justify-content-center align-items-center border border-lime-600">
                        <div id="section2" class="row row d-flex justify-content-center align-items-center">
                            <div class="col-sm-4 text-center d-flex">
                                <table class="table " style="border : 1px solid gray; text-align: left">
                                    <tr>
                                        <td style="border : 1px solid black">Value without VAT: </td>
                                        <td>
                                            <div class="m-auto">
                                                <input type="number" class="form-control " id="value_without_vat" value="<?=$product['value_without_vat']?>" title="Choose your color">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border : 1px solid black">VAT amount:</td>
                                        <td>
                                            <div class="m-auto">
                                                <input type="text" class="form-control " id="vat_amount" value="<?=$product['vat']?>" title="Choose your color">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4 text-center d-flex">
                                <table class="table " style="border : 1px solid gray; text-align: left">
                                    <tr>
                                        <td style="border : 1px solid black"> VAT %: </td>
                                        <td>
                                            <input type="text" class="form-control" id="vat_percent" value="<?=$product['vat_percent']?>" title="Choose your color" readOnly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border : 1px solid black">Total Value:</td>
                                        <td>
                                            <div class="m-auto">
                                                <input type="text" class="form-control " id="total_amount" value="<?=$product['total']?>" title="Choose your color" readOnly>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="text-center">
                            <div class="absolute">
                                <label for="file-upload" class="btn btn-outline-secondary" style="color: red;">
                                    <i class="fa fa-cloud-upload"></i> <?=$attached?>
                                </label>
                                <input id="file-upload" name='upload_cont_img' type="file" style="display:none;">
                                <button class="btn btn-outline-danger" onclick="DeleteAttachedFile()">Delete attached file</button>
                            </div>
                            <button class="cbutton bg-red" onclick="EditProduct('<?=$product['id']?>')">Save</button> / <a
                                href="<?=base_url('product/index')?>"><button class="cbutton bg-white">Cancel</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section><!-- End Hero -->