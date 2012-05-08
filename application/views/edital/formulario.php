<h1>Formulário de Posts</h1>
<?php echo form::open('edital/save')?>
        <div>
                Titulo
        </div>
        <div>
                <?php echo form::input('title', $kohana_view_data['cd_editais'])?>
        </div>
        <div>
                Texto
        </div>
        <div>
                <?php echo form::textarea('text', $kohana_view_data['cd_etapa'])?>
        </div>
        <div>
                <?php echo form::hidden('id', $kohana_view_data['cd_editais'])?>
                <?php echo form::submit('btn_submit', 'Salvar')?>
        </div>
<?php echo form::close()?>