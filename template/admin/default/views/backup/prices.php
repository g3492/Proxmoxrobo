<div class="ajax-block">
    <div class="page-header">
        <h1>Backup settings</h1>
        <h3 class="text-muted">Here you can configure prices and general backup settings</h3>
    </div>
    <div class="well">
        <form method="POST">
            <h3>Pricing</h3>
            <div class="form-group">
                <label for="pricePerGbPBS"><?=$_->l('Price per GB on PBS')?></label>
                <div class="row">
                    <div class="col-xs-3">
                        <div class="input-group ">
                            <div class="input-group-addon"><?= $this->currency->object->symbol?></div>
                            <input type="text" class="form-control" name="pricePerGbPBS" id="pricePerGbPBS" placeholder="Amount" value=<?=$backupConfig->pricePerGbPBS?>>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-xs-3">
                        <label for="pricePerGB"><?=$_->l('Price per GB on other storage media')?></label>
                        <div class="input-group ">
                            <div class="input-group-addon"><?= $this->currency->object->symbol?></div>
                            <input type="text" class="form-control" name="pricePerGB" id="pricePerGB" placeholder="Amount" value=<?=$backupConfig->pricePerGB?>>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Retention options</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-3">
                        <label for="maxNumberOfRetentions"><?=$_->l('Maximum number of backups per vm')?></label>
                        <div class="input-group ">
                            <input type="text" class="form-control" name="maxNumberOfRetentions" id="maxNumberOfRetentions" placeholder="Amount" value=<?=$backupConfig->maxNumberOfRetentions?>>
                            <div class="input-group-addon">Backups</div>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Other settings</h3>

            <div class="form-group">
                <div class="row">
                    <div class="col-xs-5">
                        <label for="IOBandwidthLimit"><?=$_->l('Limit I/O bandwidth (KBytes per second)')?></label>
                        <div class="col">
                            <small class="text-muted"><?= $_->l('0 for unlimited') ?></small>
                        </div>
                        <div class="input-group ">
                            <input type="text" class="form-control" name="IOBandwidthLimit" id="IOBandwidthLimit" placeholder="Amount" value=<?=$backupConfig->IOBandwidthLimit?>>
                            <div class="input-group-addon">KBytes per second</div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-success"><?=$_->l('Save')?></button>
        </form>
    </div>
</div>