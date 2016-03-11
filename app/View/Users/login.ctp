<div class="container content-padding">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-sm-offset-4 well">
            <?php echo $this->Session->flash('flash',array('element'=>'Flash/error')); ?>
            <?php
            if (isset($logged_in) && !$logged_in) {

                echo $this->Form->create('User', array(
                    'action'=>'login',
                    'class'=>'form-signin', 
                    'role'=>'form'
                    )); 
                ?>
                <h3 class="text-center">Dados para acesso</h3>
                <div class="padtopbot5">
                <?php
                    echo $this->Form->input('username', array(
                        'type'=>'text',
                        'label'=>false,
                        'div'=>false,
                        'class'=>"form-control",
                        'placeholder'=>"Digite seu usuário"
                        ));
                ?>
                </div>
                <div class="padtopbot5">
                <?php
                    echo $this->Form->input('password', array(
                        'label'=>false,
                        'div'=>false,
                        'class'=>"form-control",
                        'placeholder'=>"Digite sua senha"
                        ));
                ?>
                </div>
                <div class="padtopbot5 text-center">
                <?php
                    echo $this->Form->input('Acessar',array(
                        'type'=>'submit',
                        'label'=>false,
                        'div'=>false,
                        'value'=>'Login',
                        'class'=>'btn btn-md btn-black'
                        ));
                ?>
                <h5 class="text-center">- OU -</h5>
                <?php
                    echo $this->Html->link('Subscrever',array('action'=>'add'),array('class'=>'btn btn-md btn-default'));
            }
            ?>
        </div>
    </div>
</div>