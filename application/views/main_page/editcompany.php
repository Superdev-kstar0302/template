<!-- ======= Hero Section ======= -->

<body>
    <section id="hero" class="align-items-center">
        <div data-aos="fade-up" data-aos-delay="100">
            <a href="<?=base_url('home/dashboard/'.$company['name'])?>"><button
                    class="backbutton w-8 sm:w-12 h-8 sm:h-12 text-sm sm:text-2xl"
                    title="Add New Company">&#8249;</button></a>
        </div>
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Edit Company</h1>
                </div>
            </div>

            <div class="pages">
                <div class="page">
                    <div class="uploadcontainer">
                        <img src="<?=base_url('assets/company/image/'.$company['id'].'.jpg')?>" alt="Avatar"
                            id="uploadimage" class="image" style="width:100%;">
                        <div class="middle">
                            <label class="uploadbutton">
                                <input type="file" id="upload_image_file" style="display: none" />
                                Upload
                            </label>
                        </div>
                    </div>
                    <div class="input">
                        <div class="title"><i class="material-icons">account_box</i> Company name</div>
                        <input id="companyname" type="text" placeholder=""
                            value="<?=str_replace("_"," ",$company['name'])?>" />
                    </div>
                    <div class="input">
                        <div class="title"><i class="material-icons">account_box</i> Company registration number</div>
                        <input id="companynumber" type="text" placeholder=""
                            value="<?=$company['number']?>" />
                    </div>
                    <div class="input">
                        <div class="title"><i class="material-icons">account_box</i> Address </div>
                        <input id="companyaddress" type="text" placeholder=""
                            value="<?=$company['address']?>" />
                    </div>
                    <div class="input">
                        <div class="title"><i class="material-icons">account_box</i> VAT number</div>
                        <input id="companyvat" type="text" placeholder="" value="<?=$company['VAT']?>" />
                    </div>
                    <div class="input">
                        <div class="title"><i class="material-icons">account_box</i> Bank name</div>
                        <input id="companybankname" type="text" placeholder=""
                            value="<?=$company['bankname']?>" />
                    </div>
                    <div class="input">
                        <div class="title"><i class="material-icons">account_box</i> Bank account</div>
                        <input id="companybankaccount" type="text" placeholder=""
                            value="<?=$company['bankaccount']?>" />
                    </div>
                    <div class="input">
                        <div class="title"><i class="material-icons">account_box</i> EORI number for import activities
                        </div>
                        <input id="companyeori" type="text" placeholder="" value="<?=$company['EORI']?>" />
                    </div>
                    <div class="input">
                        <div class="title"><i class="material-icons">account_box</i> COIN Type
                        </div>
                        <select class="form-select" id="companycoin">
                            <option value="EURO" <?=$company['Coin']=="EURO"?"selected":""?>>€</option>
                            <option value="POUND" <?=$company['Coin']=="POUND"?"selected":""?>>£</option>
                            <option value="USD" <?=$company['Coin']=="USD"?"selected":""?>>$</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="cbutton bg-red" onclick="EditCompany('<?=$company['id']?>')">Save</button> / <a href="<?=base_url('home/index')?>"><button class="cbutton bg-white">Cancel</button></a>
            </div>
        </div>
    </section><!-- End Hero -->