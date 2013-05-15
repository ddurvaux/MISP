<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo $title_for_layout, ' - ', Configure::read('App.name'); ?></title>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('bootstrap.min.css?'.filemtime(dirname(__FILE__) . '/../../webroot/css/bootstrap.min.css'));
        echo $this->Html->css('datepicker.css?'.filemtime(dirname(__FILE__) . '/../../webroot/css/datepicker.css'));
        echo $this->Html->css('main.css?'.filemtime(dirname(__FILE__) . '/../../webroot/css/main.css'));
        // @FIXME: move before </body>
        echo $this->Html->script(array('jquery-1.9.1.min'));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>

    </head>
    <body>
        <div id="container">
            <?php echo $this->element('cti_global_menu');?>

            <div class="container-fluid">
                <div class="row-fluid">

                    <div class="span12">
                        <?php echo $this->Session->flash('auth'); ?>
                        <?php echo $this->Session->flash('error'); ?>
                        <?php echo $this->Session->flash('gpg'); ?>
                        <?php echo $this->Session->flash(); ?>
                        <?php echo $this->Session->flash('email'); ?>


                        <?php echo $this->fetch('content'); ?>
                    </div>
                </div>
            </div>
            <?php echo $this->element('sql_dump');?>
        </div>

        <?php echo $this->Html->script(array(
                /*'jquery-ui-1.10.3.custom.min',*/
                'bootstrap.min',
                'bootstrap-datepicker',
                'main.js?'.filemtime(dirname(__FILE__) . '/../../webroot/js/main.js')
            ));
        ?>
    </body>
</html>