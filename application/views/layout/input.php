<p id="input-p-<?= $field['name']?>" class="input-p">
  <label for="label-<?= $field['name']?>">
    <?= isset($field['label']) ? $field['label'] : ucwords($field['name'])?>&nbsp;
  </label>
  <input 
     type="<?= isset($field['type']) ? $field['type'] : 'text'?>"
     name="<?= $field['name']?>"
     value="<?= isset($field['value']) ? $field['value'] : ""?>"
     id="input-<?= $field['name']?>"
     class="input <?= isset($field['type']) ? $field['type'] : 'text'?>"
     >
</p>
