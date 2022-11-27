const $formEle = $('#form-vali'), //form要素
  $submitButton = $('#button-submit'), //submitボタン
  $formRequired = $('.block-form-required'); //入力フィールドの親div要素
const fieldRequired = 'field-required', //必須フィールドに付けたクラス名
  fieldInvalid = 'field-invalid'; //エラー判定のとき動的に付加するクラス名
let fieldValue,
  validFlg;
const ag2formVlidation = {
  all: function() {
    validFlg = true;
    $formRequired.each(function(i) {
      let $this = $(this);
      fieldValue = $this.find('.' + fieldRequired).val();
      if (!fieldValue) {
        validFlg = false;
        if (!$this.hasClass(fieldInvalid)) $this.addClass(fieldInvalid);
      } else {
        if ($this.hasClass(fieldInvalid)) $this.removeClass(fieldInvalid);
      }
    });
    return validFlg;
  },
  each: function(e) {
    let $this = $(e.target);
    fieldValue = $this.val();
    let thisParent = $this.parent();
    if (!fieldValue) {
      if (!thisParent.hasClass(fieldInvalid)) thisParent.addClass(fieldInvalid);
    } else {
      if (thisParent.hasClass(fieldInvalid)) thisParent.removeClass(fieldInvalid);
    }
  }
};
const ag2submit = function() {
  if (ag2formVlidation.all()) $formEle.submit();
  return false;
};
$submitButton.on('click', ag2submit);
$('.' + fieldRequired).on('blur', ag2formVlidation.each);