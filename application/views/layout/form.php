<form id="form_<?= $name?>" name="<?= $name?>" method="post">   
  <fieldset>
    <?php if(function_exists('validation_errors')) { echo validation_errors(); } ?>
    <label><?= isset($label) ? $label : ucwords($name) ?></label>
    <input type="hidden" name="form" value="<?= $name?>">
    <?php foreach($fields as $field):?>
    <?php if( (@$_POST['form'] == $name) && (@$field['type']!='submit')): ?>
        <?php $value = @$_POST[$field['name']];?>
        <?php $field = array_merge(['value'=>$value], $field);?>
      <?php endif;?>
      <?php if(@$field['type']=='submit'){$field = array_merge(['name'=>'submit', 'value'=>'Submit', 'label'=>''], $field);} ?>      
      <?php $this->load->view('layout/input', ['field'=>$field])?>
    <?php endforeach;?>
  </fieldset>
</form>
