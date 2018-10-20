<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <form name="" id="customer-form" action="" method="post">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Customer</strong>
                                <small> Form</small>
                            </div>
                            <div class="card-body card-block">
                                <div class="row form-group">

                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Name</label>
                                            <input type="text" id="company" value="<?=set_value("c_name")?>" name="c_name" placeholder="Enter customer name" class="form-control">
                                            <?php echo form_error('c_name'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Email address</label>
                                            <input type="text" id="vat" value="<?=set_value("c_email")?>" name="c_email" placeholder="Enter customer email address" class="form-control">
                                            <?php echo form_error('c_email'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="vat" class="form-control-label">Mobile number</label>
                                            <input type="text" value="<?=set_value("c_mobile_number")?>" name="c_mobile_number" id="vat" placeholder="Enter customer mobile number" class="form-control">
                                            <?php echo form_error('c_mobile_number'); ?>
                                        </div>


                                    </div>
                                    <div class="col-lg-5">
                                        <img src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre">
                                        <i class="fa fa-camera" style="margin-top: -42px;position: absolute;bottom: 10px;right: 23px;"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="street" class="form-control-label">Alternate number</label>
                                    <input type="text" id="street" value="<?=set_value("c_alternate_number")?>" name="c_alternate_number" placeholder="Enter customer alternate name" class="form-control">
                                    <?php echo form_error('c_alternate_number'); ?>
                                </div>


                                <div class="form-group">
                                    <label for="city" class=" form-control-label">Adhar Number</label>
                                    <input type="text" id="city" value="<?=set_value("c_adhar_number")?>" name="c_adhar_number" placeholder="Enter customer adhar number" class="form-control">
                                    <?php echo form_error('c_adhar_number'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="city" class=" form-control-label">Address</label>
                                    <textarea rows="4" id="city" name="c_address" placeholder="Enter customer address" class="form-control"><?=set_value("c_address")?></textarea>
                                    <?php echo form_error('c_address'); ?>
                                </div>

                                <div class="row form-group">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="city" class=" form-control-label">Country</label>
                                            <input type="text" value="<?=set_value("c_country")?>" name="c_country" id="city" placeholder="Enter customer adhar number" class="form-control">
                                            <?php echo form_error('c_country'); ?>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="city" class=" form-control-label">State</label>
                                            <input type="text" value="<?=set_value("c_state")?>" name="c_state" id="city" placeholder="Enter customer adhar number" class="form-control">
                                            <?php echo form_error('c_state'); ?>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="postal-code" class=" form-control-label">City</label>
                                            <input type="text" value="<?=set_value("c_city")?>" name="c_city" id="postal-code" placeholder="Postal Code" class="form-control">
                                            <?php echo form_error('c_city'); ?>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="postal-code" class=" form-control-label">Zip code</label>
                                            <input type="text" value="<?=set_value("c_zip_code")?>" name="c_zip_code" id="postal-code" placeholder="Postal Code" class="form-control">
                                            <?php echo form_error('c_zip_code'); ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Guarantor</strong>
                                <small> Form</small>
                            </div>
                            <div class="card-body card-block">
                                <div class="row form-group">

                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Name</label>
                                            <input type="text" value="<?=set_value("g_name")?>" name="g_name" id="company" placeholder="Enter customer name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Email address</label>
                                            <input type="email" value="<?=set_value("g_email")?>" name="g_email" id="vat" placeholder="Enter customer email address" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Relation</label>
                                            <input type="text" value="<?=set_value("g_relation")?>" name="g_relation" id="vat" placeholder="Enter customer mobile number" class="form-control">
                                        </div>


                                    </div>

                                    <div class="col-lg-5">
                                        <img src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre">
                                        <i class="fa fa-camera" style="margin-top: -42px;position: absolute;bottom: 10px;right: 23px;"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">Mobile number</label>
                                    <input type="text" id="vat" value="<?=set_value("g_mobile_number")?>" name="g_mobile_number" placeholder="Enter customer mobile number" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="street" class=" form-control-label">Alternate number</label>
                                    <input type="text" id="street" value="<?=set_value("g_alternate_number")?>" name="g_alternate_number" placeholder="Enter customer alternate name" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label for="city" class=" form-control-label">Adhar Number</label>
                                    <input type="text" id="city" value="<?=set_value("g_adhar_number")?>" name="g_adhar_number" placeholder="Enter customer adhar number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="city" class=" form-control-label">Address</label>
                                    <textarea rows="4" id="city" name="g_address" placeholder="Enter customer address" class="form-control"><?=set_value("g_address")?></textarea>
                                </div>

                                <div class="row form-group">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="city" class=" form-control-label">Country</label>
                                            <input type="text" value="<?=set_value("g_country")?>" name="g_country" id="city" placeholder="Enter customer adhar number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="city" class=" form-control-label">State</label>
                                            <input type="text" value="<?=set_value("g_state")?>" name="g_state" id="city" placeholder="Enter customer adhar number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="postal-code" class=" form-control-label">City</label>
                                            <input type="text" value="<?=set_value("g_city")?>" name="g_city" id="postal-code" placeholder="Postal Code" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="postal-code" name="g_zip_code" class=" form-control-label">Zip code</label>
                                            <input type="text" value="<?=set_value("g_zip_code")?>" name="g_zip_code" id="postal-code" placeholder="Postal Code" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-6">

                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <i class="fa fa-save fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Save Details</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>