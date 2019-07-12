<div class="row">
    <div class="col-sm-12">
        <?= $this->getContent() ?>
        <?= $this->flashSession->output() ?>
        <div class="box box-success">
            <form role="form" name="edit-controller" method="post" action="<?= $this->url->get('/webtools.php?_url=/controllers/update') ?>">
                <div class="box-header with-border">
                    <p class="pull-left"><?= $controller_name ?> - [<?= $controller_path ?>]</p>
                    <?= $this->tag->submitButton(['Save', 'class' => 'btn btn-success pull-right']) ?>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <?= $this->tag->textArea(['code', 'cols' => 50, 'rows' => 25, 'class' => 'form-control']) ?>
                        <?= $this->tag->hiddenField(['path']) ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->assets->outputJs('codemirror') ?>





